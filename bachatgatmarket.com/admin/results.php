<?php include('logincommon.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Complaint Manager</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT CSS -->
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/customalert.js"></script>
    <link rel="stylesheet" type="text/css" href="css/customalert.css" />
    <script src="assets1/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets1/js/dataTables/dataTables.bootstrap.js"></script>
	
          <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
			
		
    </script>
	
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
 
    <script src="assets/js/custom.js"></script>

</head>
<body>
     <section class="sec-logo">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img src="assets/img/logo-vrinda.png" alt="Free Best Admin Made Of Bootstrap" />
                </div>
                <div class="col-md-7">
                </div>
                <div class="col-md-3 quick-info">
                  
                  
                </div>
            </div>
        </div>
    </section>
    <!--LOGO SECTION END-->
     <section class="sec-menu" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
              <span class="menu-open-icon">  <i class="fa fa-bars pull-left fa-2x b-clr"   ></i> </span>  <i class="pull-right"> बचतगट कक्ष  </i>   
                </div>
            </div>
        </div>
    </section>
       <div id="side-menu"  >

         <ul>
             <li style="border-bottom:0px;">
             <a href="#" title="close"> <i class="fa fa-close fa-2x menu-close-icon b-clr"></i></a>
            </li>
            <li>
             <a href="results.php" title="Manager"> <i class="fa fa-home fa-2x "></i> नवीन नोंदणी  पहा  </a>
            </li>
			<li>
             <a href="completed.php" title="Manager"> <i class="fa fa-home fa-2x "></i>निकाली काढलेल्या तक्रारी </a>
            </li>
	        <li>
              <a href="logout.php" title="Logout"> <i class="fa fa-plug fa-2x "></i>बाहेर पडा   </a>
            </li>
        </ul>
           
    </div>
    <!--MENU SECTION END-->
     <div class="content-wrapper">
        <div class="container">
            <div class="row">
				<div class="col-md-12">
					<br>
					<div class="row">
						<div class="col-md-12">
							<!-- Advanced Tables -->
							<div class="panel panel-default">
								<div class="panel-heading">
									 <h3>नवीन बचत गट तपशील </h3>
								</div>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped table-bordered table-hover" >
											<thead>
												<tr>
													<td><h4>अध्यक्ष  नाव </h4></td>
													<td><h4>मोबाईल नं.</h4></td>
													<td><h4>गटाचा विभाग </h4></td>
													<td><h4>पत्ता </h4></td>
													<td><h4> तपशील </h4></td>
													<td><h4>दिनांक </h4></td>
													<td><h4>Delete</h4></td>
												 </tr>
											</thead>
											<tbody>
											<?php
											
											include('conn.php');
											$fetch_details="select * from tbl_complaint_dtls where status='Pending'";	
											
											$details_rs= mysql_query($fetch_details);
								
											while($details_row = mysql_fetch_array($details_rs)) 
												{
												$id=$details_row[0];
												$dats=$details_row[8];
												$pdates=date('d-m-Y', strtotime($dats));
												echo "<tr>";
												echo "<td><a href='compdetails.php?id=$id&msg=process'>".$details_row[1]."</a></td>";
												echo "<td>".$details_row[2]."</td>";
												echo "<td>".$details_row[3]."</td>";
												echo "<td>".$details_row[4]."</td>";
												echo "<td>".$details_row[5]."</td>";
												echo "<td>".$pdates."</td>";
												echo "<td><a href='results.php?id=$id&msg=delete'><img src='images/cross.png'></a></td>";
												echo "</tr>";
												} 
											?>
											</tbody>
										</table>
									</div>
							   </div>
							</div>
						</div>
					</div>
					<?php
					include('conn.php');
					
					if(isset($_GET['msg']))
					{
					$param=$_GET['msg'];
					
						if($param == "delete")
						{
							$id=$_GET['id'];
							delete($id);
						}
						
						if($param == "update")
						{
							$id=$_POST['id'];
							$actioncomments=$_POST['actioncomments'];
							update($id,$actioncomments);
						}	
					}
					
					function delete($id)
						{
						mysql_query("delete from tbl_complaint_dtls where id='$id'") or die(mysql_error());
						echo "<script>createCustomAlert('Complaint deleted Successfully..','','SUCCESS');</script>";
						}	
						
					function update($id,$actioncomments)
						{
						$updatesql="UPDATE tbl_complaint_dtls SET action_comments='$actioncomments',status='Completed' WHERE id='$id' ";
						mysql_query($updatesql) or die(mysql_error());
						echo "<script>createCustomAlert('Complaint Processed Successfully..','','SUCCESS');</script>";
						}	
							
					?>	
					
				</div>  
			</div>
		</div>
     <!-- CONTENT-WRAPPER SECTION END-->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; 2017 |<a href="http://incredibletechsolve.com/" target="_blank"  > Designed by : Incredible Tech Solutions</a> 
                </div>

            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
</body>
</html>
