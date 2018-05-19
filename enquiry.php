<?php

		include('conn.php');
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$name=$_POST['name'];
		$email=$_POST['emailId'];
		$mobno=$_POST['mobileno'];
		$message=$_POST['message'];
		
		$query="insert into tbl_enquiry(name,email,contact,message) values('$name','$email','$mobno','$message')";

		mysql_query($query)  or die('Not Executed');

		$mess="Hi ".$name.",<BR><BR>Thank you for contacting us ,We will revert you soon.<BR><BR>Thanks & Regards <BR> Incredible Tech Solutions<BR><BR>"."<img src='http://incredibletechsolve.com/img/logo.png'>"."<BR><BR>(This is auto generated mail please do not reply.)";
		
		$to="enquiry@incredibletechsolve.com";
		
		$msg="Enquiry Details:<BR>Name :".$name."<BR>Email : ".$email."<BR>Contact No:".$mobno."<BR>Enquiry:".$message."		<BR><BR>Thanks & Regards <BR> Incredible Tech Solutions<BR><BR>"."<img src='http://incredibletechsolve.com/img/logo.png'>"."<BR><BR>(This is auto generated mail please do not reply.)";
		
		$sub1="Enquiry by ".$name;
		
		$sub="Incredible Tech Solutions";
		
		echo "<script> window.location='contactus.php?msg=succenquiry'</script>";
		
		mail($email,$sub,$mess,$headers);
		
		$r="-f"."dkkkpmba@lin4.plreseller.com";
		
		mail($to,$sub1,$msg,$headers,$r);
		
?>