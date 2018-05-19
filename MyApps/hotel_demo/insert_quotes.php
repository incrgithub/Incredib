<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<html>
<head>
<script>
function OpenNewWindow(MyPath)
	     {
			window.open(MyPath,"","toolbar=no,status=no,menubar=no,location=center,scrollbars=no,resizable=no,height=650,width=750");
	      }
</script>
</head>
<body>

</body>
<?php
include('connect.php');
error_reporting(0);
session_start();
$bill_id=$_SESSION['bill_no'];
$cust_id=$_SESSION['cust_id'];
$netTotal=$_POST['netTotal'];
   
$extra="Bill Payment";
$sale_date=date('Y-m-d');
  $customer="customer";
  $z="0";
  
 
  
 $up_query="update quote_master set bill_amount='$netTotal' where quote_id='$bill_id' ";
 @mysql_query($up_query)or die(" Query for update Quote master detail table has problem  "); 
 
 
  
   

	 
  ?>
  

<script>window.location.href = "final_quote_copy.php";	</script>