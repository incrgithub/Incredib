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
 </head>
    <body onLoad="window.print()">
    
                     
<?php

 include('connect.php');
  	 session_start();
	$bill_no=  $_GET['id'];
	


	$query="select * from pur_bill_master where pur_bill_id='$bill_no' ";
	$results = mysql_query($query) or die("Search query for Bill Table  is wrong  ");
	$datas=NULL;
	

error_reporting(0);
	while ($row = mysql_fetch_array($results)) {   	$datas[] = $row;	}
 	    foreach($datas as $ecol)
		{
 	 	$bill_id=$ecol['pur_bill_id']; 
		$inv_no=$ecol['inv_no'];
 	 	$inv_date= $ecol['inv_date'];
		$supp_id= $ecol['supp_id'];
 		 $vat_per = $ecol['vat_per'];
	     $vat_amount = $ecol['vat_amount'];
		  $cst_per = $ecol['cst_per'];
	     $cst_amount = $ecol['cst_amount'];
		  $total_a = $ecol['total_amount'];
		  
 
	 
	     $q="select * from supplier_master where supp_id='$supp_id'"; 
		 $res=mysql_query($q); $row=mysql_fetch_row($res); $supp_name= $row[1]; $supp_add=$row[2];$cust_mobile=$row[3];
		 
		 $pro_date=date('d-m-Y', strtotime($inv_date));
 		
		}
 ?>


					
         
<form method="post">
<table class="red-outline"  border="0">
<tr  >
  <td  colspan="5" align="center" ><strong><span class="style1"><?php include('name.php'); ?><br>
         <span class="style3"><?php echo"$comp_add"; ?></span> </strong> <br>
 </td>
</tr>
 <tr class="red-outline" height="30"> <td>Supplier  </td> <td width="128"><?php echo"$supp_name"; ?> </td> <td> </td> <td > Address </td> <td> <?php echo"$supp_add"; ?> </td></tr>
 <tr class="red-outline" height="30"> <td>Inovice No </td> <td width="128"><?php echo"$inv_no"; ?> </td> <td>  </td>  <td > Date </td> <td><?php echo"$pro_date"; ?> </td></tr>
<tr class="red-outline" bgcolor="lightblue" align="center"><td><div >Sr.No</div></td><td width=300><div >Description of Goods </div></td><td><div>Quantity </div></td><td><div >Rate</div></td><td><div >Disc %</div></td><td width=100><div >Total</div></td></tr>
		<?php
include('connect.php');
 
 //$customer_name = $_SESSION['mname'];
 	$query_search="select * from temp_pur_bill_master where pur_bill_id='$bill_no' ";
	$result = mysql_query($query_search) or die("Search Query for TEMP PUR BILL MASTER Table  is wrong  ");
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
 	 	$qty= $ecol['pur_quantity'];
		$first_price= $ecol['first_price'];
		$disc_percent= $ecol['disc_percent'];
		$purchase_price= $ecol['purchase_price'];
	  
	   $q="select * from item_master where item_id='$item_id'"; $res=mysql_query($q); $row=mysql_fetch_row($res); $item_name= $row[2];$item_grp_id= $row[1]; 
	   $g="select * from item_group_master where item_group_id='$item_grp_id'"; $res_g=mysql_query($g); $row_g=mysql_fetch_row($res_g); $item_grp_name= $row_g[1];    
 		$tot=  $qty * $purchase_price ;
		            						  echo" <tr align='center'  >";
						              		  echo"<td> $count </td> ";
									   		  echo"<td align=left> $item_grp_name $item_name</td>";
											  echo"<td>$qty</td>";
										      echo"<td>$first_price</td>";
										      echo"<td>$disc_percent</td>";
											 echo"<td>$tot</td>";
						                     echo"</tr>";
 			$total_bill=$total_bill + $tot;
			$count=$count+1;
		}
		while($count < 20)
		{
		echo"<tr align=center height=15 ><td>  </td><td >   </td><td >   </td><td >   </td><td>  </td> </tr>";
		$count=$count+1;
		}
		 
			echo"<tr align=center class='red-outline'  >";		echo"<td >   </td><td >   </td><td >   </td><td >   </td><td > Total </td><td>  $total_bill </td>";	echo" </tr>";
			echo"<tr align=center >";		echo"<td >   </td><td >   </td><td >   </td><td >   </td><td > CST $cst_per % </td><td> $cst_amount  </td>";	echo" </tr>";
			echo"<tr align=center class='red-outline'>";echo"<td >   </td><td >   </td><td >   </td><td > </td><td > VAT $vat_per % </td><td> $vat_amount  </td>";	echo" </tr>";
			echo"<tr align=center class='' >";		echo"<td >   </td><td >   </td><td >   </td><td >   </td><td > Total </td><td> $total_a   </td>";	echo" </tr>";
			?>                
	<tr align=center class='red-outline'  ><td colspan="2"><font size="1"> This is Computerized Bill   </font></td> <td colspan="4"> <font size="3">   </font></td> </tr>			 
 
						              </tbody>
  </table>
                                    
    </form> 
					 
							
    </body>
 </html>