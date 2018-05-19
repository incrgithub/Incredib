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
        <title>Purchase Stock Reports</title>
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
                                <div  class="pull-left"> <b> <h4> DAY WISE COLLECTION REPORT  </h4></b>  </div>
								 <div  class="pull-right"> <a href="get_report.php"><b> GO BACK </b> </a> </div> 
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12" >
                                    <form class="form-horizontal" onSubmit="return validatedata(this)" action="set_vat_rpt.php" method="post">
                                      <div class="control-group">
                                          <label class="control-label" for="select01">FROM DATE   </label>
                                          <div class="controls" >
                                             <input type="text" name="start_date"  id="date01" class="datepicker" tabindex="1"  >
												 TO DATE
											     <input type="text" name="end_date"  id="date01" class="datepicker" tabindex="2"  >
                                          <button type="submit"  name="save" class="btn btn-info" tabindex="13">SEE REPORT </button>
                                          <button type="reset" name="cancel" class="btn">CLEAR </button>   
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
<div  class="pull-left"> 
<b><h4> DAY WISE COLLECTION FROM 
<?php session_start();  $sd=date('d-m-Y', strtotime($_SESSION['rpt_start_date']));  echo"$sd"; ?>  TO  <?php $ed=date('d-m-Y', strtotime($_SESSION['rpt_end_date']));echo"$ed"; ?> </b> </h4> </div> 
 
								 <div  class="pull-right">  </div>  </div>
                          <div class="block-content collapse in">
                                <div class="span12" >
   <form class="form-horizontal" onSubmit="return validatedata(this)" action="set_vat_rpt.php" method="post">
   	
  <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="example">
		<tr bgcolor="lightblue"><td>SR.NO.</td><td>DATE  </td>  <td align="right"> NUMBER OF BILL  </td><td>TOTAL BILL AMOUNT    </td> </tr> 
 	<?php
	
	include('connect.php');
 
 $start_d= $_SESSION['rpt_start_date'];
 $end_d= $_SESSION['rpt_end_date'];

 
	$query_search="select DISTINCT bill_date from bill_master where bill_date between '$start_d' and '$end_d'";
	$result = mysql_query($query_search) or die("Search query for Bill Master table is wrong  ");
	$data=NULL;
	$srno=1;

    error_reporting(0);
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
 	}
 
	$count=1;
 	$tt_c=0;
	
 	    foreach($data as $ecol)
		{
			$bill_date= $ecol['bill_date'];
			
			$bill_search="select * from bill_master where bill_date='$bill_date'";
			$bill_result = mysql_query($bill_search) or die("Search query for Bill Master table is wrong  ");
			$bill_data=NULL;
		
			$bill_nos=0;
			$tot_amount=0;
			  while ($bill_row = mysql_fetch_array($bill_result))
				{
    				$bill_data[] = $bill_row;	
 				}
				
				foreach($bill_data as $bill_ecol)
				{
					$bill_id= $bill_ecol['bill_id'];
 	 				$t_amount= $bill_ecol['total_amount'];		
 					$bill_nos=$bill_nos + 1;
					$tot_amount=$tot_amount + $t_amount;		
				}

					  $b_date=date("d-m-Y",strtotime($bill_date));
		 
 						            	 echo"<tr align=right>";
						           	     echo"<td> $count </td> ";
 										  echo"<td> $b_date</td>";
 										  echo"<td  > $bill_nos </td>";
 										  echo"<td> $tot_amount </td>";
    						          		 echo"</tr>";
			  
			$count=$count+1;
			$tt_c=$tt_c + $tot_amount;
 			}
			 
		 echo"<tr align=center >";   
 						           	     echo"<td>    </td> ";
 										 echo"<td colspan=2 align=center ><font size=+2> TOTAL  </td>";
  						           	     echo"<td bgcolor=lightgreen><font size=+2>   $tt_c  </font></td> ";
   						          		 echo"</tr>";
		
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