<?php


 include('connect.php');
	$start_d=$_POST['start_date'];
	$end_d=$_POST['end_date'];
 
	 session_start();
 
$start_d=date('Y-m-d', strtotime($start_d));
$end_d=date('Y-m-d', strtotime($end_d));

 $_SESSION['rpt_start_date']=$start_d; 
 $_SESSION['rpt_end_date']=$end_d; 
 
	header("Location:edit_detail.php");


?>


