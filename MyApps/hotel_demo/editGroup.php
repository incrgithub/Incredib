<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php

include('connect.php');
session_start();

	$item_group_id=$_SESSION['item_group_id'];
 	$item_group_name=$_POST['item_group_name'];
 	 
 $update="update item_group_master set  item_group_name='$item_group_name' where item_group_id='$item_group_id'";
  @mysql_query($update) or die(" Query for Item Group Master Table has problem  "); 
  
   
echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Congrats ! Data Stored Successfully \");";
	echo "if(question){ window.location = 'item_group.php'; } else {   window.location = 'item_group.php';  }";
	echo "</script>";


?>


