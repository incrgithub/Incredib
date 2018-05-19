<?php
include('classes/crud.php');
$db = new Database();
$db->connect();



if(isset($_POST['savetxn']))
{
	$txndate  = $_POST['txndate'];	
	$txnno = $_POST['txnno'];
	$bankname = $_POST['bankname'];
	$txnmode	= $_POST['txnmode'];
	$txnamount = $_POST['txnamount'];
	$txncomments = $_POST['txncomments'];
	$client_id  = $_POST['clientid'];	
	$db->insert("tbl_transactions",array('txndate'=>$txndate,'txnno'=>$txnno,'bankname'=>$bankname,'txnmode'=>$txnmode,'txnamount'=>$txnamount,'txncomments'=>$txncomments,'clientid'=>$client_id));  
	echo "<script> window.location='clients.php?msg=save'</script>";
}


if(isset($_GET['msg'])) 
{
$param=$_GET['msg'];
if($param  == "deletetxn")
	{
	$id=$_GET['id'];
	$db->delete("tbl_transactions","txnid='$id'"); 
	echo "<script> window.location='clients.php?msg=delete'</script>";
	}
}


?>