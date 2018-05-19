<?php
include('connect.php');
session_start();
if (!isset($_SESSION['member_id'])){
header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Incredible Tech Solution</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
				<script >


function isNumberKey(evt)
       {
          var chCode = (evt.which) ? evt.which : event.keyCode
          if (chCode != 46 && chCode > 31 
            && (chCode < 48 || chCode > 57))
             return false;
          else
          return true;
       }

function noBack(){ window.history.forward(); }

 </script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
     <?php include("header.php");?>

      <?php include("slider.php");?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">नवीन कर्ज  </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            नवीन कर्ज वाटप  
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                  
				<form class="form-horizontal" action="insert_loan.php"   method="post">
									<fieldset>
 				<div class="col-md-9">
   				<div class="col-md-4"><label class="control-label" for="typeahead"> <h4> नाव  </h4></label></div>
    			<div class="col-md-8">               <input name="per_name" type="text"   id="typeahead"  data-provide="typeahead"  tabindex="1" class="input-small" required >
				</div>
			    </div> 
	
				<div class="col-md-9">
   				<div class="col-md-4"><label class="control-label" for="typeahead"> <h4> पत्ता  </h4></label></div>
    			<div class="col-md-8"> 
	             <input name="per_add" type="text"   id="typeahead"  data-provide="typeahead"  class="input-small" required tabindex="2" >
				</div>
			    </div> 
	
				<div class="col-md-9">
   				<div class="col-md-4"><label class="control-label" for="typeahead"><h4> मोबाईल  </h4></label></div>
    			<div class="col-md-8">       
             <input name="per_mobile" type="text"    maxlength="10"    tabindex="3" onKeyPress="return isNumberKey(event)"   required >
				</div>
			    </div> 
				
				<div class="col-md-9">
   				<div class="col-md-4"><label class="control-label" for="typeahead"><h4> कर्ज रक्कम  </h4></label></div>
    			<div class="col-md-8"> 
             <input name="loan_amount" type="text"   maxlength="10"  onKeyPress="return isNumberKey(event)"  tabindex="4" required >
				</div>
			    </div>
				
				<div class="col-md-9">
   				<div class="col-md-4"><label class="control-label" for="typeahead"><h4> हेडिंग  </h4></label></div>
    			<div class="col-md-8"> 
             <input name="loan_inst" type="text"        required  tabindex="5">
				</div>
			    </div>
					<div class="col-md-9">
   				<div class="col-md-4"><label class="control-label" for="typeahead"><h4> कर्ज दिनांक  </h4></label></div>
    			<div class="col-md-8"> 
             <input name="loan_date" type="date"     required  tabindex="5">
				</div>
			    </div>
				
					<div class="col-md-9">
   				<div class="col-md-4"><label class="control-label" for="typeahead"><h4> पुढील हप्ता  </h4></label></div>
    			<div class="col-md-8"> 
             <input name="next_date" type="date"     required  tabindex="5">
				</div>
			    </div>
				
				      <br>
                	<div class="col-md-9">
   				<div class="col-md-4"> </div>
    			<div class="col-md-8"> 
                                        <button type="submit"  tabindex="7" class="btn btn-primary">Submit  </button>
				</div>
			    </div>
										</fieldset>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                            <div class="row">
                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>
        <script src="bootstrap-datepicker.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
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
