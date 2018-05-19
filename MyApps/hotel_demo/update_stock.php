<?php

include('connect.php');
session_start();
	$comp_name=$_POST['comp_name'];
	$old_inv_no=$_SESSION['old_inv'];
	
	$inv_no=$_POST['inv_number'];
	$inv_date=$_POST['inv_date'];
	$pur_date=$_POST['pay_date'];
	
 
	$item_detail=$_POST['item_detail'];
	
	
	$total_amt=$_POST['total_amt'];
    $total_vat=$_POST['total_vat'];
	$new_offer = $_POST['offer'];
 	
	$lr_date=$_POST['lr_date'];
	$lr_number=$_POST['lr_number'];
    $transport=$_POST['transport'];
	$godown = $_POST['godown'];
	
	$inv_date_one=date('Y-m-d', strtotime($inv_date));
	$lr_date_one=date('Y-m-d', strtotime($lr_date));
	$pur_date_one=date('Y-m-d', strtotime($pur_date));




$query="update bill_register set  inv_number='$inv_no', inv_date='$inv_date_one' , purchase_date='$pur_date_one', inv_company='$comp_name',inv_item='$item_detail',  total_amount='$total_amt', total_vat='$total_vat', lr_note='$lr_number', lr_date='$lr_date_one',transport='$transport',godown='$godown',offer='$new_offer' where inv_number='$old_inv_no'";
 mysql_query($query) or die("Problem in query");
 	echo "<script language=\"javascript\">";
	echo "var question=confirm(\"invoice  is Updated Successfully. \");";
	echo "if(question){  window.location = 'edit_detail.php';    } else { window.location = 'edit_detail.php';  }";
	echo "</script>";

 	
		 
?>


