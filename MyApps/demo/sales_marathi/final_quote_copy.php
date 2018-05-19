<?php
include('connect.php');
session_start();
if (!isset($_SESSION['member_id'])){
header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Customer Billing Detail </title>
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
		<script >
function getXMLHTTP() { 
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
	}
	
	
	
function getPrice(strURL)
{		

	var req = getXMLHTTP();		
	if (req) 
	{
		//function to be called when state is changed
		req.onreadystatechange = function()
		{
			//when state is completed i.e 4
			if (req.readyState == 4) 
			{			
				// only if http status is "OK"
				if (req.status == 200)
				{			
					document.getElementById('sale_price').value=req.responseText;						
				} 
				else 
				{
					alert("There was a problem while using XMLHTTP:\n" + req.statusText);
				}
			}				
		 }			
		 req.open("GET", strURL, true);
		 req.send(null);
	}		
}
		function getState(countryId) {		
		
		var strURL="find_item.php?group="+countryId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('item_id').innerHTML=req.responseText;
											
					} else {
						alert("Problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}

function calTotal()
{
var netTotal=document.myform.netTotal.value;
var disscount=document.myform.disscount.value;
var ans=netTotal - disscount;
document.myform.gTotal.value=ans;
}

function OpenNewWindow(MyPath)
	     {
			window.open(MyPath,"","toolbar=no,status=no,menubar=no,location=center,scrollbars=no,resizable=no,height=650,width=750");
	      }


function noBack(){ window.history.forward(); }

 </script>
        <style type="text/css">
<!--
.style1 {font-size: 14px}
-->
        </style>
</head>
    
    <body>
       <?php include("header.php");?>
        <div class="container-fluid">
            <div class="row-fluid">
              <?php include("slidebar.php");?>
                <div class="span9" id="content" >
                      <!-- morris stacked chart -->
               
                    <div class="row-fluid">
                                         <div class="row-fluid" >
                        <!-- block -->
						
 <div class="row-fluid section">
                         <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="pull-left"><h4>  Customer Bill Detail  </h4></div>
								  <div class="pull-right"><h4> <a href="billing.php"> Final  </a>   </h4></div>
                             </div>
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
	      
 	 
	     $q="select * from customer_master where cust_id='$cust_id'"; $res=mysql_query($q); $row=mysql_fetch_row($res); $cust_name= $row[1]; $cust_add=$row[2];$cust_mobile=$row[3];
		 
		 $pro_date=date('d-m-Y', strtotime($inv_date));
 		
		}
 ?>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <div id="rootwizard">
                                        <div class="navbar">
                                          </div>
                                         <div class="">
             <form class="form-horizontal" name="myform" method="post" >
			  <button type="submit"  name="save" class="btn btn-info pull-right " tabindex="1" onClick="OpenNewWindow('quoteprint.php')" > Print </button> 
										 <table class="table" >
										 
<tr class="red-outline"> <td>Bill No </td> <td width="128"><?php echo"$bill_id"; ?> </td> <td>  </td>  <td > Date </td> <td><?php echo"$pro_date"; ?> </td></tr>
 <tr > <td>Name </td> <td width="128"><?php echo"$cust_name"; ?> </td><td> </td> <td >Address </td> <td  ><?php echo"$cust_add"; ?> </td> </tr>

<tr class="red-outline" bgcolor="lightblue" align="center"><td><div >Sr.No</div></td><td><div >Item Descrption </div></td><td><div>Rate </div></td><td><div >Quantity</div></td><td><div >Total</div></td></tr>
		<?php
include('connect.php');
 
 //$customer_name = $_SESSION['mname'];

 
	$query_search="select * from temp_quote_master where quote_id='$bill_id' ";
	$result = mysql_query($query_search) or die("Search query for temp quote master Table  is wrong  ");
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
		
		 
			echo"<tr align=center class='red-outline'><td >   </td><td >   </td><td >   </td><td > Bill Amount </td><td>  $bill_a </td></tr>";
 			?>                 
						              </tbody>
						            </table>
									  </form>
                                      </div>
									  </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
         
            <hr>
             <?php include("footer.php");?>
        </div>
        <!--/.fluid-container-->
         <?php include("footer_information.php");?>
    </body>

</html>