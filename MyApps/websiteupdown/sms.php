<?php
error_reporting(E_ALL);
ob_implicit_flush(true);

function sendSmsToAmit($mess) {

include_once "/home/incredib/public_html/MyApps/websiteupdown/sms/class.curl.php";
include_once "/home/incredib/public_html/MyApps/websiteupdown/sms/class.sms.php";
include_once "/home/incredib/public_html/MyApps/websiteupdown/sms/cookies.txt";

$smsapp=new sms();
$smsapp->setGateway('way2sms');



$myno='9860960529';
$p='123456';
$tonum='8796154725';



cprint("Logging in ..\n");
$ret=$smsapp->login($myno,$p);

if (!$ret) {
   cprint("Error Logging In");
   exit(1);
}


$ret=$smsapp->send($tonum,$mess);

if (!$ret) {
   print("Error in sending message");
   exit(1);
}
}

function sendSmsToAbhijit($mess) {

include_once "/home/incredib/public_html/MyApps/websiteupdown/sms/class.curl.php";
include_once "/home/incredib/public_html/MyApps/websiteupdown/sms/class.sms.php";
include_once "/home/incredib/public_html/MyApps/websiteupdown/sms/cookies.txt";


$smsapp=new sms();
$smsapp->setGateway('way2sms');


$myno='9860960529';
$p='123456';
$tonum="9860960529";


cprint("Logging in ..\n");
$ret=$smsapp->login($myno,$p);

if (!$ret) {
   cprint("Error Logging In");
   exit(1);
}

$ret=$smsapp->send($tonum,$mess);

if (!$ret) {
   print("Error in sending message");
   exit(1);
}

}
