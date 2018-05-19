<?php

include('connect.php');
session_start();

	$supp_id=$_SESSION['supp_id'];
 	
	$supp_name=$_POST['supp_name'];
  	$supp_add=$_POST['supp_add'];
	$supp_mobile=$_POST['supp_mobile'];
	
	
 
  $update="update supplier_master set supp_name='$supp_name',supp_add='$supp_add',supp_mobile='$supp_mobile' where supp_id='$supp_id'";
  @mysql_query($update) or die(" Query for Supplier Master Table has problem  "); 


echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Congradulation ! Data is Stored successfully  \");";
	echo "if(question){ window.location = 'supp_edit_detail.php?id=$supp_id'; } else {  window.location = 'supp_edit_detail.php?id=$supp_id';  }";
	echo "</script>";


?>


