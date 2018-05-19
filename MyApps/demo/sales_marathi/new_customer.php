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
        <title>Customer Information Detail</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <link href="assets/DT_bootstrap.css" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
      
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <style type="text/css">
<!--
.style1 {font-size: 14px}
-->
        </style>
		
		
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
                        
                        	 <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
    					     <div class="pull-left"><b> <h4> नवीन ग्राहक नोंदणी करा   </h4></b> </div>
								<div class="muted pull-right"><a href="dash_customer.php" ><i class="icon-arrow-left"></i> मागे पहा  </a></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" action="insert_customer.php"  method="post">
                                      <fieldset>
                                        
                                        <div class="control-group">
      									 <label class="control-label" for="typeahead">नाव </label>
                                          <div class="controls">
                                            <input name="cust_name" type="text"   class="input-xlarge"  tabindex="1"  placeholder=" इथे नाव लिहा "  required>
                                          </div>
                                      </div>
										
										<div class="control-group">
                                          <label class="control-label" for="typeahead">पत्ता  </label>
                                          <div class="controls">
                                            <input name="cust_address" type="text"   class="input-xlarge"   tabindex="2"  placeholder=" इथे पत्ता लिहा " required >
                                          </div>
                                      </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">मोबाईल नं. </label>
                                          <div class="controls">
        			 <input name="mobile_no" type="text"  maxlength="10"   onkeypress="return isNumberKey(event)"   tabindex="3" placeholder=" इथे मोबाईल नं.लिहा  " required >
                                          </div>
                                      </div>
                                   
											<div class="control-group"><div class="controls">
                                              <button type="submit" class="btn btn-info" tabindex="5">Save</button>
                                          <button type="reset" class="btn" tabindex="6">Cancel</button>
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
         <?php include("footer_information.php");?>
		   <script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>


        <script src="assets/scripts.js"></script>
        <script src="assets/DT_bootstrap.js"></script>
        <script>
        $(function() {
        });
        </script>
    </body>

</html>