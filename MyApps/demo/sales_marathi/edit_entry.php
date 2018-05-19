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
        <title>Inovice Detail</title>
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
		 form.comp_name.focus();
	    valid = false;
    setColor(form.comp_name, bgBad);
    
  } else {
    setColor(form.comp_name, bgGood);
  }
  
  if (form.inv_number.value == "") {
		  
		 form.inv_number.focus();
	    valid = false;
    setColor(form.inv_number, bgBad);
    
  } else {
    setColor(form.inv_number, bgGood);
  }

 if (form.item_detail.value == "") {
		 
		 form.item_detail.focus();
	    valid = false;
    setColor(form.item_detail, bgBad);
    
  } else {
    setColor(form.item_detail, bgGood);
  }
   
  if (form.amt_fi.value == "") {
		 
		 form.amt_fi.focus();
	    valid = false;
    setColor(form.amt_fi, bgBad);
    
  } else {
    setColor(form.amt_fi, bgGood);
  }
  
    if (form.vat_fi.value == "") {
		 
		 form.vat_fi.focus();
	    valid = false;
    setColor(form.vat_fi, bgBad);
    
  } else {
    setColor(form.vat_fi, bgGood);
  }
  
  if (form.amt_tw.value == "") {
		 
		 form.amt_tw.focus();
	    valid = false;
    setColor(form.amt_tw, bgBad);
    
  } else {
    setColor(form.amt_tw, bgGood);
  }
  
    if (form.vat_tw.value == "") {
		 
		 form.vat_tw.focus();
	    valid = false;
    setColor(form.vat_tw, bgBad);
    
  } else {
    setColor(form.vat_tw, bgGood);
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
                                <div class="  pull-left" >   Edit Entry  </div>
								<div class="muted pull-right"><a href="edit_detail.php" ><i class="icon-arrow-left"></i> Back</a></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" onSubmit="return validatedata(this)" action="update_stock.php" method="post">
									<?php
									$inv_no=$_GET['id'];

									$query_search="select * from bill_register where inv_number='$inv_no' ";
	$result = mysql_query($query_search) or die("Search query for Bill Register is wrong  ");
	$data=NULL;
	$srno=1;

error_reporting(0);
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
	 
	}
	
 	    foreach($data as $ecol)
		{
		$_SESSION['old_inv']=$ecol['inv_number'];
	 	$inv_no=$ecol['inv_number']; 
		$inv_date=date('m/d/Y', strtotime($ecol['inv_date']));
 	 	 $pay_date=date('m/d/Y', strtotime($ecol['purchase_date']));
	 	$lr_date=date('m/d/Y', strtotime($ecol['lr_date']));
		
		$item_detail= $ecol['inv_item'];
	 	$inv_company= $ecol['inv_company'];
	  
		$total_amt=$ecol['total_amount'];
		$total_vat=$ecol['total_vat'];
		
		$lr_number=$ecol['lr_note'];
		$godown=$ecol['godown'];
		$transport=$ecol['transport'];
		$n_offer=$ecol['offer'];	
		
		 }
		 
		 
									 ?>
                                      <fieldset>
                                      <div class="control-group">
                                          <label class="control-label" for="typeahead">Company Name  </label>
                                          <div class="controls">
                       <input type="text" name="comp_name"    tabindex="1" value="<?php echo"$inv_company" ?>" readonly>
                                          </div>
                                      </div> 
									   <div class="control-group">
                                          <label class="control-label" for="select01">Inovice Number </label>
                                          <div class="controls" >
                                             <input type="text" name="inv_number"    tabindex="2" value="<?php echo"$inv_no" ?>" required>
											 Inovice Date
											     <input type="text" name="inv_date"  id="date01" class="datepicker" tabindex="3" value="<?php echo"$inv_date" ?>" required >
                      
                                      </div>
									  </div>
                                    
									   <div class="control-group">
                                          <label class="control-label" for="typeahead">Item Detail  <br>
                                          </label>
                                          <div class="controls">
                        						 <input type="text" name="item_detail"  tabindex="4" value="<?php echo"$item_detail" ?>"  required>
									 Payment Date
                                                 <input type="text" name="pay_date"  required  id="date01" class="datepicker" tabindex="5" value="<?php echo"$pay_date" ?>" >
                          </div>
                                      </div>
									  <div class="controls">
									    <table border="0">
			 <tr><td><div align="center">Total VAT</div></td><td><div align="center">Total Amount</div></td></tr>
		<tr align="center">
				  <td><input name="total_vat" type="text" class="input-small" tabindex="6"  onkeypress="return isNumberKey(event)" value="<?php echo"$total_vat" ?>" required /></td>
 		  <td><input name="total_amt" type="text" class="input-small"  tabindex="7" onKeyPress="return isNumberKey(event)"  required value="<?php echo"$total_amt" ?>" /></td>
		   </td>
		  </tr>
									  </table>
									  </div>
									  <br>
									  
										<div class="control-group">
                                          <label class="control-label" for="select01">LR Note </label>
                                          <div class="controls" >
                                             <input type="text" name="lr_number"    tabindex="8" value="<?php echo"$lr_number" ?>">
											 LR Date
											 <input type="text" name="lr_date"  id="date01" class="datepicker" tabindex="9"  value="<?php echo"$lr_date" ?>" >
                                      </div>
									  </div>
									  <div class="control-group">
                                          <label class="control-label" for="select01">Transport Company </label>
                                          <div class="controls" >
                                             <input type="text" name="transport"    tabindex="10" value="<?php echo"$transport" ?>" >
										Godown
											 <input type="text" name="godown"  id="date01"  tabindex="11"  value="<?php echo"$godown" ?>">
                                      </div>
									  </div>
									  
										<div class="control-group">
                                          <label class="control-label" for="typeahead"> Special Offer <br>
                                          </label>
                                          <div class="controls">
                         <input type="text" name="offer"   tabindex="12" value="<?php echo"$n_offer" ?>" >
                                         <button type="submit"  name="save" class="btn btn-info" tabindex="13">SAVE</button>
                                          <button type="reset" name="cancel" class="btn">Cancel</button>     
                                          </div>
                                      </div>
										 
                                      </fieldset>
                                    </form>

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