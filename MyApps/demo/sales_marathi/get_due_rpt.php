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
        <title>उधारी रिपोर्ट </title>
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

function OpenNewWindow(MyPath)
	     {
			window.open(MyPath,"","toolbar=no,status=no,menubar=no,location=center,scrollbars=no,resizable=no,height=650,width=750");
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
                    <div  class="pull-left"> <b> येणेबाकी रक्कम  रिपोर्ट  <?php $sd=date('d-m-Y');  echo"$sd"; ?>  </b>  </div>
 
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12" >
   <form class="form-horizontal" onSubmit="return validatedata(this)" action="set_stock_rpt.php" method="post">
   	
                                  <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
	<tr bgcolor="lightblue"><td>अ.नं.</td><td> ग्राहकाचे नाव  </td><td><div > पत्ता  </div></td><td><div > मोबाईल नं. </div></td><td><div > येणेबाकी रक्कम </div></td></td> </tr>
		<?php
	$query_search="select * from customer_master";
	$result = mysql_query($query_search) or die("Search query for Customer   is wrong  ");
	$data=NULL;
	$srno=1;

error_reporting(0);
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
 	}
	
	$count=1;
 	    foreach($data as $ecol)
		{
 	 	$cust_id=$ecol['cust_id']; 
 	 	$cust_name= $ecol['cust_name'];
		$cust_address= $ecol['cust_add'];
	 	$mobile= $ecol['cust_mobile'];
 		
 	$query_bill="select * from bill_master where cust_id = '$cust_id' order by bill_date desc ";
	$result_bill = mysql_query($query_bill) or die("Search query for Job Trascntion is wrong  ");
	$data_bill=NULL;
 
error_reporting(0);
	while ($row_bill = mysql_fetch_array($result_bill))
	{    	$data_bill[] = $row_bill;	}	$bill_total=0; $payment_total=0; $due=0;
			foreach($data_bill as $ecol_bill)
			{$total_bill=$ecol_bill['total_amount']; $bill_total=$bill_total + $total_bill;	}
			 
 
 
			$query_payment="select * from all_tran where acc_id = '$cust_id' and acc_type='customer' order by tran_date desc ";
			$result_payment = mysql_query($query_payment) or die("Search query for Payment  Trascntion is wrong  ");
			$data_payment=NULL;
			error_reporting(0);
				while ($row_payment = mysql_fetch_array($result_payment))	{    	$data_payment[] = $row_payment;	}
				foreach($data_payment as $ecol_payment)	{  		$total_payment=$ecol_payment['cr_amount'];	$payment_total=$payment_total + $total_payment;	}
			
		
	 $due = $bill_total - $payment_total;
	  
	   
										if($due > 0)
										{
				            			 echo"<tr>";
						           	     echo"<td > $count </td> ";
 										 echo"<td >  $cust_name  </td>";
						           		 echo"<td > $cust_address </td>";
						           		 echo"<td > $mobile </td>";
						           		 echo"<td > $due </td>";

										echo"</tr>";
										 
										 $count=$count + 1;
										}
 }
 			?>                 
			
						              </tbody>
						            </table>
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