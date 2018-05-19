<?php
error_reporting(E_ALL);
ob_implicit_flush(true);


function sendWay2Sms($message)
{
/*include_once "/home/dkkkpmba/public_html/dkkkp.edu.in/ControlPanel/sms/class.curl.php";
include_once "/home/dkkkpmba/public_html/dkkkp.edu.in/ControlPanel/sms/class.sms.php";
include_once "/home/dkkkpmba/public_html/dkkkp.edu.in/ControlPanel/sms/cprint.php";


$smsapp=new sms();
$smsapp->setGateway('way2sms');


$myno='8087637139';
$p='123456';
$tonum='8796154725';
$mess=$message;


cprint("Logging in ..\n");
$ret=$smsapp->login($myno,$p);

if (!$ret) {
   cprint("Error Logging In");
   exit(1);
}

//print("Logged in Successfully\n");

//print("Sending SMS ..\n");
$ret=$smsapp->send($tonum,$mess);

if (!$ret) {
   	print("Error in sending message");
  	 exit(1);
	}
	*/
}

?>
