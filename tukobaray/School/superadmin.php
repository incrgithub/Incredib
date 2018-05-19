<?php error_reporting(0); ?>
<!DOCTYPE html>
<?php
include('classes/crud.php');
$db = new Database();
$db->connect();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Super User Admin</title>
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

<body class="theme-red">
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
          
            <!-- Basic Examples -->
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
							$db->sql("SELECT * FROM membership");
							$res = $db->getResult();
							foreach($res as $x) 
								{
								$mem_name=$x['mem_name'];
								$mem_add=$x['mem_add'];
								$mem_mobile = $x['mem_mobile'];
								$mem_edu	= $x['mem_edu'];
								$mem_gender	= $x['mem_gender'];
								$mem_dob	= $x['mem_dob'];
							 
								}
							?>
							<div class="modal-body">
								<form  method="POST" action="superadminactions.php">
									  <input type="hidden" name="action" value="update">
									    <input type="hidden" name="id" value="<?php echo $id; ?>" > 
										
										<div class="form-group form-float">
											  <div class="form-line">
												 संपूर्ण नाव <input type="text" class="form-control" name="mem_name" value="<?php echo $mem_name; ?>" required >
								
											</div>
										</div>
										
										<div class="form-group form-float">
											  <div class="form-line">
												पत्ता <input type="text" class="form-control" name="mem_add" value="<?php echo $mem_add; ?>" required>
											
											</div>
										</div>
																
										<div class="form-group form-float">
											<div class="form-line">
												मोबाईल नं.<input type="number" class="form-control" name="mem_mobile" value="<?php echo $mem_mobile; ?>" required>
								
											</div>
									   </div>
									   
										<div class="form-group form-float">
											<div class="form-line">
												लिंग <input type="number" class="form-control" name="mem_gender" value="<?php echo $mem_gender; ?>" required>
									
											</div>
									   </div>
									   
									   <div class="form-group form-float">
											<div class="form-line">
												जन्म दिनांक <input type="number" class="form-control" name="mem_dob" value="<?php echo $mem_dob; ?>"required>
							
											</div>
									   </div>
									   
									   <div class="form-group form-float">
											<div class="form-line">
												शिक्षण <input type="number" class="form-control" name="mem_edu" value="<?php echo $mem_edu; ?>" required>
												
											</div>
									   </div>
									   
									   
									   
								</div>                       
								<div class="modal-footer">
									<input type="submit" name="update" class="btn btn-primary waves-effect" value="UPDATE">
									<button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">CLOSE</button>
								</div>
							 </form>
							 
							 
							 
							</div>
							<?php
							}
						}	
						?>	
						
                        <div class="header">
                            <h2>
                                सभासद यादी पहा 
                            </h2>
						<div align="right">	
					
						 </div>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
								<?php
								$db->select('membership','*',NULL,NULL,NULL,NULL); 
								$rs = $db->getResult();
								echo "<thead>";
									echo "<tr>";
										echo "<th>संपूर्ण नाव </th>";
										echo "<th>पत्ता </th>";
										echo "<th>मोबाईल नं.</th>";
										echo "<th>लिंग </th>";
										echo "<th>जन्म दिनांक </th>";
										echo "<th>शिक्षण </th>";
										echo "<th>Edit</th>";
										echo "<th>Delete</th>";
									echo "</tr>";
								echo "</thead>";
							
								echo "<tbody>";
								foreach($rs as $x) 
									{
									 echo "<tr>";  
									     $id=$x['id'];
										 echo  "<td>". $x['mem_name']."</td>";
										 echo  "<td>". $x['mem_add']."</td>";
										 echo  "<td>". $x['mem_mobile']."</td>";
										 echo  "<td>". $x['mem_gender']."</td>";
										 echo  "<td>". $x['mem_dob']."</td>";
										 echo  "<td>". $x['mem_edu']."</td>";
										 echo  "<td><a href='superadmin.php?id=$id&msg=edit'><img src='images/edit.png'></a></td>";
										 echo  "<td><a href='superadminactions.php?id=$id&msg=delete'><img src='images/cross.png'></a></td>";
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
            <!-- #END# Basic Examples -->

    </section>

	<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="defaultModalLabel">School Details</h4>
				</div>
				<div class="modal-body">
					<form id="form_advanced_validation" method="POST" action="superadminactions.php">
					   <input type="hidden" name="action" value="save">
					  	<div class="form-group form-float">
							  <div class="form-line">
								<input type="text" class="form-control" name="school_name" required>
								<label class="form-label">School Name</label>
							</div>
						</div>
						
						<div class="form-group form-float">
							  <div class="form-line">
								<input type="text" class="form-control" name="school_address" required>
								<label class="form-label">School Address</label>
							</div>
						</div>
												
						<div class="form-group form-float">
							<div class="form-line">
								<input type="number" class="form-control" name="no_of_teaching_staff" required>
								<label class="form-label">No Of Teaching Staff</label>
							</div>
					   </div>
					   
						<div class="form-group form-float">
							<div class="form-line">
								<input type="number" class="form-control" name="no_of_non_teaching_staff" required>
								<label class="form-label">No Of Non Teaching Staff</label>
							</div>
					   </div>
					   
					   <div class="form-group form-float">
							<div class="form-line">
								<input type="number" class="form-control" name="no_of_peon" required>
								<label class="form-label">No Of Peons</label>
							</div>
					   </div>
					   
					   <div class="form-group form-float">
							<div class="form-line">
								<input type="number" class="form-control" name="no_of_student" required>
								<label class="form-label">No Of Students</label>
							</div>
					   </div>
					   
					   <div class="form-group form-float">
							<div class="form-line">
								<input type="text" class="form-control" name="name_of_head_master" required>
								<label class="form-label">Head Master Name</label>
							</div>
					   </div>
					   
					   <div class="form-group form-float">
							<div class="form-line">
								<input type="text" class="form-control" name="contact_no_head_master" required size="10">
								<label class="form-label">Head Master Contact No</label>
							</div>
					   </div>
					   
					    <div class="form-group form-float">
							<div class="form-line">
								<input type="text" class="form-control" name="name_of_head_clark" required>
								<label class="form-label">Head Clerk Name</label>
							</div>
					   </div>
					   
					   <div class="form-group form-float">
							<div class="form-line">
								<input type="text" class="form-control" name="contact_no_head_clark" required size="10">
								<label class="form-label">Head Clerk Contact No</label>
							</div>
					   </div>
					   
					   <div class="form-group form-float">
							<div class="form-line">
								<input type="text" class="form-control" name="username" required>
								<label class="form-label">Username</label>
							</div>
					   </div>
					   
					   <div class="form-group form-float">
							<div class="form-line">
								<input type="password" class="form-control" name="password" required size="10">
								<label class="form-label">Password</label>
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
			
		if($param == "save")
			{
			echo "<script>alert('Details Saved Successfully....'); </script>";
			}  
		if($param == "update")
			{
			echo "<script>alert('Details Updated Successfully....'); </script>";
			}  	
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