<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
include('connect.php');
session_start();
error_reporting(0);


$item_id=$_SESSION['item_id'];
$item_st=$_POST['item_stock'];
$purchase_rate=$_POST['purchase_rate'];
$sale_rate=$_POST['sale_rate'];

 $purchase_date= date('Y-m-d');

	$query_search="select * from item_master where item_id='$item_id'";
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
		
 $item_qty= $item_st + $item_stock ;
 
 $query_update="update item_master set  item_stock='$item_qty', purchase_price='$purchase_rate',sale_price='$sale_rate' where item_id='$item_id'";
 mysql_query($query_update) or die("Problem in Update query");
 
$query="insert into purchase_master values('','$purchase_date','$purchase_rate','$sale_rate','$item_id','$item_st')";
@mysql_query($query) or die(" Query for Purchase Master table has problem  "); 

 

echo "<script language=\"javascript\">";
	echo "var question=confirm(\"It's Done ! Data is Stored \");";
	echo "if(question){ window.location = 'item.php'; } else {  window.location = 'item.php';  }";
	echo "</script>";
  
  

?>

