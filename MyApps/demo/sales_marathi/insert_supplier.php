<?php

include('connect.php');
	$supp_name=$_POST['supp_name'];
	$supp_address=$_POST['supp_address'];

	
	$mobile=$_POST['mobile_no'];
	 
	$balance="0";

 
  
  

$jdate=date("Y-m-d");

$query="insert into supplier_master values('' ,'$supp_name','$supp_address','$mobile','$balance','$jdate')";
@mysql_query($query) or die(" Query for Supplier Master   table has problem  "); 

 

echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Congradulation ! Data is Stored successfully  \");";
	echo "if(question){ window.location = 'new_supplier.php'; } else {  window.location = 'new_supplier.php';  }";
	echo "</script>";


?>


