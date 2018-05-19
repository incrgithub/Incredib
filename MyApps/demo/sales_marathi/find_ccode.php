<?php 

$menuid=$_REQUEST['country'];
include('connect.php');

$query="select sale_price from item_master where item_id='$menuid'";
				
$rs=mysql_query($query);

$menurate="";
while($row=mysql_fetch_array($rs))
	{
	$menurate=$row['sale_price'];	
	}
echo $menurate;
?>
