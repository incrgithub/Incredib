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
        <title>Customer Quotation</title>
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
var menurate=document.myform.sale_price.value;
var qty=document.myform.quantity.value;
var ans=menurate*qty;
document.myform.total.value=ans;
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
                                <div class="pull-left"><h4>  Quotation Detail  </h4></div>
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
                           				<form class="form-horizontal" name="myform" method="post" action="insert_quote.php" >
										  <fieldset>
										 <div class="control-group">
      									 <label class="control-label" for="typeahead"> Bill No </label>
                                          <div class="controls">
 									<span class="input-small uneditable-input"><?php echo "$bill_no"; $_SESSION['bill_no']=$bill_no; ?> </span>
										 Name
										  <span class="input-large uneditable-input"><?php echo" $cust_name" ?> </span>
                                          </div>
                                          </div>
                                       
										
										   <div class="control-group">
                                           <div class="controls">
                                             <table border="0">
			 <tr>
			 
			<td><div align="center">Main group</div></td><td><div align="center">Item Detail </div></td><td><div align="center">Price</div></td><td><div id="quantity" align="center">Quantity</div></td><td><div id="quantity" align="center">Total</div></td></tr>
		<tr align="center">
		 <td>  <select id="group_id" name="group_id" tabindex="1" onChange="getState(this.value)" >
		 <option value="null">Select Group</option>
<?php $sql_g="SELECT item_group_id,item_group_name FROM item_group_master ORDER BY item_group_name"; $result_g =mysql_query($sql_g); while ($data_g=mysql_fetch_assoc($result_g)){?>
		   <option value ="<?php echo $data_g['item_group_id'] ?>" ><?php echo $data_g['item_group_name'] ?></option>  <?php } ?>  </select>
		   </td>
		
		  <td>  <select id="item_id" name="item_id" tabindex="2" onChange="getPrice('find_ccode.php?country='+this.value)" >
		   
		   <option value="null"> select Item </option>     </select></td>
		   
		  <td>	<input type="text" name="sale_price" id="sale_price"   class="input-mini"  >	</td>
		 <td><input name="quantity" type="text" class="input-mini" tabindex="4" required onChange="calTotal()" /></td>
		  <td><input name="total"   type="text" class="input-small"  required /></td>
		  <td>  </td>
		  <td>  <button type="submit"  name="save" class="btn btn-info" tabindex="13">Add To Bill</button></td>
		  </tr>
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
         <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Quote Detail</div>
		 						<div class="pull-right"><a href="final_quote.php">Make it Final</a></div>
                             </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table class="table">
						              <thead>
						                <tr>
						                  <th>Sr.No</th>
						                  <th>Item Description </th>
						                  <th>Quantity</th>
						                  <th>Unit Price</th>
										  <th>Total</th>
						                </tr>
						              </thead>
						              <tbody>
									  
						               <?php
include('connect.php');
 
$bill_no=$_SESSION['bill_no'];
 
	$query_search="select q_id,item_id,sale_price,quantity from temp_quote_master as sm where sm.quote_id = '$bill_no' ";
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
		$sale_id=$ecol['q_id'];
   $q="select * from item_master where item_id='$item_id'"; $res=mysql_query($q); $row=mysql_fetch_row($res); $item_name= $row[2];  
	 	
		$sale_price=$ecol['sale_price'];
		
		$qty=$ecol['quantity'];
		$total= ($sale_price * $qty);
		$gtotal= $gtotal + $total;
		 if($count%2==0)
		 {
						   
						             echo" <tr class=success>";
 						                  echo"<td> $count</td>";
										  echo"<td>$item_name </td>";
 										   echo"<td>$qty</td>";
										 echo"<td>$sale_price</td>";
										  echo"<td>$total </td>";
							   echo" <td><a href=del_sale.php?id=$sale_id> <img src='images/cl.gif'> </a></td> "; 
  						                echo"</tr>";
			}
			else
			{
			                         echo" <tr class=error>";
 						                  echo"<td> $count</td>";
										  echo"<td>$item_name </td>";
 										   echo"<td>$qty</td>";
										 echo"<td>$sale_price</td>";
										  echo"<td>$total </td>";
							   echo" <td><a href=del_sale.php?id=$sale_id> <img src='images/cl.gif'>  </a></td> "; 
 						                echo"</tr>";
			}			
			$count=$count+1;
			}
			?>                 <tr class="warning">
						                  <td></td>
						                  <td></td>
						                  <td></td>
						                  <td>Net Bill Amout</td>
										  <td><?php echo"$gtotal"; ?></td>
										  <td></td>
						                </tr>
						              </tbody>
						            </table>
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