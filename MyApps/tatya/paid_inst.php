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

    <title>Incredible Tech Solution</title>

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
                    <h1 class="page-header">हप्ता जमा करा </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
			खाते तपशील पहा 
					<div class="muted pull-right"><a href="inst.php" ><i class="fa fa-arrow-left fa-fw"></i> मागे पहा  </a></div>

                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form class="form-horizontal"  method="post">
									<fieldset>
   						<?php include('connect.php');
	error_reporting(0);
 date_default_timezone_set('Asia/Kolkata'); 

	$per_id=$_GET['id'];
	
	$query_search="select * from personal_book where per_id='$per_id ' ";
	$result = mysql_query($query_search) or die("Search query for Personal book is wrong  ");
	$data=NULL;
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
	}
  	    foreach($data as $ecol)
		{
	    $per_id= $ecol['per_id'];
  	 	$per_name= $ecol['per_name'];
  	 	$per_mobile= $ecol['per_mobile'];
  	 	$per_add= $ecol['per_add'];
		$loan_amount= $ecol['loan_amount'];
		$loan_date= $ecol['loan_date'];
		$loan_inst= $ecol['loan_inst'];
 		
						$loan_dates=date('d-m-Y', strtotime($loan_date));

 			} ?>			 
									 

																 
                                     <div class="control-group">
  										<label class="control-label" for="typeahead"> नाव </label>
                                          <div class="controls">
                       <input class="form-control" id="disabledInput" type="text" value="<?php echo"$per_name" ?>" disabled>

											</div>
											</div>  
                                     <div class="control-group">
  										<label class="control-label" for="typeahead"> पत्ता  </label>
                                          <div class="controls">
                       <input class="form-control" id="disabledInput" type="text" value="<?php echo"$per_add" ?>" disabled>
											</div>
											</div>  
                                     <div class="control-group">
  										<label class="control-label" for="typeahead"> मोबाईल </label>
                                          <div class="controls">
                       <input class="form-control" id="disabledInput" type="text" value="<?php echo"$per_mobile" ?>" disabled>
											</div>
											</div>  
                                     <div class="control-group">
  										<label class="control-label" for="typeahead"> कर्ज रक्कम  </label>
                                          <div class="controls">
                       <input class="form-control" id="disabledInput" type="text" value="<?php echo"$loan_amount" ?>" disabled>
											</div>
											</div>  
                                     <div class="control-group">
  										<label class="control-label" for="typeahead">कर्ज दिनांक  </label>
                                          <div class="controls">
                       <input class="form-control" id="disabledInput" type="text" value="<?php echo"$loan_dates" ?>" disabled>
											</div>
											</div>  
                                     <div class="control-group">
  										<label class="control-label" for="typeahead"> हेडिंग  </label>
                                          <div class="controls">
                       <input class="form-control" id="disabledInput" type="text" value="<?php echo"$loan_inst" ?>" disabled>
											</div>
											</div>  
 										</fieldset>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                                            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
			हप्ते परतफेड तपशील 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                 <form class="form-horizontal" action="insert_inst.php"   method="post">
									<fieldset>
								
								<table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>दिनांक </th>
                                            <th>रक्कम </th>
                                         </tr>
                                    </thead>
                                    <tbody>
<?php include('connect.php');
	error_reporting(0);
 date_default_timezone_set('Asia/Kolkata'); 

	$t_date=date("Y-m-d");
	$t_type="dr";

	$per_id=$_GET['id'];

session_start();
$_SESSION['per_id']=$per_id;
	$query_search="select * from installment_register where per_id='$per_id'";
	$result = mysql_query($query_search) or die("Search query for Installment Register is wrong  ");
	$data=NULL;
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
	}
		$count=1;
		$total=0;
  	    foreach($data as $ecol)
		{
	    $inst_dates= $ecol['inst_date'];
  	 	$inst_amount= $ecol['inst_amount'];
 
 		$total=$total + $inst_amount; 
 
$ref_date=date('d-m-Y', strtotime($inst_dates));
										   echo"<td>   $count   </td> "; 
						                   echo" <td> $ref_date  </a></td> "; 
										   echo"<td> $inst_amount  </td>";
  										   echo" </tr>";
										   
										   $count= $count+1;
			} ?>
			<tr bgcolor="#CC9999"><td></td><td>Total </td><td  bgcolor="#CCFFFF"> <?php echo" $total";?></td></tr>
</tbody>
                                </table>
									 <div class="control-group">
  										<label class="control-label" for="typeahead"> जमा दिनांक   </label>
                                          <div class="controls">
             <input name="jama_date" type="date"    tabindex="1" class="input-small"   required >
											</div>
											</div>  
 									
									       <div class="control-group">
  										<label class="control-label" for="typeahead"> हप्ता रक्कम   </label>
                                          <div class="controls">
             <input name="hapta_jama" type="text"    tabindex="1" class="input-small" onKeyPress="return isNumberKey(event)"   required >
											</div>
											</div>
									
									 <div class="control-group">
  										<label class="control-label" for="typeahead"> पुढील हप्ता दिनांक   </label>
                                          <div class="controls">
             <input name="next_date" type="date"    tabindex="1" class="input-small"   required >
											</div>
											</div>  
											 <br>
                                        <button type="submit" class="btn btn-success" tabindex="2"> जमा करा   </button>
 									</fieldset>
									</form>
								
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <!-- /.col-lg-6 (nested) -->
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

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
