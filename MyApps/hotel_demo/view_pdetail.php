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
        <link href="assets/DT_bootstrap.css" rel="stylesheet" media="screen">
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
                        
                           <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="pull-left">Serach Inovice Number </div>
	 <div class="muted pull-right"><a href="dash_purchase.php" ><i class="icon-arrow-left"></i> Back </a></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
											 <tr ><th><div align="center">Sr.</div></th><th><div align="center">Date</div></th><th><div align="center">Inovice No</div></th><th><div align="center">Company </div></th> <th><div align="center">Total VAT</div></th><th><div align="center">Total CST</div></th><th> <div align="center">Total Amount</div></th> </tr>
	
										</thead>
										<tbody>
											
	<?php include('connect.php');
	error_reporting(0);
 date_default_timezone_set('Asia/Kolkata'); 

	$query_search="select * from pur_bill_master order by inv_date desc";
	$result = mysql_query($query_search) or die("Search query for Person Register is wrong  ");
	$data=NULL;
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
	}
	if(!$data)
	{
	echo "<script language=\"javascript\">";
	echo "confirm( \" sorry !Data Not Found!  \"); window.location = 'dash.php'; ";
		echo "</script>";
	}	
	$count=1;
	
 	    foreach($data as $ecol)
		{
	 	$pur_bill_id=$ecol['pur_bill_id'];
		$inv_no=$ecol['inv_no']; 
 	 	$inv_date= $ecol['inv_date'];
 	 	$supp_id= $ecol['supp_id'];
		$vat_total=$ecol['vat_amount'];
		$cst_total=$ecol['cst_amount'];
 		$delivery_note=$ecol['delivery_note'];
		$total_amount=$ecol['total_amount'];
		 $inv_date_one=date('d-m-Y', strtotime($inv_date));
		 
$sql1="select *  from supplier_master where supp_id='$supp_id' "; 
			$result1 =mysql_query($sql1); while ($data1=mysql_fetch_assoc($result1))
			{  $supp_name=$data1['supp_name'];  }
			
					 
 										echo"<tr >";
						                echo"<td> $count </td> ";
									   	echo"<td>$inv_date_one</td>";
						                echo"<td> <a href=purchaseBill.php?id=$pur_bill_id  target='_blank' >   $inv_no </a></td>";
						                echo"<td> $supp_name</td>";
										echo"<td> $vat_total</td>";
 										echo"<td>$cst_total</td>";
 										echo"<td>$total_amount</td>";
 						                echo"</tr>";

				$count=$count+1;
				} ?>
										</tbody>
									</table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
   
                        <!-- block -->     
                     <!-- wizard -->
	
					
               
                                    
                         
            <hr>
             <?php include("footer.php");?>
        </div>
        <!--/.fluid-container-->
		 <?php include("footer_information.php");?>
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