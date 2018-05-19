<?php
include('classes/crud.php');
$db = new Database();
$db->connect();


$action=$_POST['action'];
$caction=$_POST['caction'];
$saction=$_POST['saction'];
$gaction=$_POST['gaction'];
$sbaction=$_POST['sbaction'];

	
if($action == "save" || $action == "update" || $saction == "update") 
{
	$school_name  = $_POST['school_name'];	
	$school_address = $_POST['school_address'];
	$no_of_teaching_staff = $_POST['no_of_teaching_staff'];
	$no_of_non_teaching_staff	= $_POST['no_of_non_teaching_staff'];
	$no_of_peon	= $_POST['no_of_peon'];
	$no_of_student	= $_POST['no_of_student'];
	$name_of_head_master	= $_POST['name_of_head_master'];
	$contact_no_head_master	= $_POST['contact_no_head_master'];
	$name_of_head_clark	= $_POST['name_of_head_clark'];
	$contact_no_head_clark	= $_POST['contact_no_head_clark'];
}

if($action == "save")
{
	$userName=$_POST['username'];
	$passWord=$_POST['password'];
	$db->insert("tbl_school_details",array('school_name'=>$school_name,'school_address'=>$school_address,'no_of_teaching_staff'=>$no_of_teaching_staff,
	'no_of_non_teaching_staff'=>$no_of_non_teaching_staff,'no_of_peon'=>$no_of_peon,'no_of_student'=>$no_of_student,'name_of_head_master'=>$name_of_head_master,
	'contact_no_head_master'=>$contact_no_head_master,'name_of_head_clark'=>$name_of_head_clark,'contact_no_head_clark'=>$contact_no_head_clark));  
	$query="SELECT id FROM tbl_school_details where school_name='$school_name'";
	$rs=mysql_query($query) or die(mysql_error());
	while($row=mysql_fetch_array($rs))
		{
		$id=$row[0];
		}

	$db->insert("tbl_login",array('id'=>$id,'UserName'=>$userName,'Password'=>$passWord,'FirstName'=>$name_of_head_clark,
	'LastName'=>$name_of_head_clark,'Role'=>'SA'));  
	echo "<script> window.location='superadmin.php?msg=save'</script>";
}

if($action == "update" || $saction == "update")
{
	$id=$_POST['id'];
	$userName=$_POST['username'];
	$passWord=$_POST['password'];
	
	$db->update("tbl_school_details",array('school_name'=>$school_name,'school_address'=>$school_address,'no_of_teaching_staff'=>$no_of_teaching_staff,
	'no_of_non_teaching_staff'=>$no_of_non_teaching_staff,'no_of_peon'=>$no_of_peon,'no_of_student'=>$no_of_student,'name_of_head_master'=>$name_of_head_master,
	'contact_no_head_master'=>$contact_no_head_master,'name_of_head_clark'=>$name_of_head_clark,'contact_no_head_clark'=>$contact_no_head_clark),"id='$id'"); 
	
	$db->update("tbl_login",array('UserName'=>$userName,'Password'=>$passWord,'FirstName'=>$name_of_head_clark,
	'LastName'=>$name_of_head_clark),"id='$id'");  	
	if(isset($_POST['saction']))
	    echo "<script> window.location='schooladmin.php?msg=update'</script>";		
	else	
		echo "<script> window.location='superadmin.php?msg=update'</script>";
}

if(isset($_GET['msg'])) 
{
$param=$_GET['msg'];
if($param  == "delete")
	{
	$id=$_GET['id'];
	$db->delete("tbl_school_details","id='$id'"); 
	echo "<script> window.location='superadmin.php?msg=delete'</script>";
	}
}

if($caction == "save" || $caction == "update") 
{
	$firstName=$_POST['firstname'];
	$lastName=$_POST['lastname'];
	$userName=$_POST['cusername'];
	$passWord=$_POST['cpassword'];
}

if($caction == "save")
{
	$db->insert("tbl_login",array('UserName'=>$userName,'Password'=>$passWord,'FirstName'=>$firstName,
	'LastName'=>$lastName,'Role'=>'CA'));  
	echo "<script> window.location='listchairmanadmin.php?msg=save'</script>";
}

if($caction == "update")
{
	$id=$_POST['id'];
	$db->update("tbl_login",array('UserName'=>$userName,'Password'=>$passWord,'FirstName'=>$firstName,
	'LastName'=>$lastName),"id='$id'");  
	echo "<script> window.location='listchairmanadmin.php?msg=update'</script>";
}

if(isset($_GET['msg'])) 
{
$param=$_GET['msg'];
if($param  == "cdelete")
	{
	$id=$_GET['id'];
	$db->delete("tbl_login","id='$id'"); 
	echo "<script> window.location='listchairmanadmin.php?msg=delete'</script>";
	}
}

if($gaction == "save" || $gaction == "update") 
{
	$gl_name=$_POST['gl_name'];
	$gl_mode=$_POST['gl_mode'];
	$entry_log= date('Y-m-d H:i:s');
 }

if($gaction == "save")
{
	$db->insert("tbl_gl_master",array('gl_name'=>$gl_name,'gl_mode'=>$gl_mode,'entry_log'=>$entry_log));  
	echo "<script> window.location='glcodelist.php?msg=save'</script>";
}

if($gaction == "update")
{
	$id=$_POST['id'];
	$db->update("tbl_gl_master",array('gl_name'=>$gl_name,'gl_mode'=>$gl_mode),"gl_id='$id'");  
	echo "<script> window.location='glcodelist.php?msg=update'</script>";
}

if(isset($_GET['msg'])) 
{
$param=$_GET['msg'];
if($param  == "gdelete")
	{
	$id=$_GET['id'];
	$db->delete("tbl_login","id='$id'"); 
	echo "<script> window.location='glcodelist.php?msg=delete'</script>";
	}
}

if($sbaction == "save" || $sbaction == "update") 
{
	
	$bank_name=$_POST['bank_name'];
	$bank_branch=$_POST['bank_branch'];
	$acc_name=$_POST['acc_name'];
 	$acc_number=$_POST['acc_number'];
	$bank_IFSC=$_POST['bank_IFSC'];
 	$entry_log= date('Y-m-d H:i:s');
 }

if($sbaction == "save")
{
	$school_id=$_GET['id'];
	$db->insert("tbl_bank_master",array('school_id'=>$school_id,'bank_name'=>$bank_name,'bank_branch'=>$bank_branch,'acc_name'=>$acc_name,'acc_number'=>$acc_number,'bank_IFSC'=>$bank_IFSC,'entry_log'=>$entry_log));  
	echo "<script> window.location='schooladmin_bank.php?msg=save'</script>";
}

if($sbaction == "update")
{
	$id=$_POST['id'];
	$db->update("tbl_gl_master",array('gl_name'=>$gl_name,'gl_mode'=>$gl_mode),"gl_id='$id'");  
	echo "<script> window.location='glcodelist.php?msg=update'</script>";
}

if(isset($_GET['msg'])) 
{
$param=$_GET['msg'];
if($param  == "sbdelete")
	{
	$id=$_GET['id'];
	$db->delete("tbl_login","id='$id'"); 
	echo "<script> window.location='glcodelist.php?msg=delete'</script>";
	}
}


?>