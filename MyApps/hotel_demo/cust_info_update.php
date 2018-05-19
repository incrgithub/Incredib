<?php

include('connect.php');
session_start();

	$cust_id=$_SESSION['cust_id'];
 	
	$cust_name=$_POST['cust_name'];
  	$cust_add=$_POST['cust_add'];
	$cust_mobile=$_POST['cust_mobile'];
	
	
 
  $update="update customer_master set cust_name='$cust_name',cust_add='$cust_add',cust_mobile='$cust_mobile' where cust_id='$cust_id'";
  @mysql_query($update) or die(" Query for Customer Balance Master Table has problem  "); 


echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Congradulation ! Data is Stored successfully  \");";
	echo "if(question){ window.location = 'account_detail.php?id=$cust_id'; } else {  window.location = 'account_detail.php?id=$cust_id';  }";
	echo "</script>";


?>


