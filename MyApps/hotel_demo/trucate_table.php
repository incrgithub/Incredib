<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
include('connect.php');
session_start();
error_reporting(0);

$query_bill_master=" truncate table bill_master";
@mysql_query($query_bill_master) or die(" Query for Bill master  table has problem  "); 

$query_sale_master=" truncate table sale_master";
@mysql_query($query_sale_master) or die(" Query for Sale Master  table has problem  "); 

$query_temp_sale_master=" truncate table temp_sale_master";
@mysql_query($query_temp_sale_master) or die(" Query for temp Sale Master  table has problem  "); 



 echo "<script language=\"javascript\">";
	echo "var question=confirm(\" सर्व डेटा रिसेट केला आहे  \");";
	echo "if(question){ window.location = 'dash.php'; } else {  window.location = 'dash.php';  }";
	echo "</script>";

 
  


  
  

?>

