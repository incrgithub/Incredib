<?php
include('connect.php');
session_start();
if (!isset($_SESSION['member_id'])){
header('location:index.php');
}
?>

<!DOCTYPE html>
<html class="no-js">
    
    <head>
<title> <?php include('title.php'); ?> </title>
        <!-- Bootstrap -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <style type="text/css">
<!--
.style3 {font-size: 18px}
-->
        </style>
</head>
    
    <body>
     <?php include("header.php");?>
        <div class="container-fluid">
            <div class="row-fluid">
                <?php include("slidebar.php");?>
                
                <!--/span-->
                <div class="span9" id="content">
                
						<div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class=" pull-left"> Welcome To Our System </div>
  
                            </div>
                            <div class="block-content collapse in">
                                <div class="row-fluid padd-bottom">
								
								 <div class="span3" >
                                      <a href="dash_stock.php" class="thumbnail">
									  <img src="images/chicken.jpg" width="186" height="186" border="0"   style="width: 260px; height: 180px;"  title=" New ITEM, RATE Change,Edit ITEM" >  </a>													                                 </div> 
                               
                                 <div class="span3">
                                      <a href="get_item_stock.php" class="thumbnail">
                                        <img   style="width: 260px; height: 180px;" src="images/cold.jpg" >
                                      </a>
                                  </div>
                                 
								 
								  <div class="span3">
                                      <a href="emp_detail.php" class="thumbnail">
                                        <img   style="width: 260px; height: 180px;" src="images/atd.png" >
                                      </a>
                                  </div>
                                 
								    <div class="span3" >
                                      <a href="new_np.php" class="thumbnail">
									  <img src="images/chef.png" width="186" height="186" border="0"   style="width: 260px; height: 180px;"  >  </a>													                                 </div> 
                               
                                 </div>

                                <div class="row-fluid padd-bottom">
 								   <div class="span3">
									<a href="dash_stock.php" class="thumbnail">
                                  <div align="center">  Item Entry / Chnage Rate   </div>
									  </a>
									  </div>
								    <div class="span3">
									<a href="get_item_stock.php" class="thumbnail">
                                  <div align="center">  Cold-Drink Stock  </div>
									  </a>
									  </div>   <div class="span3">
									<a href="emp_detail.php" class="thumbnail">
                                  <div align="center"> Attendance Master   </div>
									  </a>
									  </div><div class="span3">
									<a href="new_np.php" class="thumbnail">
                                  <div align="center">  New Employee Registration </div>
									  </a>
									  
									  </div>
                               </div>
							    <div class="row-fluid padd-bottom">
								
								 <div class="span3" >
                                      <a href="new_customer.php" class="thumbnail">
									  <img src="images/user.png" width="186" height="186" border="0"   style="width: 260px; height: 180px;" title=" New Customer Registration " >  </a>													                                 </div> 
                               
                                 <div class="span3">
                                      <a href="customer.php" class="thumbnail">
                                        <img   style="width: 260px; height: 180px;" src="images/billing.jpg" title=" Credit Bill Entry  ">
                                      </a>
                                  </div>
                                 
								 
								   <div class="span3">
                                      <a href="get_report.php" class="thumbnail">
                                        <img src="images/see_stock.png" border="0"  style="width: 260px; height: 180px;" title=" Reports ">                                      </a>  
								  </div>
								   <div class="span3">
									<a href="backup.php" class="thumbnail">
                                      <img   style="width: 260px; height: 180px;"  border="0" src="images/backup.png"  title=" Backup Download">  
									  </a>
									  </div>
                                 </div>

                                <div class="row-fluid padd-bottom">
 								   <div class="span3">
									<a href="new_customer.php" class="thumbnail">
                                  <div align="center"> New Customer Registration  </div>
									  </a>
									  </div>
								    <div class="span3">
									<a href="customer.php" class="thumbnail">
                                  <div align="center"> Customer Detail Entry  </div>
									  </a>
									  </div><div class="span3">
									<a href="get_report.php" class="thumbnail">
                                  <div align="center">  Repots   </div>
									  </a>
									  </div><div class="span3">
									<a href="backup.php" class="thumbnail">
                                  <div align="center"> Take BACKUP    </div>
									  </a>
									  </div>
                               </div>
							   
                                     
                                </div>

                            </div>
                        </div>
                   
                   
                    
                        <!-- /block -->
                    </div>
                </div>
            </div>
            <hr>
            <?php include("footer.php");?>
        </div>
        <!--/.fluid-container-->
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="assets/scripts.js"></script>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
    </body>

</html>