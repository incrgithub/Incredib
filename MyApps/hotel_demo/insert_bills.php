<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script type="text/javascript">
function confirmPrint() {
    var r = confirm(" Bill Saved Take a Print ");
     if (r == true) {
		window.print();
 			window.location.href = "dash.php";
    				} 
	 else {
        txt = "You pressed Cancel!";
 			window.location.href = "dash.php";
    }
}

</script>
</head>
    <body onLoad="confirmPrint()">
<?php
include('connect.php');
error_reporting(0);
session_start();
$t_no=$_GET['table'];
  
 $sale_date=date('Y-m-d');
   $z="0";
			   $query_bill="insert into bill_master values('','$sale_date','$t_no','$z')";
				@mysql_query($query_bill) or die(" Query for Bill Master table has problem  ");		
		
  $q="select max(bill_id) from bill_master"; $res=mysql_query($q); $row=mysql_fetch_row($res); $bill_no= $row[0];
	
	 $query_stock="select * from temp_sale_master where bill_id='$t_no'";
	$result_stock = mysql_query($query_stock) or die("Search query for Temp sale Master is wrong  ");
	$data=NULL;
	$total_bill=0;
	$tot=1;
		while ($row = mysql_fetch_array($result_stock))
 			{   	$data[] = $row;		}   
			
			  foreach($data as $ecol)	
			  { 
			   $sale_date=$ecol['sale_date'];  
 			   $item_id=$ecol['item_id']; 
  			   $sale_price=$ecol['sale_price']; 
			   $item_qty=$ecol['quantity']; 
			   
			   $tot=$sale_price * $item_qty;
			   $total_bill=$total_bill + $tot;
			   
			   $query="insert into sale_master values('','$sale_date','$bill_no','$item_id','$sale_price','$item_qty')";
				@mysql_query($query) or die(" Query for Sales Master table has problem  ");
				
				 $query_search="select * from item_master where item_id='$item_id'";
				$result = mysql_query($query_search) or die("Search query for Customer Register is wrong  ");
				$data=NULL;	while ($row = mysql_fetch_array($result)) {   	$data[] = $row;		}     foreach($data as $ecol)	{  $stock=$ecol['item_stock'];  }
				$new_stock=$stock - $item_qty;
		
 			 $up_balance="update item_master set item_stock='$new_stock' where item_id='$item_id' ";
 			@mysql_query($up_balance)or die(" Query for update stock  detail table has problem  "); 

			   }
			
			
 $up_query="update bill_master set total_amount='$total_bill' where bill_id='$bill_no' ";
 @mysql_query($up_query)or die(" Query for update bill detail table has problem  ");    
 
 $deletequery="delete from temp_sale_master where bill_id='$t_no'";
	mysql_query($deletequery) 	or die(mysql_error());	


//printing code of bill

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
  		$total_a = $ecol['total_amount'];
 	 
		 
		 $pro_date=date('d-m-Y', strtotime($inv_date));
 		
		}
 ?>
<form >
 <table  >
<tr> <td colspan="3" align="center" > <img src="images/heads.jpg" /> </td></tr>

 <tr > <td  colspan="3" align="left"><font size="2"> BILL NO : <b><?php echo"$bill_id"; ?> </b> &nbsp;&nbsp; DATE : <b><?php echo"$pro_date"; ?>   </b></font></td> </tr>
 <tr > <td colspan="3"align="left"><font size="2"> TABLE NO : <b><?php echo"$t_no"; ?></b> &nbsp;&nbsp;&nbsp;TIME : <b>
<script type="text/javascript">
 var ss=    new Date().toLocaleTimeString();
document.write("<b>" + ss +"</b>")
</script> </b></font></td> </tr> 
 
 <tr> <td colspan="4" align="center">----------------------------------------- </td></tr>
 <tr align="center"> <td align="left" width="150"><font size="2">  ITEM DESC  </font></td> <td align="center" width="10" ><font size="2"> QTY </font> </td> 
 <td align="center"  width="10"><font size="2"> RATE  </font></td> <td align="center" width="10"><font size="2"> TOTAL </font></td></tr>
 <tr> <td colspan="4" align="center">------------------------------------------ </td></tr>
		<?php
	include('connect.php');
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
		
 	 
 	 
	   $q="select * from item_master where item_id='$item_id'"; $res=mysql_query($q); $row=mysql_fetch_row($res); $item_name= $row[2]; $item_grp_name= $row[1]; 
	   $g="select * from item_group_master where item_group_id='$item_grp_name'"; $res_g=mysql_query($g); $row_g=mysql_fetch_row($res_g); $item_group_name= $row_g[1];    
 		$tot=  $qty * $sale_price ;
		$total_bill=$total_bill + $tot;
		            						  echo" <tr>";
 									   		  echo"<td align=left><font size=2> $item_name </font></td>";
											  echo"<td align=center><font size=2><b> $qty </b></font></td>";
										      echo"<td align=center><font size=2><b>$sale_price</b></font></td>";
											 echo"<td align=center><font size=2><b>$tot </b></font></td>";
						                     echo"</tr>";
 			$tot=0;
			$count=$count+1;
		}
		 
 		  echo"<tr align=center >";echo"<td colspan=3 ><font size=2> TOTAL = <b> $total_a </b> </font> </td>	  </tr>";
		  
		  $data .= "\x00\x1Bi\x00";
		  echo"<tr>  <td colspan=4 align=center><font size=1> THANK YOU ! VISIT AGAIN     </font>  <input type=hidden value=$data >  </td> </tr>";		?>  	
				        
							              </tbody>
						            </table>
     </form> 
</body>
</html>
