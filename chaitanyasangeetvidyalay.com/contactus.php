<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title><?php include('title.php'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php include('theme.php'); ?>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/contact.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>
<body>
	      <div class="header">
	      	<div class="header_top">
			        <div class="wrap">	 
					<div class="logo">
					   <?php include('logo.php'); ?>
					</div>
					<div class="logo">
					   <?php include('name.php'); ?>
					</div>
						<?php include('menu.php'); ?>
						<div class="clear"></div>
				   </div>
				 </div>
	  	<!------ Slider ------------>

		<!------End Slider ------------>			     
	</div>
	  <div class="main">  
	   <div class="wrap">  		 
	    <div class="sidebar">
         <?php include('contact.php'); ?>            
       </div>
       <div class="content">
		      <div class="content_bottom">
		      
		      	<h2>&#2360;&#2306;&#2346;&#2352;&#2381;&#2325;</h2><hr>
		      चैतन्य संगीत विद्यालय <br>
			  यशोदा हॉस्पिटलजवळ पंढरपूर - मिरज रोड ,सांगोला
<br>ता. सांगोला जि. सोलापूर
			 <br><br><br><br><br><br><br>
		      </div>
    	</div>
    <div class="sidebar">
         <?php include('years.php'); ?>        
       </div>
    <div class="clear"></div>
 </div>
</div>
<?php include('footer.php'); ?>
</div>	
</body>
</html>

