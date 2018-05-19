<?php

include('connect.php');
error_reporting(0);
 date_default_timezone_set('Asia/Kolkata'); 

session_start();

	$inst_id=$_SESSION['inst_id'];
	$hapta_jama=$_POST['hapta_jama'];
	$jama_date=$_POST['jama_date'];
  
$edit_query=" update installment_register set   inst_amount='$hapta_jama' where inst_id='$inst_id'"; 
@mysql_query($edit_query) or die(" EDIT  Query for Installment Register  table has problem  "); 

echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Congradulation ! Data is Stored successfully  \");";
	echo "if(question){ window.location = 'acc_close.php'; } else {  window.location = 'acc_close.php';  }";
	echo "</script>";


?>


