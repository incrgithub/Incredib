<?php
echo "<div class=slider>";
  	echo "<div class='slider-wrapper theme-default'>";
		include('conn.php');		
		$result = mysql_query("SELECT * FROM slider order by photoid desc LIMIT 0, 8") or die(mysql_error());
		$num = mysql_num_rows($result);
		if($num > 0)
		{
        echo "<div id=slider class=nivoSlider>";
			while($row = mysql_fetch_array($result))
			{
            echo "<img src=slider/$row[name] data-thumb=slider/$row[name]/>";
			}
		echo "</div>";	
		}	
		else
		{
		echo "<div id=slider class=nivoSlider>";
		echo "<img src=slider/1.jpg data-thumb=slider/1.jpg />";
		echo "<img src=slider/2.jpg data-thumb=slider/2.jpg />";
		echo "<img src=slider/3.jpg data-thumb=slider/3.jpg />";
		echo "</div>";	
		}
       
    echo "</div>";
echo "</div>";
?>