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
        <title>Purchase Detail</title>
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
		
		
<script language="JavaScript" type="text/javascript">
function noBack(){ window.history.forward(); }
function isNumberKey(evt)
       {
          var chCode = (evt.which) ? evt.which : event.keyCode
          if (chCode != 46 && chCode > 31 
            && (chCode < 48 || chCode > 57))
             return false;
          else
          return true;
       }
function validatedata(form) 
 {
  var bgBad = "pink";
  var bgGood = "white";
  var valid = true;

   if (form.comp_name.value == "") {
		 alert("कंपनी चे नाव लिहा  ");   
		 form.comp_name.focus();
	    valid = false;
    setColor(form.comp_name, bgBad);
    
  } else {
    setColor(form.comp_name, bgGood);
  }
  
  if (form.item_type.value == "") {
		 alert(" मालाचा प्रकार निवडा  ");   
		 form.item_type.focus();
	    valid = false;
    setColor(form.item_type, bgBad);
    
  } else {
    setColor(form.item_type, bgGood);
  }

 if (form.item_detail.value == "") {
		 alert("मालाचा तपशिल लिहा ");   
		 form.item_detail.focus();
	    valid = false;
    setColor(form.item_detail, bgBad);
    
  } else {
    setColor(form.item_detail, bgGood);
  }
   
  if (form.dprice.value == "") {
		 alert("खरेदी किंमत भरा  ");   
		 form.dprice.focus();
	    valid = false;
    setColor(form.dprice, bgBad);
    
  } else {
    setColor(form.dprice, bgGood);
  }
  
   if (form.mrp.value == "") {
		 alert("MRP किंमत भरा   ");   
		 form.mrp.focus();
	    valid = false;
    setColor(form.mrp, bgBad);
    
  } else {
    setColor(form.mrp, bgGood);
  }
  
     if (form.quantity.value == "") {
		 alert("एकूण नग भरा ");   
		 form.quantity.focus();
	    valid = false;
    setColor(form.quantity, bgBad);
    
  } else {
    setColor(form.quantity, bgGood);
  } 
   
if (!valid) alert(" सगळी माहिती भरा  ");
  return valid;
  
  
}		

function minLen(r,f,t,zero)        
		 {
  		 if( r * f >= zero)
    	 {
 		 t.value= (r/100) * f; 
		
  		 }
		 
		 }


function isNumberKey(evt)
       {
          var chCode = (evt.which) ? evt.which : event.keyCode
          if (chCode != 46 && chCode > 31 
            && (chCode < 48 || chCode > 57))
             return false;
          else
          return true;
       }
function setColor(el, bg) 
{
  if (el.style) el.style.backgroundColor = bg;
}
function OpenNewWindow(MyPath)
	     {
			window.open(MyPath,"","toolbar=no,status=no,menubar=no,location=center,scrollbars=no,resizable=no,height=650,width=750");
	      }

function isAlpha(keyCode)
        {
            return ((keyCode >= 65 && keyCode <= 90) || keyCode == 8 || keyCode == 32 || keyCode == 9 || keyCode == 46)
        }

 </script>
		
		
    </head>
    
    <body>
       <?php include("header.php");?>
        <div class="container-fluid">
            <div class="row-fluid">
                <?php include("slidebar.php");?>
				
                <div class="span9" id="content">
                      <!-- morris stacked chart -->
               
                    <div class="row-fluid">
                        
                          
                        <!-- block -->     
                     <!-- wizard -->
					                   	 
     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div  class="pull-left"> <b> Detail Report </b>  </div>
								<div class="muted pull-right"> <input type="image" src="images/print.gif" onClick="OpenNewWindow('reports.php')"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" onSubmit="return validatedata(this)" action="insert_stock.php" method="post">
                                      <fieldset>
                                     
									 
                                    
									  
										 
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
	echo "confirm( \" माफ करा ! माहिती उपलब्ध नाही !  \"); window.location = 'purchase.php'; ";

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
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                     
					
             
                                    
                         
            <hr>
             <?php include("footer.php");?>
        </div>
        <!--/.fluid-container-->
        <link href="vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

        <script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/jquery.uniform.min.js"></script>
        <script src="vendors/chosen.jquery.min.js"></script>
        <script src="vendors/bootstrap-datepicker.js"></script>

        <script src="vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>


        <script src="assets/scripts.js"></script>
        <script>
        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>
    </body>

</html>