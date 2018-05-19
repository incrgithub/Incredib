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
						if(isset($_GET['msg'])) 
						{ 
						$param=$_GET['msg'];
					
						if($param == "edit")
							{
							$id=$_GET['id'];
						
							$db->select('tbl_bank_master','*',NULL,"bank_id='$id'",NULL); 
							$res = $db->getResult();
							foreach($res as $x) 
								{
								$bank_name = $x['bank_name'];
								$bank_branch  = $x['bank_branch'];
								$entry_log  = $x['entry_log'];
 								}
							?>							   <div class="header">   <h2>  बँक तपशील   </h2>
 							<div align="right">	
 							 <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal1">नवीन बँक नोंदणी </button>
							 </div>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
								<?php
								 	$id=$_GET['id'];
								$db->select('tbl_bank_master','*',"school_id='$id'",NULL,NULL,NULL,NULL,NULL,NULL,NULL); 
								$rs = $db->getResult();
								echo "<thead>";
									echo "<tr>";
										echo "<th>बँक नाव </th>";
										echo "<th>बँक शाखा  </th>";
										echo "<th>खाते नाव  </th>";
 										echo "<th>खाते नंबर </th>";
 										echo "<th>बँक IFSC </th>";
 									echo "</tr>";
								echo "</thead>";
							
								echo "<tbody>";
								foreach($rs as $x) 
									{
									 echo "<tr>";  
									     $bank_id=$x['bank_id'];
										 echo  "<td>". $x['bank_name']."</td>";
										 echo  "<td>". $x['bank_branch']."</td>";
										 echo  "<td>". $x['acc_name']."</td>";
										 echo  "<td>". $x['acc_number']."</td>";
										 echo  "<td>". $x['acc_IFSC']."</td>";
 										 echo  "<td><a href='schooladmin_bank.php?id=$bank_id&msg=edit'><img src='images/edit.png'></a></td>";
 									echo "</tr>"; 
									}
								echo "</tbody>"; 
								?>
						    </table>
							
                        </div>
						<?php
						//	}
						//}	
						?>	

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
   <div class="modal fade" id="defaultModal1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="defaultModalLabel">नवीन बँक नोंदणी </h4>
				</div>
				<div class="modal-body">
					<form id="form_advanced_validation" method="POST" action="superadminactions.php">
					<input type="hidden" name="sbaction" value="save">
									  <input type="hidden" name="id" value="<?php echo $id; ?>" > 
						<div class="form-group form-float">
							  <div class="form-line">
								<input type="text" class="form-control" name="bank_name" required>
								<label class="form-label">बँक नाव  </label>
							</div>
						</div>
						
							<div class="form-group form-float">
							  <div class="form-line">
								<input type="text" class="form-control" name="bank_branch" required>
								<label class="form-label">बँक शाखा नाव   </label>
							</div>
						</div>
						<div class="form-group form-float">
							  <div class="form-line">
								<input type="text" class="form-control" name="acc_name" required>
								<label class="form-label">बँक खाते नाव </label>
							</div>
						</div>
							<div class="form-group form-float">
							  <div class="form-line">
								<input type="text" class="form-control" name="acc_number" required>
								<label class="form-label">खाते नंबर </label>
							</div>
						</div>
							<div class="form-group form-float">
							  <div class="form-line">
								<input type="text" class="form-control" name="bank_IFSC" required>
								<label class="form-label">बँक IFS Code  </label>
							</div>
						</div>
					 
				</div>                       
				<div class="modal-footer">
					<input type="submit" name="save" class="btn btn-primary waves-effect" value="SAVE">
					<button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">CLOSE</button>
				</div>
			 </form>
            </div>
        </div>
     </div>	
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