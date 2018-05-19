<?php
include('classes/crud.php');//para sa connection sang database

if (isset($_POST['submit'])) 
	{
	$UserName=$_POST['username'];
	$Password=$_POST['password'];
	$db = new Database();
	$db->connect();
	$db->select('tbl_login','*',NULL,"UserName='$UserName' and Password='$Password'",NULL,NULL); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY 
    $rs = $db->getResult(); 
	$count=sizeof($rs);	
	if ($count > 0)
				{
				session_start();
				foreach($rs as $row)
					{
					$_SESSION['id']=$row['id'];
					$_SESSION['firstname']=$row['FirstName'];
					$_SESSION['lastname']=$row['LastName'];
					$_SESSION['role']=$row['Role'];
					$name=$_SESSION['firstname']."  ".$_SESSION['lastname'];
					
					if($row['Role'] == "SU")
						header('location:superadmin.php');
					if($row['Role'] == "SA")
						header('location:schooldashboard.php');
					if($row['Role'] == "CA")
						header('location:chairmanadmin.php');	
					}
				}
			else
				{
				header('location:index.php?msg=failed');
				}
	}
?>

