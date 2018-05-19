		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<?php

include('connect.php');
	$cust_name=$_POST['cust_name'];
	$cust_address=$_POST['cust_address'];
	$cust_shop_name=$_POST['cust_shop_name'];
	$mobile=$_POST['mobile_no'];
	 	$vat_no=$_POST['vat_no'];
	 	$tin_no=$_POST['tin_no'];

	$balance=0;
  $email="abhijit.shinde22@gmail.com";
	$web="www.incredibletechsolve.com";
$jdate=date("Y-m-d");

$query="insert into register values('','$cust_shop_name','$cust_address','$cust_name','$mobile','$email','$web','$vat_no','$tin_no')";
@mysql_query($query) or die(" Query for Register Master   table has problem  "); 

 

echo "<script language=\"javascript\">";
	echo "var question=confirm(\" अभिनंदन ! माहिती साठवली आहे   \");";
	echo "if(question){ window.location = 'register.php'; } else {  window.location = 'register.php';  }";
	echo "</script>";


?>


