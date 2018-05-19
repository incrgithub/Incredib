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
                    <h1 class="page-header"> हप्ता नोंदणी  </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            हप्ता जमा करा  
                        </div>
                        <div class="panel-body">
                                                        <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
			<thead>
											<tr>
												<th>ID</th>
												<th>नाव </th>
												<th>पत्ता </th>
												<th>मोबाईल</th>
												<th>कर्ज रक्कम  </th>
  											</tr>
										</thead>
										<tbody>
									<tr >
	<?php include('connect.php');
	error_reporting(0);
 date_default_timezone_set('Asia/Kolkata'); 
	$yes="yes";
	$query_search="select * from personal_book where active='$yes'";
	$result = mysql_query($query_search) or die("Search query for customer is wrong  ");
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
	    $cust_id= $ecol['per_id'];
  	 	$cust_name= $ecol['per_name'];
		$cust_add= $ecol['per_add'];
		$cust_mobile=$ecol['per_mobile'];
		$cust_balance=$ecol['loan_amount'];
		
										   echo"<td>   $count   </td> "; 
						                   echo" <td><a href=paid_inst.php?id=$cust_id> $cust_name  </a></td> "; 
										   echo"<td> $cust_add  </td>";
 										   echo" <td> $cust_mobile  </td>";
 										   echo"<td> $cust_balance </td>";
  										   echo" </tr>";
										   
										   $count= $count+1;
			} ?>
										</tbody>
									</table>
                                              </div>
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

    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>
