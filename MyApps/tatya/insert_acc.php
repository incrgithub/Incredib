<?php

include('connect.php');
error_reporting(0);
 date_default_timezone_set('Asia/Kolkata'); 

	$led_id=$_POST['led_id'];
	$acc_name=$_POST['acc_name'];
	$acc_add=$_POST['acc_add'];
	$acc_mobile=$_POST['acc_mobile'];


$query="insert into personal_book values('' ,'$acc_name','$acc_add','$acc_mobile','$led_id')";
@mysql_query($query) or die(" Query for Ledger Book  table has problem  "); 

 

echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Congradulation ! Data is Stored successfully  \");";
	echo "if(question){ window.location = 'personal.php'; } else {  window.location = 'personal.php';  }";
	echo "</script>";


?>


