<?php

include('connect.php');
session_start();

	$cust_id=$_SESSION['cust_id'];
	$pay_id=$_SESSION['pay_id'];
	
	$due_amount=$_POST['due_amount'];
  	$extra=$_POST['extra_note'];
	$jb_date=$_POST['pay_date'];
	
	$pdate=date('Y-m-d', strtotime($jb_date));
	
	$query_search="select * from all_tran where tran_id = '$pay_id'";
	$result = mysql_query($query_search) or die("Search query for All Tran table   is wrong  ");
	$data=NULL;
 
 	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
 	}
	 
  	    foreach($data as $ecol)
		{
 	 	$cust_id=$ecol['acc_id']; 
 	 	$old_pay_date= $ecol['tran_date'];
		$old_pay_amount= $ecol['dr_amount'];
	 	$old_extra_note= $ecol['extra_note'];
		
	  $query_i="select * from supplier_master where supp_id='$cust_id' ";
	  $rs = mysql_query($query_i);   while ($row_data = mysql_fetch_array($rs)){$i_data[] = $row_data;}  foreach($i_data as $ecol) {$old_due=$ecol['supp_balance']; }
  		}
	
	$new_balance=$old_due + $old_pay_amount;
	
	$update="update supplier_master set supp_balance='$new_balance' where supp_id='$cust_id'";
  	@mysql_query($update) or die(" Query for Supplier Balance Master Table has problem  "); 
  
  	
	$balance=$new_balance - $due_amount;
 
 
  $update="update supplier_master set supp_balance='$balance' where supp_id='$cust_id'";
  @mysql_query($update) or die(" Query for Customer Balance Master Table has problem  "); 

	$update="update all_tran set tran_date='$pdate',dr_amount='$due_amount',extra_note='$extra' where tran_id='$pay_id'";
  	@mysql_query($update) or die(" Query for All tran register  Table has problem  "); 
  
 
echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Congradulation ! Data is Stored successfully  \");";
	echo "if(question){ window.location = 'supp_edit_detail.php?id=$cust_id'; } else {  window.location = 'supp_edit_detail.php?id=$cust_id';  }";
	echo "</script>";


?>


