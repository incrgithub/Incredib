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
        <div class="sidebar_right_top">
     	  <h3>Latest News</h3>
     	   <div class="latestnews">
		     <div class="latestnews_desc">
		     	<h4>Jan 15, 2012</h4>
		     	<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
		     	<span><a href="#">read more</a></span>
		     </div>
		     	
          </div>	
        </div>
      
       </div>
       <div class="content">
		      <div class="content_bottom">
		      	<h2>फोटो समूह</h2><hr>
		       <?php
   		        include('zoom.php');	
	     		include('conn.php');	
				$result = mysql_query("SELECT * FROM gallery order by photoid desc") or die('Query Not Executed');
				$i=0;
				echo "<marquee behavior=scroll direction=left scrollamount=7 onmouseout=this.start() onmouseover=this.stop() scrolldelay=90 style='background-color:white;'>"; 
				while($row = mysql_fetch_array($result)){
				     echo "<a href='gallery/" . $row['name'] . "' rel='lightbox1' class='effectable'><img src='gallery/" . $row['name'] . "' width=100 height=100 alt='$row[name]'/></a>";
				}
				echo "</marquee>";
				?>	
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		      </div>
    	</div>
    <div class="sidebar">
        <div class="sidebar_right_top">
     	  <h3>Latest News</h3>
     	   <div class="latestnews">
		     <div class="latestnews_desc">
		     	<h4>Jan 15, 2012</h4>
		     	<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
		     	<span><a href="#">read more</a></span>
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

