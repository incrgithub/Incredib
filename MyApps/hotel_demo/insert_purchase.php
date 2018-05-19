<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<?php
include('connect.php');
session_start();
$pur_bill_id=$_SESSION['bill_no'];
$cust_id=$_SESSION['cust_id'];
$item_id=$_POST['item_id'];
$f_price=$_POST['sale_price'];

$item_qty=$_POST['quantity'];
$disc=$_POST['disscount'];
$purchase_price=$_POST['purchase_p'];

$total=$_POST['total'];
$sale_price=$_POST['sale_p'];
  
$query="insert into temp_pur_bill_master values('','$pur_bill_id','$item_id','$f_price','$disc','$purchase_price','$item_qty','$sale_price')";
@mysql_query($query) or die(" Query for Temp Sales Master table has problem  "); 

$_SESSION['bill_no']=$pur_bill_id;
  
?>

<script>window.location.href = "pur_bill_two.php";	</script>