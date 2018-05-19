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
                    <h2>Introduction To College</h2>
                </div>
                <nav id="breadcrumbs">
                    <ul>
                        <li>You are here:</li>
                        <li><a href="#">About Us</a></li>
                        <li>Introduction To College</li>
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
            Our Late. Sahebrao Phadtare Junior College is one of the renowned colleges in our area. Our Junior College offer courses in <b><font color="red">PCB, PCM, and PCMB</font></b>. The syllabus is as per the Maharashtra State Board Higher Secondary Examination. A lot of importance is given to the education of Junior college students. Only qualified teachers with notable proficiency and with command over the subject are appointed.
            </p>
            <p align="justify">
Student with personal problem are helped by teachers. Junior College is turning point in every student’s life so in time parents are informed timely of the performance of their children. Well-equipped laboratory is provided to the students. Spacious library with number of groups, journals and collection of CD’s is provided.
</p>
<p align="justify">
To house outstation students, there’s a hostel facility. Hostel rooms are spacious, well maintained. For student’s convenience, within the campus we provide public transport, Internet, Shop and many other facilities to meet all day-to-day needs.
Management of the institute is bind to overall development of the student hence emphasis on co-curricular activities is given.

            
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