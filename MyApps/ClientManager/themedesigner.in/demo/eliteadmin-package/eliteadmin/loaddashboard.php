<?php
    function loadWebsites()
   {
	$website_db = new Database();
	$website_db->connect();
	$website_db->sql("SELECT w.domainname, c.clientname, c.clientemailid, c.clientcontactno, w.expirydate FROM tbl_websites w, tbl_clients c WHERE w.expirydate > NOW() AND w.expirydate < DATE_ADD( NOW( ) , INTERVAL 90 DAY ) AND c.clientid = w.clientid");
	$website_result = $website_db->getResult();
	$website_count=count($website_result);
	if($website_count > 0) 
		{
		echo "<div class='alert alert-info'><h2><font color='white'>Website Development</font> </h2></div>";
		echo '<div class="table-responsive">';
		echo "<table id='websites' class='display nowrap' cellspacing='0' width='100%'>";
			echo "<thead>";
				echo "<tr>";
					echo "<th>Domain Name</th>";
					echo "<th>Client Name</th>";
					echo "<th>Email Id</th>";
					echo "<th>Contact No</th>";
					echo "<th>Expiry Date</th>";
				echo "</tr>";
			echo "</thead>";

			echo "<tbody>";
			foreach($website_result as $x) 
				{
				 echo "<tr>";  
					 $domain= $x['domainname'];
					 echo  "<td><a href='http://$domain' target='_blank'>". $x['domainname']."</a></td>";
					 echo  "<td>". $x['clientname']."</td>";
					 echo  "<td>". $x['clientemailid']."</td>";
					 echo  "<td>". $x['clientcontactno']."</td>";
					 echo  "<td>". $x['expirydate']."</td>";
				echo "</tr>"; 
				}
			echo "</tbody>"; 
		echo "</table>"; 
		echo "</div>";
		}
	}
	
	function loadSMS()
    {
	$sms_db = new Database();
	$sms_db->connect();
	$sms_db->sql("SELECT s.senderid,s.nosms, c.clientname, c.clientemailid, c.clientcontactno, s.smsexpirydate FROM tbl_sms s, tbl_clients c WHERE s.smsexpirydate > NOW() AND s.smsexpirydate < DATE_ADD( NOW( ) , INTERVAL 90 DAY ) AND c.clientid = s.clientid");
	$sms_result = $sms_db->getResult();
	$sms_count=count($sms_result);
	if($sms_count > 0) 
		{
		echo "<div class='alert alert-warning'><h2><font color='white'>SMS Integration</font> </h2></div>";
		echo '<div class="table-responsive">';
		echo "<table id='smsint' class='display nowrap' cellspacing='0' width='100%'>";
			echo "<thead>";
				echo "<tr>";
					echo "<th>Sender Id</th>";
					echo "<th>No Of SMS</th>";
					echo "<th>Client Name</th>";
					echo "<th>Email Id</th>";
					echo "<th>Contact No</th>";
					echo "<th>Expiry Date</th>";
				echo "</tr>";
			echo "</thead>";

			echo "<tbody>";
			foreach($sms_result as $x) 
				{
				 echo "<tr>";  
					 echo  "<td>". $x['senderid']."</td>";
					 echo  "<td>". $x['nosms']."</td>";
					 echo  "<td>". $x['clientname']."</td>";
					 echo  "<td>". $x['clientemailid']."</td>";
					 echo  "<td>". $x['clientcontactno']."</td>";
					 echo  "<td>". $x['smsexpirydate']."</td>";
				echo "</tr>"; 
				}
			echo "</tbody>"; 
		echo "</table>"; 
		echo "</div>";
		}
	}
	
	function loadWebAppDev()
    {
	$webappdev_db = new Database();
	$webappdev_db->connect();
	$webappdev_db->sql("SELECT s.appname,c.clientname, c.clientemailid, c.clientcontactno, s.webappexpirydate FROM tbl_webappdev s, tbl_clients c WHERE s.webappexpirydate > NOW() AND s.webappexpirydate < DATE_ADD( NOW( ) , INTERVAL 90 DAY ) AND c.clientid = s.clientid");
	$webappdev_result = $webappdev_db->getResult();
	$webappdev_count=count($webappdev_result);
	if($webappdev_count > 0) 
		{
		echo "<div class='alert alert-danger'><h2><font color='white'>Web Application Development</font> </h2></div>";
		echo '<div class="table-responsive">';
		echo "<table id='webappdev' class='display nowrap' cellspacing='0' width='100%'>";
			echo "<thead>";
				echo "<tr>";
					echo "<th>Application Name</th>";
					echo "<th>Client Name</th>";
					echo "<th>Email Id</th>";
					echo "<th>Contact No</th>";
					echo "<th>Expiry Date</th>";
				echo "</tr>";
			echo "</thead>";

			echo "<tbody>";
			foreach($webappdev_result as $x) 
				{
				 echo "<tr>";  
					 echo  "<td>". $x['appname']."</td>";
					 echo  "<td>". $x['clientname']."</td>";
					 echo  "<td>". $x['clientemailid']."</td>";
					 echo  "<td>". $x['clientcontactno']."</td>";
					 echo  "<td>". $x['webappexpirydate']."</td>";
				echo "</tr>"; 
				}
			echo "</tbody>"; 
		echo "</table>"; 
		echo "</div>";
		}
	}
	
	function loadDesktopAppDev()
    {
	$desktopappdev_db = new Database();
	$desktopappdev_db->connect();
	$desktopappdev_db->sql("SELECT s.appname,c.clientname, c.clientemailid, c.clientcontactno, s.desktopappexpirydate FROM tbl_desktopappdev s, tbl_clients c WHERE s.desktopappexpirydate > NOW() AND s.desktopappexpirydate < DATE_ADD( NOW( ) , INTERVAL 90 DAY ) AND c.clientid = s.clientid ");
	$desktopappdev_result = $desktopappdev_db->getResult();
	$desktopappdev_count=count($desktopappdev_result);
	if($desktopappdev_count > 0) 
		{
		echo  "<div class='alert alert-info'><h2><font color='white'>Desktop Application Development </h2></div>";
		echo '<div class="table-responsive">';
		echo "<table id='desktopappdev' class='display nowrap' cellspacing='0' width='100%'>";
			echo "<thead>";
				echo "<tr>";
					echo "<th>Application Name</th>";
					echo "<th>Client Name</th>";
					echo "<th>Email Id</th>";
					echo "<th>Contact No</th>";
					echo "<th>Expiry Date</th>";
				echo "</tr>";
			echo "</thead>";

			echo "<tbody>";
			foreach($desktopappdev_result as $x) 
				{
				 echo "<tr>";  
					 echo  "<td>". $x['appname']."</td>";
					 echo  "<td>". $x['clientname']."</td>";
					 echo  "<td>". $x['clientemailid']."</td>";
					 echo  "<td>". $x['clientcontactno']."</td>";
					 echo  "<td>". $x['desktopappexpirydate']."</td>";
				echo "</tr>"; 
				}
			echo "</tbody>";
		echo "</table>"; 
		echo "</div>";
		}
	}
	
	function loadMobileAppDev()
    {
	$mobileappdev_db = new Database();
	$mobileappdev_db->connect();
	$mobileappdev_db->sql("SELECT s.appname,c.clientname, c.clientemailid, c.clientcontactno, s.mobileappexpirydate FROM tbl_mobileappdev s, tbl_clients c WHERE s.mobileappexpirydate > NOW() AND s.mobileappexpirydate < DATE_ADD( NOW( ) , INTERVAL 90 DAY ) AND c.clientid = s.clientid ");
	$mobileappdev_result = $mobileappdev_db->getResult();
	$mobileappdev_count=count($mobileappdev_result);
	if($mobileappdev_count > 0) 
		{
		echo  "<div class='alert alert-danger'><h2><font color='white'>Mobile Application Development</font> </h2></div>";
		echo '<div class="table-responsive">';
		echo "<table id='mobileappdev' class='display nowrap' cellspacing='0' width='100%'>";
			echo "<thead>";
				echo "<tr>";
					echo "<th>Application Name</th>";
					echo "<th>Client Name</th>";
					echo "<th>Email Id</th>";
					echo "<th>Contact No</th>";
					echo "<th>Expiry Date</th>";
				echo "</tr>";
			echo "</thead>";

			echo "<tbody>";
			foreach($mobileappdev_result as $x) 
				{
				 echo "<tr>";  
					 echo  "<td>". $x['appname']."</td>";
					 echo  "<td>". $x['clientname']."</td>";
					 echo  "<td>". $x['clientemailid']."</td>";
					 echo  "<td>". $x['clientcontactno']."</td>";
					 echo  "<td>". $x['mobileappexpirydate']."</td>";
				echo "</tr>"; 
				}
			echo "</tbody>";
		echo "</table>"; 
		echo "</div>";
		}
	}
	
	function loadVoiceCalls()
    {
	$voicecalls_db = new Database();
	$voicecalls_db->connect();
	$voicecalls_db->sql("SELECT s.nocalls,c.clientname, c.clientemailid, c.clientcontactno, s.callsexpirydate FROM tbl_voicecalls s, tbl_clients c WHERE s.callsexpirydate > NOW() AND s.callsexpirydate < DATE_ADD( NOW( ) , INTERVAL 90 DAY ) AND c.clientid = s.clientid ");
	$voicecalls_result = $voicecalls_db->getResult();
	$voicecalls_count=count($voicecalls_result);
	if($voicecalls_count > 0) 
		{
		echo  "<div class='alert alert-warning'><h2><font color='white'>Voice Calls</font></h2></div>";
		echo '<div class="table-responsive">';
		echo "<table id='voicecalls' class='display nowrap' cellspacing='0' width='100%'>";
			echo "<thead>";
				echo "<tr>";
					echo "<th>No Of Calls</th>";
					echo "<th>Client Name</th>";
					echo "<th>Email Id</th>";
					echo "<th>Contact No</th>";
					echo "<th>Expiry Date</th>";
				echo "</tr>";
			echo "</thead>";

			echo "<tbody>";
			foreach($voicecalls_result as $x) 
				{
				 echo "<tr>";  
					 echo  "<td>". $x['nocalls']."</td>";
					 echo  "<td>". $x['clientname']."</td>";
					 echo  "<td>". $x['clientemailid']."</td>";
					 echo  "<td>". $x['clientcontactno']."</td>";
					 echo  "<td>". $x['callsexpirydate']."</td>";
				echo "</tr>"; 
				}
			echo "</tbody>"; 
		echo "</table>"; 
		echo "</div>";
		}
	}
?>
		