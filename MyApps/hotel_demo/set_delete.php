<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
include('connect.php');
session_start();
error_reporting(0);


 $item_st=$_POST['pass'];

if($item_st=="hotel1234")
{

echo "<script language=\"javascript\">";
	echo "var question=confirm(\"खरच ! डेटा रिसेट करू का ?  \");";
	echo "if(question){ window.location = 'trucate_table.php'; } else {  window.location = 'reset.php';  }";
	echo "</script>";}
else
{
echo "<script language=\"javascript\">";
	echo "var question=confirm(\" माफ करा ! तुमच्या अड्मीनशी संपर्क साधा   \");";
	echo "if(question){ window.location = 'reset.php'; } else {  window.location = 'reset.php';  }";
	echo "</script>";
}
 
  


  
  

?>

