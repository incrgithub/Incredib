<?php
include('connect.php');//para sa connection sang database

if (isset($_POST['submit'])) 
{
	$UserName=$_POST['UserName'];
	$Password=$_POST['Password'];
	$result=mysql_query("select * from members where UserName='$UserName' and Password='$Password'")or die (mysql_error()); 
			
	$count=mysql_num_rows($result);
	$row=mysql_fetch_array($result);
			
			if ($count > 0)
				{
				session_start();
				$_SESSION['member_id']=$row['member_id'];
				header('location:dash.php');
				}
			else
				{
				 
		
				header('location:index.php');
				}
}
?>

