<?php

include('connect.php');

$mname=$_POST['cust_names'];
	session_start();

 echo" name is $mname";
 
 	$_SESSION['mname']=$mname; 

 	header("location:customer_cash_deposit.php ");
 
?>
