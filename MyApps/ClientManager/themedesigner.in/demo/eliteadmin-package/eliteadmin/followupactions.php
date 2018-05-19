<?php
include('classes/crud.php');
$db = new Database();
$db->connect();



if(isset($_POST['savefollowup']))
{
	$date1=date('Y-m-d');
	$nxtfollowupdate  = $_POST['nxtfollowupdate'];	
	$followupcomments = $_POST['followupcomments'];
	$client_id  = $_POST['clientid'];	
	$db->insert("tbl_followup",array('date1'=>$date1,'next_followup_date'=>$nxtfollowupdate,'comments'=>$followupcomments,'clientid'=>$client_id));  
	echo "<script> window.location='clients.php?msg=save'</script>";
}


if(isset($_GET['msg'])) 
{
$param=$_GET['msg'];
if($param  == "deletefollowup")
	{
	$id=$_GET['id'];
	$db->delete("tbl_followup","followupid='$id'"); 
	echo "<script> window.location='clients.php?msg=delete'</script>";
	}
}


?>