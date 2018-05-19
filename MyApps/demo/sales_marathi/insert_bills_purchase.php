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
 
 $cst_per=$_POST['cst_per'];
 $cst=$_POST['cst'];
 $vat=$_POST['vat'];
 $vat_per=$_POST['vat_per'];
 $gTotal=$_POST['net_amount'];
  
 $up_query="update pur_bill_master set vat_amount='$vat', vat_per='$vat_per',cst_per='$cst_per', cst_amount='$cst', total_amount='$gTotal' where pur_bill_id='$bill_id' ";
 @mysql_query($up_query)or die(" Query for update PUR BILL  detail table has problem  "); 
 
  $query_stock="select * from temp_pur_bill_master where pur_bill_id='$bill_id'";
	$result_stock = mysql_query($query_stock) or die("Search query for Temp Stock  Register is wrong  ");
	$data=NULL;
		while ($row = mysql_fetch_array($result_stock))
 			{   	$data[] = $row;		}   
			
			  foreach($data as $ecol)	
			  { 
			  
			   $purchase_price=$ecol['purchase_price'];  
 			   $item_id=$ecol['item_id']; 
			   $sale_price=$ecol['sale_price']; 
			   $item_qty=$ecol['pur_quantity']; 
			   
 				
				 $query_search="select * from item_master where item_id='$item_id'";
				$result = mysql_query($query_search) or die("Search query for Customer Register is wrong  ");
				$data=NULL;	while ($row = mysql_fetch_array($result)) {   	$data[] = $row;		}  
				   foreach($data as $ecol)	{  $stock=$ecol['item_stock'];  }
				 $new_stock=$stock + $item_qty;
		
 			 $up_balance="update item_master set item_stock='$new_stock',sale_price='$sale_price', purchase_price='$purchase_price' where item_id='$item_id' ";
 			@mysql_query($up_balance)or die(" Query for update stock  detail table has problem  "); 
 			 }
  ?>
  
 <script>window.location.href = "supplier.php";	</script>