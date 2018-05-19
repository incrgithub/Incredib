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
	     $vat_per = $ecol['vat_per'];
		  $total_a = $ecol['total_amount'];
		  $vat_amount = $ecol['vat_amount'];
		  $bill_type = $ecol['bill_type'];
	     $q="select * from customer_master where cust_id='$cust_id'"; $res=mysql_query($q); $row=mysql_fetch_row($res); $cust_name= $row[1]; $cust_add=$row[2];$cust_mobile=$row[3];$cust_balance=$row[4];
		 
		 $pro_date=date('d-m-Y', strtotime($inv_date));
 		
		}

 ?>
<form method="post">
<table BORDER=1 CELLPADDING=3 CELLSPACING=1 
    RULES=COLS FRAME=BOX >
<tr>
  <td  colspan="7" align="center" ><strong><span class="style1"><?php include('name.php'); ?><br>
         <span class="style3"><?php echo"$comp_add"; ?></span> </strong> <br>
 </td>
</tr>
  <tr  class="red-outline"> <td   >M/s:- </td> <td width="128"><?php echo"$cust_name"; ?> </td>  <td colspan="3" >Inovice </td> <td  colspan="2" ><?php echo"$bill_id"; ?> </td> </tr>
 <tr  > <td >  </td> <td width="128"><?php echo"$cust_add"; ?> </td>    <td colspan="3"> Date </td> <td colspan="2"><?php echo"$pro_date"; ?> </td></tr>
 <tr  bgcolor="lightblue" align="center"><td><div >S/N</div></td><td width=325><div >Description of Goods </div></td><td width="25"><div>VAT %</div></td><td width="75"><div>Quantity </div></td><td width="100"><div >Rate</div></td><td width="25"><div>Disc % </div></td> <td width=125><div >Total</div></td></tr>
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
		
 		$vat_percent= $ecol['vat_amt'];
		$disc_percent= $ecol['disc_amt'];
 	 
	   $q="select * from item_master where item_id='$item_id'"; $res=mysql_query($q); $row=mysql_fetch_row($res); $item_name= $row[2]; $item_grp_name= $row[1]; 
	   $g="select * from item_group_master where item_group_id='$item_grp_name'"; $res_g=mysql_query($g); $row_g=mysql_fetch_row($res_g); $item_group_name= $row_g[1];    
 		$tot=  $qty * $sale_price ;
		$total_bill=$total_bill + $tot;
		            						  echo" <tr align='center'  >";
						              		  echo"<td > $count </td> ";
									   		  echo"<td align='left'> $item_name</td>";
											  echo"<td>$vat_percent</td>";
											  echo"<td>$qty</td>";
										      echo"<td>$sale_price</td>";
										      echo"<td>$disc_percent</td>";
 											 echo"<td>$tot </td>";
						                     echo"</tr>";
 			$tot=0;
		
			$count=$count+1;
		
		if($count==40){	
		 
			echo"<tr align=center class='red-outline'  > </tr>	";
			echo"<tr align=center   > </tr>	";	
			echo"<tr align=center class='red-outline'  ></tr>	";
				}
				
	if($count==79){	
		 
			echo"<tr align=center class='red-outline'  >  </tr>	";
			echo"<tr align=center   >  </tr>	";
			echo"<tr align=center class='red-outline'  > </tr>	";
				}
	
		}
		while($count < 40)
		{
		echo"<tr align=center height=15 ><td>  </td><td >   </td><td >   </td><td >   </td><td>  </td><td>  </td><td>  </td> </tr>";
		$count=$count+1;
		}
		 
			echo"<tr align=center   >";		echo"<td ></td> <td ></td><td ></td><td ></td> <td align=center class=red-outline  > Total </td><td colspan=2 align=center class=red-outline>  $bill_a </td>";	echo" </tr>";
			echo"<tr align=center >";		echo"<td >   </td><td ></td><td ></td><td ></td>  <td > VAT $vat_per % </td><td colspan=2>  $vat_amount  </td>";	echo" </tr>";
			echo"<tr align=center  >";echo"<td ></td><td ></td><td ></td> <td></td> <td  class=red-outline> Total </td><td colspan=2 class=red-outline > $total_a   </td>";	echo" </tr>";
			?>                 
				
		
				<tr align=center class='red-outline'  ><td colspan="2"> 
				 SALE TAX DETAILS <br>
				 VAT TIN NO : <?php echo"$vat_no";?> <br><br>
				</td> <td colspan="5"> Authorised Signatory <br><br></td> </tr><tr> <td colspan="7"> <font size="2"> DECLARATION </font> <br> <font size="1">I/We here by certify that my/our registration under the maharashtra value added tax Act 2002 is in force on the date on which the sale of the goods specified in this tax invoice is made by me/us and that transaction of sale covered by this tax invoice has been effected by me/us and it shall be accounted for in the turnover sales while filling of return and the due tax, if any payable on the sale has been or shal be paid Subject to <?PHP echo"$comp_add";?> jurisdiction </font>
				
 						              </tbody>
						            </table>     </form> 
					 
							
    </body>
 </html>