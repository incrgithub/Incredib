<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en" xmlns="http://www.w3.org/1999/html"> <!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>  <?php include('title.php'); ?></title>
    <meta name="description" content="">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
    <link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen" />

    <link rel="stylesheet" href="css/fractionslider.css"/>
    <link rel="stylesheet" href="css/style-fraction.css"/>
    <link rel="stylesheet" href="css/animate.css"/>

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
<?php include('nav.php'); ?>
<!--End Header-->

<div class="slider-wrapper row">
    <div class="slider">
        <div class="fs_loader"></div>

        <div class="slide">
             <img src="images/fraction-slider/maingate.jpg" width="1200" height="750" data-in="fade" data-out="fade" />
        </div>
        <div class="slide">
             <img src="images/fraction-slider/spc.jpg" width="1200" height="750" data-in="fade" data-out="fade" />
        </div>
	<div class="slide">
             <img src="images/fraction-slider/physics.jpg" width="1150" height="850" data-in="fade" data-out="fade" />
        </div>
        <div class="slide">
             <img src="images/fraction-slider/chemistry.jpg" width="1150" height="850" data-in="fade" data-out="fade" />
        </div>
    </div>
</div>
<!--End Slider-->


      <section class="feature_bottom row sub_content">
        <div class="col-lg-6 wow fadeInLeft">
             <div class="widget widget_tab">
                <ul  class="nav nav-tabs">
                    <li class="active"><a href="#Popular" data-toggle="tab">News</a></li>
                   
                </ul>

                <div  class="tab-content clearfix">
                   <?php include('newsticker.php'); ?>
                </div>
            </div>
        </div>

        <div class="col-lg-6 wow fadeInRight">
            <div class="dividerHeading">
                <h4><span>Welcome To Late Sahebrao Phadtare Junior College Science</span></h4>
            </div>
              <ul class="list_style circle">
		<li>Prize of Rs.51000 for H.S.C merit list student.</li>
		<li>Fulfill library and science Laboratories.</li>
		<li>24 hours internet facility.</li>
		<li>Trained and Experience Staff.</li>
		<li>Career Guidance.</li>
		<li>Guidance for JEE,MHT-CET,NEET.</li>
		<li>Hostel facility.</li>
		<li>Expert speech on JEE,MHT-CET,NEET.</li>
		<li>Personal attention on each student.</li>
		<li>Good co-relation with parents.</li>
		<li>Safe Transportation(Bus Facility).</li>
		<li>JEE,CET books available</li>
		<li>2016-17 starting crash course(NEET,CET)</li>
									
		</ul>

            
            </p>
        </div>
    </section>


    <section class="latest_work row sub_content">
        <div class="col-md-12">
            <div class="dividerHeading">
                <h4><span>Photo Gallery</span></h4>
            </div>

            <div id="recent-work-slider" class="owl-carousel">
				<?php
				include('conn.php');
				$result = mysqli_query($con,"SELECT * FROM tbl_gallery order by photoid desc") or die('Query Not Executed');
				while($row = mysqli_fetch_array($result))
				{
					echo "<div class='box'>";
						echo "<figure>";
							echo "<div class='touching effect-bubba'>";
								echo "<img src='gallery/$row[1]'  height='200'/>";
							echo "</div>";
							echo "<div class='option'>";
								echo "<a href='gallery/$row[1]' class='hover-zoom mfp-image' ><i class='fa fa-search'></i></a>";
							echo "</div>";
							echo "<figcaption class='item-description'>";
								echo "<span>$row[2]</span>";
							echo "</figcaption>";
						echo "</figure>";
					echo "</div>";
				}
				?>
            </div>
			<?php include('tabslide.php'); ?>
        </div>
    </section>

 

<?php include('footer.php');  ?>




</section>


<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script> <!-- jQuery cookie -->
<script type="text/javascript" src="js/styleswitch.js"></script> <!-- Style Colors Switcher -->
<script src="js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>
<script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jflickrfeed.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
<script type="text/javascript" src="js/swipe.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="js/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>

<script src="js/main.js"></script>

<!-- Start Style Switcher -->
<div class="switcher"></div>
<!-- End Style Switcher -->
<script>
    // WOW Animation
    new WOW().init();
</script>

</body>
</html>