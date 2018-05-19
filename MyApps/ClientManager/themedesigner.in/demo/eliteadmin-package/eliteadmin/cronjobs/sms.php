<?php
error_reporting(E_ALL);
ob_implicit_flush(true);

include_once "/home/incredib/public_html/MyApps/ClientManager/themedesigner.in/demo/eliteadmin-package/eliteadmin/cronjobs/sms/class.curl.php";
include_once "/home/incredib/public_html/MyApps/ClientManager/themedesigner.in/demo/eliteadmin-package/eliteadmin/cronjobs/sms/class.sms.php";
include_once "/home/incredib/public_html/MyApps/ClientManager/themedesigner.in/demo/eliteadmin-package/eliteadmin/cronjobs/sms/cprint.php";

function sendWay2Sms($message)
  {
	$smsapp=new sms();
	$smsapp->setGateway('way2sms');
		
	$myno='7588504729';
	$p='123456';
	$tonum='8796154725';
	$tonum1='9860960529';
	$mess=$message;
	
	$ret=$smsapp->login($myno,$p);
	
	if (!$ret) {
	   cprint("Error Logging In");
	   exit(1);
	}
	
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
  }
  
function sendIncrdibleSms($mobno,$mess)
{
    $username="incrsms";
	$password="can@789";
	$sender="INCSMS";
	$domain="http://cannyinfotech.in/api/mt/SendSMS?";
	$mobile=$mobno;
	$message=$mess;
	
	$username=urlencode($username);
	$password=urlencode($password);
	$sender=urlencode($sender);
	$message=urlencode($message);
	
	$parameters="user=$username&password=$api_password&senderid=$sender&channel=TRANS&DCS=0&flashsms=0&number=$mobile&text=$message&route=2";
	
	$url=$domain.$parameters;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For HTTPS
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // For HTTPS
    curl_exec($ch);
    $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Returns 200 if everything went well
    if($statusCode==200)
    {
        echo "SMS Sent";
    }
    else
    { 
        echo "SMS Sending Failed";
    }
        
    curl_close($ch);
}  

?>