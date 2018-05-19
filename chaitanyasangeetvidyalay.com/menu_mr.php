
<?php
$page = basename($_SERVER['PHP_SELF']);

echo "<div class='menu'>";
    echo "<ul>";
		if($page == "home.php")
		{
		echo "<li class='active'><a href='home.php'><b><font size='3px' color=black>&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2366;&#2344;</font></b></a></li>";
		echo "<li><a href='mr_video.php'><b><font size='3px' color=black>&#2357;&#2381;&#2361;&#2367;&#2337;&#2368;&#2323;</font></b></a></li>";
		echo "<li><a href='subject_mr.php'><b><font size='3px' color=black>&#2357;&#2367;&#2359;&#2351;</font></b></a><li>";
		echo "<li><a href='gallery_mr.php'><b><font size='3px' color=black>&#2347;&#2379;&#2335;&#2379; &#2360;&#2350;&#2370;&#2361;</font></b></a><li>";
		echo "<li><a href='index.php'><b><font size='3px' color=black> English </font></b></a><li>";
 		}
		else if($page == "mr_video.php")
		{
	echo "<li ><a href='home.php'><b><font size='3px' color=black>&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2366;&#2344;</font></b></a></li>";
		echo "<li class='active'><a href='mr_video.php'><b><font size='3px' color=black>&#2357;&#2381;&#2361;&#2367;&#2337;&#2368;&#2323;</font></b></a></li>";
		echo "<li><a href='subject_mr.php'><b><font size='3px' color=black>&#2357;&#2367;&#2359;&#2351;</font></b></a><li>";
		echo "<li><a href='gallery_mr.php'><b><font size='3px' color=black>&#2347;&#2379;&#2335;&#2379; &#2360;&#2350;&#2370;&#2361;</font></b></a><li>";
		echo "<li><a href='index.php'><b><font size='3px' color=black> English </font></b></a><li>";
 		}
		else if($page == "subject_mr.php")
		{
	echo "<li ><a href='home.php'><b><font size='3px' color=black>&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2366;&#2344;</font></b></a></li>";
		echo "<li><a href='mr_video.php'><b><font size='3px' color=black>&#2357;&#2381;&#2361;&#2367;&#2337;&#2368;&#2323;</font></b></a></li>";
		echo "<li class='active'><a href='subject_mr.php'><b><font size='3px' color=black>&#2357;&#2367;&#2359;&#2351;</font></b></a><li>";
		echo "<li><a href='gallery_mr.php'><b><font size='3px' color=black>&#2347;&#2379;&#2335;&#2379; &#2360;&#2350;&#2370;&#2361;</font></b></a><li>";
		echo "<li><a href='index.php'><b><font size='3px' color=black> English </font></b></a><li>";
	}
		else if($page == "gallery_mr.php")
		{
	echo "<li ><a href='home.php'><b><font size='3px' color=black>&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2366;&#2344;</font></b></a></li>";
		echo "<li><a href='mr_video.php'><b><font size='3px' color=black>&#2357;&#2381;&#2361;&#2367;&#2337;&#2368;&#2323;</font></b></a></li>";
		echo "<li><a href='subject_mr.php'><b><font size='3px' color=black>&#2357;&#2367;&#2359;&#2351;</font></b></a><li>";
		echo "<li class='active'><a href='gallery_mr.php'><b><font size='3px' color=black>&#2347;&#2379;&#2335;&#2379; &#2360;&#2350;&#2370;&#2361;</font></b></a><li>";
		echo "<li><a href='index.php'><b><font size='3px' color=black> English </font></b></a><li>";
 		}
		

   echo "</ul>";       
echo "</div>";
?>

