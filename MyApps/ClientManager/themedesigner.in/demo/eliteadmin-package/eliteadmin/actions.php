<?php
include('classes/crud.php');
$db = new Database();
$db->connect();


if(isset($_POST['saveclient']) || isset($_POST['updateclient'])) 
{
	$client_name  = $_POST['clientname'];	
	$client_address = $_POST['clientaddr'];
	$client_emailid = $_POST['clientemailid'];
	$client_contactno	= $_POST['clientcontactno'];
	$client_type = $_POST['clienttype'];
}

if(isset($_POST['saveclient']))
{
	$db->insert("tbl_clients",array('clientname'=>$client_name,'clientaddress'=>$client_address,'clientemailid'=>$client_emailid,'clientcontactno'=>$client_contactno,'clienttype'=>$client_type));  
	echo "<script> window.location='clients.php?msg=save'</script>";
}

if(isset($_POST['updateclient']))
{
	$id=$_POST['clientid'];
	$db->update("tbl_clients",array('clientname'=>$client_name,'clientaddress'=>$client_address,'clientemailid'=>$client_emailid,'clientcontactno'=>$client_contactno,'clienttype'=>$client_type),"clientid='$id'");   
	echo "<script> window.location='clients.php?msg=update'</script>";
}

if(isset($_GET['msg'])) 
{
$param=$_GET['msg'];
if($param  == "deleteclient")
	{
	$id=$_GET['id'];
	$db->delete("tbl_websites","clientid='$id'"); 
	$db->delete("tbl_webappdev","clientid='$id'"); 
	$db->delete("tbl_voicecalls","clientid='$id'"); 
	$db->delete("tbl_transactions","clientid='$id'"); 
	$db->delete("tbl_mobileappdev","clientid='$id'");
	$db->delete("tbl_sms","clientid='$id'");
	$db->delete("tbl_desktopappdev","clientid='$id'");
	$db->delete("tbl_clients","clientid='$id'"); 
	echo "<script> window.location='clients.php?msg=delete'</script>";
	}
}


?>