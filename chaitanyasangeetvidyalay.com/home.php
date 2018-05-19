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
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>
<body>
	<?php include('backmusic.php'); ?>

	      <div class="header">
	      	<div class="header_top">
			        <div class="wrap">	 
					<div class="logo" align=left>
					   <?php include('logo.php'); ?>
					</div>
					 
						<?php include('menu_mr.php'); ?>
						<div class="clear"></div>
				   </div>
				 </div>
	  	<!------ Slider ------------>
 		<!------End Slider ------------>			     
	</div>
	  <div class="main">  
	   <div class="wrap">  		 
	    <div class="sidebar">
	    
	    <?php include('contact_mr.php'); ?>
	    
        <div class="sidebar_right_top">
     	  <h3>शाखा मंगळवेढा </h3>
     	   <div class="latestnews">
		     <div class="latestnews_desc">
 स्वर चैतन्य संगीत विद्यालय
			 इंडीकरवाडा किल्ला भाग, मंगळवेढा
<br>ता. मंगळवेढा जि. सोलापूर      </div>
		   </div>	
        </div>
       </div>
	   
       <div class="content">
		      <div class="content_bottom">
		      <p align=justify>
             	<?php include('aboutus_mr.php'); ?>
              </p>	
		      </div>
    	</div>
		
    <div class="sidebar">
    
    	  <?php include('forms_mr.php'); ?>    	
        <div class="sidebar_right_top">
     	  <h3>महत्वाच्या घडामोडी </h3>
     	   <div class="latestnews">
		     <div class="latestnews_desc">
 			<marquee direction="up" onmouseout=this.start() onmouseover=this.stop()>
<br> चालू कार्यक्रम -<br>
 पं.पलुस्कर मासिक संगीत सभा ( प्रत्येक महिन्याच्या शेवटच्या  रविवारी )
<br><br>
पं. भातखंडे साप्ताहिक मंच  प्रदर्शन  ( प्रत्येक रविवारी )<br><br>
कु.मिखीलेश हिरफोडे व कु. अनिकेत पुजारी यांचा आकाशवाणी संगीत स्पर्धेत पुणे येथे सहभाग <br><br>
विद्यालयाचे वार्षिक संगीत संमेलन डिसेंबर २०१४

			</marquee></div>
		   </div>	
        </div>
       </div>
	    
       
      
       </div>
    <div class="clear"></div>
 </div>
</div>
<?php include('footer.php'); ?>
</div>	
</body>
</html>

