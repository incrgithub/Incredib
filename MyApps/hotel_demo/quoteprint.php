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
	$bill_no=  $_SESSION['bill_no'];
	


	$query="select * from quote_master where quote_id='$bill_no' ";
	$results = mysql_query($query) or die("Search query for Bill Table  is wrong  ");
	$datas=NULL;
	

error_reporting(0);
	while ($row = mysql_fetch_array($results)) {   	$datas[] = $row;	}
 	    foreach($datas as $ecol)
		{
 	 	$bill_id=$ecol['quote_id']; 
 	 	$inv_date= $ecol['quote_date'];
		$cust_id= $ecol['cust_id'];
 		 $bill_a = $ecol['bill_amount'];
	     
	 
	     $q="select * from customer_master where cust_id='$cust_id'"; $res=mysql_query($q); $row=mysql_fetch_row($res); $cust_name= $row[1]; $cust_add=$row[2];$cust_mobile=$row[3];$cust_balance=$row[4];
		 
		 $pro_date=date('d-m-Y', strtotime($inv_date));
 		
		}
 ?>


					
         
<form method="post">
<table class="red-outline" >
<tr  >
  <td  colspan="5" align="center" ><strong><span class="style1"><?php include('name.php'); ?><br>
         <span class="style3"><?php echo"$comp_add"; ?></span> </strong> <br>
 </td>
</tr>
 <tr class="red-outline"> <td>Bill No </td> <td width="128"><?php echo"$bill_id"; ?> </td> <td>  </td>  <td > Date </td> <td><?php echo"$pro_date"; ?> </td></tr>
 <tr > <td>Name </td> <td width="128"><?php echo"$cust_name"; ?> </td><td> </td> <td >Address </td> <td  ><?php echo"$cust_add"; ?> </td> </tr>
 

<tr class="red-outline" bgcolor="lightblue" align="center"><td><div >Sr.No</div></td><td><div >Item Descrption </div></td><td><div>Rate </div></td><td><div >Quantity</div></td><td><div >Total</div></td></tr>
		<?php
include('connect.php');
 
 //$customer_name = $_SESSION['mname'];
 	$query_search="select * from temp_quote_master where quote_id='$bill_id' ";
	$result = mysql_query($query_search) or die("Search query for Profit Table  is wrong  ");
	$data=NULL;
	$srno=1;

error_reporting(0);
	while ($row = mysql_fetch_array($result)) 	{  $data[] = $row;	 }
	
	$count=1;
 	$tot= 0;
 	    foreach($data as $ecol)
		{
 	 	$item_id=$ecol['item_id']; 
 	 	$qty= $ecol['quantity'];
		$sale_price= $ecol['sale_price'];
	 
	   $q="select * from item_master where item_id='$item_id'"; $res=mysql_query($q); $row=mysql_fetch_row($res); $item_name= $row[2];    
 		$tot=  $qty * $sale_price ;
		            						  echo" <tr align='center'  >";
						              		  echo"<td> $count </td> ";
									   		  echo"<td>$item_name</td>";
											  echo"<td>$qty</td>";
										      echo"<td>$sale_price</td>";
											 echo"<td>$tot</td>";
						                     echo"</tr>";
 			$tot=0;
			$count=$count+1;
		}
		while($count < 15)
		{
		echo"<tr align=center  hight=20   ><td > .  </td><td >   </td><td >   </td><td >   </td><td>  </td> </tr>";
		$count=$count+1;
		}
		 
echo"<tr align=center class='red-outline'  >";	echo"<td >   </td><td >   </td><td >   </td><td > Bill Amount </td><td>  $bill_a </td>";	echo" </tr>";
			 
			?>                 
				<tr align=center class='red-outline'  ><td colspan="2"><font size="1"> This is Computerized Quotation   </font></td> <td colspan="4"> <font size="3">visit us : www.incredibletechsolve.com   </font></td> </tr>			 
						              </tbody>
						            </table>
                                    
    </form> 
					 
							
    </body>
 </html>