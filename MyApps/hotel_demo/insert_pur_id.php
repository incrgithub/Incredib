<?php
  
include('connect.php');
session_start();
 $p_no=$_SESSION['supp_id'];
 $bill_date=date('Y-m-d');
  
$inv_number=$_POST['inv_number'];
$dv_note=$_POST['delivery_note'];
$inv_date=$_POST['inv_date'];

 		$iv_date=date('Y-m-d', strtotime($inv_date));

$query="insert into pur_bill_master values('','$bill_date','$inv_number','$iv_date','$dv_note','$p_no','0','0','0','0','0','0')";
@mysql_query($query) or die(" Query for Purchase Bill Master table has problem  "); 

$q="select max(pur_bill_id) from pur_bill_master"; $res=mysql_query($q); 
$row=mysql_fetch_row($res); 
$bill_no= $row[0]; 
  $_SESSION['bill_no']=$bill_no;  
		 
		 
   

echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Congradulation ! Data is Stored successfully  \");";
	echo "if(question){ window.location = 'pur_bill_one.php'; } else {  window.location = 'pur_bill_one.php';  }";
	echo "</script>";


?>


