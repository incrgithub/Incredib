<?php
error_reporting(E_ALL);
ob_implicit_flush(true);

include_once "/home/dkkkpmba/public_html/dkkkpjrclscikalamb.com/backup/sms/class.curl.php";
include_once "/home/dkkkpmba/public_html/dkkkpjrclscikalamb.com/backup/sms/class.sms.php";
include_once "/home/dkkkpmba/public_html/dkkkpjrclscikalamb.com/backup/sms/cprint.php";

$smsapp=new sms();
$smsapp->setGateway('way2sms');
//$myno=$_POST['fromno'];
//$p=$_POST['pass'];
//$tonum=$_POST['tono'];
//$mess=$_POST['message'];


$myno='8796154725';
$p='123456';
$tonum='8796154725';
$mess='DKKKP : LSPS Backup Done Successfully...';


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
