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
                    <h2>Chemistry</h2>
                </div>
                <nav id="breadcrumbs">
                    <ul>
                        <li>You are here:</li>
                        <li><a href="#">Department  > Science </a></li>
                        <li>Chemistry</li>
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
							 <font size="5"><b>Chemistry</b></font> is a one of the most important branch of Science. Chemistry is the study of matter ,energy and the  change  that  they  undergo .Everything  that is  Known  in physical universe is made up either matter or energy and the rest is just empty space .				 </p><br>
							 <b><font color="red">Branches</font></b> : Physical, organic, Inorganic, Analytical, Industrial, Drug Chemistry<br><br>
							 <p align="justify">
							 Chemistry is often referred to as the central science. In Everyday life Chemistry an play important role. All Other branches of the physical science touch upon the subject of chemistry. Chemistry will play important role in your lives in much way .It is also essential part of everyday living. As you cook, eat, and clean in around your homes, you are made aware of the many "chemicals".
							 </p>
							 
							 <h4>Why Study of Chemistry </h4>
							  <p align="justify">
							  Chemists   contribute in a myriad of way our society today and will continue to do so practically and theoretically. This nation becomes a more apparent as we head into a future that is becoming more study of life itself can be approached as a question of chemistry. Chemistry is omnipresent and it can be overwhelming, however, it can also be enlighting & comforting to be able to have a better understanding of physical universe by studying chemistry
							  </p>
							  <h4>Mission</h4>
							  <p align="justify">
							  chemistry is offered to a genral and a specific  set of  course in sevral are a in chemistry  that  will provide student within its major afundamental understanding,thurogh qualitative and quantitative reasoning of matter,energy and the changes that they undergo.The programs designing to prepare a student who are seeking to emmidatally enter the work force as teacher and twcnicians because major student in Chemistry,graguates tends to find option for further study and career opportunities. 
							  </p>
							   <h4>Goals for Student learning in the major</h4>
							  <p align="justify">
							  Both program of study are designed to provide students with the following 
							  </p>
							<li>A fundamental understanding of analytical, a inorganic, Instrumental, organic & physical chemistry.</li>
							<li>A Basic Understanding of Physics. </li>
							<li> Basic Knowledge of the differential & Integral Calculus & statistical analysis.</li>
							<li>Basic chemistry laboratory skills.</li>
							<li>An Understanding of relationship of chemistry and environment.</li>
							<li> The Experience of preparing & presenting seminar</li>
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