<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
include('connect.php');
session_start();
error_reporting(0);


$item_id=$_SESSION['item_id'];
 
$purchase_rate=$_POST['purchase_rate'];
$sale_rate=$_POST['sales_rate'];

 $purchase_date= date('Y-m-d');
  
 $query_update="update item_master set  purchase_price='$purchase_rate',sale_price='$sale_rate' where item_id='$item_id'";
 mysql_query($query_update) or die("Problem in Update query");
 

echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Congrats ! Data Stored Successfully ! \");";
	echo "if(question){ window.location = 'rate_master.php'; } else {  window.location = 'rate_master.php';  }";
	echo "</script>";
  
 ?>

