<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<?php
include('connect.php');
session_start();
$bill_id=$_SESSION['bill_no'];
$cust_id=$_SESSION['pr_id'];

 $sale_id=$_GET['id'];
 
 

	
 
$deleteq="delete from temp_sale_master where sale_id='$sale_id'";
mysql_query($deleteq) or die(mysql_error()); 
  

 $_SESSION['bill_no']=$bill_id;
$_SESSION['pr_id']= $cust_id;


?>
<script>window.location.href = "bill_two.php";	</script>



