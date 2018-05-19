<?php
date_default_timezone_set('Asia/Kolkata'); 
$currentDate=date('Y-m-d h:i:s');
$day = date("l");
if($day == "Monday" || $day == "Wednesday" || $day == "Friday")
	{
	echo "<link href='css/smart_tab_vertical.css' rel='stylesheet' type='text/css'></link>";
	}
else if($day == "Tuesday" || $day == "Thursday" || $day == "Sunday" || $day == "Saturday")
	{
	echo "<link href='css/smart_tab.css' rel='stylesheet' type='text/css'></link>";
	}	

?>
