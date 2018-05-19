<?php

$mess="Please take manual backups for all 3 Cpanels-Regards Incredible";
sendSms('8796154725',$mess);
sendSms('9860960529',$mess);

	function sendSms($mobno,$mess)
	{
	    $username="incrsms";
		$api_password="can@789";
		$sender="INCSMS";
		$domain="http://cannyinfotech.in/api/mt/SendSMS?";
		$mobile=$mobno;
		$message=$mess;
		
		$username=urlencode($username);
		$password=urlencode($api_password);
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
            echo "<br>SMS Sent";
        }
        else
        { 
            echo "<br>SMS Sending Failed.";
        }
        
        curl_close($ch);
	}
?>