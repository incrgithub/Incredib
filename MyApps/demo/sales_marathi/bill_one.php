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
var menurate= document.myform.sale_price.value;
var qty= document.myform.quantity.value;
var diss= document.myform.disscount.value;
var vat_per= document.myform.vat.value;

var uprice= menurate-(menurate*diss/100);

var vprice= uprice + (uprice*vat_per/100);

 
var ftot=vprice*qty;
  
document.myform.total.value=ftot;
document.myform.sale_p.value=vprice;
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
                                <div class="pull-left"><h4>  ग्राहक बिल तपशील   </h4></div>
                             </div>
						<?php
include('connect.php');
session_start();
 $p_no=$_SESSION['cust_id'];
 $bill_date=date('Y-m-d');
  
$query="insert into bill_master values('','$bill_date','$p_no','0','0','0','V','No')";
@mysql_query($query) or die(" Query for Bill Master table has problem  "); 

 $query_search="select * from customer_master where cust_id='$p_no'";
	$result = mysql_query($query_search) or die(" Search query for Customer Register is wrong  ");
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
 		
		$_SESSION['cust_id']=$ecol['cust_id'];
		}
  	
  		?>
 
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <div id="rootwizard">
                                        <div class="navbar">
                                          </div>
                                         <div class="">
                           				<form class="form-horizontal" name="myform" method="post" action="insert_sales.php" >
										  <fieldset>
										 <div class="control-group">
      									 <label class="control-label" for="typeahead"> बिल नं. </label>
                                          <div class="controls">
 									<span class="input-small uneditable-input"><?php  $q="select max(bill_id) from bill_master"; $res=mysql_query($q); $row=mysql_fetch_row($res); $bill_no= $row[0]; echo "$bill_no"; $_SESSION['bill_no']=$bill_no; ?> </span>
										नाव 
										  <span class="input-large uneditable-input"><?php echo" $cust_name" ?> </span>
                                          </div>
                                          </div>
										   <div >
                                           <div  >
                                             <table border="0">
			 <tr>
			 
			 <td><div align="center">मालाचा ग्रुप निवडा </div></td><td><div align="center"> मालाचा प्रकार निवडा   </div></td><td><div align="center">दर  </div></td><td><div id="quantity" align="center">नग </div></td><td><div id="quantity" align="center"> डिस्काउंट % </div></td><td><div id="quantity" align="center"> VAT  </div></td><td><div id="quantity" align="center">एकूण </div></td></tr>
		<tr align="center">
		 <td>  <select id="group_id" name="group_id" tabindex="1" onChange="getState(this.value)" >
		 <option value="null">Select Group</option>
<?php $sql_g="SELECT item_group_id,item_group_name FROM item_group_master ORDER BY item_group_name"; $result_g =mysql_query($sql_g); while ($data_g=mysql_fetch_assoc($result_g)){?>
		   <option value ="<?php echo $data_g['item_group_id'] ?>" ><?php echo $data_g['item_group_name'] ?></option>  <?php } ?>  </select>
		   </td>
		
		  <td>  <select id="item_id" name="item_id" tabindex="2" onChange="getPrice('find_ccode.php?country='+this.value)" >
		   
		   <option value="null"> select Item </option>     </select></td>
		   
         <td>	<input type="text" name="sale_price" id="sale_price"   class="input-mini"  >	</td>
		  
		 <td><input name="quantity" type="text" class="input-mini" tabindex="4" required  /></td>

 		 <td><input name="disscount" type="text" class="input-mini" tabindex="4" required /></td>

 		 <td><input name="vat" type="text" class="input-mini" tabindex="4" required onChange="calTotal()" /></td>

 		  <td><input name="total"   type="text" class="input-small"  required /></td>
		  		  <td><input name="sale_p"   type="hidden"   class="input-small"   />   </td>

 		  <td>  <button type="submit"  name="save" class="btn btn-info" tabindex="13">जमा करा </button></td>
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
            <hr>
             <?php include("footer.php");?>
        </div>
        <!--/.fluid-container-->
         <?php include("footer_information.php");?>
    </body>

</html>