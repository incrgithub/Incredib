<?php
include('classes/crud.php');
$db = new Database();
$db->connect();


	$id=$_POST['id'];
	$gl_id  = $_POST['gl_id'];	
 	$extra_note = $_POST['extra_note'];
	$cr_amt	= $_POST['cr_amt'];
	$tran_date	= $_POST['tran_date'];
	 $zero=0;
	$db->insert("tbl_tran_master",array('acc_id'=>$gl_id,'school_id'=>$id,'tran_date'=>$tran_date,'cr_amt'=>$cr_amt,'dr_amt'=>$zero,'chq_no'=>$zero,'chq_date'=>$tran_date,'extra_note'=>$extra_note));  
	echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Data Stored Successfully   \");";
	echo "if(question){ window.location = 'schooladmin_jama.php'; } else {  window.location = 'schooladmin_jama.php';  }";
	echo "</script>";
 
	 

 

 


?>