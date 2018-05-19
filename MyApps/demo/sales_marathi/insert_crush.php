<?php

include('connect.php');
session_start();

$supp_id=$_SESSION['supp_id'];

	 $pur_date=$_POST['pay_date'];
	 $crushing_quantity=$_POST['crushing_quantity'];
	 
	 $dust=$_POST['dust'];
	 $six=$_POST['six'];
	 $ten=$_POST['ten'];
	 $twenty=$_POST['twenty'];
	 $fourty=$_POST['fourty'];
	
$pur_date_one=date('Y-m-d', strtotime($pur_date));

$query="insert into crushing values('','$pur_date_one','$supp_id','$crushing_quantity')";
@mysql_query($query) or die(" Query for Crushing  table has problem  "); 

 
 $query_search="select * from supplier_master where supp_id='$supp_id'";
	$result = mysql_query($query_search) or die("Search query for Supplier Register is wrong  ");
	$data=NULL;	while ($row = mysql_fetch_array($result)) {   	$data[] = $row;		}     foreach($data as $ecol)	{  $supp_stock=$ecol['available_stock']; }
	
	$new_av_stock=$supp_stock - $crushing_quantity;
		
 	$up_balance="update supplier_master set available_stock='$new_av_stock'  where supp_id='$supp_id' ";
 	@mysql_query($up_balance)or die(" Query for update Supplier detail table has problem  "); 
 



for($i=2 ; $i< 7 ;$i++)
{
$query_search="select * from item_master where item_id='$i'";
	$result = mysql_query($query_search) or die("Search query for Customer Register is wrong  ");
	$data=NULL;
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
	}
 	    foreach($data as $ecol)
		{
	 	$item_stock=$ecol['item_stock']; 
 		}


if($i==2)
{		
 $item_qty= $dust + $item_stock ;
 
 $query="insert into purchase_master values('','$pur_date_one','$i','$dust')";
@mysql_query($query) or die(" Query for Purchase Master table has problem  "); 
 }
 if($i==3)
{		
 $item_qty= $six + $item_stock ;
 
 $query="insert into purchase_master values('','$pur_date_one','$i','$six')";
@mysql_query($query) or die(" Query for Purchase Master table has problem  "); 
 }
 if($i==4)
{		
 $item_qty= $ten + $item_stock ;
 
 $query="insert into purchase_master values('','$pur_date_one','$i','$ten')";
@mysql_query($query) or die(" Query for Purchase Master table has problem  "); 
 }
 if($i==5)
{		
 $item_qty= $twenty + $item_stock ;
 
 $query="insert into purchase_master values('','$pur_date_one','$i','$twenty')";
@mysql_query($query) or die(" Query for Purchase Master table has problem  "); 
 }
 if($i==6)
{		
 $item_qty= $fourty + $item_stock ;

$query="insert into purchase_master values('','$pur_date_one','$i','$fourty')";
@mysql_query($query) or die(" Query for Purchase Master table has problem  "); 
 }
 
 
 $query_update="update item_master set  item_stock='$item_qty' where item_id='$i'";
 mysql_query($query_update) or die("Problem in Update query");
 


}


	echo"<script language=\"javascript\">";
	echo "var question=confirm(\" Congradulation ! Data is Stored Successfully  \");";
	echo "if(question){ window.location = 'crushing.php'; } else {  window.location = 'crushing.php';  }";
	echo "</script>";


?>


