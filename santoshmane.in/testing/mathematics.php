<!DOCTYPE html>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php include('title.php');  ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- CSS FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--start wrapper-->
<section class="wrapper container">
	<!--Start Header-->
   <?php include('nav.php');  ?>
	<!--End Header-->

        <section id="page_head" class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page_title">
                    <h2>Mathematics</h2>
                </div>
                <nav id="breadcrumbs">
                    <ul>
                        <li>You are here:</li>
                        <li><a href="#">Department > Science </a></li>
                        <li>Mathematics</li>
                    </ul>
                </nav>
            </div>
        </section>

		<section class="content left_sidebar">
				<div class="row">
					<!--Sidebar Widget-->
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="sidebar">
						    <div class="velocity-tab sidebar-tab">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#Popular" data-toggle="tab">News</a></li>
                                </ul>

                                <div class="tab-content clearfix">
                                    <div class="tab-pane fade active in" id="Popular">
                                     <?php include('newsticker.php'); ?>   
                                    </div>
                                </div>
							</div>
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
						<div class="blog_large">
							<p align="justify">
							<img src="images/maths.jpg" border="0">
							</p>
							<h2><font color="red">MATHEMATICS IS THE DOOR AND KEY TO THE SCIENCES</font></h2>
							<p align="justify">
							   Mathematicians often say this especially When Talking about a particular result. Beauty lies, not in the shape of the symbols, but in the concept. Thus the beauty of Euclid‘s proof the infinity of primes lies in its simplicity. The idea that one can show that the list of prime never ends is nothing short of astonishing. Similarly any mathematical formula expresses so much in few symbols that can be considered beautiful. </p>
							 <h4>Maths is the language of the universe</h4> 			
							<p align="justify">
							Much of modern theoretical Physics is mathematics. Quantum Theory & Relativity are mathematical theories that attempt to explain the law of the universe. Of Course Relativity can be summarised in that one, Famous mathematical Formula: - E = mc2.
							</p>
							 <h4>Why Study Mathematics</h4> 			
							<p align="justify">
							Studing Mathematics is interesting 7 Stimulating – the solution to a problem give excitement & Satisfaction. Many enjoy its challenge & its clarity. Mathematics is about pattern & Structure; it is about logical analysis, deduction, calculation within these patterns & Structures. The Mathematics of the pattern found in different areas of science & Technology, can be used to explain & Control natural happening & Situation.
							</p>
							 <h4>Career in Mathematics</h4> 			
							<p align="justify">
							<li>Engineering </li>
							<li>Diploma</li>
							<li>Army Navy and Air force after 12th</li>
							<li>In space research after M.sc</li>
							<li>Teaching field </li>
							<li>MPSC and UPSC </li>  

							</p>
						</div>
					</div>
					<?php include('tabslide.php'); ?>
				</div>
		</section>

	<?php include('footer.php');  ?>
</section>
<!--end wrapper-->

 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script> <!-- jQuery cookie -->
    <script type="text/javascript" src="js/styleswitch.js"></script> <!-- Style Colors Switcher -->
    <script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>
    <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jflickrfeed.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/swipe.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>

    <script src="js/main.js"></script>

    <!-- Start Style Switcher -->
    <div class="switcher"></div>
    <!-- End Style Switcher -->
</body>
</html>