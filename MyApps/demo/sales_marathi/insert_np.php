<?php

include('connect.php');
	$cust_name=$_POST['cust_name'];
	
 	
	$mobile=$_POST['mobile_no'];
	 
	$balance=0;
  
	$np_i_date=date('Y-m-d');

			$next_due = date("Y-m-d",strtotime("+1 years"));


$query="insert into np_log values('','$cust_name','$mobile','$np_i_date','$next_due')";
@mysql_query($query) or die(" Query for Customer Master   table has problem  "); 

 

echo "<script language=\"javascript\">";
	echo "var question=confirm(\" Congradulation ! Data is Stored successfully  \");";
	echo "if(question){ window.location = 'new_np.php'; } else {  window.location = 'new_np.php';  }";
	echo "</script>";


?>


