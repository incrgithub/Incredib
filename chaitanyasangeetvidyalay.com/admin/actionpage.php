<?php include('logincommon.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php include('title.php'); ?></title>
<meta name="description" content="website description" />
<meta name="keywords" content="website keywords, website keywords" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!-- modernizr enables HTML5 elements and feature detects -->
<script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
<script type="text/javascript" src="js/zoom.js"></script>
<script type="text/javascript" src="js/success.js"></script>
<link rel="stylesheet" type="text/css" href="css/success.css" />
</head>

<body>

<?php
include('zoom.php');	
include('conn.php');

if(isset($_POST['addslider']))
	{
		if(isset($_POST['addslider']) && $_FILES['csv']['size'] > 0) {
			$fileName = $_FILES['csv']['name'];
			$tmpName  = $_FILES['csv']['tmp_name'];
			$fileSize = $_FILES['csv']['size'];
			$fileType = $_FILES['csv']['type'];
		}
		
		$target_path="../slider/";
		
		$target_path=$target_path.basename($_FILES['csv']['name']);
		
		if(move_uploaded_file($_FILES['csv']['tmp_name'],$target_path))
			{
			$queryslider = "INSERT INTO slider(photoid,name) "."VALUES (0,'$fileName')";
			mysql_query($queryslider ) or die(mysql_error()); 
			}
		sleep(2);
		echo "<script>successAlert('Slider Photo Uploaded','','Success');</script>";
	} 
	
if(isset($_POST['addgallery']))
	{
		if(isset($_POST['addgallery']) && $_FILES['photo']['size'] > 0) {
			$fileName = $_FILES['photo']['name'];
			$tmpName  = $_FILES['photo']['tmp_name'];
			$fileSize = $_FILES['photo']['size'];
			$fileType = $_FILES['photo']['type'];
		}
		
		$target_path="../gallery/";
		
		$target_path=$target_path.basename($_FILES['photo']['name']);
		
		if(move_uploaded_file($_FILES['photo']['tmp_name'],$target_path))
			{
			$querygallery = "INSERT INTO gallery(photoid,name) "."VALUES (0,'$fileName')";
			mysql_query($querygallery ) or die(mysql_error()); 
			}
		sleep(2);
		echo "<script>successAlert('Gallery Photo Uploaded','','Success');</script>";
	} 	

if(isset($_GET['sliderphotoid']))
	{
	$photoid=$_GET['sliderphotoid'];

    $query1="select photoid,name from slider where photoid='$photoid'";
	$rs=mysql_query($query1);
	$row=mysql_fetch_array($rs);
    $utemp="../slider/".$row[1];
    
    unlink($utemp);	

	$deletesliderimage="delete from slider where photoid='$photoid'";
		
	mysql_query($deletesliderimage);
	sleep(2);
	echo "<script>successAlert('Slider Photo Deleted','','Success');</script>";
	}	
	
if(isset($_GET['galleryphotoid']))
	{
	$photoid=$_GET['galleryphotoid'];

    $query2="select photoid,name from gallery where photoid='$photoid'";
	$rs=mysql_query($query2);
	$row=mysql_fetch_array($rs);
    $utemp="../gallery/".$row[1];
    
    unlink($utemp);	

	$deletegalleryimage="delete from gallery where photoid='$photoid'";
		
	mysql_query($deletegalleryimage);
	sleep(2);
	echo "<script>successAlert('Gallery Photo Deleted','','Success');</script>";
	}	

if(isset($_POST['updatelogo']))
	{
	include('conn.php');	
	$result = mysql_query("SELECT name FROM logo where id=10") or die('Query Not Executed');
	$num = mysql_num_rows($result);
	if($num > 0) {
			$row = mysql_fetch_array($result);
			$utemp1="../images/".$row[0];
			unlink($utemp1);
			
			if(isset($_POST['updatelogo']) && $_FILES['newlogo']['size'] > 0) {
			$fileName = $_FILES['newlogo']['name'];
			$tmpName  = $_FILES['newlogo']['tmp_name'];

			}
			
			$target_path="../images/";
			
			$target_path=$target_path.basename($_FILES['newlogo']['name']);
			
			if(move_uploaded_file($_FILES['newlogo']['tmp_name'],$target_path))
				{
				$querylogo = "UPDATE logo set name='$fileName' where id=10";
				mysql_query($querylogo) or die(mysql_error()); 
				}
			sleep(2);
			echo "<script>successAlert('Logo Updated','','Success');</script>";

		}
	}
if(isset($_POST['updatesocname']))
	{
	include('conn.php');
	$newname=$_POST['societyname'];
	mysql_query("update societyinfo set name='$newname' where id=10") or die(mysql_error());
	sleep(2);
	echo "<script>successAlert('Society Name Updated','','Success');</script>";
	} 
	   
if(isset($_POST['updatesocaddr']))
	{
	include('conn.php');
	$newaddr=$_POST['societyaddr'];
	mysql_query("update societyinfo set address='$newaddr' where id=10") or die(mysql_error());
	sleep(2);
	echo "<script>successAlert('Society Address Updated','','Success');</script>";
	} 	
if(isset($_POST['updateaboutus']))
	{
	include('conn.php');
	$newaboutus=$_POST['aboutus1'];
	mysql_query("update aboutus set contents='$newaboutus' where id=10") or die(mysql_error());
	sleep(2);
	echo "<script>successAlert('About Us Updated','','Success');</script>";
	} 	

if(isset($_POST['addmanagement']))
	{
	$name=$_POST['mname'];
	$post=$_POST['mpost'];
	
		if(isset($_POST['addmanagement']) && $_FILES['mphoto']['size'] > 0) {
			$fileName = $_FILES['mphoto']['name'];
			$tmpName  = $_FILES['mphoto']['tmp_name'];
		}
		
		$target_path="../management/";
		
		$target_path=$target_path.basename($_FILES['mphoto']['name']);
		
		if(move_uploaded_file($_FILES['mphoto']['tmp_name'],$target_path))
			{
			$querygallery = "INSERT INTO management(id,name,post,photo) "."VALUES (0,'$name','$post','$fileName')";
			mysql_query($querygallery ) or die(mysql_error()); 
			}
		sleep(2);
		echo "<script>successAlert('Data Saved','','Success');</script>";
	} 	
	
if(isset($_GET['manageid']))
	{
	$photoid=$_GET['manageid'];

    $query1="select id,photo from management where id='$photoid'";
	$rs=mysql_query($query1);
	$row=mysql_fetch_array($rs);
    $utemp="../management/".$row[1];
    
    unlink($utemp);	

	$deletemanage="delete from management where id='$photoid'";
		
	mysql_query($deletemanage);
	sleep(2);
	echo "<script>successAlert('Management  Photo Deleted','','Success');</script>";
	}		
if(isset($_POST['insertaddr']))
	{
	$address=$_POST['branchaddr'];
	mysql_query("insert into branchaddr values(0,'$address')") or die(mysql_error());
	sleep(2);
	echo "<script>successAlert('Branch Address Added','','Success');</script>";
	}	
if(isset($_GET['addrid']))
	{
	$id=$_GET['addrid'];

    $query1="select id,photo from management where id='$id'";
	
	$deleteaddr="delete from branchaddr where id='$id'";
		
	mysql_query($deleteaddr);
	sleep(2);
	echo "<script>successAlert('Branch Address Deleted','','Success');</script>";
	}	
if(isset($_POST['addupload']))
	{
	$filetype=$_POST['filetype'];
	$name=$_POST['name'];
	if($filetype == "yojana")
		{
		if(isset($_POST['addupload']) && $_FILES['myfile']['size'] > 0) {
			$fileName = $_FILES['myfile']['name'];
			$tmpName  = $_FILES['myfile']['tmp_name'];

		}
		
		$target_path="../yojana/";
		
		$target_path=$target_path.basename($_FILES['myfile']['name']);
		
		if(move_uploaded_file($_FILES['myfile']['tmp_name'],$target_path))
			{
			$querygallery = "INSERT INTO yojana(id,name,filename) "."VALUES (0,'$name','$fileName')";
			mysql_query($querygallery ) or die(mysql_error()); 
			}
		sleep(2);
		echo "<script>successAlert('Yojana File Uploaded','','Success');</script>";
		}
	else if($filetype == "years")
		{
		if(isset($_POST['addupload']) && $_FILES['myfile']['size'] > 0) {
			$fileName = $_FILES['myfile']['name'];
			$tmpName  = $_FILES['myfile']['tmp_name'];

		}
		
		$target_path="../ahval/";
		
		$target_path=$target_path.basename($_FILES['myfile']['name']);
		
		if(move_uploaded_file($_FILES['myfile']['tmp_name'],$target_path))
			{
			$querygallery = "INSERT INTO ahval(id,name,filename) "."VALUES (0,'$name','$fileName')";
			mysql_query($querygallery ) or die(mysql_error()); 
			}
		sleep(2);
		echo "<script>successAlert('Ahval File Uploaded','','Success');</script>";
		}	
	}	 

if(isset($_GET['yojanaid']))
	{
	$id=$_GET['yojanaid'];
	
    $query1="select id,filename from yojana where id='$id'";
	$rs=mysql_query($query1);
	$row=mysql_fetch_array($rs);
    $utemp="../yojana/".$row[1];
    
    unlink($utemp);	

	$deletemanage="delete from yojana where id='$id'";
		
	mysql_query($deletemanage);
	sleep(2);
	echo "<script>successAlert('Yojana File Deleted','','Success');</script>";
	}		
if(isset($_GET['ahvalid']))
	{
	$id=$_GET['ahvalid'];
	
    $query1="select id,filename from ahval where id='$id'";
	$rs=mysql_query($query1);
	$row=mysql_fetch_array($rs);
    $utemp="../ahval/".$row[1];
    
    unlink($utemp);	

	$deletemanage="delete from ahval where id='$id'";
		
	mysql_query($deletemanage);
	sleep(2);
	echo "<script>successAlert('Ahval File Deleted','','Success');</script>";
	}			 
?>   

  <div id="main">
   <?php include('header.php'); ?>
    <div id="site_content">
     
      <div class="content">
      <?php include('smarttab-vertical.php'); ?>
       
	</div>
	</div>
	<script type="text/javascript">
		Element.cleanWhitespace('content1');
		init();
	</script>
	
		<!--Tabbed Accordian ends here-->
      </div>
    </div>
    <div id="scroll">
      <a title="Scroll to the top" class="top" href="#"><img src="images/top.png" alt="top" /></a>
    </div>
     
    <?php include('footer.php'); ?>
  </div>
  <!-- javascript at the bottom for fast page loading -->
 
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
      $('.top').click(function() {$('html, body').animate({scrollTop:0}, 'fast'); return false;});
    });
  </script>  
  

</body>
</html>
