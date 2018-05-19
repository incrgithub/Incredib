		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<?php

include('connect.php');
	$cust_name=$_POST['cust_name'];
	$cust_address=$_POST['cust_address'];
	
	$mobile=$_POST['mobile_no'];
	 
	$balance=0;
  

$jdate=date("Y-m-d");

$query="insert into customer_master values('' ,'$cust_name','$cust_address','$mobile','$balance','$jdate')";
@mysql_query($query) or die(" Query for Customer Master   table has problem  "); 

 

echo "<script language=\"javascript\">";
	echo "var question=confirm(\" अभिनंदन ! माहिती साठवली आहे   \");";
	echo "if(question){ window.location = 'new_customer.php'; } else {  window.location = 'new_customer.php';  }";
	echo "</script>";


?>


