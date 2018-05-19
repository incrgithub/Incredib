<?php
 include('connect.php');
	
	$start_d=$_POST['start_date'];
 
 
 session_start();
		$start_d=date('Y-m-d', strtotime($start_d));
		 

 $_SESSION['rpt_start_date']=$start_d; 
 
 
	header("Location:get_day_rpt.php");
	
?>


