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
			document.processcomplaint.action="results.php?msg=update";
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
              <span class="menu-open-icon">  <i class="fa fa-bars pull-left fa-2x b-clr"   ></i> </span>  <i class="pull-right"> तक्रार निवारण कक्ष  </i>   
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
							
					
					<?php
					if(isset($_GET['msg']))
					{
					$param=$_GET['msg'];
					if($param == "process")
						{
					?>
					<div class="panel panel-danger">
						<div class="panel-heading">
						  <h3>तक्रार निकाली काढा </h3>
						</div>
						<div class="panel-body">
							<form name="processcomplaint"  method="post">
								 <?php
								 $id=$_GET['id'];
								 
								 include('conn.php');
								 
								 $fetch_details="select * from tbl_complaint_dtls where id='$id'";
									
								 $details_rs= mysql_query($fetch_details);
								 
								 while($details_row = mysql_fetch_array($details_rs)) 
									{
									$name=$details_row[1];
									$mobileno = $details_row[2];
									$dept = $details_row[3];
									$address = $details_row[4];
									$comments = $details_row[5];
									} 
								?>

								<DIV id="ERROR" style="color:red;font-weight:bold;"></DIV>
								<input type="hidden" name="id" value="<?php echo $id; ?>">
								<div class="form-group">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
											 
								<tr>
							<td><h4>तक्रारदाराचे नाव </h4></td><td><h4><?php echo $name; ?>  </h4></td></tr>
							<tr><td><h4>मोबाईल नं.</h4></td><td><h4><?php echo $mobileno ; ?></h4></td></tr>
							<tr><td><h4>तक्रार विभाग </h4></td><td><h4><?php echo $dept; ?></h4></td></tr>
						        <tr><td><h4>पत्ता </h4></td><td><h4><?php echo $address ; ?> </h4></td></tr>
							<tr><td><h4>तक्रार तपशील </h4></td><td><h4><?php echo $comments ; ?></h4></td></tr>
							<tr><td><h4>दिनांक </h4></td><td><h4>  </h4></td>
 												 </tr>
											 
</table>
									 
								</div>
								 
								 
								
								 
								
								<div class="form-group">
									<p class="help-block"><DIV id="error_actioncomments" style="color:red;"></DIV></p>
									<label><h3>कृती केल्याचा  तपशील  :&nbsp;&nbsp; </h3></label>
									<input name="actioncomments" type="text" id="actioncomments" class="form-control"/>
								</div>
								<a href="#" class="btn btn-danger"  onClick="process();"> तक्रार निकाली काढा </a>
								</form>
						</div>
					</div>
					<?php
						}
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
                   &copy; 2016 |<a href="http://incredibletechsolve.com/" target="_blank"  > Designed by : Incredible Tech Solutions</a> 
                </div>

            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
</body>
</html>