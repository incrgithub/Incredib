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
                           <div class="row-fluid">
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="pull-left"> <b><h3>  NEW EMPLOYEE REGISTER </h3> </b>  </div>
                                </div>
                                <div class="block-content collapse in">

    <form name="entryform" class="form-horizontal" onSubmit="return validatedata(this)" action="insert_np.php" method="post">
									
	
                                      <fieldset>
                                      <div class="control-group">
                                          <label class="control-label" for="typeahead">  NAME  </label>
                                          <div class="controls">
                      					 <input type="text" name="cust_name"  value="<?php echo"$cust_name"; ?> " tabindex="1" >
                                          </div>
                                      </div> 
									  
                                      <div class="control-group">
                                          <label class="control-label" for="typeahead">ADDRESS  </label>
                                          <div class="controls">
                      					 <input type="text" name="cust_add"  value="<?php echo"$cust_name"; ?> " tabindex="1" >
                                          </div>
                                      </div> 
									   <div class="control-group">
                                          <label class="control-label" for="select01"> MOBILE NO </label>
                                          <div class="controls" >
                                             <input type="text" name="mobile_no"  maxlength="10"   tabindex="2" required >
											
                                      </div>
									  </div>
									 
 									  <div class="control-group">
                                           <div class="controls">
                                          <button type="submit"  name="save" class="btn btn-info" tabindex="4">SAVE</button>
                                           </div>
                                      </div>
										 
                                      </fieldset>
                                    </form>                                </div>
                            </div>
                            <!-- /block -->
                        </div>
						
						   <div class="row-fluid">
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="pull-left"> <b><h3> EMPLOYEE LIST</h3> </b>  </div>
                                </div>
                                <div class="block-content collapse in">
                                 <table class="table">
						              <thead>
						                <tr>
						                  <th>SR.NO. </th>
										  <th> NAME  </th>
						                  <th> ADDRESS  </th>
 										  <th> MOBILE NO.</th>
  						                </tr>
						              </thead>
						              <tbody>
 						               <?php
include('connect.php');
  $cust_id=$_SESSION['cust_id'];
 
	$query_search="select * from emp_master  ";
	$result = mysql_query($query_search) or die("Search query for Job Trascntion is wrong  ");
	$data=NULL;
	$srno=1;

error_reporting(0);
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
	 
	}
 	$count=1;
	$gtotal=0;
	$cr="credit";
 	    foreach($data as $ecol)
		{
 	 $emp_id=$ecol['emp_id']; 
 	 	$emp_name= $ecol['emp_name'];
		$emp_add=$ecol['emp_add'];
		$emp_mobile=$ecol['emp_mobile'];
 		
						   
						             echo" <tr class=success>";
 						                  echo"<td> $count     </td>";
										  echo"<td> $emp_name  </td>";
										  echo"<td> $emp_add   </td>";
										  echo"<td>$emp_mobile </td>";
   						                echo"</tr>";
			$count=$count+1;
			}
			?>                  
 						              </tbody>
						            </table>
                                </div>
                            </div>
                            <!-- /block -->
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