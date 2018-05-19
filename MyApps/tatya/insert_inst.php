<?php

include('connect.php');
error_reporting(0);
 date_default_timezone_set('Asia/Kolkata'); 

session_start();

	$per_id=$_SESSION['per_id'];
	$hapta_jama=$_POST['hapta_jama'];
	$jama_date=$_POST['jama_date'];
	$next_date=$_POST['next_date'];
  
 

$query="insert into installment_register values('','$per_id','$jama_date','$hapta_jama')";
@mysql_query($query) or die(" Query for Installment Register  table has problem  "); 

  $up_query="update personal_book set next_date='$next_date' where per_id='$per_id' ";
 @mysql_query($up_query)or die(" Query for update Personal Book table has problem  "); 
 
 

echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Congradulation ! Data is Stored successfully  \");";
	echo "if(question){ window.location = 'inst.php'; } else {  window.location = 'inst.php';  }";
	echo "</script>";


?>


