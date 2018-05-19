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

$netAmount=$_POST['netAmount'];

$paid_amount=0;
$due_amount=$netAmount;



$vat_per=$_POST['vat_per'];
$vat=$_POST['vat'];

 $sale_date=date('Y-m-d');
   
 
 $up_query="update bill_master set bill_amount='$netTotal',vat_amount='$vat', total_amount='$netAmount'  where bill_id='$bill_id' ";
 @mysql_query($up_query)or die(" Query for update bill detail table has problem  "); 
 
 
	
	 $query_stock="select * from temp_sale_master where bill_id='$bill_id'";
	$result_stock = mysql_query($query_stock) or die("Search query for Temp Stock  Register is wrong  ");
	$data=NULL;
		while ($row = mysql_fetch_array($result_stock))
 			{   	$data[] = $row;		}   
			
			  foreach($data as $ecol)	
			  { 
			  
			   $sale_date=$ecol['sale_date'];  
			   $bill_id=$ecol['bill_id']; 
			   $item_id=$ecol['item_id']; 
 			   $sale_price=$ecol['sale_price']; 
			   $item_qty=$ecol['quantity']; 
			   $disc=$ecol['disc_amt'];
   			   $vat=$ecol['vat_amt'];
 			   $net_price=$ecol['net_amt'];

			   
			   $query="insert into sale_master values('','$sale_date','$bill_id','$item_id','$sale_price','$disc','$vat','$net_price','$item_qty')";
				@mysql_query($query) or die(" Query for Sales Master table has problem  ");
				
			 $query_search="select * from item_master where item_id='$item_id'";
				$result = mysql_query($query_search) or die("Search query for Customer Register is wrong  ");
				$data=NULL;	while ($row = mysql_fetch_array($result)) {   	$data[] = $row;		}     foreach($data as $ecol)	{  $stock=$ecol['item_stock'];  }
				$new_stock=$stock - $item_qty;
		
 			 $up_balance="update item_master set item_stock='$new_stock' where item_id='$item_id' ";
 			@mysql_query($up_balance)or die(" Query for update stock  detail table has problem  "); 

			   }
			 $deleteq="delete from temp_sale_master where bill_id='$bill_id'";
				mysql_query($deleteq) or die(mysql_error()); 
  
  ?>
  

<script>window.location.href = "final_bill_copy.php";	</script>