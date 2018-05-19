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
			
		function setColor(el, bg) 
		{
		  if (el.style) el.style.backgroundColor = bg;
		}
		
		function checkInsert(form) 
		{
			  var bgBad = "#FF9999";
			  var bgGood = "#66FFCC";
			  var valid = true;
			  var errmsg="";
			  
			  /* Action Comments Validation */ 		  
			 if (form.actioncomments.value == "") {
				error_actioncomments.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Action Comments Cannot be blank";
				setTimeout(function () {error_actioncomments.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_actioncomments.innerHTML ="";
				setColor(form.actioncomments, bgGood);
			  }
			  
			return valid;
		}	
		
			
		
		function process()
		{
		var b=new Boolean();	
		b=checkInsert(document.processcomplaint);
		if (!b) 
			{
			ERROR.innerHTML ="<h4><img src='images/cross.png' border='0'>&nbsp;&nbsp;Error : Please correct the fields and try submitting again</h4>";
			setTimeout(function () {ERROR.innerHTML =""}, 12000);
			}
		else
			{
			document.processcomplaint.action="results.php?msg=process";
			document.processcomplaint.submit();			
			}
		}
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
              <span class="menu-open-icon">  <i class="fa fa-bars pull-left fa-2x b-clr"   ></i> </span>  <i class="pull-right"> तक्रार निवारण कक्ष </i>   
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
             <a href="results.php" title="Manager"> <i class="fa fa-home fa-2x "></i> नवीन तक्रारी पहा  </a>
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
									 <h3>निकाली काढलेल्या तक्रारी </h3>
								</div>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped table-bordered table-hover" id="dataTables-example">
											<thead>
												<tr>
													<th>&#2340;&#2325;&#2381;&#2352;&#2366;&#2352;&#2342;&#2366;&#2352;&#2366;&#2330;&#2375; &#2344;&#2366;&#2357;</th>
													<th>&#2350;&#2379;&#2348;&#2366;&#2312;&#2354; &#2344;&#2306;&#2348;&#2352;</th>
													<th>&#2340;&#2325;&#2381;&#2352;&#2366;&#2352; &#2357;&#2367;&#2349;&#2366;&#2327;</th>
													<th>&#2346;&#2340;&#2381;&#2340;&#2366;</th>
													<th>&#2340;&#2325;&#2381;&#2352;&#2366;&#2352; &#2340;&#2346;&#2358;&#2368;&#2354;</th>
													<th>&#2342;&#2367;&#2344;&#2366;&#2306;&#2325;</th>
													<th>Action Comments</th>
												 </tr>
											</thead>
											<tbody>
											<?php
											
											include('conn.php');
											$fetch_details="select * from tbl_complaint_dtls where status='Completed'";	
											
											$details_rs= mysql_query($fetch_details);
								
											while($details_row = mysql_fetch_array($details_rs)) 
												{
												$id=$details_row[0];
												$dats=$details_row[8];
												$pdates=date('d-m-Y', strtotime($dats));
												echo "<tr>";
												echo "<td>".$details_row[1]."</td>";
												echo "<td>".$details_row[2]."</td>";
												echo "<td>".$details_row[3]."</td>";
												echo "<td>".$details_row[4]."</td>";
												echo "<td>".$details_row[5]."</td>";
												echo "<td>".$pdates."</td>";
												echo "<td>".$details_row[7]."</td>";
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
				</div>  
			</div>
		</div>
     <!-- CONTENT-WRAPPER SECTION END-->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; 2016 |<a href="http://incredibletechsolve.com/" target="_blank"  > Designed by : Incredible Tech Solutions</a> 
                </div>

            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
</body>
</html>
