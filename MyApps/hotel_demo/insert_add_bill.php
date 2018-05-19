<?php
 include('connect.php');

	$acc_id=$_POST['acc_id'];  
	$bill_date=$_POST['bill_date'];  
	$bill_amount=$_POST['bill_amount'];  

 $ref_date=date('Y-m-d', strtotime($bill_date));

$zero=0;
 
$query="insert into all_tran values('','$ref_date','$acc_id','$zero','$bill_amount')";
@mysql_query($query) or die(" Query for Present Table has problem  "); 

 
 echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Congradulation ! Data is Stored successfully  \");";
	echo "if(question){ window.location = 'customer.php'; } else {  window.location = 'customer.php';  }";
	echo "</script>";


?>


