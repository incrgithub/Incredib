<?php
include('conn.php');
session_start();
if (!isset($_SESSION['user_id'])){
header('location:index.php');
}
?>﻿
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
   <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Incredible Sms Solution</title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--ANIMATED FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
    <!-- SIDE MENU STYLE CSS -->
    <link href="assets/css/component.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	
	
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
	
    <script type="text/javascript" src="assets/js/customalert.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/customalert.css" />
    <script type="text/javascript">

		function setColor(el, bg) 
		{
		  if (el.style) el.style.backgroundColor = bg;
		}
		
		function checkInput(form) 
		{
		  var bgBad = "red";
		  var bgGood = "white";
		  var valid = true;
		  var errmsg="";
		  
		    /* Name  validation */ 		  
		 if (form.name.value == "" || form.name.value.trim().length==0) {
		    valid = false;
		    setColor(form.name, bgBad);
		  
		  } else {
		    setColor(form.name, bgGood);
		  }

                 
		  
		  if (form.address.value == "" || form.address.value.trim().length==0) {
		    valid = false;
		    setColor(form.address, bgBad);
		  
		  } else {
		    setColor(form.address, bgGood);
		  }
		  
		  
		   if (form.contact.value == "" || form.contact.value.trim().length==0) {
		    valid = false;
		    setColor(form.contact, bgBad);
		  
		  } else {
		    setColor(form.contact, bgGood);
		  }

                  if (form.contact.value.trim().length < 10) 
                   {
		    valid = false;
		    setColor(form.contact, bgBad);
		   // createCustomAlert("Please Enter a valid Contact Number","","Errors"); 
		  } 
                  else
                     {
		    setColor(form.contact, bgGood);
		    }

		  
		   /*category validation */
		  if (form.category.value == "") {
		    valid = false;
		    setColor(form.category, bgBad);
		  
		  } else {
		    setColor(form.category, bgGood);
		  }
		 
		  
		 
		  
		errmsg=errmsg+"\n\nPlease enter the fields marked with * ";
		
		/*if (!valid) 
			createCustomAlert(errmsg,"","Errors");*/
			
			
			
		return valid;
		}
		
		function checkSmsInput(form) 
		{
		  var bgBad = "yellow";
		  var bgGood = "lightyellow";
		  var valid = true;
		  var errmsg="";
		  
		  
		  
		  if (form.message.value == "" || form.message.value.trim().length==0) {
		    valid = false;
		    setColor(form.message, bgBad);
		  
		  } else {
		    setColor(form.message, bgGood);
		  }
		  
		                 
		   /*category validation */
		  if (form.category.value == "") {
		    valid = false;
		    setColor(form.category, bgBad);
		  
		  } else {
		    setColor(form.category, bgGood);
		  }
		 
		  
		 
		  
		errmsg=errmsg+"\n\nPlease enter the fields marked with * ";
		
		if (!valid) 
			createCustomAlert(errmsg,"","Errors");
			
			
			
		return valid;
		}
		
	function isNumberKey(evt)
	   {
		  var chCode = (evt.which) ? evt.which : event.keyCode
		  if (chCode != 46 && chCode > 31 
			&& (chCode < 48 || chCode > 57))
			 return false;
		  else
		  return true;
	   }
	   
	   function isAlpha(keyCode)
		{
			return ((keyCode >= 65 && keyCode <= 90) || keyCode == 8 || keyCode == 32 || keyCode == 9 || keyCode == 46)
		}
</script>

 <style type="text/css">
		
	
		
		#mask {
		  position:absolute;
		  left:0;
		  top:0;
		  z-index:99998;
		  background-color: #4D4D4D;
		  display:none;
		  
		}  
		#boxes .window {
		  position:absolute;
		  left:0;
		  top:0;
		  width:350px;
		  height:550px;
		  display:none;
		  z-index:99999;
		  padding:10px;
		  -moz-border-radius: 10px;
		  -webkit-border-radius: 10px;
		  border-radius: 10px;
		  border: 4px solid #333333;
		  
		  -moz-box-shadow:4px 4px 30px #130507;
			-webkit-box-shadow:4px 4px 30px #130507;
		  box-shadow:4px 4px 30px #130507;
			-moz-transition:top 800ms;
			-o-transition:top 800ms;
			-webkit-transition:top 800ms;
		  transition:top 800ms;
		  margin-left : 0px;
		}
		#boxes #dialog {
		  width:350px; 
		  height:375px;
		  padding:0px;
		  background-color: #FFFFFF;
		}

                #boxes1 .window {
		  position:absolute;
		  left:0;
		  top:0;
		  width:200px;
		  height:100px;
		  display:none;
		  z-index:99999;
		  padding:10px;
		  -moz-border-radius: 10px;
		  -webkit-border-radius: 10px;
		  border-radius: 10px;
		  border: 4px solid #333333;
		  
		  -moz-box-shadow:4px 4px 30px #130507;
			-webkit-box-shadow:4px 4px 30px #130507;
		  box-shadow:4px 4px 30px #130507;
			-moz-transition:top 800ms;
			-o-transition:top 800ms;
			-webkit-transition:top 800ms;
		  transition:top 800ms;
		  margin-left : 0px;
		}
		#boxes1 #dialog1 {
		  width:200px; 
		  height:100px;
		  padding:0px;
		  background-color: #FFFFFF;
		}
		</style>
<script src="assets/plugins/jquery.min.js" type="text/javascript"></script> 
</head>
<body class="cbp-spmenu-push">
    <script type="text/javascript">
	$(document).ready(function() {	
	
			var id = '#dialog1';
		
			//Get the screen height and width
			var maskHeight = $(document).height();
			var maskWidth = $(window).width();
		
			//Set heigth and width to mask to fill up the whole screen
			$('#mask').css({'width':maskWidth,'height':maskHeight});
			
			//transition effect		
			$('#mask').fadeIn(800);	
			$('#mask').fadeTo("slow",0.8);	
		
			//Get the window height and width
			var winH = $(window).height();
			var winW = $(window).width();
				  
			//Set the popup window to center
			$(id).css('top',  winH/2-$(id).height()/2 -50);
			$(id).css('left', winW/2-$(id).width()/2);
		
			//transition effect
			$(id).fadeIn(500); 	
		
		//if close button is clicked
		$('.window .close').click(function (e) {
			//Cancel the link behavior
			e.preventDefault();
			
			$('#mask').hide();
			$('.window').hide();
		});		
		
		//if mask is clicked
		$('#mask').click(function () {
			$(this).preventDefault();
			$(this).hide();
			$('.window').hide();
		});		
		
	});
	
	</script>
	<?php
	
	if(isset($_POST['save']))
	{
		include('conn.php');
		$name=$_POST['name'];
		$address=$_POST['address'];
		$contact=$_POST['contact'];
		$category=$_POST['category'];
		
		$query = "INSERT INTO employees(name,mobileno,address,category) "."VALUES ('$name','$contact','$address','$category')";
		mysql_query($query) or die(mysql_error());
		
?>

<div id="boxes1">
		<div style="top:150px; left: 551.5px; display: none;" id="dialog1" class="window">
			<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
			
			<a href='mainpage.php'><img src='assets/images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>
			
			
			
			</div>
			
			<div align="center" style="margin:5px 0 5px 0;">
			 Record Saved Successfully!!!!
			</div>
			
		</div>
		
		<!-- Mask to cover the whole screen -->
		<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
	</div>
<?php 		

	}



	
        if(isset($_POST['update']))
	{
		include('conn.php');
                $id=$_POST['id'];
		$name=$_POST['name'];
		$address=$_POST['address'];
		$contact=$_POST['contact'];
		$category=$_POST['category'];
		
		$query = "UPDATE employees SET name='$name',mobileno='$contact',address='$address',category='$category' where id='$id'";
		
		mysql_query($query) or die(mysql_error());
  		
        ?>


<div id="boxes1">
		<div style="top:150px; left: 551.5px; display: none;" id="dialog1" class="window">
			<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
			
			<a href='mainpage.php'><img src='assets/images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>
			
			
			
			</div>
			
			<div align="center" style="margin:5px 0 5px 0;">
			 Record Updated Successfully!!!!
			</div>
			
		</div>
		
		<!-- Mask to cover the whole screen -->
		<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
	</div>

<?php
	}
        if(isset($_GET['msg'])) 
        {
          $param=$_GET['msg'];
   
           if($param=="del")
	     {
		include('conn.php');
                $id=$_GET['id'];
		$query = "DELETE from employees where id='$id'";
		
		mysql_query($query) or die(mysql_error());
?>

<div id="boxes1">
		<div style="top:150px; left: 551.5px; display: none;" id="dialog1" class="window">
			<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
			
			<a href='mainpage.php'><img src='assets/images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>
			
			
			
			</div>
			
			<div align="center" style="margin:5px 0 5px 0;">
			 Record Deleted Successfully!!!!
			</div>
			
		</div>
		
		<!-- Mask to cover the whole screen -->
		<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
	</div>


<?php  		
           }
	}

	if(isset($_POST['send']))
	{

                 function sendSms($mobno,$mess)
				{
				$username="incrsms";
				$api_password="can@789";
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
					//echo "<script>alert('SMS Sent');</script>";
					//echo "<script>document.location.href='test1.php'</script>"; //Redirecting back after successfully sent SMS
				}
				else
				{ 
					//echo "<script>alert('SMS Sending Failed.');</script>";
				}
				
				curl_close($ch);

			}	
		include('conn.php');
		$category=$_POST['category'];
		$message=$_POST['message'];
		
		if($category == "All")
			$fetch_details_for_category="select mobileno from employees";	
		else
			$fetch_details_for_category="select mobileno from employees where category='$category'";		
			
		$mobilers= mysql_query($fetch_details_for_category);

		while($mobile_row = mysql_fetch_array($mobilers)) 
			{
			 $mobileNo=$mobile_row[0];
			 //echo $mobileNo.$message;
			 sendSms($mobileNo,$message);
			} 
		
		?>
 
         <div id="boxes1">
		<div style="top:150px; left: 551.5px; display: none;" id="dialog1" class="window">
			<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
			
			<a href='mainpage.php'><img src='assets/images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>
			
			
			
			</div>
			
			<div align="center" style="margin:5px 0 5px 0;">
			 SMS Sent Successfully!!!!
			</div>
			
		</div>
		
		<!-- Mask to cover the whole screen -->
		<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
	</div>
  


        <?php	
	}
	?>
	
   
    <!-- MAIN HEADING-->
    <div class="color-bg-one" id="main-sec">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 ">
                    <h1 class="pad-adjust"><i class="fa fa-plus faa-pulse animated"></i>Incredible Sms Solution</h1>
                </div>
            </div>
        </div>
    </div>
    <!--END MAIN HEADING-->
    <!--LEFT SLIDE MENU-->
    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
       
        <br><br><br>
        <a href="#add" class="topopup"><i class="fa fa-home fa-3x"></i>Add New</a>
        <a href="#list"><i class="fa fa-microphone fa-3x"></i>List Of Employees</a>
        <a href="#sms"><i class="fa fa-rocket fa-3x"></i>Send Sms</a>
        <a href="logout.php">Logout</a>
    </nav>

    <div class="row" id="icon-left">
        <div class="col-md-12">
            <i id="showLeftPush" class="fa fa-bars fa-4x faa-horizontal animated "></i>
        </div>
    </div>
    <!--END LEFT SLIDE MENU-->
	<center><h2><a href="#" id="add">Add New</a> </h2></center>
	<form name="login" method="post" action="mainpage.php" onSubmit="return checkInput(this)">
	<fieldset>
	<table cellpadding="0" cellspacing="0" width="313" height="200" align=center>

                
		<tr>
			<td height="38" width="146"><font face="calibri"><b>Name :</b></font></td>
			<td height="38" width="121"><input type="text" name="name" onkeydown= "return isAlpha(event.keyCode);" class="form_input1"></td>
		</tr>
		
		<tr>
			<td height="49" width="146"><font face="calibri"><b>Address</b></font></td>
			<td height="49" width="121"><textarea name="address" class="form_input2" rows="6" cols="30"></textarea></td>
		</tr>
												
		<tr>
			<td height="32" width="146"><font face="calibri"><b>Phone No :</b></font></td>
			<td height="32" width="121"><input type="text" name="contact" onkeypress="return isNumberKey(event)" maxlength=10 class="form_input1"></td>
		</tr>
		
		<tr>
			<td height="38" width="146"><font face="calibri"><b>Designation</b></font></td>
			<td height="38" width="121">
			<select name="category" class="form_input1">
			<option value="">Select</option>
			<option value="Manager">Manager</option>
			<option value="Employee">Employee</option>
			<option value="Member">Member</option>
			</select>
			</td>
		</tr>
		
		<tr>
			<td colspan=2 align="center"><input type="submit" name="save" value="Submit"/></td>
		</tr>
	</table>
	</fieldset>
	</form>

<?php
	if(isset($_GET['msg']))
		{
		$param=$_GET['msg'];
		if($param == "edit")
			{
                        $id=$_GET['id'];
			include('conn.php');
			$fetch_details="select * from employees where id='$id'";	
		        $details_rs= mysql_query($fetch_details);

			while($details_row = mysql_fetch_array($details_rs))
			{
                        $id=$details_row[0]; $name=$details_row[1];  $mobileNo=$details_row[2];   $address=$details_row[3]; $category=$details_row[4];
                        }

	?>



 <script type="text/javascript">
	$(document).ready(function() {	
	
			var id = '#dialog';
		
			//Get the screen height and width
			var maskHeight = $(document).height();
			var maskWidth = $(window).width();
		
			//Set heigth and width to mask to fill up the whole screen
			$('#mask').css({'width':maskWidth,'height':maskHeight});
			
			//transition effect		
			$('#mask').fadeIn(800);	
			$('#mask').fadeTo("slow",0.8);	
		
			//Get the window height and width
			var winH = $(window).height();
			var winW = $(window).width();
				  
			//Set the popup window to center
			$(id).css('top',  winH/2-$(id).height()/2 -50);
			$(id).css('left', winW/2-$(id).width()/2);
		
			//transition effect
			$(id).fadeIn(500); 	
		
		//if close button is clicked
		$('.window .close').click(function (e) {
			//Cancel the link behavior
			e.preventDefault();
			
			$('#mask').hide();
			$('.window').hide();
		});		
		
		//if mask is clicked
		$('#mask').click(function () {
			$(this).preventDefault();
			$(this).hide();
			$('.window').hide();
		});		
		
	});
	
	</script>

<div id="boxes">
		<div style="top:150px; left: 551.5px; display: none;" id="dialog" class="window">
			<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
			
			<a href='mainpage.php'><img src='assets/images/cross.png' width='16' style='border:none; cursor:pointer;' /></a>
			
			
			
			</div>
			
			<div align="center" style="margin:5px 0 5px 0;">
                        <center><h2><a href="#">Update Record</a> </h2></center>
			        <form name="login" method="post" action="mainpage.php" onSubmit="return checkInput(this)">
	<fieldset>
	<table cellpadding="0" cellspacing="0" width="313" height="200" align=center>
                <input type="hidden" value="<?php echo $id; ?>" name="id">
		<tr>
			<td height="38" width="146"><font face="calibri"><b>Name :</b></font></td>
			<td height="38" width="121"><input type="text" name="name" onkeydown= "return isAlpha(event.keyCode);" class="form_input1" value="<?php echo $name; ?>"></td>
		</tr>
		
		<tr>
			<td height="49" width="146"><font face="calibri"><b>Address</b></font></td>
			<td height="49" width="121"><textarea name="address" class="form_input2" rows="6" cols="30"> <?php echo $address; ?></textarea></td>
		</tr>
												
		<tr>
			<td height="32" width="146"><font face="calibri"><b>Phone No :</b></font></td>
			<td height="32" width="121"><input type="text" name="contact" onkeypress="return isNumberKey(event)" maxlength=10 class="form_input1" value="<?php echo $mobileNo; ?>"></td>
		</tr>
		
		<tr>
			<td height="38" width="146"><font face="calibri"><b>Designation</b></font></td>
			<td height="38" width="121">
                         <select name="category" class="form_input1">
			<?php
                         $catergoryOptions  = array('Manager','Employee','Member');
			 
			 foreach($catergoryOptions as $option){
			 if($category == $option){
			 echo "<option selected='selected' value='$option'>$option</option>" ;
			 }else{
			   echo "<option value='$option'>$option</option>" ;
			 }
			}
                        ?>
                        </select>
			</td>
		</tr>
		
		<tr>
			<td colspan=2 align="center"><input type="submit" name="update" value="Update"/></td>
		</tr>
	</table>
	</fieldset>
	</form>
			</div>
			
		</div>
		
		<!-- Mask to cover the whole screen -->
		<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
	</div>
   <?php  }  } ?>

    <!--HOME SECTION-->
    <div class="container" id="home">
        <div class="row text-center">
            <div class="col-md-12">
				<div class="content-wrapper">
					 <div class="container">
						<div class="row">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h2><a href="#" id="list">List Of All Employees</a></h2>
								</div>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped table-bordered table-hover" id="dataTables-example">
											<thead>
												<tr>
													<th>Name</th>
													<th>Contact No</th>
													<th>Address</th>
													<th>Category</th>
                                                                                                        <th>Actions</th>
												</tr>
											</thead>
											<tbody>
												<?php
												include('conn.php');
												$fetch_details="select * from employees order by id desc";	
												$details_rs= mysql_query($fetch_details);

												while($details_row = mysql_fetch_array($details_rs)) 
													{
													  echo "<tr>";
													  echo "<td>".$details_row[1]."</td>";
													  echo "<td>".$details_row[2]."</td>";
													  echo "<td>".$details_row[3]."</td>";
													  echo "<td>".$details_row[4]."</td>";

                                                                                                          echo "<td><a href='mainpage.php?id=$details_row[0]&msg=edit'><img src='images/b_edit.png'></a>&nbsp;&nbsp;<a href='mainpage.php?id=$details_row[0]&msg=del'><img src='images/b_drop.png'></a></td>";
													  echo "</tr>";
													} 
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
            </div>
			
			
			
			
        </div>
    </div>
    <!--END HOME SECTION-->

    <center><h2><a href="#" id="sms">Send Message</a></h2></center>
    <form name="sms" method="post" action="mainpage.php" onSubmit="return checkSmsInput(this)">
			<fieldset>
			<table cellpadding="0" cellspacing="0" width="313" height="150" align=center>
				<tr>
					<td height="38" width="150"><font face="calibri"><b>Designation</b></font></td>
					<td height="38" width="121">
					<select name="category" class="form_input1">
					<option value="">Select</option>
					<option value="All">All</option>
					<option value="Manager">Manager</option>
					<option value="Employee">Employee</option>
					<option value="Member">Member</option>
					</select>
					</td>
				</tr>
				<tr>
					<td height="49" width="150"><font face="calibri"><b>Message</b></font></td>
					<td height="49" width="121"><textarea name="message" class="form_input2" rows="6" cols="40"></textarea></td>
				</tr>
				<tr>
					<td colspan=2 align="center"><input type="submit" name="send" value="Send"/></td>
				</tr>
		</table>
		</fieldset>
		</form>
    
    <!--FOOTER SECTION -->
    <div class="for-full-back color-bg-one" id="footer">
        Copyright @ 2015 Designed & Developed by <a href="http://www.incredibletechsolve.com" target="_blank">Incredible Tech Solutions</a>
         
    </div>
    <!-- END FOOTER SECTION -->

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.js"></script>
    <!-- SIDE MENU SCRIPTS -->
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/classie.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
	
	
	 <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script src="assets/js/custom1.js"></script>
    </form>
</body>
</html>