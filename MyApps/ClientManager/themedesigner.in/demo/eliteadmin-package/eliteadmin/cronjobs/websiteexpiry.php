<?php
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
include('/home/incredib/public_html/MyApps/ClientManager/themedesigner.in/demo/eliteadmin-package/eliteadmin/cronjobs/phpmailer/class.phpmailer.php');
include('crud.php');
include('sms.php');
$website_db = new Database();
$website_db->connect();
$website_db->sql("SELECT w.domainname, c.clientname, c.clientemailid, c.clientcontactno, w.expirydate,DATE_FORMAT(w.expirydate,'%d-%b-%Y') fexpirydate FROM tbl_websites w, tbl_clients c WHERE c.clientid = w.clientid");
$website_result = $website_db->getResult();
$website_count=count($website_result);
if($website_count > 0) 
	{
	foreach($website_result as $x) 
		{
		$domain  = $x['domainname'];
		$clientname =  $x['clientname'];
		$clientemailid = $x['clientemailid'];
		$clientcontactno = $x['clientcontactno'];
		$expirydate = $x['expirydate'];
		$fexpirydate = $x['fexpirydate'];
		
		$two=date ('Y-m-d', strtotime ('-2 days' , strtotime ( $expirydate )));
		$fifteen=date ('Y-m-d', strtotime ('-15 days' , strtotime ( $expirydate )));
		$fortyfive=date ('Y-m-d', strtotime ('-45 days' , strtotime ( $expirydate )));
		
		$message1  = "Website ".$domain."(".$clientname.")"." is getting expired on ".$fexpirydate." Incredible";
		
		$message  ="Your website ".$domain." is getting expired on ".$fexpirydate." renew it to continue the services-Incredible";
		
		if(date('m-d') == date('m-d',strtotime($two))){ 
			//sendWay2Sms($message1);
			sendIncrdibleSms($clientcontactno,$message);
			echo "SMS Sent To :".$clientname."\n";
			sendMail($domain,$clientemailid,$fexpirydate,"Renewal Reminder - 3");
			}
		
		if(date('m-d') == date('m-d',strtotime($fifteen))) {
			//sendWay2Sms($message1);
			sendIncrdibleSms($clientcontactno,$message);
			echo "SMS Sent To :".$clientname."\n";
			sendMail($domain,$clientemailid,$fexpirydate,"Renewal Reminder - 2");
			}	
		
		if(date('m-d') == date('m-d',strtotime($fortyfive))){ 
			//sendWay2Sms($message1);
			sendIncrdibleSms($clientcontactno,$message);
			echo "SMS Sent To :".$clientname."\n";
			sendMail($domain,$clientemailid,$fexpirydate,"Renewal Reminder - 1");
			}
		$message1="";
		$message="";	
		}
	}
	
	function sendMail($domainname,$clientemailid,$fexpirydate,$subject)
        {
        	$content="
        	<fieldset>
		<table border='0' width='400' height='455'>
			<tr>
				<td height='68' width='400' colspan='2'><img src=http://incredibletechsolve.com/img/logo.png></td>
			</tr>
			<tr>
				<td height='52' width='400' colspan='2'><h2><font color=red>Your Orders are expiring soon.Renew them now to continue the services</font></h2></td>
			</tr>
			<tr>
				<td height='41' width='400' colspan='2'>
					Some of your orders are expiring soon (or have already expired.) Please renew them before they are deleted to avoid loss of data
				</td>
			</tr>
			<tr>
				<td height='122' width='400' colspan='2' align='center'>
					<table cellpadding='0' cellspacing='0' width='538' height='119' border='1' bordercolor='red'>
						
						<tr>
							<td height='31' width='65'>Sr No</td>
							<td height='31' width='162'>Product</td>
							<td height='31' width='163'>Expiry Date</td>
						</tr>
						<tr>
							<td height='88' width='65'>1</td>
							<td height='88' width='162'>Domain Name Registration :  $domainname </td>
							<td height='88' width='163'> $fexpirydate </td>
						</tr>
						<tr>
							<td height='88' width='65'>2</td>
							<td height='88' width='162'>Wepspace Registration : $domainname </td>
							<td height='88' width='163'> $fexpirydate </td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td height='147' width='258'>
				<pre>
				SALES CONTACT
				
				Regards,
				Incredible Tech Solutions Sales Team
				sales@incredibletechsolve.com
				Tel No. (02188) 220 077
				</pre>
				</td>
				<td height='147' width='432'>
				<pre>
				BILLING CONTACT
				
				Regards,
				Incredible Tech Solutions Billing Team
				billing@incredibletechsolve.com
				Tel No. (02188) 220 077
				</pre>
				</td>
			</tr>
		</table>
		</fieldset>
        	";
	        $email = new PHPMailer();
	        $email->From      = 'incredib@lin6.plreseller.com';
	        $email->FromName  = 'Incredible Tech Solutions';
	        $email->Subject   = $subject;
	        $email->Body      = $content;
	        $email->IsHTML(true); 
	        $email->AddAddress( 'incrcronmail@gmail.com' );
	        $email->AddAddress( $clientemailid );
	        $b=$email->Send();
       	}
	
?>