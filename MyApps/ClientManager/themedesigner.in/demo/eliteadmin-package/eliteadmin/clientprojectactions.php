<?php
include('classes/crud.php');
$db = new Database();
$db->connect();
	
//Save
if(isset($_POST['savewebsitedev']))
{
	$client_id  = $_POST['clientid'];	
	$domainname = $_POST['domainname'];
	$webspace = $_POST['webspace'];
	$noofemailds	= $_POST['noemailids'];
	$domainexpirydate  = $_POST['domainexpirydate'];
	
	$db->insert("tbl_websites",array('domainname'=>$domainname,'webspace'=>$webspace,'noofemailds'=>$noofemailds,'expirydate'=>$domainexpirydate,'clientid'=>$client_id));  
	echo "<script> window.location='clients.php?msg=save'</script>";
}

if(isset($_POST['savesms']))
{
	$client_id  = $_POST['clientid'];
	$senderid   = $_POST['senderid'];
	$nosms      = $_POST['nosms'];
	$smsexpirydate = $_POST['smsexpirydate'];
	
	$db->insert("tbl_sms",array('senderid'=>$senderid,'nosms'=>$nosms,'smsexpirydate'=>$smsexpirydate,'clientid'=>$client_id));  
	echo "<script> window.location='clients.php?msg=save'</script>";
}

if(isset($_POST['savewebappdev']))
{
	$client_id  = $_POST['clientid'];	
	$appname = $_POST['appname'];
	$webappexpirydate  = $_POST['webappexpirydate'];
	
	$db->insert("tbl_webappdev",array('appname'=>$appname,'webappexpirydate'=>$webappexpirydate,'clientid'=>$client_id));  
	echo "<script> window.location='clients.php?msg=save'</script>";
}

if(isset($_POST['savedesktopappdev']))
{
	$client_id  = $_POST['clientid'];	
	$appname = $_POST['appname'];
	$desktopappexpirydate  = $_POST['desktopappexpirydate'];
	
	$db->insert("tbl_desktopappdev",array('appname'=>$appname,'desktopappexpirydate'=>$desktopappexpirydate,'clientid'=>$client_id));  
	echo "<script> window.location='clients.php?msg=save'</script>";
}

if(isset($_POST['savemobileappdev']))
{
	$client_id  = $_POST['clientid'];	
	$appname = $_POST['appname'];
	$mobileappexpirydate  = $_POST['mobileappexpirydate'];
	
	$db->insert("tbl_mobileappdev",array('appname'=>$appname,'mobileappexpirydate'=>$mobileappexpirydate,'clientid'=>$client_id));  
	echo "<script> window.location='clients.php?msg=save'</script>";
}

if(isset($_POST['savevoicecalls']))
{
	$client_id  = $_POST['clientid'];	
	$nocalls = $_POST['nocalls'];
	$callsexpirydate  = $_POST['callsexpirydate'];
	
	$db->insert("tbl_voicecalls",array('nocalls'=>$nocalls,'callsexpirydate'=>$callsexpirydate,'clientid'=>$client_id));  
	echo "<script> window.location='clients.php?msg=save'</script>";
}

//Update
if(isset($_POST['updatewebsitedev']))
{
	$websiteid  = $_POST['websiteid'];	
	$domainname = $_POST['domainname'];
	$webspace = $_POST['webspace'];
	$noofemailds	= $_POST['noemailids'];
	$domainexpirydate  = $_POST['domainexpirydate'];
	
	$db->update("tbl_websites",array('domainname'=>$domainname,'webspace'=>$webspace,'noofemailds'=>$noofemailds,'expirydate'=>$domainexpirydate),"websiteid='$websiteid'");  
	echo "<script> window.location='clients.php?msg=update'</script>";
}

if(isset($_POST['updatesms']))
{
	$smsid  = $_POST['smsid'];
	$senderid   = $_POST['senderid'];
	$nosms      = $_POST['nosms'];
	$smsexpirydate = $_POST['smsexpirydate'];
	
	$db->update("tbl_sms",array('senderid'=>$senderid,'nosms'=>$nosms,'smsexpirydate'=>$smsexpirydate),"smsid='$smsid'");  
	echo "<script> window.location='clients.php?msg=update'</script>";
}

if(isset($_POST['updatewebappdev']))
{
	$appid = $_POST['webappdevid'];
	$appname  = $_POST['appname'];
	$webappexpirydate   = $_POST['webappexpirydate'];
	
	$db->update("tbl_webappdev",array('appname'=>$appname,'webappexpirydate'=>$webappexpirydate),"appid='$appid'");  
	echo "<script> window.location='clients.php?msg=update'</script>";
}

if(isset($_POST['updatemobileappdev']))
{
	$appid = $_POST['mobileappdevid'];
	$appname  = $_POST['appname'];
	$mobileappexpirydate   = $_POST['mobileappexpirydate'];
	
	$db->update("tbl_mobileappdev",array('appname'=>$appname,'mobileappexpirydate'=>$mobileappexpirydate),"appid='$appid'");  
	echo "<script> window.location='clients.php?msg=update'</script>";
}

if(isset($_POST['updatedesktopappdev']))
{
	$appid = $_POST['desktopappdevid'];
	$appname  = $_POST['appname'];
	$desktopappexpirydate   = $_POST['desktopappexpirydate'];
	
	$db->update("tbl_desktopappdev",array('appname'=>$appname,'desktopappexpirydate'=>$desktopappexpirydate),"appid='$appid'");  
	echo "<script> window.location='clients.php?msg=update'</script>";
}

if(isset($_POST['updatevoicecalls']))
{
	$callsid = $_POST['callsid'];
	$nocalls  = $_POST['nocalls'];
	$callsexpirydate   = $_POST['callsexpirydate'];
	
	$db->update("tbl_voicecalls",array('nocalls'=>$nocalls,'callsexpirydate'=>$callsexpirydate),"callsid='$callsid'");  
	echo "<script> window.location='clients.php?msg=update'</script>";
}

// Delete
if(isset($_GET['msg'])) 
{
$param=$_GET['msg'];
if($param  == "deletewebsite")
	{
	$id=$_GET['id'];
	$db->delete("tbl_websites","websiteid='$id'"); 
	echo "<script> window.location='clients.php?msg=delete'</script>";
	}
if($param  == "deletevoicecalls")
	{
	$id=$_GET['id'];
	$db->delete("tbl_voicecalls","callsid='$id'"); 
	echo "<script> window.location='clients.php?msg=delete'</script>";
	}	
if($param  == "deletemobileappdev")
	{
	$id=$_GET['id'];
	$db->delete("tbl_mobileappdev","appid='$id'"); 
	echo "<script> window.location='clients.php?msg=delete'</script>";
	}	
if($param  == "deletedesktopappdev")
	{
	$id=$_GET['id'];
	$db->delete("tbl_desktopappdev","appid='$id'"); 
	echo "<script> window.location='clients.php?msg=delete'</script>";
	}	
if($param  == "deletewebappdev")
	{
	$id=$_GET['id'];
	$db->delete("tbl_webappdev","appid='$id'"); 
	echo "<script> window.location='clients.php?msg=delete'</script>";
	}	
if($param  == "deletesms")
	{
	$id=$_GET['id'];
	$db->delete("tbl_sms","smsid='$id'"); 
	echo "<script> window.location='clients.php?msg=delete'</script>";
	}		
}


?>