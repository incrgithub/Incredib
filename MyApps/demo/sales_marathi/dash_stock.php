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
                                <div class="pull-left"> माल  रजिस्टर  </div>
                                <div class="pull-right"><span class="badge badge-info">  </span>

                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="row-fluid padd-bottom">
								
								 <div class="span3" >
                                      <div align="center"><a href="item_group.php" class="thumbnail"> <b> <h4>नवीन मालाची नोंद </h4> </b></a>
                                           </div>
								 </div> 
                                 <div class="span3">
                                      <div align="center"><a href="rate_master.php" class="thumbnail" ><b> <h4> रेट बदला </h4></b> </a>  
                                          </div>
							      </div>
                       <!--           <div class="span3">
                                      <div align="center"><a href="item.php" class="thumbnail"><b> ADD STOCK </b> </a>   
                                          </div>
                                  </div>
								  
                                 <div class="span3">
                                      <div align="center"><a href="stock_detail.php" class="thumbnail"> <b> STOCK DETAIL </b> </a>
                                           </div>
                                 </div>
								 -->
								 
								     
                              </div>
							<br>
									<div class="row-fluid padd-bottom">
								<!--	
									<div class="span3">
                                      <div align="center"><a href="img_item.php" class="thumbnail" ><b> ADD IMAGE </b> </a>  </div>
							    	  </div>
									  -->
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