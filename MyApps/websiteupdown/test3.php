<?php
error_reporting(0);
include('/home/incredib/public_html/MyApps/websiteupdown/phpmailer/class.phpmailer.php');
include('sms.php');
mysql_select_db('incredib_incredible',mysql_connect('localhost','incredib','Incr254@#$'));

$fetch_details="select domainname from tbl_websites order by websiteid asc";	

$basic_details= mysql_query($fetch_details);

$count=0;
$websites=" ";
$body = "";

while($basic_details_row = mysql_fetch_array($basic_details)) 
	{
	$domainname=$basic_details_row ['domainname'];

	if(gethostbyname($domainname) != $domainname ) 
	     $body = $body." <img src='http://www.incredibletechsolve.com/MyApps/websiteupdown/images/right1.gif'><font color='green' size=3> ".$domainname." is Working</font><br><br>";
	else
	     {
	      $body = $body." <img src='http://www.incredibletechsolve.com/MyApps/websiteupdown/images/close.png'><font color='red' size=3> ".$domainname." is not Working</font><br><br>";
              $count++;
              $websites=$websites.$domainname.",";
	     }     
	} 

if($count == "1") {
	$str1="Website ";
	$str2=" is ";
	}
else {
      $str1="Websites ";
      $str2=" are ";
     }				
  
 $websites=rtrim($websites, ",");
  
if($count > 0) {
$mess=$str1.$websites.$str2." not working.All Other Websites are Working Properly... ";
sendMail($body);
//sendSmsToAmit($mess);
//sendSmsToAbhijit($mess);
}       
else {
$mess="All Websites are Working Properly...";
sendMail($body);
//sendSmsToAmit($mess);
//sendSmsToAbhijit($mess);
}


function sendMail($body)
        {
        	$email = new PHPMailer();
	        $email->From      = 'incredib@lin6.plreseller.com';
	        $email->FromName  = 'Incredible Tech Solutions';
	        $email->Subject   = "Website Status";
	        $email->Body      = $body;
	        $email->IsHTML(true); 
	        $email->AddAddress( 'incrcronmail@gmail.com' );
	        $b=$email->Send();
       	}

?>