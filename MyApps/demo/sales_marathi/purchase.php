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
        <title> Purchase Inovice Detail </title>
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
		var amount_fi=document.entryform.amt_fi.value;

		var vat_five = (amount_fi * (5  / 100) ) ;
		document.entryform.vat_fi.value=vat_five;

		}
		
function vatTw()
		{
		var amount_tw=document.entryform.amt_tw.value;
		var amount_fi=document.entryform.amt_fi.value;
	var vat_fi=document.entryform.vat_fi.value;

		var vat_t = (amount_tw * ( 12.5  / 100) ) ;
		
		document.entryform.vat_tw.value=vat_t;
 	
	var totalVat= ( vat_fi * 1 ) + (vat_t * 1 ) ;
	
	
	var Total = (amount_fi * 1) + ( amount_tw * 1  ) + ( totalVat * 1);
	
		document.entryform.total_amt.value=Total;
		document.entryform.total_vat.value=totalVat;
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
                                <div class="pull-left"><b>Add New Purchase Inovice  </b> </div>
								<div class="muted pull-right"><a href="supplier.php" ><i class="icon-arrow-left"></i> Back </a></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
    <form name="entryform" class="form-horizontal" onSubmit="return validatedata(this)" action="insert_pur_id.php" method="post">
									
	<?php include('connect.php');
	session_start();
 $supp_id =$_GET['id'];
	$query_search="select * from supplier_master where supp_id='$supp_id' ";
	$result = mysql_query($query_search) or die("Search query for Supplier is wrong  ");
	$data=NULL;
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
	}
	if(!$data)
	{
	echo "<script language=\"javascript\">";
	echo "confirm( \" sorry !Data Not Found!  \"); window.location = 'dash_purchase.php'; ";
		echo "</script>";
	}	
	$count=1;
  	    foreach($data as $ecol)
		{
	     $supp_id= $ecol['supp_id'];
  	 	$supp_name= $ecol['supp_name'];
		$supp_add= $ecol['supp_add'];
		$supp_mobile=$ecol['supp_mobile'];
		$supp_balance=$ecol['supp_balance'];
		session_start();
 		$_SESSION['supp_id']=$supp_id;
 
 			} ?>
                                      <fieldset>
                                      <div class="control-group">
                                          <label class="control-label" for="typeahead">Company Name  </label>
                                          <div class="controls">
                      					 <input type="text" name="comp_name"  readonly   value="<?php echo"$supp_name"; ?> " >
                                          </div>
                                      </div> 
									   <div class="control-group">
                                          <label class="control-label" for="select01">Inovice Number </label>
                                          <div class="controls" >
                                             <input type="text" name="inv_number"    tabindex="1" required >
											 Inovice Date
											 <input type="text" name="inv_date"  id="date01" class="datepicker" tabindex="2"  required >
                                      </div>
									  </div>
									   <div class="control-group">
                                          <label class="control-label" for="typeahead"> Delivery Note <br></label>
                                          <div class="controls">
                                            <textarea  class="input-xxlarge" class="form-control"  name="delivery_note" rows="3" tabindex="2"></textarea>
									
                    			      </div>
                                      </div>
									 
									  <br>
								
									
									  <div class="control-group">
                                          
                                          <div class="controls">
                         				
                                         <button type="submit"  name="save" class="btn btn-info" tabindex="13">SAVE</button>
                                          <button type="reset" name="cancel" class="btn" tabindex="14">Cancel</button>     
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