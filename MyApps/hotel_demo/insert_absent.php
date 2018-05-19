<?php
 include('connect.php');

	$emp_id=$_GET['id'];
  	
	$yes="no";
  
	$next_due = date('Y-m-d');


$query="insert into present values('','$next_due','$emp_id','$yes')";
@mysql_query($query) or die(" Query for Present Table has problem  "); 

 
 echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Congradulation ! Data is Stored successfully  \");";
	echo "if(question){ window.location = 'emp_detail.php'; } else {  window.location = 'emp_detail.php';  }";
	echo "</script>";


?>


