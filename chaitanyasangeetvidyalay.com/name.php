
<?php
include('conn.php');	
$result = mysql_query("SELECT * FROM societyinfo where id=10") or die('Query Not Executed');
$num = mysql_num_rows($result);
if($num > 0) 
{
	while($row = mysql_fetch_array($result)){
     echo "<font size=5px color=white>".$row[1]."</font><br>";
     $desc=nl2br($row[2]);
	 $desc1=wordwrap($desc,250,"<br>",1);
     echo "<font size=3px color=white>".$desc1."</font>";
	}     
 }    
?>


