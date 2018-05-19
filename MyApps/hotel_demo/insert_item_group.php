<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<?php
include('connect.php');
session_start();
error_reporting(0);

$grp_name=$_POST['item_group_name'];
$grp_cration_date= date('Y-m-d');
   
$query="insert into item_group_master values('','$grp_name','$grp_cration_date')";

@mysql_query($query) or die(" Query for Item Group  Master  table has problem  "); 

 

echo "<script language=\"javascript\">";
	echo "var question=confirm(\"Congrats ! Data Stored Successfully \");";
	echo "if(question){ window.location = 'item_group.php'; } else {  window.location = 'item_group.php';  }";
	echo "</script>";
 
 
?>

