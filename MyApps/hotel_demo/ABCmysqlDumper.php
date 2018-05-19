<?php
/*
	********** ABCmysqlDumper ***********
	*************************************
	A small utility to backup the whole db
	Created by: 
			Akhilesh B Chandran 
			 (aka, akhileshbc)
	Created On: July 18, 2012
	
*/
	class ABCmysqlDumper
	{
		private $db;
		private $dbname;
		
		/* Constructor : Creates the db connection with host, dbname, username, password */
		function __construct($db_host, $db_name, $db_user, $db_pwd)
		{
			$this->dbname = $db_name;	// stores the dbname for later user
			$this->db = new mysqli($db_host, $db_user, $db_pwd, $db_name);
			
			if ($this->db->connect_errno)
			{
				echo "Failed to connect to MySQL: (" . $this->db->connect_errno . ") " . $this->db->connect_error;
				exit();
			}	
		}
		
		
		/* Destructor : Close the db connection */
		function __destruct()
		{
			mysqli_close($this->db);
		}
		
		
		/* This will do fetching and appending process, which is the core of our sqldump creator :D 
			@saveFile = true	-- will allow the user to download the dump as a file, with the filename in the format "dbname-Day_Month_Year_HHMMSS" (only if the optional parameter $fileName is not supplied)
			@saveFile = false	-- will return the dump back to caller
		*/
		public function generateDump($saveFile = true, $fileName = '')
		{
			$file = '';	// will hold the whole contents
			
			/* Fetches the table names from the database. For more details: http://dev.mysql.com/doc/refman/5.0/en/show-tables.html */
			if ($result = $this->db->query('SHOW TABLES FROM ' . $this->dbname))
			{
				/* loop through each of the table and creates the table structure as well as the table data also */
				while($row = $result->fetch_row())
				{
					$file .=	" \r\n"	. $this->getTableStruct($row[0])	. "\r\n" .
								"\r\n"	. $this->getTableData($row[0])		. "\r\n\r\n" ;
				}
				
				$result->close(); // close it
				
				/* if user wants to save */
				if($saveFile)
				{
					if($fileName == '')	// if filename is not supplied, create a filename
						$fileName = $this->dbname . '-' . date('d_M_Y_His');
					
					/* Sent the header */
					header('Content-Description: File Transfer');
					header('Content-Type: application/octet-stream');
					header('Content-Disposition: attachment; filename=' . $fileName . '.sql');
					header('Pragma: no-cache');
					
					ob_clean();
					flush();
					
					/* output */
					echo $file;
				}
				else
					return $file;	// return the dump back to the caller (if $saveFile = false)
			}
			else
			{
				return false;
			}
		}
		
		
		/* Returns the table structure in the format:
		
			CREATE TABLE IF NOT EXISTS `table_name` (
				`column_name` column_type is_null default_value extras,
				`column_name` column_type is_null default_value extras,
				`column_name` column_type is_null default_value extras,
				...
				PRIMARY KEY (`column_primary`)
			);
			
		*/
		private function getTableStruct($tbl_name)
		{
			/* Fetch the column details using DESCRIBE. For more details: http://dev.mysql.com/doc/refman/4.1/en/describe.html */
			if ($row = $this->db->query('DESCRIBE ' . $tbl_name))
			{
			
				$tbl_primary = ''; // will hold the primary key field
				
				/* loop through each of the column */
				while($r = $row->fetch_row())
				{
					/*
						[0] - Field ; [1] - Type ; [2] - Null ; [3] - Attributes ; [4] - Default ; [5] - Extra
						Example field: `member_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
						Exampe row	: Array ( [0] => member_id [1] => bigint(20) unsigned [2] => NO [3] => PRI [4] =>(default_value) [5] => auto_increment )
					*/
					
					// if PRIMARY KEY, then save it so that we could append it at the end.
					if( $r[3] == 'PRI' )
						$tbl_primary = "PRIMARY KEY (`{$r[0]}`)";
					
					/* prepare the field. Eg: "(`member_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT)" */					
					$fields[] = trim( '`' . $r[0] . '` ' . $r[1] . ($r[2]=='NO'?' NOT NULL ':' ') . (empty($r[4])?'':"DEFAULT '{$r[4]}' ") . $r[5] );
				}
				
				$fields[] = $tbl_primary; // add the primary key field at the end
				
				/* Create the table strucutre with the fields */
				$tbl_struct	=	"CREATE TABLE IF NOT EXISTS `{$tbl_name}` ( \r\n  " 
									. implode(",\r\n  ", $fields) . 
								"\r\n);";
				
				unset($fields); //free the memory
				$row->close();
				
				return $tbl_struct; // return it as a string
			}
			else
				exit('ERROR: Unable to fetch the structure of the table - ' . $tbl_name);
		}
		
		
		/* Returns the table data in the format:
		
			INSERT INTO `table_name` (`field1`, `field2`, `field3`, ..., `fieldn`) VALUES
			(column_value1, 'column_value2', 'column_value3', ..., 'column_valuen'),
			(column_value1, 'column_value2', 'column_value3', ..., 'column_valuen'),
			(column_value1, 'column_value2', 'column_value3', ..., 'column_valuen'),
			...
			(column_value1, 'column_value2', 'column_value3', ..., 'column_valuen');
			
		*/
		private function getTableData($tbl_name)
		{
			/* Fetch all the records from the table */
			if ($row = $this->db->query('SELECT * FROM ' . $tbl_name))
			{
				$total_rec = $row->num_rows; /* Total Records */
				
				$records = array();
				if($r = $row->fetch_assoc())
				{
					/* Get the first recordd and populate the column names and it's values */
					$k = array();
					$v = array();
					foreach($r as $key=>$value)
					{
						$k[] = "`{$key}`";
						$v[] = "'{$value}'";
					}
					$records[] = '(' . implode(', ', $v) . ')'; // add the column values
					
					/* Loop through the rest of the records(second record onwards) and populate the column values */
					while($r = $row->fetch_row())
					{
						$records[] = "('" . implode("', '", $r) . "')";
					}
					
					/* Create the table data */
					$tbl_data =	"INSERT INTO `{$tbl_name}` (" . implode(', ', $k) . ") VALUES\r\n"
									. implode(",\r\n", $records) .
								";\r\n";
					
					unset($records); //free the memory
					$row->close();
					
					return $tbl_data; // return it as a string
				}
				else
				{
					$row->close();
					return '';
				}
			}
			else
				exit('ERROR: Unable to fetch the date from the table - ' . $tbl_name);
		}
	}
?>