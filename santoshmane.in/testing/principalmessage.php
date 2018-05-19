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
                    <h2>Principal Message</h2>
                </div>
                <nav id="breadcrumbs">
                    <ul>
                        <li>You are here:</li>
                        <li><a href="#">About Us</a></li>
                        <li>Principal Message</li>
                    </ul>
                </nav>
            </div>
        </section>

		<section class="content left_sidebar">
				<div class="row">
					<!--Sidebar Widget-->
					<div class="col-lg-4 col-md-4 col-sm-4">
						<div class="sidebar">
							<div id="myTabContent1" class="tab-content clearfix">
								<div class="tab-pane fade active in" id="Popular">
								   <p align="left"><img src="images/jamdade.jpg" width="325" height="250" border="0"></p>
									<p align="justify"><b>Dhanshri Jamdade<br>
M.A,B.Ed.<br>
									Principal</b></p>
								</div>
							</div>
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
							'Education is the most powerful weapon which you can use to change the world.'
							</p>
							<p align="justify">
Education does not only encourage personal development, it also offers the general growth of an entire community providing a place for people to interact, socialize, and unify their societies.
</p>
<p align="justify">
	We at Late Sahebrao Phadtare Junior College (Science) have always strived for excellence in academics and complementing co-curricular learning that meets student expectations. We provide our students with all the facilities needed for a comprehensive academic structure for their holistic development. The college motto "Vidya Vinayen Shobhate" really exist in a student.
	</p>
	<p align="justify">
In our College we take great efforts for student's achievement with the help of our well trained, qualified and experienced faculty and staff that help the student to respond confidently to the challenges and new demand of society.
</p>
<p align="justify">
	Seeking knowledge is continues and never ending process. Our 'Value Addition Programs' like JEE, CET, MPSC/UPSC Guidance are customized to suit students need and enable them to merge early in their work environment of the future.
	</p>
	<p align="justify">
Junior College is more than an excellent education. It is a critical time of personal and intellectual discovery, growth, and one that helps shape their understanding of the world. It is essential that our student take full advantage of their time at Junior College.
</p>
<p align="justify">
<b>Welcome, join us and be the expert!!! </b>
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