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
        <title> Expence Register Detail </title>
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
		

		
function vatFive()
		{
		var amount_tw=document.entryform.purchase_stock.value;
		var amount_fi=document.entryform.purchase_rate.value;
	

		var vat_t = (amount_tw * amount_fi) ;
		
		document.entryform.total_bill.value=vat_t;
 	
	
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
                                <div class="pull-left"><b>Add New Expence  </b> </div>
								<div class="muted pull-right"><a href="dash_expence.php" ><i class="icon-arrow-left"></i> Back </a></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form name="entryform" class="form-horizontal" onSubmit="return validatedata(this)" action="insert_expence.php" method="post">
									
	
	
                                      <fieldset>
                                      <div class="control-group">
                                          <label class="control-label" for="typeahead">Expence Head  </label>
                                          <div class="controls">
                      					<select id="group_id" name="group_id" tabindex="1"  >
<?php $sql_g="SELECT head_name FROM account_head ORDER BY head_name"; $result_g =mysql_query($sql_g); while ($data_g=mysql_fetch_assoc($result_g)){?>
		   <option value ="<?php echo $data_g['head_name'] ?>" ><?php echo $data_g['head_name'] ?></option>  <?php } ?>  </select>
										 
                                          </div>
                                      </div> 
									 
									   <div class="control-group">
                                          <label class="control-label" for="typeahead">Expence Amount  <br>
                                          </label>
                                          <div class="controls">
                        						 <input type="text" name="pay_amount" onKeyPress="return isNumberKey(event)"  tabindex="3" required >
												 Expence Date
                                                 <input type="text" name="pay_date"   id="date01" class="datepicker" tabindex="4" required >
                    			      </div>
                                      </div>
									  
									   <div class="control-group">
                                          <label class="control-label" for="typeahead">Reference Note <br>
                                          </label>
                                          <div class="controls">
                        						 <input type="text"  class="input-xxlarge" name="rf_note"  tabindex="5"      >
                    			      </div>
                                      </div>
									  
									  <div class="control-group">
                                          
                                          <div class="controls">
                         				
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