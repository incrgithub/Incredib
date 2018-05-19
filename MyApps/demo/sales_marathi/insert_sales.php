<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<?php
include('connect.php');
session_start();
$bill_id=$_SESSION['bill_no'];
$cust_id=$_SESSION['cust_id'];
$item_id=$_POST['item_id'];
$item_qty=$_POST['quantity'];
$disc=$_POST['disscount'];
$vat=$_POST['vat'];

$total=$_POST['total'];
$net_price=$_POST['sale_p'];

$sale_price=$_POST['sale_price'];
$sale_date=date('Y-m-d');

$query="insert into temp_sale_master values('','$sale_date','$bill_id','$item_id','$sale_price','$disc','$vat','$net_price','$item_qty')";
@mysql_query($query) or die(" Query for Temp Sales Master table has problem  "); 

	
	
$_SESSION['bill_no']=$bill_id;
$_SESSION['pr_id']= $cust_id;



?>

<script>window.location.href = "bill_two.php";	</script>