<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<?php
include('connect.php');
session_start();
error_reporting(0);
$group_id=$_POST['group_id'];
$item_name=$_POST['item_name'];
$img="noimg.gif";
$zero='0';
 $item_cration_date= date('Y-m-d');
 
$query="insert into item_master values('','$group_id','$item_name','$zero','$zero','$zero','$item_cration_date')";
@mysql_query($query) or die(" Query for Item Master table has problem  "); 



echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Congrats ! Data Stored Successfully \");";
	echo "if(question){ window.location = 'item_group.php'; } else {  window.location = 'item_group.php';  }";
	echo "</script>";
 
 
 
 

?>

