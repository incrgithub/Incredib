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
                    <h1 class="page-header">New Account </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Add New Account 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form class="form-horizontal" action="insert_acc.php"   method="post">
									<fieldset>
											
											<div class="control-group">
                                            <label> Account Head </label>
                                            <select class="form-control" name="led_id" tabindex="1">
                                               		 <option value="null">Select Group</option>
<?php $sql_g="SELECT led_id,led_name FROM ledger_book where led_type='both' or led_type='debtor' order by led_name "; $result_g =mysql_query($sql_g); while ($data_g=mysql_fetch_assoc($result_g)){?>
		   <option value ="<?php echo $data_g['led_id'] ?>" ><?php echo $data_g['led_name'] ?></option>  <?php } ?>  </select>


                                        	</div>

   							 <div class="control-group">
  							<label class="control-label" for="typeahead"> Name </label>
                                          <div class="controls">
		             <input name="acc_name" type="text"   id="typeahead" data-provide="typeahead"  class="form-control" tabindex="2" placeholder="Enter name of Person / Supplier / Bank / Expense Head" required >
											</div>
											</div> 
									 
   							 <div class="control-group">
  							<label class="control-label" for="typeahead">  Address</label>
                                          <div class="controls">
		             <input name="acc_add" type="text"   id="typeahead" data-provide="typeahead"  class="form-control" tabindex="2" required >
											</div>
											</div> 
									 
   							 <div class="control-group">
  							<label class="control-label" for="typeahead"> Mobile </label>
                                          <div class="controls">
		             <input name="acc_mobile" type="text" onkeypress="return isNumberKey(event)"   maxlength="11"  id="typeahead" data-provide="typeahead"  class="input-small" tabindex="2" required >
											</div>
											</div> 
									 
		       							 <br>
                                        <button type="submit" class="btn btn-default" tabindex="3">Submit  </button>
                                        <button type="reset" class="btn btn-default">Reset  </button>
										</fieldset>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                   
                                </div>
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
