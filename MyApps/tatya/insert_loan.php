<?php

include('connect.php');
error_reporting(0);
 date_default_timezone_set('Asia/Kolkata'); 

	$per_name=$_POST['per_name'];
	$per_add=$_POST['per_add'];
	$per_mobile=$_POST['per_mobile'];
	$loan_amount=$_POST['loan_amount'];
	$loan_inst=$_POST['loan_inst'];
  	$loan_date=$_POST['loan_date'];
  	$next_date=$_POST['next_date'];

 $acc_type="yes";
 
 

$query="insert into personal_book values('','$per_name','$per_add','$per_mobile','$loan_amount','$loan_date','$loan_inst','$next_date','$acc_type')";
@mysql_query($query) or die(" Query for Personal Book  table has problem  "); 

 

echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Congradulation ! Data is Stored successfully  \");";
	echo "if(question){ window.location = 'new_loan.php'; } else {  window.location = 'new_loan.php';  }";
	echo "</script>";


?>


