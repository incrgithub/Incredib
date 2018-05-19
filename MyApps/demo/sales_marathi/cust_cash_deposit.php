<?php

include('connect.php');
session_start();

	$cust_id=$_SESSION['cust_id'];
	
	
	$due_amount=$_POST['due_amount'];
	$payment=$_POST['new_amount'];
 	$extra=$_POST['extra_note'];
	$jb_date=$_POST['pay_date'];
	
	$pdate=date('Y-m-d', strtotime($jb_date));
 $balance=$due_amount - $payment;
 



$query="insert into all_tran values('','$pdate','customer','$cust_id','$payment','0','$extra','income')";
@mysql_query($query) or die(" Query for ALl Tran   Table has problem  "); 

 

echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Congradulation ! Data is Stored successfully  \");";
	echo "if(question){ window.location = 'cust_payment.php'; } else {  window.location = 'cust_payment.php';  }";
	echo "</script>";


?>


