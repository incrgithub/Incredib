
<?php
include('conn.php');	
$result = mysql_query("SELECT * FROM societyinfo where id=10") or die('Query Not Executed');
$num = mysql_num_rows($result);
if($num > 0) 
{
	while($row = mysql_fetch_array($result)){
     echo $row[1]
     ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><a href='mainpage.php'><img src='../images/service-1.png' height=16 width=16><font color='white'>Home</font></a>"
     ."&nbsp;&nbsp;&nbsp;&nbsp;<a href='logout.php'><img src='../images/loggoff.png'><font color='white'>Logout</font></a></b>";
	}     
 }    
?>


