<?php

include('connect.php');
error_reporting(0);

session_start();

$supp_id=$_SESSION['supp_id'];

	$comp_name=$_POST['comp_name'];
	$inv_no=$_POST['inv_number'];
	$inv_date=$_POST['inv_date'];
	$pur_date=$_POST['pay_date'];
	
 
	$item_detail=$_POST['item_detail'];
	
	 
	 
	$total_amt=$_POST['total_amt'];
    $total_vat=$_POST['total_vat'];
	$offer = $_POST['offer'];
	
     $lr_date=$_POST['lr_date'];
	$lr_number=$_POST['lr_number'];
    $transport=$_POST['transport'];
	$godown ="godown";
 	
		$credit="credit";
 		$cash="cash";
		$pt=$_POST['ptype'];
	 
	$inv_date_one=date('Y-m-d', strtotime($inv_date));
	
	$lr_date_one=date('Y-m-d', strtotime($lr_date));
	$pur_date_one=date('Y-m-d');

$query="insert into bill_register values('','$inv_no','$inv_date_one','$pur_date_one','$comp_name','$item_detail','$total_amt','$total_vat','$lr_number','$lr_date_one','$transport','$offer','$supp_id')";
@mysql_query($query) or die(" Query for Bill Register table has problem  "); 

 
  
 
 $query_search="select * from supplier_master where supp_id='$supp_id'";
	$result = mysql_query($query_search) or die("Search query for Supplier Register is wrong  ");
	$data=NULL;	while ($row = mysql_fetch_array($result)) {   	$data[] = $row;		}     foreach($data as $ecol)	{  $supp_balance=$ecol['supp_balance'];  }
	
	$balance=$supp_balance + $total_amt;
		
 	$up_balance="update supplier_master set supp_balance='$balance' where supp_id='$supp_id' ";
 	@mysql_query($up_balance)or die(" Query for update Supplier detail table has problem  "); 
 
 
echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Congradulation ! Data is Stored Successfully  \");";
	echo "if(question){ window.location = 'supplier.php'; } else {  window.location = 'supplier.php';  }";
	echo "</script>";


?>


