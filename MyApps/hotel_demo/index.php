<!DOCTYPE html>
<html>
  <head>
    <title>Admin Login</title>
    <!-- Bootstrap -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
			<script type="text/javascript">

		function setColor(el, bg) 
		{
		  if (el.style) el.style.backgroundColor = bg;
		}
		
		function checkInput(form) 
		{
		  var bgBad = "yellow";
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
		
		  
		errmsg=errmsg+"\n\n????? * ?????? ?????? ??? ??? ?????? ??????? ??? ";
		
		if (!valid) 
			createCustomAlert(errmsg,"","?????");
			
			
		return valid;
		}
	</script>	
            <style type="text/css">
<!--
.style1 {font-size: 14}
-->
            </style>
</head>
  <body id="login" background="images/map.jpg" >
    <div class="container"  >
	

      <form class="form-signin  pull-left" action="login.php" onSubmit="return checkInput(this)" method="post" >
        <h3> Welcome  ! <br>
      <?php include('name.php'); ?> </h3> 
        <input type="text" name="UserName" class="input-block-level" placeholder="User Name">
        <input type="password" name="Password"class="input-block-level" placeholder="Password">
         
      <input type="submit" value="Login" name="submit"/>
      </form> 
 
    </div> <!-- /container -->
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>