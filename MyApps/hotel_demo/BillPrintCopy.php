<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script type="text/javascript">
function confirmPrint() {
    var r = confirm(" बिल जतन केले आहे प्रिंट द्या ");
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
    <body >
<?php
include('connect.php');
error_reporting(0);
session_start();
$t_no=$_GET['id'];
  


//printing code of bill

	$query="select * from bill_master where bill_id='$t_no' ";
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
<tr>  <td  colspan="3" align="center" >  हॉटेल स्वराज्य  </td></tr>

  <tr > <td  colspan="3" align="left"><font size="2"> बिल नं. : <?php echo"$bill_id"; ?>    &nbsp;&nbsp;&nbsp;दिनांक :<?php echo"$pro_date"; ?>   </font></td> </tr>
 <tr > <td colspan="3"align="cen"><font size="2"> टेबल नं. :<?php echo"$t_no"; ?> &nbsp;&nbsp;&nbsp;  </font></td> </tr> 
 
 <tr> <td colspan="4" align="center">---------------------------------------------- </td></tr>
 <tr align="center"> <td align="left" width="150"><font size="2">  पदार्थ  </font></td> <td align="center" width="10" ><font size="2">  नग  </font> </td> <td align="center"  width="10"><font size="2"> दर  </font></td> <td align="center" width="10"><font size="2"> एकूण </font></td> </font></tr>
 <tr> <td colspan="4" align="center">---------------------------------------------- </td></tr>
		<?php
include('connect.php');
 
  	$query_search="select * from sale_master where bill_id='$t_no' ";
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
											  echo"<td align=center><font size=2>$qty</td>";
										      echo"<td align=center><font size=2>$sale_price</td>";
											 echo"<td align=center><font size=2>$tot </td>";
						                     echo"</tr>";
 			$tot=0;
			$count=$count+1;
		}
		 
 			echo"<tr align=center >";echo"<td colspan=3 >एकूण = <font size=3><b> $total_a </b> </font> </td>	  </tr>";
		       
		  $data .= "\x00\x1Bi\x00";
echo"<tr>  <td colspan=4 align=center><font size=1> पुन्हा भेट द्या      </font>  <input type=hidden value=$data >  </td> </tr>";		?>  	
				        
							              </tbody>
						            </table>
     </form> 

</body>
</html>
