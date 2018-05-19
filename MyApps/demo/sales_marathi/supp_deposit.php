<?php

include('connect.php');
session_start();

	$supp_id=$_SESSION['supp_id'];
  	$due_amount=$_POST['due_amount'];
	$payment=$_POST['new_amount'];
 	$extra=$_POST['extra_note'];
	$jb_date=$_POST['pay_date'];
	
	$supplier="supplier";
	$pdate=date('Y-m-d', strtotime($jb_date));
 $balance=$due_amount - $payment;
 
 $z="0";

$query_all_tran="insert into all_tran values('','$pdate','$supplier','$supp_id','$z','$payment','$extra','expence')";
	@mysql_query($query_all_tran) or die(" Query for All Tran  Table has problem  "); 
 

echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Congradulation ! Data is Stored successfully  \");";
	echo "if(question){ window.location = 'supp_payment.php'; } else {  window.location = 'supp_payment.php';  }";
	echo "</script>";


?>


