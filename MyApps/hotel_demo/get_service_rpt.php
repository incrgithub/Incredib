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
        <title>Service Reports</title>
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
                        
                          
                        <!-- block -->     
                     <!-- wizard -->
					                   	 
     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div  class="pull-left"> <b> Service Detail Report </b>  </div>
								 <div  class="pull-right"> <a href="get_report.php"><b> Back </b> </a> </div> 
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12" >
                                    <form class="form-horizontal" onSubmit="return validatedata(this)" action="set_service_rpt.php" method="post">
                                      
                                     <div class="control-group">
                                          <label class="control-label" for="select01">Start Date </label>
                                          <div class="controls" >
                                             <input type="text" name="start_date"  id="date01" class="datepicker" tabindex="1"  >
											 End Date
											     <input type="text" name="end_date"  id="date01" class="datepicker" tabindex="2"  >
                      <button type="submit"  name="save" class="btn btn-info" tabindex="13">Show</button>
                                          <button type="reset" name="cancel" class="btn">Cancel</button>   
					  
                                      </div></div>
									 
                                    
									 </form> 
										 
										 
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                     
					
                <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                    <div  class="pull-left"> <b> Service Report from <?php $sd=date('d-m-Y', strtotime($_SESSION['rpt_start_date']));  echo"$sd"; ?>  To <?php $ed=date('d-m-Y', strtotime($_SESSION['rpt_end_date']));echo"$ed"; ?> </b>  </div>
								 
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12" >
   <form class="form-horizontal" onSubmit="return validatedata(this)" method="post">
   	
                                  <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
	<tr bgcolor="lightblue"><td><div align=" ">Sr.No</div></td><td><div align=" ">Date</div></td><td><div align=" ">Service Description  </div></td><td><div align=" ">Quantity</div></td> <td><div align=" ">Service Rate </div></td><td><div align=" "> Total Amount </div></td></tr>
		<?php
include('connect.php');
 
 //$customer_name = $_SESSION['mname'];
$start_d= $_SESSION['rpt_start_date'];

$end_d=$_SESSION['rpt_end_date'];
 
	$query_search="select * from sale_master where sale_date between '$start_d' and '$end_d' order by sale_date ";
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
	echo "confirm( \" Sorry ! Data Not found \"); window.location = 'get_report.php'; ";

		echo "</script>";
	}	
	$count=1;
	$total=0;
	$r_total=0;
 	    foreach($data as $ecol)
		{
		
  				 	$bill_date= $ecol['sale_date'];
						$item_id= $ecol['item_id'];
						$sale_price= $ecol['sale_price'];
						$quantity=$ecol['quantity'];
						  $query_i="select * from item_master where item_id='$item_id' ";
						  $rs = mysql_query($query_i);   while ($row_data = mysql_fetch_array($rs)){$i_data[] = $row_data;}
							foreach($i_data as $ecol)
							 {
							 $grp_id=$ecol['item_group_id']; 
							 $item_name=$ecol['item_name'];
  							 $query_g="select * from item_group_master where item_group_id='$grp_id' ";
	 						 $rsg = mysql_query($query_g); while ($row_data_g = mysql_fetch_array($rsg)){$g_data[] = $row_data_g;}  foreach($g_data as $gcol) 
						 {	$g_name=$gcol['item_group_name'];   }
							$service="Service";							 
					    	   }
	   
 		 $inv_date_one=date('d-m-Y', strtotime($bill_date));
		 								if($service==$g_name)
										{
										$total= $quantity * $sale_price;
 						            	 echo"<tr align=center>";
						           	     echo"<td> $count </td> ";
 										 echo"<td>$inv_date_one</td>";
										  echo"<td> $item_name</td>";
										  echo"<td> $quantity</td>";
										  echo"<td> $sale_price </td>";
 										 echo"<td> $total  </td>";
   						          		 echo"</tr>";
										 $r_total=$r_total + $total;
										}
			$count=$count+1;
			}
		
			?>                 
				<tr><td></td><td></td><td></td><td></td><td>TOTAL SERVICE  </td><td><?PHP echo"$r_total"; ?> </td></tr>
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