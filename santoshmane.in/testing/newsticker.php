<html>
<head>

<link rel="stylesheet" href="css/newsticker.css" type="text/css" media="screen" />
 <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script src="js/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$(".newsticker-jcarousellite").jCarouselLite({
		vertical: true,
		hoverPause:true,
		visible: 1,
		auto:500,
		speed:1000
	});
});
</script>
</head>
<body>
   
    

	<?php
	include('conn.php');	
	$result = mysqli_query($con,"SELECT * FROM tbl_news order by id desc") or die(mysql_error());
	$numrows=mysqli_num_rows($result);
	if($numrows > 0 )
	{
	echo  "<div id='newsticker-demo'> ";
	echo  "<div class='newsticker-jcarousellite'><ul>";
	while($row = mysqli_fetch_array($result))
		{
		echo " <li>";
		echo "<div class='info'>";
     	$description= wordwrap($row[2],190,"<br>\n");
		echo "<div class='info'><img src='images/arrow.png' border='0'><a href='allnews.php'>$description</a></div></li>";
		}
	 echo "</ul></div>";		
	 echo "</div>";	
	 }	
	 ?>	

    
</body>
</html>