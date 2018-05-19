<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Canvas Slideshow Demo</title>
    <meta charset="UTF-8" />
    <meta name="description" content="Canvas Slideshow test" />
    <script type="text/javascript"  src="scripts/excanvas.compiled.js"></script>
    <![endif]-->
	<?php $pageName = basename($_SERVER['PHP_SELF']); if($pageName !="index.php") { ?>
	<script type="text/javascript" src="scripts/jquery-1.4.2.min.js"></script>
	<?php } ?>
    <script type="text/javascript" src="scripts/jquery.lightbox.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.canvasSlideshow.js"></script>
  </head>
  <body>

    <div id="canvas_container" style="position:relative; margin:auto; width:240px;height:240px;">
    <canvas id="slideshow" width="240" height="240">
	<?php
	include('conn.php');	
	$result = mysql_query("SELECT * FROM management order by id desc") or die(mysql_error());
	$num = mysql_num_rows($result);
	if($num > 0)
		{
		while($row = mysql_fetch_array($result))
			{
			echo " <li>";
			echo "<a href='management/" . $row[3] . "'><img src='management/" . $row[3] . "' width=69 height=69 alt='$row[1],$row[2]'/></a>";
	        echo " </li>";
	   		}
	   	}
 	else
	   	{
	   	echo "<li><img src='images/noimg.gif'></li>";
	   	}	
   		
   ?>	

    </canvas>
    <script type="text/javascript">
      $('#slideshow').canvasSlideshow({num_elem:1});
    </script>
    </div>
  </body>
</html>

