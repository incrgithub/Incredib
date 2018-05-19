<?php include('logincommon.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Result SMS System</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT CSS -->
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/customalert.js"></script>
    <link rel="stylesheet" type="text/css" href="css/customalert.css" />
    <script src="assets1/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets1/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
	
	
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
 
    <script src="assets/js/custom.js"></script>

</head>
<body>
     <section class="sec-logo">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img src="assets/img/logo-vrinda.png" alt="Free Best Admin Made Of Bootstrap" />
                </div>
                <div class="col-md-7">
                </div>
                <div class="col-md-3 quick-info">
                    <i>www.damajicollege.com</i> <br />
                  
                </div>
            </div>
        </div>
    </section>
    <!--LOGO SECTION END-->
     <section class="sec-menu" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
              <span class="menu-open-icon">  <i class="fa fa-bars pull-left fa-2x b-clr"   ></i> </span>  <i class="pull-right"> Wecome To Result SMS System </i>   
                </div>
            </div>
        </div>
    </section>
       <div id="side-menu"  >

         <ul  >
             <li style="border-bottom:0px;">
             <a href="#" title="close"> <i class="fa fa-close fa-2x menu-close-icon b-clr"></i></a>
            </li>
            <li>
             <a href="upload.php" title="Upload"> <i class="fa fa-home fa-2x "></i>Upload Results </a>
            </li>
			 <li>
              <a href="results.php" title="Results"><i class="fa fa-rocket fa-2x "></i>View Results  </a>
            </li>
            <li>
              <a href="logout.php" title="Logout"> <i class="fa fa-plug fa-2x "></i>Logout  </a>
            </li>
           
            
        </ul>
           
    </div>
    <!--MENU SECTION END-->
     <div class="content-wrapper">
         <div class="container">
      
             <div class="row">
            <div class="col-md-12">
			<?php
			include('conn.php');
			if(isset($_GET['msg']))
			{
			$param=$_GET['msg'];
			if($param == "upload")
				{
				echo $filename=$_FILES["result"]["tmp_name"];
				if($_FILES["result"]["size"] > 0)
					{
					$file = fopen($filename, "r");
					while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
						{
						$sql = "INSERT into tbl_marks(mobileno,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8) values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]')";
	                   $result1 = mysql_query( $sql );
						if(! $result1 )
							{
							echo "<script type=\"text/javascript\">
									alert(\"Invalid File:Please Upload CSV File.\");
									window.location = \"upload.php\"
								</script>";
							}
						}
					 fclose($file);
					 echo "<script>createCustomAlert('Results Successfully Imported..','','SUCCESS');</script>";
					}
				}
				if($param == "deleteall")
				{
					deleteAll();
				}
				if($param == "sendsms")
				{
					getResultData();
					deleteAll();
					echo "<script>createCustomAlert('SMS Sent Successfully..','','SUCCESS');</script>";
				}
				if($param == "delete")
				{
					$id=$_GET['id'];
					delete($id);
				}
				if($param == "insert")
				{
					$mobileno=$_POST['mobileno'];
					$subject1=$_POST['subject1'];
					$subject2=$_POST['subject2'];
					$subject3=$_POST['subject3'];
					$subject4=$_POST['subject4'];
					$subject5=$_POST['subject5'];
					$subject6=$_POST['subject6'];
			                $subject7=$_POST['subject7'];
 					$subject8=$_POST['subject8'];
					
					insert($mobileno,$subject1,$subject2,$subject3,$subject4,$subject5,$subject6,$subject7,$subject8);
				}
				if($param == "update")
				{
					$id=$_POST['id'];
					$mobileno=$_POST['mobileno'];
					$subject1=$_POST['subject1'];
					$subject2=$_POST['subject2'];
					$subject3=$_POST['subject3'];
					$subject4=$_POST['subject4'];
					$subject5=$_POST['subject5'];
					$subject6=$_POST['subject6'];
					$subject7=$_POST['subject7'];
 					$subject8=$_POST['subject8'];
					update($id,$mobileno,$subject1,$subject2,$subject3,$subject4,$subject5,$subject6,$subject7,$subject8);
				}
			}
			
	 		?>
	 	<br>	
            	<?php
            	include('data.php'); 
            	$count=enableDisable();
            	
            	if($count > 0)
            	{
            	?>
		<br><a href="results.php?msg=deleteall" class="btn btn-info">Delete All</a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="results.php?msg=sendsms" class="btn btn-info">Send SMS</a>
		</div>
		<?php
		}
		
		function enableDisable()
		{
		$subject_fetch_details="select * from tbl_marks";	
		
		$subject_details_rs= mysql_query($subject_fetch_details);
		
		$n=mysql_num_rows($subject_details_rs);
		
		return $n;
		}
		
		function getResultData()
		{
		$subject_fetch_details="select * from tbl_marks";	
		
		$subject_details_rs= mysql_query($subject_fetch_details);
	
		while($subject_details_row = mysql_fetch_array($subject_details_rs)) 
			{
			$mobileno=$subject_details_row[1];
			if( $subject_details_row[2] != "NA")
				$subject1 = $subject_details_row[2];
			else
				$subject1 ="NA";
				
			if( $subject_details_row[3] != "NA")
				$subject2 = $subject_details_row[3];
			else
				$subject2 ="NA";
				
			if( $subject_details_row[4] != "NA")
				$subject3 = $subject_details_row[4];
			else
				$subject3 ="NA";
				
			if( $subject_details_row[5] != "NA")
				$subject4 = $subject_details_row[5];
			else
				$subject4 ="NA";
					
			if( $subject_details_row[6] != "NA")
				$subject5 = $subject_details_row[6];
			else
				$subject5 ="NA";	
				
			if( $subject_details_row[7] != "NA")
				$subject6 = $subject_details_row[7];	
			else
				$subject6 ="NA";	
				
		   if( $subject_details_row[8] != "NA")
				$subject7 = $subject_details_row[8];	
			else
				$subject7 ="NA";
				
		  if( $subject_details_row[9] != "NA")
				$subject8 = $subject_details_row[9];	
			else
				$subject8 ="NA";
			$message="Marks Obtained in Test: out of ".$subject8." Mar=".$subject1.",Eng= ".$subject2.",Chem= ".$subject3.",Phys= ".$subject4.",Maths= ".$subject5.",Bio= ".$subject6." Geo=".$subject7;	
			sendSms($mobileno,$message);
			} 
	
		}	
		
		function sendSms($mobno,$mess)
			{
			$username="damaji";
			$api_password="damaji@2";
			$sender="SSDMRT";
			$domain="sms.incredibletechsolve.com";
			$priority="1";// 1-Normal,2-Priority,3-Marketing
			$method="POST";
			$mobile=$mobno;
			$message=$mess;
	
			$username=urlencode($username);
			$password=urlencode($password);
			$sender=urlencode($sender);
			$message=urlencode($message);
			$parameters="user=$username&password=$api_password&mobiles=$mobile&sms=$message&unicode=0&senderid=$sender&version=3";
	
			$url="http://$domain/sendsms.jsp?";
	
			$ch = curl_init($url);
	
			if($method=="POST")
			{
				curl_setopt($ch, CURLOPT_POST,1);
				curl_setopt($ch, CURLOPT_POSTFIELDS,$parameters);
			}
			else
			{
				$get_url=$url."?".$parameters;
	
				curl_setopt($ch, CURLOPT_POST,0);
				curl_setopt($ch, CURLOPT_URL, $get_url);
			}
	
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1); 
			curl_setopt($ch, CURLOPT_HEADER,0);  // DO NOT RETURN HTTP HEADERS 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);  // RETURN THE CONTENTS OF THE CALL
			$return_val = curl_exec($ch);
	
			if($return_val=="")
			echo "Process Failed, Please check domain, username and password.";
			else
			echo "";
			}
		function deleteAll()
			{
			mysql_query("delete from tbl_marks") or die(mysql_error());
			echo "<script>createCustomAlert('All Records Deleted Successfully..','','SUCCESS');</script>";
			}			
		function delete($id)
			{
			mysql_query("delete from tbl_marks where id='$id'") or die(mysql_error());
			echo "<script>createCustomAlert('Record deleted Successfully..','','SUCCESS');</script>";
			}		
		function update($id,$mobileno,$subject1,$subject2,$subject3,$subject4,$subject5,$subject6,$subject7,$subject8)
			{
			$updatesql="UPDATE tbl_marks SET mobileno='$mobileno',subject1='$subject1',subject2='$subject2',subject3='$subject3',subject4='$subject4',subject5='$subject5',subject6='$subject6',subject7='$subject7',subject8='$subject8' WHERE id='$id' ";
			mysql_query($updatesql) or die(mysql_error());
			echo "<script>createCustomAlert('Record Updated Successfully..','','SUCCESS');</script>";
			}
		function insert($mobileno,$subject1,$subject2,$subject3,$subject4,$subject5,$subject6,$subject7,$subject8)
			{
			$insertsql="INSERT INTO tbl_marks(mobileno,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8) VALUES('$mobileno','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8')";
			mysql_query($insertsql) or die(mysql_error());
			echo "<script>createCustomAlert('Record Inserted Successfully..','','SUCCESS');</script>";
			}	
		?>	

        </div>  
    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; 2016 |<a href="http://incredibletechsolve.com/" target="_blank"  > Designed by : Incredible Tech Solutions</a> 
                </div>

            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->

    
  
</body>
</html>
