<!DOCTYPE html>
 <html lang="en">
 <head>
<!-- Original URL: http://themedesigner.in/demo/eliteadmin-package/eliteadmin/login.html
Date Downloaded: 13/11/2016 9:40:49 AM !-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />
 <meta name="description" content="" />
 <meta name="author" content="" />
 <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png" />
 <title>Client Project Manager</title>
 <!-- Bootstrap Core CSS -->
 <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
 <!-- animation CSS -->
 <link href="css/animate.css" rel="stylesheet" />
 <!-- Custom CSS -->
 <link href="css/style.css" rel="stylesheet" />
 <!-- color CSS -->
 <link href="css/colors/blue.css" id="theme" rel="stylesheet" />
 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
    <script src="../../../../oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="../../../../oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
 </head>
 <body>
 <!-- Preloader -->
 <div class="preloader">
   <div class="cssload-speeding-wheel"></div>
 </div>
 <section id="wrapper" class="login-register">
   <div class="login-box">
     <div class="white-box">
       <form class="form-horizontal form-material" id="loginform" action="login.php" method="post">
         <h3 class="box-title m-b-20"><img src="images/incredible.png"></h3>
			<?php 
					if(isset($_GET['msg'])) 
						{ 
						$param=$_GET['msg'];
						if($param == "failed")
							{
							echo "<div class='alert alert-danger alert-dismissable'>";
							echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times; </button>";
							echo "<font face='calibri'>Invalid Username / Password</font></div>";
							}  
						} 
					?>
         <div class="form-group ">
           <div class="col-xs-12">
             <input class="form-control" type="text" required="" placeholder="Username" name="username"/>
           </div>
         </div>
         <div class="form-group">
           <div class="col-xs-12">
             <input class="form-control" type="password" required="" placeholder="Password" name="password"/>
           </div>
         </div>
		 <!--
         <div class="form-group">
           <div class="col-md-12">
      
            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot Password? </a>  </div>
         </div>
		 -->
         <div class="form-group text-center m-t-20">
           <div class="col-xs-12">
             <input type="submit" name="submit" class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" value="Login">
           </div>
         </div>
         
         
            <center><h3><a href="tasklist/index.php">Incredible Task List</a></h3></center>
		</form>
       <form class="form-horizontal" id="recoverform" action="index.html">
         <div class="form-group ">
           <div class="col-xs-12">
             <h3>Recover Password </h3>
             <p class="text-muted">Enter your Email and we will send your password to your registered mobile number </p>
           </div>
         </div>
         <div class="form-group ">
           <div class="col-xs-12">
             <input class="form-control" type="text" required="" placeholder="Email" />
           </div>
         </div>
         <div class="form-group text-center m-t-20">
           <div class="col-xs-12">
             <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset </button>
           </div>
         </div>
       </form>
     </div>
   </div>
 </section>
 <!-- jQuery -->
 <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap Core JavaScript -->
 <script src="bootstrap/dist/js/bootstrap.min.js"></script>
 <!-- Menu Plugin JavaScript -->
 <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>

 <!--slimscroll JavaScript -->
 <script src="js/jquery.slimscroll.js"></script>
 <!--Wave Effects -->
 <script src="js/waves.js"></script>
 <!-- Custom Theme JavaScript -->
 <script src="js/custom.js"></script>
 <!--Style Switcher -->
 <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
 </body>
 </html>
 