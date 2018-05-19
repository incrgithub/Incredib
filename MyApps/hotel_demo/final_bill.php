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

function calVat()
{
var netTotal=document.myform.netTotal.value;
var vat_per=document.myform.vat_per.value;
var vat_amt= netTotal*vat_per/100;

document.myform.vat.value=vat_amt;
 var total_bill=  (  (netTotal * -1) + ( vat_amt * -1) ) * -1 ;
document.myform.netAmount.value=total_bill;
}


function calTotal()
{
var netTotal=document.myform.netAmount.value;
var disscount=document.myform.disscount.value;
var ans=netTotal - disscount ;
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
                             </div>
							<?php
include('connect.php');
session_start();
 $p_no=$_SESSION['cust_id'];
 $bill_no=$_SESSION['bill_no'];
  $query_search="select * from customer_master where cust_id='$p_no'";
	$result = mysql_query($query_search) or die("Search query for Customer Register is wrong  ");
	$data=NULL;
	$srno=1;

error_reporting(0);
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
 	}
  	    foreach($data as $ecol)
		{
 	    $cust_id= $ecol['cust_id'];
  	 	$cust_name= $ecol['cust_name'];
		$cust_add= $ecol['cust_add'];
		$cust_mobile=$ecol['cust_mobile'];
		$cust_balance=$ecol['cust_balance'];
		$_SESSION['cust_id']=$ecol['cust_id'];
		}
  	
  		?>
	
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <div id="rootwizard">
                                        <div class="navbar">
                                          </div>
                                         <div class="">
                           				<form class="form-horizontal" name="myform" method="post" action="insert_bills.php" >
										  <fieldset>
										 <div class="control-group">
      									 <label class="control-label" for="typeahead"> Bill No </label>
                                          <div class="controls">
 									<span class="input-small uneditable-input"><?php echo "$bill_no"; $_SESSION['bill_no']=$bill_no; ?> </span>
										 Name
										  <span class="input-large uneditable-input"><?php echo" $cust_name" ?> </span>
										 Address
										   <span class="input-large uneditable-input"><?php echo" $cust_add" ?> </span>
                                          </div>
                                          </div>
                                       
 								<div class="block-content collapse in">
                                <div class="span12">
                                            <table class="table">
						              <thead>
						                <tr>
						                  <th>Sr.No</th>
						                  <th>Item Description </th>
						                  <th>Quantity</th>
						                  <th>Rate</th>
										  <th>Disc %</th>
										  <th>Total</th>
						                </tr>
						              </thead>
						              <tbody>
									  
						               <?php
include('connect.php');
 
$bill_no=$_SESSION['bill_no'];
 
	$query_search="select * from temp_sale_master as sm where sm.bill_id = '$bill_no' ";
	$result = mysql_query($query_search) or die("Search query for Bill Register is wrong  ");
	$data=NULL;
	$srno=1;

error_reporting(0);
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
	 
	}
	
	$count=1;
	$gtotal=0;
 	    foreach($data as $ecol)
		{
		
	 	$pr_no=$ecol['pr_id']; 
 	 	$item_id= $ecol['item_id'];
		$sale_id=$ecol['sale_id'];
   $q="select * from item_master where item_id='$item_id'"; $res=mysql_query($q); $row=mysql_fetch_row($res); $item_name= $row[2];  
	 	
		$price=$ecol['price'];
		$sale_price=$ecol['sale_price'];
		$disc_per=$ecol['disc_per'];

		
		$qty=$ecol['quantity'];
		$total= ($sale_price * $qty);
		$gtotal= $gtotal + $total;
		 if($count%2==0)
		 {
						             echo" <tr class=success>";
 						                echo"<td> $count</td>";
										  echo"<td>$item_name </td>";
 										   echo"<td>$qty</td>";
										 echo"<td>$price</td>";
										 echo"<td>$disc_per</td>";
 										  echo"<td>$total </td>";
   						                echo"</tr>";
			}
			else
			{
			                         echo" <tr class=error>";
 						                 echo"<td> $count</td>";
										  echo"<td>$item_name </td>";
 										   echo"<td>$qty</td>";
										 echo"<td>$price</td>";
										 echo"<td>$disc_per</td>";
 										  echo"<td>$total </td>";
  						                echo"</tr>";
			}			
			$count=$count+1;
			}
			?>                			  <tr>
						                  <td></td>
						                  <td></td>
						                  <td></td>
						                  <td></td>
						                  <td>Total </td>
										  <td><input type="text" name="netTotal" value="<?php echo"$gtotal"; ?>" readonly class="input-mini" ></td>
										  </tr>
										  <tr>
						                  <td></td>
						                  <td></td>
						                  <td></td>
						                  <td> </td>
						                 <td> VAT    <input type="text" class="input-mini" name="vat_per" onChange="calVat()"  tabindex="1" > %</td>
										  <td>  <input type="text" name="vat" class="input-mini"     ></td>
										  </tr>
										    <tr>
						                  <td></td>
						                  <td></td>
						                  <td></td>
						                  <td></td>
						                  <td>NET Amount</td>
										  <td><input type="text" name="netAmount"   class="input-mini" ></td>
										  </tr>
 										  <tr>
						                  <td></td>
						                  <td></td>
						                  <td></td>
						                  <td></td>
						                  <td>Paid Amount </td>
										  <td><input type="text" name="disscount" class="input-mini" tabindex="2"  required onChange="calTotal()"> </td>
										  </tr>
										  
										  <tr>
						                  <td></td>
						                  <td></td>
						                  <td></td>
						                  <td></td>
						                  <td>Due Amount</td>
										  <td><input type="text" name="gTotal" class="input-mini"   readonly ></td>
										  </tr>
									    <tr>
						                  <td></td>
						                  <td></td>
						                  <td></td>
						                  <td></td>
						                  <td>Warranty Detail</td>
										  <td><input type="text" name="van_number"  class="input-medium"  tabindex="3"  required ></td>
										  </tr>
									  
									  <tr>
						                  <td></td>
						                  <td></td>
						                  <td></td>
						                  <td></td>
						                  <td></td>
 										  <td> <button type="submit"  name="save" class="btn btn-info" tabindex="4"  > Save </button> </td>
										  </tr>
						              </tbody>
						            </table>
                                          </div>
                                          </div>
 								  </fieldset>
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