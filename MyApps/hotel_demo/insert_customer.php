<?php

include('connect.php');
	$cust_name=$_POST['cust_name'];
	$cust_address=$_POST['cust_address'];
	
	$mobile=$_POST['mobile_no'];
	 
	$balance=0;
  

$jdate=date("Y-m-d");

$query="insert into register values('$balance' ,'$cust_name','$cust_address','$balance','$mobile','$balance','$balance','$balance','$balance')";
@mysql_query($query) or die(" Query for Customer Master   table has problem  "); 

 

echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Congradulation ! Data is Stored successfully  \");";
	echo "if(question){ window.location = 'new_customer.php'; } else {  window.location = 'new_customer.php';  }";
	echo "</script>";


?>


