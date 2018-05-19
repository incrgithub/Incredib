<?php

include('connect.php');
	$cust_name=$_POST['cust_name'];
	$cust_add=$_POST['cust_add'];
 	
	$mobile=$_POST['mobile_no'];
	 
   
 
	$next_due = date("Y-m-d",strtotime("+1 years"));


$query="insert into cust_master values('','$cust_name','$cust_add','$mobile')";
@mysql_query($query) or die(" Query for Customer Master Table has problem  "); 

 

echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Congradulation ! Data is Stored successfully  \");";
	echo "if(question){ window.location = 'new_customer.php'; } else {  window.location = 'new_customer.php';  }";
	echo "</script>";


?>


