<?php
   function loadTxns($clientid)
   {
	echo "<div class='alert alert-warning'><h2><font color='white'>Transactions</font> </h2></div>";
	$txn_db = new Database();
	$txn_db->connect();
	$txn_db->sql("SELECT * FROM tbl_transactions where clientid='$clientid'");
	$txn_result = $txn_db->getResult();
	echo '<div class="table-responsive">';
	echo "<table id='txns' class='display nowrap' cellspacing='0' width='100%'>";
		echo "<thead>";
			echo "<tr>";
				echo "<th>Txn Id</th>";
				echo "<th>Txn Date</th>";
				echo "<th>Txn No</th>";
				echo "<th>Bank Name</th>";
				echo "<th>Txn Mode</th>";
				echo "<th>Txn Amount</th>";
				echo "<th>Comments</th>";
				echo "<th>Delete</th>";
			echo "</tr>";
		echo "</thead>";

		echo "<tbody>";
		foreach($txn_result as $x) 
			{
			 echo "<tr>";  
				 $id=$x['txnid'];
				 echo  "<td>". $x['txnid']."</td>";
				 echo  "<td>". $x['txndate']."</td>";
				 echo  "<td>". $x['txnno']."</td>";
				 echo  "<td>". $x['bankname']."</td>";
				 echo  "<td>". $x['txnmode']."</td>";
				 echo  "<td>". $x['txnamount']."</td>";
				 echo  "<td>". $x['txncomments']."</td>";
				 echo  "<td><a href='txnactions.php?id=$id&msg=deletetxn'><img src='images/cross.png'></a></td>";
			echo "</tr>"; 
			}
		echo "</tbody>"; 
	echo "</table>"; 
	echo "</div>";
	}
	
	function loadFollowup($clientid)
   {
	echo "<div class='alert alert-danger'><h2><font color='white'>Follow Up</font> </h2></div>";
	$followup_db = new Database();
	$followup_db->connect();
	$followup_db->sql("SELECT * FROM tbl_followup where clientid='$clientid'");
	$followup_result = $followup_db->getResult();
	echo '<div class="table-responsive">';
	echo "<table id='takefollowup' class='display nowrap' cellspacing='0' width='100%'>";
		echo "<thead>";
			echo "<tr>";
				echo "<th>Call Date</th>";
				echo "<th>Next Followup Date</th>";
				echo "<th>Comments</th>";
				echo "<th>Delete</th>";
			echo "</tr>";
		echo "</thead>";

		echo "<tbody>";
		foreach($followup_result as $x) 
			{
			 echo "<tr>";  
				 $id=$x['followupid'];
				 echo  "<td>". $x['date1']."</td>";
				 echo  "<td>". $x['next_followup_date']."</td>";
				 $comments= wordwrap($x['comments'],25,"<br>\n");
				 echo  "<td>". $comments."</td>";
				 echo  "<td><a href='followupactions.php?id=$id&msg=deletefollowup'><img src='images/cross.png'></a></td>";
			echo "</tr>"; 
			}
		echo "</tbody>"; 
	echo "</table>"; 
	echo "</div>";
	}
	
   function loadWebsites($clientid)
   {
	echo "<div class='alert alert-info'><h2><font color='white'>Website Development</font> </h2></div>";
	$website_db = new Database();
	$website_db->connect();
	$website_db->sql("SELECT * FROM tbl_websites where clientid='$clientid'");
	$website_result = $website_db->getResult();
	echo '<div class="table-responsive">';
	echo "<table id='websites' class='display nowrap' cellspacing='0' width='100%'>";
		echo "<thead>";
			echo "<tr>";
				echo "<th>Domain Name</th>";
				echo "<th>Webspace</th>";
				echo "<th>No of Email Id's</th>";
				echo "<th>Expiry Date</th>";
				echo "<th>Edit</th>";
				echo "<th>Delete</th>";
			echo "</tr>";
		echo "</thead>";

		echo "<tbody>";
		foreach($website_result as $x) 
			{
			 echo "<tr>";  
				 $id=$x['websiteid'];
				 $domain= $x['domainname'];
				 echo  "<td><a href='http://$domain' target='_blank'>". $x['domainname']."</a></td>";
				 echo  "<td>". $x['webspace']."</td>";
				 echo  "<td>". $x['noofemailds']."</td>";
				 echo  "<td>". $x['expirydate']."</td>";
				 echo  "<td><a href='editdetails.php?id=$id&msg=editwebsite'><img src='images/edit.png'></a></td>";
				 echo  "<td><a href='clientprojectactions.php?id=$id&msg=deletewebsite'><img src='images/cross.png'></a></td>";
			echo "</tr>"; 
			}
		echo "</tbody>"; 
	echo "</table>"; 
	echo "</div>";
	}
	
	function loadSMS($clientid)
    {
	echo "<div class='alert alert-warning'><h2><font color='white'>SMS Integration</font> </h2></div>";
	$sms_db = new Database();
	$sms_db->connect();
	$sms_db->sql("SELECT * FROM tbl_sms where clientid='$clientid'");
	$sms_result = $sms_db->getResult();
	echo '<div class="table-responsive">';
	echo "<table id='smsint' class='display nowrap' cellspacing='0' width='100%'>";
		echo "<thead>";
			echo "<tr>";
				echo "<th>Sender Id</th>";
				echo "<th>No Of SMS</th>";
				echo "<th>Expiry Date</th>";
				echo "<th>Edit</th>";
				echo "<th>Delete</th>";
			echo "</tr>";
		echo "</thead>";

		echo "<tbody>";
		foreach($sms_result as $x) 
			{
			 echo "<tr>";  
				 $id=$x['smsid'];
				 echo  "<td>". $x['senderid']."</td>";
				 echo  "<td>". $x['nosms']."</td>";
				 echo  "<td>". $x['smsexpirydate']."</td>";
				 echo  "<td><a href='editdetails.php?id=$id&msg=editsms'><img src='images/edit.png'></a></td>";
				 echo  "<td><a href='clientprojectactions.php?id=$id&msg=deletesms'><img src='images/cross.png'></a></td>";
			echo "</tr>"; 
			}
		echo "</tbody>"; 
	echo "</table>"; 
	echo "</div>";
	}
	
	function loadWebAppDev($clientid)
    {
	echo "<div class='alert alert-danger'><h2><font color='white'>Web Application Development</font> </h2></div>";
	$webappdev_db = new Database();
	$webappdev_db->connect();
	$webappdev_db->sql("SELECT * FROM tbl_webappdev where clientid='$clientid'");
	$webappdev_result = $webappdev_db->getResult();
	echo '<div class="table-responsive">';
	echo "<table id='webappdev' class='display nowrap' cellspacing='0' width='100%'>";
		echo "<thead>";
			echo "<tr>";
				echo "<th>Application Name</th>";
				echo "<th>Expiry Date</th>";
				echo "<th>Edit</th>";
				echo "<th>Delete</th>";
			echo "</tr>";
		echo "</thead>";

		echo "<tbody>";
		foreach($webappdev_result as $x) 
			{
			 echo "<tr>";  
				 $id=$x['appid'];
				 echo  "<td>". $x['appname']."</td>";
				 echo  "<td>". $x['webappexpirydate']."</td>";
				 echo  "<td><a href='editdetails.php?id=$id&msg=editwebappappdev'><img src='images/edit.png'></a></td>";
				 echo  "<td><a href='clientprojectactions.php?id=$id&msg=deletewebappdev'><img src='images/cross.png'></a></td>";
			echo "</tr>"; 
			}
		echo "</tbody>"; 
	echo "</table>"; 
	echo "</div>";
	}
	
	function loadDesktopAppDev($clientid)
    {
	echo  "<div class='alert alert-info'><h2><font color='white'>Desktop Application Development </h2></div>";
	$desktopappdev_db = new Database();
	$desktopappdev_db->connect();
	$desktopappdev_db->sql("SELECT * FROM tbl_desktopappdev where clientid='$clientid'");
	$desktopappdev_result = $desktopappdev_db->getResult();
	echo '<div class="table-responsive">';
	echo "<table id='desktopappdev' class='display nowrap' cellspacing='0' width='100%'>";
		echo "<thead>";
			echo "<tr>";
				echo "<th>Application Name</th>";
				echo "<th>Expiry Date</th>";
				echo "<th>Edit</th>";
				echo "<th>Delete</th>";
			echo "</tr>";
		echo "</thead>";

		echo "<tbody>";
		foreach($desktopappdev_result as $x) 
			{
			 echo "<tr>";  
				 $id=$x['appid'];
				 echo  "<td>". $x['appname']."</td>";
				 echo  "<td>". $x['desktopappexpirydate']."</td>";
				 echo  "<td><a href='editdetails.php?id=$id&msg=editdesktopappdev'><img src='images/edit.png'></a></td>";
				 echo  "<td><a href='clientprojectactions.php?id=$id&msg=deletedesktopappdev'><img src='images/cross.png'></a></td>";
			echo "</tr>"; 
			}
		echo "</tbody>"; 
	echo "</table>"; 
	echo "</div>";
	}
	
	function loadMobileAppDev($clientid)
    {
	echo  "<div class='alert alert-danger'><h2><font color='white'>Mobile Application Development</font> </h2></div>";
	$mobileappdev_db = new Database();
	$mobileappdev_db->connect();
	$mobileappdev_db->sql("SELECT * FROM tbl_mobileappdev where clientid='$clientid'");
	$mobileappdev_result = $mobileappdev_db->getResult();
	echo '<div class="table-responsive">';
	echo "<table id='mobileappdev' class='display nowrap' cellspacing='0' width='100%'>";
		echo "<thead>";
			echo "<tr>";
				echo "<th>Application Name</th>";
				echo "<th>Expiry Date</th>";
				echo "<th>Edit</th>";
				echo "<th>Delete</th>";
			echo "</tr>";
		echo "</thead>";

		echo "<tbody>";
		foreach($mobileappdev_result as $x) 
			{
			 echo "<tr>";  
				 $id=$x['appid'];
				 echo  "<td>". $x['appname']."</td>";
				 echo  "<td>". $x['mobileappexpirydate']."</td>";
				 echo  "<td><a href='editdetails.php?id=$id&msg=editmobileappdev'><img src='images/edit.png'></a></td>";
				 echo  "<td><a href='clientprojectactions.php?id=$id&msg=deletemobileappdev'><img src='images/cross.png'></a></td>";
			echo "</tr>"; 
			}
		echo "</tbody>"; 
	echo "</table>"; 
	echo "</div>";
	}
	
	function loadVoiceCalls($clientid)
    {
	echo  "<div class='alert alert-warning'><h2><font color='white'>Voice Calls</font></h2></div>";
	$voicecalls_db = new Database();
	$voicecalls_db->connect();
	$voicecalls_db->sql("SELECT * FROM tbl_voicecalls where clientid='$clientid'");
	$voicecalls_result = $voicecalls_db->getResult();
	echo '<div class="table-responsive">';
	echo "<table id='voicecalls' class='display nowrap' cellspacing='0' width='100%'>";
		echo "<thead>";
			echo "<tr>";
				echo "<th>No Of Calls</th>";
				echo "<th>Expiry Date</th>";
				echo "<th>Edit</th>";
				echo "<th>Delete</th>";
			echo "</tr>";
		echo "</thead>";

		echo "<tbody>";
		foreach($voicecalls_result as $x) 
			{
			 echo "<tr>";  
				 $id=$x['callsid'];
				 echo  "<td>". $x['nocalls']."</td>";
				 echo  "<td>". $x['callsexpirydate']."</td>";
				 echo  "<td><a href='editdetails.php?id=$id&msg=editvoicecalls'><img src='images/edit.png'></a></td>";
				 echo  "<td><a href='clientprojectactions.php?id=$id&msg=deletevoicecalls'><img src='images/cross.png'></a></td>";
			echo "</tr>"; 
			}
		echo "</tbody>"; 
	echo "</table>"; 
	echo "</div>";
	}
?>
		