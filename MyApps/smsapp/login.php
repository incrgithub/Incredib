<?php
include('conn.php');

if (isset($_POST['submit'])) 
{
	$UserName=$_POST['UserName'];
	$Password=$_POST['password'];
	$result=mysql_query("select * from users where UserName='$UserName' and Password='$Password'")or die (mysql_error()); 
			
	$count=mysql_num_rows($result);
	$row=mysql_fetch_array($result);
			
			if ($count > 0)
				{
				session_start();
				$_SESSION['user_id']=$row['user_id'];
				header('location:mainpage.php');
				}
			else
				{
				header('location:index.php?msg=error');
				}
}
?>

