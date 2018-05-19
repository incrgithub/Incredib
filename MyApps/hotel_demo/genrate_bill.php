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
        <title>Customer Billing Detail </title>
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
        <style type="text/css">
<!--
.style1 {font-size: 14px}
-->
        </style>
</head>
    
    <body>
       <?php include("header.php");?>
        <div class="container-fluid">
            <div class="row-fluid">
              <?php include("slidebar.php");?>
                <div class="span9" id="content" >
                      <!-- morris stacked chart -->
               
                    <div class="row-fluid">
                                         <div class="row-fluid" >
                        <!-- block -->
						
 <div class="row-fluid section">
                         <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="pull-left"><h4>  Customer Detail  </h4></div>
								<div class="muted pull-right"> <a href="billing.php" ><i class="icon-arrow-left"></i> Back </a></div>
                            </div>
							<?php
include('connect.php');
 
 $p_no=$_GET['id'];
  
	$query_search="select * from customer_master where cust_id='$p_no'";
	$result = mysql_query($query_search) or die("Search query for Customer Register is wrong  ");
	$data=NULL;
	$srno=1;

error_reporting(0);
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
 	}
  	    foreach($data as $ecol)
		{
 	 $cust_id= $ecol['cust_id'];
  	 	$cust_name= $ecol['cust_name'];
		$cust_add= $ecol['cust_add'];
		$cust_mobile=$ecol['cust_mobile'];
		$cust_balance=$ecol['cust_balance'];
		
		$_SESSION['cust_id']=$ecol['cust_id'];
		}
  		?>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <div id="rootwizard">
                                        <div class="navbar">
                                          </div>
                                         <div class="">
                           				<form class="form-horizontal"  method="post" action="bill_one.php" >
										  <fieldset>
										 <div class="control-group">
      									 <label class="control-label" for="typeahead"> Name </label>
                                          <div class="controls">
 										 <span class="input-xlarge uneditable-input"><?php echo" $cust_name"; ?> </span>
										 Mobile
										  <span class="input-large uneditable-input"><?php echo" $cust_mobile" ?> </span>
                                          </div>
                                          </div>
                                       
										 <div class="control-group">
      									 <label class="control-label" for="typeahead">Address</label>
                                          <div class="controls">
                                           <span class="input-xlarge uneditable-input"><?php echo" $cust_add " ?> </span>
										    <button type="submit" class="btn btn-info"> Generate Bill</button>
                                          </div>
                                          </div>
										  
										
								  </fieldset>
									  </form>
                                      </div>
									  </div>  
                                    </div>
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
    </body>

</html>