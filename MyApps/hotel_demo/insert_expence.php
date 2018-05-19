<?php
include('connect.php');
error_reporting(0);
session_start();

$group_id=$_POST['group_id'];
$pay_amount=$_POST['pay_amount'];
$pay_date=$_POST['pay_date'];
$rf_note=$_POST['rf_note'];

$extra="Bill Payment";
$sale_date=date('Y-m-d');
  $customer="customer";
  $z="0";
  
$ref_date=date('Y-m-d', strtotime($pay_date));

  
	
	$query_all_tran="insert into all_tran values('','$ref_date','$group_id','$group_id','$z','$pay_amount','$rf_note','expence')";
	@mysql_query($query_all_tran) or die(" Query for All Tran  Table has problem  "); 

echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Congradulation ! Data is Stored Successfully  \");";
	echo "if(question){ window.location = 'add_expence.php'; } else {  window.location = 'add_expence.php';  }";
	echo "</script>";
	

  ?>
  

 