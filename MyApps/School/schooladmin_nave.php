<?php include('logincommon.php'); ?>
<!DOCTYPE html>
<?php
include('classes/crud.php');
$db = new Database();
$db->connect();
if(isset($_GET['id']))
	$id=$_GET['id'];	
else
	$id=$_SESSION['id'];

if(isset($_GET['role'])) 
	$role=$_GET['role'];
else  
	$role=$_SESSION['role'];

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>School Admin</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />
	
	 <!-- Sweetalert Css -->
    <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Preloader Css -->
    <link href="plugins/material-design-preloader/md-preloader.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-teal">
    <!-- Page Loader -->
    <?php include('pageloader.php'); ?>
    <!-- #END# Page Loader -->

    <!-- Top Bar -->
    <?php include('topbar.php'); ?>
    <!-- #Top Bar -->
    <section>
       <!-- Left Sidebar -->
       <?php include('leftsidebar.php'); ?> 
       <!-- #END# Left Sidebar -->
	   <!-- Right Sidebar -->
       <?php include('rightsidebar.php'); ?>
	   <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
			<?php 
			if($role == "SA")
			{
			?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
							<?php	
							$db->sql("SELECT * FROM tbl_gl_master");
							$res = $db->getResult();
							foreach($res as $x) 
								{
								$gl_id=$x['gl_id'];
								$gl_mode=$x['gl_mode'];
 								}
							?>
							<div class="body">
							 
								<form  method="POST" action="school_tran_nave.php">
							    <input type="hidden" name="saction" value="save">
							    <input type="hidden" name="id" value="<?php echo $id; ?>"> 
							<h2 class="block-header"> नावे नोंदणी </h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">		
 								<div class="form-group  form-group-lg">
									  <div class="form-line">
				<h4 class="font-bold col-pink"> खाते निवडा  </h4> 
				<select id="gl_id" name="gl_id" tabindex="1" >
		 <option value="null"> खाते निवडा </option>
 <?php $sql_g="SELECT gl_id,gl_name FROM tbl_gl_master ORDER BY gl_name"; $result_g =mysql_query($sql_g); while ($data_g=mysql_fetch_assoc($result_g)){?>
		   <option value ="<?php echo $data_g['gl_id'] ?>" ><?php echo $data_g['gl_name'] ?></option>  <?php } ?>  
		   </select>
									</div>
								</div>
								</div>
								 <div class="col-sm-3">		
								<div class="form-group form-group-lg">
									  <div class="form-line">
							<h4 class="font-bold col-pink">दिनांक निवडा  </h4><input type="date" class="form-control" name="tran_date" tabindex="2" required>
									</div>
									</div>
								</div>
							 	
								<div class="col-sm-3">					
								<div class="form-group form-group-lg">
									<div class="form-line">
		<h4 class="font-bold col-pink"> रक्कम  </h4><input type="number" class="form-control" name="cr_amt"  tabindex="3" required>
 									</div>
							   </div>
							   </div>
							  <div class="col-sm-3">					
								<div class="form-group form-group-lg">
									<div class="form-line">
		<h4 class="font-bold col-pink">तपशील नोंद   </h4><input type="text" class="form-control" name="extra_note"  tabindex="3"  >
 									</div>
							   </div>
							   </div>
							</div>
							</div>                   
							<div class="modal-footer">
								<input type="submit"  tabindex="4" name="save" class="btn btn-primary waves-effect" value=" नावे नोंद करा ">
								<button type="button" class="btn btn-primary waves-effect" data-dismiss="modal"> बंद करा </button>
							</div>
						 </form>
					</div>
				</div>
            </div>
			<?php 
			}
			else if($role == "CA") 
			{	
			?>
			<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
							<?php	
							$db->sql("SELECT * FROM tbl_school_details td,tbl_login tl where td.id=tl.id and td.id='$id'");
							$res = $db->getResult();
							foreach($res as $x) 
								{
								$school_name=$x['school_name'];
								$school_address=$x['school_address'];
								$no_of_teaching_staff = $x['no_of_teaching_staff'];
								$no_of_non_teaching_staff	= $x['no_of_non_teaching_staff'];
								$no_of_peon	= $x['no_of_peon'];
								$no_of_student	= $x['no_of_student'];
								$name_of_head_master	= $x['name_of_head_master'];
								$contact_no_head_master	= $x['contact_no_head_master'];
								$name_of_head_clark	= $x['name_of_head_clark'];
								$contact_no_head_clark	= $x['contact_no_head_clark'];
								$username=$x['UserName'];
								$password=$x['Password'];
								}
							?>
							<div class="modal-body">
							<form  method="POST" action="superadminactions.php">
							<input type="hidden" name="saction" value="update">
							<input type="hidden" name="id" value="<?php echo $id; ?>"> 
									
								<h2 class="block-header">SCHOOL INFORMATION</h2>
                            <div class="row clearfix">
                                <div class="col-sm-6">		
 								<div class="form-group  form-group-lg">
									  <div class="form-line">
				<h4 class="font-bold col-pink"> School Name </h4> <input type="text" class="form-control" name="school_name" value="<?php echo $school_name; ?>" disabled="disabled" >
									</div>
								</div>
								</div>
								 <div class="col-sm-6">		
								<div class="form-group form-group-lg">
									  <div class="form-line">
							<h4 class="font-bold col-pink">School Address </h4><input type="text" class="form-control" name="school_address" value="<?php echo $school_address; ?>" disabled>
									</div>
									</div>
								</div>
							 	
								<div class="col-sm-3">					
								<div class="form-group form-group-lg">
									<div class="form-line">
		<h4 class="font-bold col-pink">Total Teaching Staff </h4><input type="number" class="form-control" name="no_of_teaching_staff" value="<?php echo $no_of_teaching_staff; ?>" disabled>
 									</div>
							   </div>
							   </div>
							   <div class="col-sm-3">	
								<div class="form-group form-group-lg">
									<div class="form-line">
						<h4 class="font-bold col-pink">Total Non Teaching Staff </h4><input type="number" class="form-control" name="no_of_non_teaching_staff" value="<?php echo $no_of_non_teaching_staff; ?>" disabled>
									</div>
							   </div>
							   </div>
							   <div class="col-sm-3">	
							   <div class="form-group form-group-lg">
									<div class="form-line">
								<h4 class="font-bold col-pink">	Total Peons </h4><input type="number" class="form-control" name="no_of_peon" value="<?php echo $no_of_peon; ?>"disabled>
									</div>
							   </div>
							   </div>
							   <div class="col-sm-3">	
							   <div class="form-group form-group-lg">
									<div class="form-line">
								<h4 class="font-bold col-pink">		Total Students </h4><input type="number" class="form-control" name="no_of_student" value="<?php echo $no_of_student; ?>" disabled>
 									</div>
							   </div>
							   </div>
							 
							    <div class="col-sm-6">	
							   <div class="form-group form-group-lg">
									<div class="form-line">
									<h4 class="font-bold col-teal">	Head Master Name </h4> <input type="text" class="form-control" name="name_of_head_master" value="<?php echo $name_of_head_master; ?>" disabled>
									
									</div>
							   </div>
							   </div>
							   <div class="col-sm-6">	
 							   <div class="form-group form-group-lg">
									<div class="form-line">
									<h4 class="font-bold col-teal">	Head Master Contact No </h4><input type="number" class="form-control" maxlength="10" name="contact_no_head_master" value="<?php echo $contact_no_head_master; ?>" disabled size="10">
							
									</div>
							   </div>
							   </div>
							<div class="col-sm-6">	
								<div class="form-group form-group-lg">
									<div class="form-line">
									<h4 class="font-bold col-teal">	Head Clerk Name </h4><input type="text" class="form-control" name="name_of_head_clark" value="<?php echo $name_of_head_clark; ?>" disabled>
									</div>
							   </div>
							   </div>
							<div class="col-sm-6">	
							   <div class="form-group form-group-lg">
									<div class="form-line">
								<h4 class="font-bold col-teal">		Head Clerk Contact No </h4><input type="number" class="form-control"  maxlength="10" name="contact_no_head_clark" value="<?php echo $contact_no_head_clark; ?>" disabled size="10">
									</div>
							   </div>
							   </div>
						   
						  
						</div>                       
					</div>
				</div>
            </div>
			<?php
			}
			?>
   </section>
	<?php 
	if(isset($_GET['msg'])) 
		{ 
		$param=$_GET['msg'];
		
		if($param == "delete")
			{
			echo "<script>alert('Details Deleted Successfully....'); </script>";
			}  	
		}
		?>
		
    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>
	
	<!-- Bootstrap Notify Plugin Js -->
    <script src="plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
	<script src="js/pages/ui/modals.js"></script>
	<script src="js/pages/ui/dialogs.js"></script>
	<script src="js/pages/ui/notifications.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>
	
    <!-- Demo Js -->
    <script src="js/demo.js"></script>
	
</body>

</html>