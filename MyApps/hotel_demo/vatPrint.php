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
    
      
<form method="post">
<table class="red-outline"  border="0">
<tr  >
  <td  colspan="7" align="center" ><strong><span class="style1"><?php include('name.php'); ?><br>
         <span class="style3"><?php echo"$comp_add"; ?></span> </strong> <br>
 </td>
</tr>
 <tr class="red-outline" bgcolor="lightblue" align="center"><td><div >Sr.No</div></td><td width="100"><div >Date</div></td><td width=300><div >Inovice Detail </div></td><td width="100"><div>VAT </div></td><td width="100"><div > CST </div></td> <td width=100><div >Total</div></td></tr>
  
		 <?php
include('connect.php');
 session_start();
 $start_d= $_SESSION['rpt_start_date'];
$end_d=$_SESSION['rpt_end_date'];
 	
$query_search="select * from pur_bill_master where inv_date between '$start_d' and '$end_d'  ";
	$result = mysql_query($query_search) or die("Search query for Bill Register is wrong  ");
	$data=NULL;
	$srno=1;

error_reporting(0);
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
	 
	}
 	$count=1;
	$total_bill=0;
	$vat_tot=0;
	$cst_tot=0;
	
 	    foreach($data as $ecol)
		{
 	 	$bill_no=$ecol['pur_bill_id']; 
		$inv_no=$ecol['inv_no'];
  	 	$bill_date= $ecol['inv_date'];
		$total_b=$ecol['total_amount'];
		$vat_amount=$ecol['vat_amount'];
		$cst_amount=$ecol['cst_amount'];
		
		$total_bill=$total_bill + $total_b;
		$j_date=date("d-m-Y" ,strtotime($bill_date));
		$vat_tot= $vat_tot + $vat_amount;
		$cst_tot= $cst_tot + $cst_amount;

		
						   
						             echo" <tr class=success>";
 						                  echo"<td> $count</td>";
										  echo"<td> $j_date</td>";
										  echo"<td> $inv_no </td>";
 										  echo"<td>$vat_amount</td>";
 										  echo"<td>$cst_amount</td>";
 										  echo"<td>$total_b</td>";
  						                echo"</tr>";
			
			$count=$count+1;
			}
			 
			?>  
			<tr class='red-outline' ><td></td><td></td><td>Total</td><td><?PHP echo"$vat_tot"; ?></td><td><?PHP echo"$cst_tot"; ?></td><td> <?PHP echo"$total_bill"; ?></td></tr>
	<tr align=center class='red-outline'  ><td colspan="2"><font size="1"> This is Computerized Bill   </font></td> <td colspan="4"> <font size="3">   </font></td> </tr> 
	  </tbody>
  </table>
     </form> 
					 
							
    </body>
 </html>