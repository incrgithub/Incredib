<?php include('logincommon.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Result SMS System</title>
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

     <!-- DATA TABLE SCRIPTS -->
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
		
		function checkInput(form) 
		{
			  var bgBad = "#FF9999";
			  var bgGood = "#66FFCC";
			  var valid = true;
			  var errmsg="";
			  
			  /* Mobile No  validation */ 		  
			 if (form.mobileno.value == "") {
				error_mobileno.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Mobile No Cannot be blank";
				setTimeout(function () {error_mobileno.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_mobileno.innerHTML ="";
				setColor(form.mobileno, bgGood);
			  }
			  
			   /* Subject1  validation */ 		  
			 if (form.subject1.value == "") {
				error_subject1.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Subject1 Marks Cannot be blank";
				setTimeout(function () {error_subject1.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_subject1.innerHTML ="";
				setColor(form.subject1, bgGood);
			  }
		       
			/* Subject2  validation */ 		  
			 if (form.subject2.value == "") {
				error_subject2.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Subject2 Marks Cannot be blank";
				setTimeout(function () {error_subject2.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_subject2.innerHTML ="";
				setColor(form.subject2, bgGood);
			  }	

			/* Subject3  validation */ 		  
			 if (form.subject3.value == "") {
				error_subject3.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Subject3 Marks Cannot be blank";
				setTimeout(function () {error_subject3.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_subject3.innerHTML ="";
				setColor(form.subject3, bgGood);
			  }				  
			   
			     /* Subject4  validation */ 		  
			 if (form.subject4.value == "") {
				error_subject4.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Subject4 Marks Cannot be blank";
				setTimeout(function () {error_subject4.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_subject4.innerHTML ="";
				setColor(form.subject4, bgGood);
			  }
		       
			/* Subject5  validation */ 		  
			 if (form.subject5.value == "") {
				error_subject5.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Subject5 Marks Cannot be blank";
				setTimeout(function () {error_subject5.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_subject5.innerHTML ="";
				setColor(form.subject6, bgGood);
			  }	

			/* Subject6  validation */ 		  
			 if (form.subject6.value == "") {
				error_subject6.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Subject6 Marks Cannot be blank";
				setTimeout(function () {error_subject6.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_subject6.innerHTML ="";
				setColor(form.subject6, bgGood);
			  }	 
			return valid;
		}	
		
			
		function update()
		{
		var b=new Boolean();	
		b=checkInput(document.updatemarks);
		if (!b) 
			{
			ERROR.innerHTML ="<h4><img src='images/cross.png' border='0'>&nbsp;&nbsp;Error : Please correct the fields and try submitting again</h4>";
			setTimeout(function () {ERROR.innerHTML =""}, 12000);
			}
		else
			{
			document.updatemarks.action="results.php?msg=update";
			document.updatemarks.submit();			
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
                    <i>www.damajicollege.com</i> <br />
                 </div>
            </div>
        </div>
    </section>
    <!--LOGO SECTION END-->
     <section class="sec-menu" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
              <span class="menu-open-icon">  <i class="fa fa-bars pull-left fa-2x b-clr"   ></i> </span>  <i class="pull-right"> Wecome To Result SMS System </i>   
                </div>
            </div>
        </div>
    </section>
       <div id="side-menu"  >

         <ul  >
             <li style="border-bottom:0px;">
             <a href="#" title="close"> <i class="fa fa-close fa-2x menu-close-icon b-clr"></i></a>
            </li>
            <li>
             <a href="upload.php" title="Upload"> <i class="fa fa-home fa-2x "></i>Upload Results </a>
            </li>
			 <li>
              <a href="results.php" title="Results"><i class="fa fa-rocket fa-2x "></i>View Results  </a>
            </li>
            <li>
              <a href="logout.php" title="Logout"> <i class="fa fa-plug fa-2x "></i>Logout  </a>
            </li>
           
            
        </ul>
           
    </div>
    <!--MENU SECTION END-->
     <div class="content-wrapper">
         <div class="container">
            <div class="row">
			<br><br>
				<div class="col-md-12">
					<div class="panel panel-danger">
                        <div class="panel-heading">
                          <h3>Edit a Record</h3>
                        </div>
                        <div class="panel-body">
                            <form name="updatemarks"  method="post">
                                 <?php
                                 $id=$_GET['id'];
                                 
                                 include('conn.php');
                                 
                                 $subject_fetch_details="select * from tbl_marks where id='$id'";
                                 	
		  	         $subject_details_rs= mysql_query($subject_fetch_details);
		  	         
		  	         while($subject_details_row = mysql_fetch_array($subject_details_rs)) 
					{
					$mobileno=$subject_details_row[1];
					$subject1 = $subject_details_row[2];
					$subject2 = $subject_details_row[3];
					$subject3 = $subject_details_row[4];
					$subject4 = $subject_details_row[5];
					$subject5 = $subject_details_row[6];
					$subject6 = $subject_details_row[7];	
					$subject7 = $subject_details_row[8];
					$subject8 = $subject_details_row[9];	
					} 
                                 ?>
				<DIV id="ERROR" style="color:red;font-weight:bold;"></DIV>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
        				<div class="form-group">
						<p class="help-block"><DIV id="error_mobileno" style="color:red;"></DIV></p>
						<label>Mobile No :&nbsp;&nbsp;</label><input name="mobileno" type="text" id="mobileno" maxlength="10" value="<?php echo $mobileno; ?>"/>
						
					</div>
					<div class="form-group">
						<p class="help-block"><DIV id="error_subject1" style="color:red;"></DIV></p>
						<label>Subject1 :&nbsp;&nbsp;</label><input name="subject1" type="text" id="subject1" maxlength="3" value="<?php echo $subject1; ?>"/>
					</div>
					<div class="form-group">
						<p class="help-block"><DIV id="error_subject2" style="color:red;"></DIV></p>
						<label>Subject2 :&nbsp;&nbsp;</label><input name="subject2" type="text" id="subject2" maxlength="3"  value="<?php echo $subject2; ?>"/>
					</div>
					<div class="form-group">
						<p class="help-block"><DIV id="error_subject3" style="color:red;"></DIV></p>
						<label>Subject3 :&nbsp;&nbsp;</label><input name="subject3" type="text" id="subject3" maxlength="3"  value="<?php echo $subject3; ?>"/>
					</div>
					<div class="form-group">
						<p class="help-block"><DIV id="error_subject4" style="color:red;"></DIV></p>
						<label>Subject4 :&nbsp;&nbsp;</label><input name="subject4" type="text" id="subject4" maxlength="3"  value="<?php echo $subject4; ?>"/>
					</div>
					<div class="form-group">
						<p class="help-block"><DIV id="error_subject5" style="color:red;"></DIV></p>
						<label>Subject5 :&nbsp;&nbsp;</label><input name="subject5" type="text" id="subject5" maxlength="3"  value="<?php echo $subject5; ?>"/>
					</div>
					<div class="form-group">
						<p class="help-block"><DIV id="error_subject6" style="color:red;"></DIV></p>
						<label>Subject6 :&nbsp;&nbsp;</label><input name="subject6" type="text" id="subject6" maxlength="3"  value="<?php echo $subject6; ?>"/>
					</div>
					<div class="form-group">
						<p class="help-block"><DIV id="error_subject6" style="color:red;"></DIV></p>
						<label>Subject7 :&nbsp;&nbsp;</label><input name="subject7" type="text" id="subject7" maxlength="3"  value="<?php echo $subject7; ?>"/>
					</div>
					<div class="form-group">
						<p class="help-block"><DIV id="error_subject6" style="color:red;"></DIV></p>
						<label>TEST No  :&nbsp;&nbsp;</label><input name="subject8" type="text" id="subject8" maxlength="3"  value="<?php echo $subject8; ?>"/>
					</div>
					<a href="#" class="btn btn-danger"  onClick="update();">Update</a>
                            </form>
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
