	<?php
include('connect.php');
	$query_search="select * from register ";
	$result = mysql_query($query_search) or die("Search query for Person Register is wrong  ");
	$data=NULL;
 

error_reporting(0);
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
	 
	}

	
 	    foreach($data as $ecol)
		{
		
	 	$comp_name=$ecol['comp_name']; 
 	 	$comp_add= $ecol['comp_add'];
		$owner_info= $ecol['owner_info'];
	 	$contact  = $ecol['contact_no'];
	 	$vat_no  = $ecol['vat_no'];
		$tin_no  = $ecol['tin_no'];

		}  
			 echo"$comp_name";		
			 	          
						                
										  ?>