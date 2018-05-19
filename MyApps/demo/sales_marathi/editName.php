<?php

include('connect.php');
session_start();

	$item_id=$_SESSION['item_id'];
 	
	$item_name=$_POST['item_name'];
  	$group_id=$_POST['group_id'];
	 
	
	


$update="update item_master set item_group_id='$group_id',item_name='$item_name' where item_id='$item_id'";
  @mysql_query($update) or die(" Query for Item  Master Table has problem  "); 
  
 

 

echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Congradulation ! Data is Stored successfully  \");";
	echo "if(question){ window.location = 'item_group.php'; } else {   window.location = 'item_group.php';  }";
	echo "</script>";


?>


