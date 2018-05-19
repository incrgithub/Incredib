		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<?php

include('connect.php');
	$mem_name=$_POST['mem_name'];
	$mem_add=$_POST['mem_add'];
	
	$mem_mobile=$_POST['mem_mobile'];
	 $mem_gender=$_POST['mem_gender'];
	 $mem_edu=$_POST['mem_edu'];
	 $mem_dob=$_POST['mem_dob'];
	 
$mem_dobs=date('Y-m-d', strtotime($mem_dob));

$query="insert into membership values('','$mem_name','$mem_add','$mem_mobile','$mem_gender','$mem_dobs','$mem_edu')";
@mysql_query($query) or die(" Query for Registration  has problem  "); 

 

echo "<script language=\"javascript\">";
	echo "var question=confirm(\" अभिनंदन ! माहिती नोंदवली आहे   \");";
	echo "if(question){ window.location = 'index.html'; } else {  window.location = 'index.html';  }";
	echo "</script>";



?>


