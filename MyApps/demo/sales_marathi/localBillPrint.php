<html>
     <head>
        <title>Bill</title>
		<style type="text/css">
        .red-outline {
  outline: 1px solid;
}
.style1 {font-size: 24px}
        .style2 {font-size: 18px}
        .style3 {font-size: 16px}
        .style5 {font-size: 16px; font-weight: bold; }
        </style>
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script language="JavaScript" type="text/javascript">
  		function OpenNewWindow(MyPath)
	     {
			window.open(MyPath,"","toolbar=no,status=no,menubar=no,location=center,scrollbars=no,resizable=no,height=475,width=510");
	      }
   </script>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 </head>
    <body onLoad="window.print()">
    
                     
<?php

 include('connect.php');
  	 session_start();
	$bill_no=  $_SESSION['bill_no'];
	


	$query="select * from bill_master where bill_id='$bill_no' ";
	$results = mysql_query($query) or die("Search query for Bill Table  is wrong  ");
	$datas=NULL;
	

error_reporting(0);
	while ($row = mysql_fetch_array($results)) {   	$datas[] = $row;	}
 	    foreach($datas as $ecol)
		{
 	 	$bill_id=$ecol['bill_id']; 
 	 	$inv_date= $ecol['bill_date'];
		$cust_id= $ecol['cust_id'];
 		 $bill_a = $ecol['bill_amount'];
 		  $total_a = $ecol['total_amount'];
 	 
	     $q="select * from customer_master where cust_id='$cust_id'"; $res=mysql_query($q); $row=mysql_fetch_row($res); $cust_name= $row[1]; $cust_add=$row[2];$cust_mobile=$row[3];$cust_balance=$row[4];
		 
		 $pro_date=date('d-m-Y', strtotime($inv_date));
 		
		}
 ?>
<form method="post">
<table BORDER=1 CELLPADDING=3 CELLSPACING=1  RULES=COLS FRAME=BOX>
<tr>
  <td  colspan="6" align="center" >  डीलेवरी चलन  <br> </td>
</tr>
 <tr class="red-outline"  > <td >मे/स  </td> <td width="128"><?php echo"$cust_name"; ?> </td>    <td > दिनांक  </td> <td colspan="3"><?php echo"$pro_date"; ?> </td></tr>
 <tr > <td   >  </td> <td width="128"><?php echo"$cust_add"; ?> </td>  <td >डी.नं. </td> <td  colspan="3" ><?php echo"$bill_id"; ?> </td> </tr>
 <tr class="red-outline" bgcolor="lightblue" align="center"><td><div >अ.न.</div></td><td width=325><div >मालाचा तपशील  </div></td><td width="75"><div>नग </div></td><td width="100"><div >दर </div></td> <td width=125><div >एकूण </div></td></tr>
		<?php
include('connect.php');
 
 //$customer_name = $_SESSION['mname'];
 	$query_search="select * from sale_master where bill_id='$bill_id' ";
	$result = mysql_query($query_search) or die("Search query for Profit Table  is wrong  ");
	$data=NULL;
	$srno=1;

error_reporting(0);
	while ($row = mysql_fetch_array($result)) 	{  $data[] = $row;	 }
	
	$count=1;
 	$tot= 0;
	$total_bill=0;
 	    foreach($data as $ecol)
		{
 	 	$item_id=$ecol['item_id']; 
 	 	$qty= $ecol['quantity'];
		$sale_price= $ecol['sale_price'];
		
 		$first_price= $ecol['price'];
		$disc_percent= $ecol['disc_per'];
 	 
	   $q="select * from item_master where item_id='$item_id'"; $res=mysql_query($q); $row=mysql_fetch_row($res); $item_name= $row[2]; $item_grp_name= $row[1]; 
	   $g="select * from item_group_master where item_group_id='$item_grp_name'"; $res_g=mysql_query($g); $row_g=mysql_fetch_row($res_g); $item_group_name= $row_g[1];    
 		$tot=  $qty * $sale_price ;
		$total_bill=$total_bill + $tot;
		            						  echo" <tr align='center'  >";
						              		  echo"<td > $count </td> ";
									   		  echo"<td align='left'> $item_name</td>";
											  echo"<td>$qty</td>";
										      echo"<td>$sale_price</td>";
 											 echo"<td>$tot </td>";
						                     echo"</tr>";
 			$tot=0;
		
			$count=$count+1;
		
		
		}
		 
			 
			echo"<tr align=center class=red-outline >";echo"<td ></td> <td></td> <td colspan=2> एकूण  </td><td> $total_a   </td>";	echo" </tr>";
			?>                 
				
		
			 
				 
				
 						              </tbody>
						            </table>
     </form> 
					 
							
    </body>
 </html>