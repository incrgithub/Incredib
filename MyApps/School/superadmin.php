<?php include('logincommon.php'); ?>
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
							$db->sql("SELECT * FROM tbl_school_details td,tbl_login tl where td.id=tl.id and td.id='$id'");
							$res = $db->getResult();
							foreach($res as $x) 
								{
								$school_name=$x['school_name'];
								$school_address=$x['school_address'];
								$no_of_teaching_staff = $x['no_of_teaching_staff'];
								$no_of_non_teaching_staff	= $x['no_of_teaching_staff'];
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
									  <input type="hidden" name="action" value="update">
									    <input type="hidden" name="id" value="<?php echo $id; ?>" > 
										
										<div class="form-group form-float">
											  <div class="form-line">
												 School Name<input type="text" class="form-control" name="school_name" value="<?php echo $school_name; ?>" required >
								
											</div>
										</div>
										
										<div class="form-group form-float">
											  <div class="form-line">
												School Address<input type="text" class="form-control" name="school_address" value="<?php echo $school_address; ?>" required>
											
											</div>
										</div>
																
										<div class="form-group form-float">
											<div class="form-line">
												No Of Teaching Staff<input type="number" class="form-control" name="no_of_teaching_staff" value="<?php echo $no_of_teaching_staff; ?>" required>
								
											</div>
									   </div>
									   
										<div class="form-group form-float">
											<div class="form-line">
												No Of Non Teaching Staff<input type="number" class="form-control" name="no_of_non_teaching_staff" value="<?php echo $no_of_non_teaching_staff; ?>" required>
									
											</div>
									   </div>
									   
									   <div class="form-group form-float">
											<div class="form-line">
												No Of Peons<input type="number" class="form-control" name="no_of_peon" value="<?php echo $no_of_peon; ?>"required>
							
											</div>
									   </div>
									   
									   <div class="form-group form-float">
											<div class="form-line">
												No Of Students<input type="number" class="form-control" name="no_of_student" value="<?php echo $no_of_student; ?>" required>
												
											</div>
									   </div>
									   
									   <div class="form-group form-float">
											<div class="form-line">
												Head Master Name<input type="text" class="form-control" name="name_of_head_master" value="<?php echo $name_of_head_master; ?>" required>
											
											</div>
									   </div>
									   
									   <div class="form-group form-float">
											<div class="form-line">
												Head Master Contact No<input type="text" class="form-control" name="contact_no_head_master" value="<?php echo $contact_no_head_master; ?>" required size="10">
									
											</div>
									   </div>
									   
										<div class="form-group form-float">
											<div class="form-line">
												Head Clerk Name<input type="text" class="form-control" name="name_of_head_clark" value="<?php echo $name_of_head_clark; ?>" required>
											</div>
									   </div>
									   
									   <div class="form-group form-float">
											<div class="form-line">
												Head Clerk Contact No<input type="text" class="form-control" name="contact_no_head_clark" value="<?php echo $contact_no_head_clark; ?>" required size="10">
											</div>
									   </div>
									   
									   <div class="form-group form-float">
											<div class="form-line">
												Username<input type="text" class="form-control" name="username" value="<?php echo $username; ?>" required>
												<label class="form-label"></label>
											</div>
									   </div>
									   
									   <div class="form-group form-float">
											<div class="form-line">
												Password<input type="password" class="form-control" name="password" value="<?php echo $password; ?>" required size="10">
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
                                List Of School Admins
                            </h2>
						<div align="right">	
                         <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Add School Admin </button> 
					
						 </div>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
								<?php
								$db->select('tbl_school_details','*',NULL,NULL,NULL,NULL); 
								$rs = $db->getResult();
								echo "<thead>";
									echo "<tr>";
										echo "<th>Name</th>";
										echo "<th>Address</th>";
										echo "<th>Head Master Name</th>";
										echo "<th>Head Master Contact</th>";
										echo "<th>Head Clerk Name</th>";
										echo "<th>Head Clerk Contact</th>";
										echo "<th>Edit</th>";
										echo "<th>Delete</th>";
									echo "</tr>";
								echo "</thead>";
							
								echo "<tbody>";
								foreach($rs as $x) 
									{
									 echo "<tr>";  
									     $id=$x['id'];
										 echo  "<td>". $x['school_name']."</td>";
										 echo  "<td>". $x['school_address']."</td>";
										 echo  "<td>". $x['name_of_head_master']."</td>";
										 echo  "<td>". $x['contact_no_head_master']."</td>";
										 echo  "<td>". $x['name_of_head_clark']."</td>";
										 echo  "<td>". $x['contact_no_head_clark']."</td>";
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