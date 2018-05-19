<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title><?php include ('title.php'); ?></title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="stylesheet" type="text/css" href="css/loginstyle.css" />
		<script src="js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style>
		<![endif]-->
		<style>
			
			body {
				background: #563c55 url(images/b.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
		</style>
		
			<script type="text/javascript" src="js/customalert.js"></script>
		<link rel="stylesheet" type="text/css" href="css/customalert.css" />
				
		<script type="text/javascript">

		function setColor(el, bg) 
		{
		  if (el.style) el.style.backgroundColor = bg;
		}
		
		function checkInput(form) 
		{
		  var bgBad = "white";
		  var bgGood = "lightyellow";
		  var valid = true;
		  var errmsg="";
		  
		  
		   /* Date validation */
		  if (form.UserName.value == "") {
		    valid = false;
		    setColor(form.UserName, bgBad);
		  
		  } else {
		    setColor(form.UserName, bgGood);
		  }
		 
		  /* District validation */
		  if (form.password.value == "") {
		    valid = false;
		    setColor(form.password, bgBad);
		  
		  } else {
		    setColor(form.password, bgGood);
		  }
		
		  
		errmsg=errmsg+"\n Please fill the fields marked with * ";
		
		if (!valid) 
			createCustomAlert(errmsg,"","Errors");
			
			
		return valid;
		}
	</script>
    </head>
    <body>
    <br><br><br><br><br><br>
    
        <div class="container">
			<section class="main">
			<p align=center><font color="yellow" face="calibri"><b>Invalid Username / Password </b></font></p>
				<form class="form-3" name="login" method="post" action="login.php" onSubmit="return checkInput(this)">
												
				    <p class="clearfix">
				        <label for="login">*Username</label>
				        <input type="text" name="UserName" id="UserName">
				    </p>
				    <p class="clearfix">
				        <label for="password">*Password</label>
				        <input type="password" name="password" id="password"> 
				    </p>
				    <p class="clearfix">
				    </p>
				    <p class="clearfix" align=center>
				        <input type="submit" name="submit" value="Login">
				    </p>       
				</form>
			</section>
	      </div>
    </body>
</html>