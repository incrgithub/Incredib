<!DOCTYPE html>
<html>
    
    <head>
<title> <?php include('title.php'); ?> </title>
        <!-- Bootstrap -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body onLoad="window.print()">
      
										 
										  <table border="1">
			 <tr bgcolor="lightblue"><td><div align="center">Sr.</div></td><td><div align="center">Date</div></td><td><div align="center">Inovice No</div></td><td><div align="center">Company </div></td><td><div align="center">Item Detail</div></td><td><div align="center">5% Amount</div></td><td><div align="center">5% VAT </div></td><td><div align="center">12.5% Amount</div></td><td><div align="center">12.5% VAT</div></td><td><div align="center">Total Amount</div></td><td><div align="center">Total VAT</div></td></tr>
		<?php
include('connect.php');
 
 //$customer_name = $_SESSION['mname'];

	$query_search="select * from bill_register";
	$result = mysql_query($query_search) or die("Search query for Bill Register is wrong  ");
	$data=NULL;
	$srno=1;

error_reporting(0);
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
	 
	}
	if(!$data)
	{
	echo "<script language=\"javascript\">";
	echo "confirm( \" Sorry ! Data Not Found \"); window.location = 'purchase.php'; ";

		echo "</script>";
	}	
	$count=1;
	$total_fi_amount=0;
	$total_fi_vat=0;
	
	$total_tw_amount=0;
	$total_tw_vat=0;
	
	$total_amount=0;
	$total_vat_amount=0;
 	    foreach($data as $ecol)
		{
		
	 	$inv_no=$ecol['inv_number']; 
 	 	$inv_date= $ecol['inv_date'];
		$item_detail= $ecol['inv_item'];
	 	$inv_company= $ecol['inv_company'];
	  	$amt_fi=$ecol['amount_fi'];
		$vat_fi=$ecol['vat_fi'];
		$amt_tw=$ecol['amount_tw'];
		$vat_tw=$ecol['vat_tw'];
		$total_amt=$ecol['total_amount'];
		$total_vat=$ecol['total_vat'];
		$offer=$eco['offer'];	
		 
		 $inv_date_one=date('d-m-Y', strtotime($inv_date));
		 
		 $total_fi_amount= $total_fi_amount + $amt_fi;
		 $total_fi_vat= $total_fi_vat + $vat_fi;
		 
		 $total_tw_amount= $total_tw_amount + $amt_tw;
		 $total_tw_vat= $total_tw_vat + $vat_tw;
		 
		 $total_amount= $total_amount + $total_amt;
		 
		 $total_vat_amount= $total_vat_amount + $total_vat; 
		  
		  
		 if($count%2==0)
		 {
						   
						             echo"   <tr bgcolor=lightgreen align=center>";
						               echo"<td> $count </td> ";
									   	  echo"<td>$inv_date_one</td>";
						                echo"<td> $inv_no </td>";
						                  echo"<td> $inv_company</td>";
										  echo"<td> $item_detail</td>";
						                  echo"<td>$amt_fi</td>";
										   echo"<td>$vat_fi</td>";
										    echo"<td>$amt_tw</td>";
										   echo"<td>$vat_tw</td>";
										   echo"<td>$total_amt</td>";
										      echo"<td >$total_vat</td>";
											  
						                echo"</tr>";
			}
			else
			{
			    echo" <tr class='error' align=center>";
						                 echo"<td> $count </td> ";
									   	  echo"<td>$inv_date_one</td>";
						                echo"<td> $inv_no </td>";
						                  echo"<td> $inv_company</td>";
										  echo"<td> $item_detail</td>"; 
						                  echo"<td>$amt_fi</td>";
										   echo"<td>$vat_fi</td>";
										    echo"<td>$amt_tw</td>";
										   echo"<td>$vat_tw</td>";
										   echo"<td>$total_amt</td>";
										      echo"<td>$total_vat</td>";
						                echo"</tr>";
			
			
			}			
			$count=$count+1;
			}
			echo"<tr align=center>";
	 
		echo"<td colspan=5> Total </td><td> $total_fi_amount </td><td>$total_fi_vat </td><td> $total_tw_amount </td><td>$total_tw_vat </td><td> $total_amount </td><td>$total_vat_amount </td>";
		
 
		
		echo" </tr>";
			?>                 
						              </tbody>
						            </table>
                      
    </body>

</html>