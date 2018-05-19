<?php

include('connect.php');
error_reporting(0);
 date_default_timezone_set('Asia/Kolkata'); 

session_start();

	$per_id=$_SESSION['per_id'];
	$no="no";
  
 $tran_date=date("Y-m-d");

 $up_query="update personal_book set active='$no' where per_id='$per_id' ";
 @mysql_query($up_query)or die(" Query for update Personal Book table has problem  "); 
 
 

echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Congradulation ! Data is Stored successfully  \");";
	echo "if(question){ window.location = 'acc_close.php'; } else {  window.location = 'acc_close.php';  }";
	echo "</script>";


?>


