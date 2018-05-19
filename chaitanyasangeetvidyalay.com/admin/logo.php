<?php
include('conn.php');	
$result = mysql_query("SELECT name FROM logo where id=10") or die('Query Not Executed');
$num = mysql_num_rows($result);
if($num > 0) 
{
	while($row = mysql_fetch_array($result)){
     echo "<img src='../images/$row[0]' width=100 height=65>";
	}
}
else
    echo "<img src='../images/logo.png' width=100 height=65>";
?>

