<?php
$pageName = basename($_SERVER['PHP_SELF']);

if($pageName == "index.php")
	{
	echo "Login :: Incredible Tech Solution";
	}
else if($pageName == "billing.php")	
	{
	echo "Billing :: Incredible Tech Solution ";
	}
else if($pageName == "dash.php")	
	{
	echo "Dashboard :: Incredible Tech Solution ";
	}	
else if($pageName == "dash_customer.php")	
	{
	echo "Customer :: Incredible Tech Solution ";
	}	
	else if($pageName == "dash_purchase.php")	
	{
	echo "Purchase :: Incredible Tech Solution ";
	}	
	else if($pageName == "dash_stock.php")	
	{
	echo "Stock :: Incredible Tech Solution ";
	}	
	else if($pageName == "get_report.php")	
	{
	echo "Reports :: Incredible Tech Solution ";
	}	
		
?>