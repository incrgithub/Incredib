<?php
$pageName = basename($_SERVER['PHP_SELF']);
if($pageName == "index.php")
	{
	echo "Admin : Santosh Mane";
	}
if($pageName == "reg.php")
	{
	echo "New Registration";
	}	
if($pageName == "gallery.php")
	{
	echo "Gallery";
	}	
if($pageName == "news.php")
	{
	echo "News";
	}
?>