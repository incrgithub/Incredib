<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Website Development,Web Application Development,Mobile Application Development</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<script type="text/javascript" src="js/customalert.js"></script>
	<link rel="stylesheet" type="text/css" href="css/customalert.css" />
	
<script type="text/javascript">
		
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
		  
		 /* Name Validation */ 		  
		 if (form.name.value == "") {
			error_name.innerHTML ="<img src='img/delete.gif' border='0'>&nbsp;&nbsp;Please enter Your Name";
			setTimeout(function () {error_name.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_name.innerHTML ="";
			setColor(form.name, bgGood);
		  }
			  
		 /* Year Of Passing validation */ 		  
		 if (form.message.value == "") {
			error_message.innerHTML ="<img src='img/delete.gif' border='0'>&nbsp;&nbsp;Please enter Your Text Message";
			setTimeout(function () {error_message.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_message.innerHTML ="";
			setColor(form.message, bgGood);
		  }
		  
		  
		   /* Mobile No validation */ 		  
		 if (form.mobileno.value == "") {
			error_mobileno.innerHTML ="<img src='img/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Mobile No";
			setTimeout(function () {error_mobileno.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_mobileno.innerHTML ="";
			setColor(form.mobileno, bgGood);
		  }
		  
		  /* Email Id validation */ 		  
		 if (form.emailId.value == "" ) {
			error_emailId.innerHTML ="<img src='img/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Email Address";
			setTimeout(function () {error_emailId.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_emailId.innerHTML ="";
			setColor(form.emailId, bgGood);
		  } 
				  
		if (document.contactForm.emailId.value != " ")
		{
			var checkOK="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-@._";
			var checkStr = document.contactForm.emailId.value;
			var allValid = 'true';
			for (i = 0;  i < checkStr.length+1;  i++)
			{
	
			ch = checkStr.charAt(i);
				for (j = 0;  j < checkOK.length+1;  j++)
				{
					if (ch == checkOK.charAt(j))
					break;
					if (j == checkOK.length)
					{
						allValid = 'false';
						break;
					}
				}
			}
		}
	
		if(document.contactForm.emailId.value != "")
		{
			var val=document.contactForm.emailId.value ;
			var pass1=val.indexOf('@',0);
			if(pass1==-1)
			{
				error_emailId.innerHTML ="<img src='img/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";
				setTimeout(function () {error_emailId.innerHTML =""}, 10000);
				document.contactForm.emailId.value="";
				document.contactForm.emailId.focus();
				return false;
			}
		}

		if(document.contactForm.emailId.value != "")
		{
			var val=document.contactForm.emailId.value ;
			var pass2=val.indexOf('.',0);
			if(pass2==-1)
			{
				error_emailId.innerHTML ="<img src='img/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";
				setTimeout(function () {error_emailId.innerHTML =""}, 10000);
				document.contactForm.emailId.value="";
				document.contactForm.emailId.focus();
				return false;
			}
			if((pass2 - pass1)== 1)
			{
				error_emailId.innerHTML ="<img src='img/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";
				setTimeout(function () {error_emailId.innerHTML =""}, 10000);
				document.contactForm.emailId.value="";
				document.contactForm.emailId.focus();
				return false;
			}
		}

		if (!allValid)
		{
			error_emailId.innerHTML ="<img src='img/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";
			setTimeout(function () {error_aluminiemailId.innerHTML =""}, 10000);
			document.contactForm.aluminiemailId.focus();
			return false;
		}
					  
		return valid;
		}
		
		
	function isNumberKey(evt)
       {
		  var chCode = (evt.which) ? evt.which : event.keyCode
		  if (chCode != 46 && chCode > 31 
			&& (chCode < 48 || chCode > 57))
			 return false;
		  else
		  return true;
       }
		       
    function isAlpha(keyCode)
       {
         return ((keyCode >= 65 && keyCode <= 90) || keyCode == 8 || keyCode == 32 || keyCode == 9 || keyCode == 46)
       }
	   
	function save()
		{
		var b=new Boolean();	
		b=checkInput(document.contactForm);
		if (!b) 
			{
			ERROR.innerHTML ="<h4><img src='img/cross.png' border='0'>&nbsp;&nbsp;Error : Please correct the fields and try submitting again</h4>";
			setTimeout(function () {ERROR.innerHTML =""}, 12000);
			}
		else
			{
			document.contactForm.action="enquiry.php?msg=succenquiry";
			document.contactForm.submit();			
			}
		}   
	</script>

</head>
<body>
<div id="wrapper">
<?php include('top.php'); ?>
<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Contact Us</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
		<?php
			if(isset($_GET['msg']))
				{
					$param=$_GET['msg'];
					if($param=="succenquiry")
					 {
					 echo "<script>createCustomAlert('Thank You for Contacting Us..','','SUCCESS');</script>";
					 }
					
				}	 
			
			?>
	<div class="container">
		<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3>Business Office</h3>
									Incredible Tech Solutions<br>Shop No 1 Near Wale Hospital<br>Navrang Chowk,<br>Mangalwedha,Solapur-413301<br>
									Email: info@incredibletechsolve.com<br>
        						    Tel No. (02188) 220 077<br>
								
								</div>  
							</div>
						</div>
				<div class="row">
					<div class="col-md-6">
					<DIV id="ERROR" style="color:red;font-weight:bold;"></DIV>
					  <form name="contactForm" id="contactForm" method="post">
					   <h3>Enquiry</h3>
						<div class="control-group">
							<div class="controls">
								<DIV id="error_name" style="color:red;"></DIV><br>
								<input type="text" class="form-control"  placeholder="Full Name" id="name" name="name"/>
							</div>
						</div> 	
						<div class="control-group">
							<div class="controls">
								<DIV id="error_emailId" style="color:red;"></DIV><br>
								<input type="text" class="form-control" placeholder="Email" name="emailId"/>
							</div>
						</div> 	
					
						<div class="control-group">
							<div class="controls">
								<DIV id="error_mobileno" style="color:red;"></DIV><br>
								<input type="text" class="form-control" placeholder="Mobile No" name="mobileno"/>
							</div>
						</div> 

						<div class="control-group">
							<div class="controls">
								<DIV id="error_message" style="color:red;"></DIV><br>
								<textarea name="message" rows="10" cols="100" class="form-control" 
									placeholder="Message" id="message" style="resize:none"></textarea>
							</div>
						</div> 
						
					 <div id="success"> </div> <!-- For success/fail messages -->
					 <a href="#" class="btn btn-primary pull-right"  onClick="save();">Submit</a>

					  </form>
					</div>
								<div class="col-md-6">

								</div>
							</div>
	</div>
 
	</section>
	<?php include('bottom.php'); ?>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>  
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script> 
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>

 <script src="contact/jqBootstrapValidation.js"></script>
 <script src="contact/contact_me.js"></script>
</body>
</html>