<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<?php
include('connect.php');
session_start();
$bill_id=$_SESSION['bill_no'];

 $pur_id=$_GET['id'];
 
$deleteq="delete from temp_pur_bill_master where pur_id='$pur_id'";
mysql_query($deleteq) or die(mysql_error()); 
  

 $_SESSION['bill_no']=$bill_id;


?>
<script>window.location.href = "pur_bill_two.php";	</script>



