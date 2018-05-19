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
                    <h2>Biology</h2>
                </div>
                <nav id="breadcrumbs">
                    <ul>
                        <li>You are here:</li>
                        <li><a href="#">Department > Science </a></li>
                        <li>Biology</li>
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
							 <font size="5"><b>Biology</b></font>,the word comes from Greek bios meaning life And logoes meaning throught or science of can be definite as the study of various aspect of living beings ( plant and animals ) . Biology is the study of life from the simplest forms of plant and animals (includintg one –cell animal aa7 algae) to highly complex structure of the human being . it  include the study of how organism are saturated and how they are function and relate to each other .			 </p>
							<p align="justify">
							Biology is called as Life science as it make to understand how living thing perform their life activities and interact with the living and non-living thing.
							 </p>
							 <b><font color="red">Branches</font></b> : Botany, Zoology & Microbiology.<br><br>
														 
							 <h4>Why Study of Biology</h4>
							  <p align="justify">
							  <li>To help us understand ourselves better . It explain the basic concept like strcture & function of cell.</li>
<li>To help us meet our need by utilising the source available. The knowledge of medicine, surgery , crop rotation , Animal husbundary help us to curediseases & improve the quality of plant & Animals.</li>
<li>To acquaint us with the fundamentals nutrition, health & population control. to have a scientific approach while solving problems.</li>
<li>To help us overcome the superstitions & to remove the baises of sex , race & colour.</li>
<li>To enable us to enjoy nature . </li>

							  </p>
							  <h4>Science of Exception</h4>
							  <p align="justify">
							 <li><b>DNA</b> is hereditary material in all living organism except in some plant Viruses such as Tobacco mosaic virus where RNA is the hereditary material </li> 
<li><b>RNA</b> is usevally single srand but in Rheovirus it is double stranded. </li>
<li><b>DNA </b>is normally double sranded except in some viruses in which it is single stranded . </li>
<li> All living cell have Nucleus except Red Blood cell ( RBC ) of mammals. </li>

							  </p>
							   <h4>Important Branches of Biology </h4>
							 
							<li>Agriculture </li>
							<li>Horticulture</li>
							<li>Apiculture</li>
							<li>Sericulture</li>
							<li>Entomology</li>
							<li>Medicine </li>
							<li>Agronomy</li>
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