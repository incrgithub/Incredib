<?php
error_reporting(E_ALL);
ob_implicit_flush(true);
/*
include_once "/home/incredib/public_html/BG/allinonebackup/sms/class.curl.php";
include_once "/home/incredib/public_html/BG/allinonebackup/sms/class.sms.php";
include_once "/home/incredib/public_html/BG/allinonebackup/sms/cprint.php";
*/
function sendSms($message)
{
echo "";
/*
$smsapp=new sms();
$smsapp->setGateway('way2sms');


$myno='7588504729';
$p='123456';
$tonum='8796154725';
$tonum1='9860960529';
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
$ret1=$smsapp->send($tonum1,$mess);

if (!$ret) {
   print("Error in sending message");
   exit(1);
}

if (!$ret1) {
   print("Error in sending message");
   exit(1);
}
*/
}