<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

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

</head>

<body>
   <?php include("header.php");?>

      <?php include("slider.php");?>
    <div id="wrapper">

        <!-- Navigation -->
    

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> </h1>
                </div>
		
						<?php include('connect.php');
	error_reporting(0);
 date_default_timezone_set('Asia/Kolkata'); 

	$query_search="select * from personal_book ";
	$result = mysql_query($query_search) or die("Search query for customer is wrong  ");
	$data=NULL;
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
	}
		$total_vatap=0;
		
  	    foreach($data as $ecol)
		{
 		$cust_balance=$ecol['loan_amount'];
 	   $total_vatap= $total_vatap + $cust_balance;
			} 
		
		$query_s="select * from installment_register ";
	$result_s = mysql_query($query_s) or die("Search query for customer is wrong  ");
	$data_s=NULL;
	while ($row_s = mysql_fetch_array($result_s))
	{
    	$data_s[] = $row_s;	
	}
		$total_vasul=0;
		
  	    foreach($data_s as $ecol_s)
		{
 		$inst_amount=$ecol_s['inst_amount'];
 	   $total_vasul= $total_vasul + $inst_amount;
			} 
			
			
			
			
			?>
			
			
 <div class="control-group">
  										<label class="control-label" for="typeahead"> <h4> एकूण वाटप </h4>  </label>
                                          <div class="controls">
                       <input class="form-control" id="disabledInput" type="text" value="<?php echo"$total_vatap" ?>" disabled>
											</div>
											</div>  
                                     <div class="control-group">
  										<label class="control-label" for="typeahead"> <h4> एकूण वसूल  </h4></label>
                                          <div class="controls">
                       <input class="form-control" id="disabledInput" type="text" value="<?php echo"$total_vasul" ?>" disabled>
											</div>
											</div>  
                                     <div class="control-group">
  										<label class="control-label" for="typeahead"><h4>येणे बाकी रक्कम  </h4></label>
                                          <div class="controls">
                       <input class="form-control" id="disabledInput" type="text" value="<?php $r=$total_vatap - $total_vasul; echo"$r" ?>" disabled>
											</div>
											</div>                  <!-- /.col-lg-12 -->
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

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>

