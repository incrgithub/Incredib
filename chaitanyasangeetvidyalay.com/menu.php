
<?php
$page = basename($_SERVER['PHP_SELF']);

echo "<div class='menu'>";
    echo "<ul>";
		if($page == "index.php")
		{
		echo "<li class='active'><a href='index.php'><b><font size='3px' color=black>Home</font></b></a></li>";
		echo "<li><a href='management.php'><b><font size='3px' color=black>Video</font></b></a></li>";
		echo "<li><a href='yojana.php'><b><font size='3px' color=black>Subject</font></b></a><li>";
		echo "<li><a href='gallery.php'><b><font size='3px' color=black>Gallery</font></b></a><li>";
		echo "<li><a href='home.php'><b><font size='3px' color=black> &#2350;&#2352;&#2366;&#2336;&#2368; </font></b></a><li>";
		}
		else if($page == "management.php")
		{
		echo "<li ><a href='index.php'><b><font size='3px' color=black>Home</font></b></a></li>";
		echo "<li class='active'><a href='management.php'><b><font size='3px' color=black>Video</font></b></a></li>";
		echo "<li><a href='yojana.php'><b><font size='3px' color=black>Subject</font></b></a><li>";
		echo "<li><a href='gallery.php'><b><font size='3px' color=black>Gallery</font></b></a><li>";
		echo "<li><a href='home.php'><b><font size='3px' color=black> &#2350;&#2352;&#2366;&#2336;&#2368; </font></b></a><li>";
 		}
		else if($page == "yojana.php")
		{
		echo "<li ><a href='index.php'><b><font size='3px' color=black>Home</font></b></a></li>";
		echo "<li><a href='management.php'><b><font size='3px' color=black>Video</font></b></a></li>";
		echo "<li class='active'><a href='yojana.php'><b><font size='3px' color=black>Subject</font></b></a><li>";
		echo "<li><a href='gallery.php'><b><font size='3px' color=black>Gallery</font></b></a><li>";
		echo "<li><a href='home.php'><b><font size='3px' color=black> &#2350;&#2352;&#2366;&#2336;&#2368; </font></b></a><li>";
		}
		else if($page == "gallery.php")
		{
		echo "<li><a href='index.php'><b><font size='3px' color=black>Home</font></b></a></li>";
		echo "<li><a href='management.php'><b><font size='3px' color=black>Video</font></b></a></li>";
		echo "<li><a href='yojana.php'><b><font size='3px' color=black>Subject</font></b></a><li>";
		echo "<li  class='active'><a href='gallery.php'><b><font size='3px' color=black>Gallery</font></b></a><li>";
		echo "<li><a href='home.php'><b><font size='3px' color=black> &#2350;&#2352;&#2366;&#2336;&#2368; </font></b></a><li>";
		}
	

   echo "</ul>";       
echo "</div>";
?>

