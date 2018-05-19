<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Smart Tab - a javascript jQuery tab control</title>
<?php include('theme.php'); ?>
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="js/jquery.smartTab.js"></script>
<script language="javascript" src="js/js_disable_right_click.js"></script>
<script language="javascript" src="js/js_disable_right_click_cfg.js"></script>
<script type="text/javascript" src="js/customalert.js"></script>
<link rel="stylesheet" type="text/css" href="css/customalert.css" />
<link href="css/popupstyle.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/script1.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
    	// Smart Tab
  		//$('#tabs').smartTab({autoProgress: true,stopOnFocus:true,transitionEffect:'vSlide'});
  		$('#tabs').smartTab({autoProgress: true,stopOnFocus:true,transitionEffect:'hSlide'});
	});
	
	function Checkfiles()
			{
				var fup = document.getElementById('csv');
				var upload=document.getElementById('upload');
				
				var fileName = fup.value;
				var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
				if(ext == "jpg" || ext == "png" || ext == "gif" || ext == "bmp")
				{
				return true;
				} 
				else
				{
				document.getElementById('csv').value="";
				createCustomAlert("Upload .jpg,.png,.gif,.bmp files only","","Errors");
				fup.focus();
				return false;
				}
			}
			
			function CheckMfiles()
			{
				var fup = document.getElementById('mphoto');
				var upload=document.getElementById('upload');
				
				var fileName = fup.value;
				var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
				if(ext == "jpg" || ext == "png" || ext == "gif" || ext == "bmp")
				{
				return true;
				} 
				else
				{
				document.getElementById('mphoto').value="";
				createCustomAlert("Upload .jpg,.png,.gif,.bmp files only","","Errors");
				fup.focus();
				return false;
				}
			}
			
		   function Checkfiles1()
			{
				var fup = document.getElementById('photo');
				var upload=document.getElementById('upload');
				
				var fileName = fup.value;
				var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
				if(ext == "jpg" || ext == "png" || ext == "gif" || ext == "bmp")
				{
				return true;
				} 
				else
				{
				document.getElementById('photo').value="";
				createCustomAlert("Upload .jpg,.png,.gif,.bmp files only","","Errors");
				fup.focus();
				return false;
				}
			}
			
			  function CheckUpload()
			{
				var fup = document.getElementById('myfile');
				var upload=document.getElementById('upload');
				
				var fileName = fup.value;
				var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
				if(ext == "pdf" || ext == "doc" || ext == "docx")
				{
				return true;
				} 
				else
				{
				document.getElementById('myfile').value="";
				createCustomAlert("Upload .pdf .doc .docx files only","","Errors");
				fup.focus();
				return false;
				}
			}
			
			
			function CheckLogo()
			{
				var fup = document.getElementById('newlogo');
				var upload=document.getElementById('upload');
				
				var fileName = fup.value;
				var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
				if(ext == "jpg" || ext == "png" || ext == "gif" || ext == "bmp")
				{
				return true;
				} 
				else
				{
				document.getElementById('newlogo').value="";
				createCustomAlert("Upload .jpg,.png,.gif,.bmp files only","","Errors");
				fup.focus();
				return false;
				}
			}
		
		
			
			function setColor(el, bg) 
			{
			  if (el.style) el.style.backgroundColor = bg;
			}
			
			function SliderValidation(form) 
			{
			  var bgBad = "red";
			  var bgGood = "white";
			  var valid = true;
			  
			  if (form.csv.value == "") {
			     valid = false;
			    setColor(form.csv, bgBad);
			
			  
			  } else {
			    setColor(form.csv, bgGood);
			  }
			
			if (!valid) 
				createCustomAlert("Please Select File To be Uploaded.","","Errors");
			  return valid;
			
			}
			
			function ManageValidation(form) 
			{
			  var bgBad = "red";
			  var bgGood = "white";
			  var valid = true;
			  
			  if (form.mname.value == "") {
			     valid = false;
			    setColor(form.mname, bgBad);
			
			  
			  } else {
			    setColor(form.mname, bgGood);
			  }
			  
			  if (form.mpost.value == "") {
			     valid = false;
			    setColor(form.mpost, bgBad);
			
			  
			  } else {
			    setColor(form.mpost, bgGood);
			  }
			  
			   if (form.mphoto.value == "") {
			     valid = false;
			    setColor(form.mphoto, bgBad);
			
			  
			  } else {
			    setColor(form.mphoto, bgGood);
			  }
			
			
			if (!valid) 
				createCustomAlert("Please fill all the fields marked with *","","Errors");
			  return valid;
			
			}
			
			function UploadValidation(form) 
			{
			  var bgBad = "red";
			  var bgGood = "white";
			  var valid = true;
			  
			  if (form.name.value == "") {
			     valid = false;
			    setColor(form.name, bgBad);
			
			  
			  } else {
			    setColor(form.name, bgGood);
			  }
			  
			  if (form.myfile.value == "") {
			     valid = false;
			    setColor(form.myfile, bgBad);
			
			  
			  } else {
			    setColor(form.myfile, bgGood);
			  }
			  
			 if (!valid) 
				createCustomAlert("Please fill all the fields marked with *","","Errors");
			  return valid;
			
			}

			
			function LogoValidation(form) 
			{
			  var bgBad = "red";
			  var bgGood = "white";
			  var valid = true;
			  
			  if (form.newlogo.value == "") {
			     valid = false;
			    setColor(form.newlogo, bgBad);
			
			  
			  } else {
			    setColor(form.newlogo, bgGood);
			  }
			
			if (!valid) 
				createCustomAlert("Please Select File To be Uploaded.","","Errors");
			  return valid;
			
			}

			function AboutValidation(form) 
			{
			  var bgBad = "red";
			  var bgGood = "white";
			  var valid = true;
			  
			  if (form.aboutus1.value == "") {
			     valid = false;
			    setColor(form.aboutus1, bgBad);
			
			  
			  } else {
			    setColor(form.aboutus1, bgGood);
			  }
			
			if (!valid) 
				createCustomAlert("Please Select File To be Uploaded.","","Errors");
			  return valid;
			
			}
			 
			function GalleryValidation(form) 
			{
			  var bgBad = "red";
			  var bgGood = "white";
			  var valid = true;
			  
			  if (form.photo.value == "") {
			     valid = false;
			    setColor(form.photo, bgBad);
			
			  
			  } else {
			    setColor(form.photo, bgGood);
			  }
			
			if (!valid) 
				createCustomAlert("Please Select File To be Uploaded.","","Errors");
			  return valid;
			
			}
			
			function AddressValidation(form) 
			{
			  var bgBad = "red";
			  var bgGood = "white";
			  var valid = true;
			  
			  if (form.branchaddr.value == "") {
			     valid = false;
			    setColor(form.branchaddr, bgBad);
			
			  
			  } else {
			    setColor(form.branchaddr, bgGood);
			  }
			
			if (!valid) 
				createCustomAlert("Please enter the Branch Address","","Errors");
			  return valid;
			
			}
			
			function SocietyValidation(form) 
			{
			  var bgBad = "red";
			  var bgGood = "white";
			  var valid = true; 
			  
			  if (form.societyname.value == "") {
			     valid = false;
			    setColor(form.societyname, bgBad);
			
			  
			  } else {
			    setColor(form.societyname, bgGood);
			  }
			  
			  if (form.societyaddr.value == "") {
			     valid = false;
			    setColor(form.societyaddr, bgBad);
			
			  
			  } else {
			    setColor(form.societyaddr, bgGood);
			  }

			
			if (!valid) 
				createCustomAlert("Please Select File To be Uploaded.","","Errors");
			  return valid;
			
			}
	
			function showdata(str)
			{
				if (str=="")
				  {
				  document.getElementById("txtHint").innerHTML="";
				  return;
				  } 
				if (window.XMLHttpRequest)
				  {// code for IE7+, Firefox, Chrome, Opera, Safari
				  xmlhttp=new XMLHttpRequest();
				  }
				else
				  {// code for IE6, IE5
				  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  }
				xmlhttp.onreadystatechange=function()
				  {
				  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				    {
				    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
				    }
				  }
		
				xmlhttp.open("GET","getdata.php?q="+str,true);
				xmlhttp.send();
			}
			  
</script>

	<script type="text/javascript" async="" src="./files/ga.js"></script><script src="./files/clienthint.js"></script>
	<script type="text/javascript" src="./files/saved_resource"></script><style type="text/css">.gssb_c{border:0;position:absolute;z-index:989}.gssb_e{border:1px solid #ccc;border-top-color:#d9d9d9;box-shadow:0 2px 4px rgba(0,0,0,0.2);-webkit-box-shadow:0 2px 4px rgba(0,0,0,0.2);cursor:default}.gssb_f{visibility:hidden;white-space:nowrap}.gssb_k{border:0;display:block;position:absolute;top:0;z-index:988}.gsdd_a{border:none!important}.gsib_a{width:100%;padding:4px 6px 0}.gsib_a,.gsib_b{vertical-align:top}.gssb_a{padding:0 7px}.gssb_a,.gssb_a td{white-space:nowrap;overflow:hidden;line-height:22px}#gssb_b{font-size:11px;color:#36c;text-decoration:none}#gssb_b:hover{font-size:11px;color:#36c;text-decoration:underline}.gssb_g{text-align:center;padding:8px 0 7px;position:relative}.gssb_h{font-size:15px;height:28px;margin:0.2em;-webkit-appearance:button}.gssb_i{background:#eee}.gss_ifl{visibility:hidden;padding-left:5px}.gssb_i .gss_ifl{visibility:visible}a.gssb_j{font-size:13px;color:#36c;text-decoration:none;line-height:100%}a.gssb_j:hover{text-decoration:underline}.gssb_l{height:1px;background-color:#e5e5e5}.gssb_m{color:#000;background:#fff}.gsq_a{padding:0}.gscsep_a{display:none}.gsfe_a{border:1px solid #b9b9b9;border-top-color:#a0a0a0;box-shadow:inset 0px 1px 2px rgba(0,0,0,0.1);-moz-box-shadow:inset 0px 1px 2px rgba(0,0,0,0.1);-webkit-box-shadow:inset 0px 1px 2px rgba(0,0,0,0.1);}.gsfe_b{border:1px solid #4d90fe;outline:none;box-shadow:inset 0px 1px 2px rgba(0,0,0,0.3);-moz-box-shadow:inset 0px 1px 2px rgba(0,0,0,0.3);-webkit-box-shadow:inset 0px 1px 2px rgba(0,0,0,0.3);}.gscb_a{display:inline-block;font:27px/13px arial,sans-serif}.gsst_a .gscb_a{color:#a1b9ed;cursor:pointer}.gsst_a:hover .gscb_a,.gsst_a:focus .gscb_a{color:#36c}.gsst_a{display:inline-block}.gsst_a{cursor:pointer;padding:0 4px}.gsst_a:hover{text-decoration:none!important}.gsst_b{font-size:16px;padding:0 2px;user-select:none;-webkit-user-select:none;white-space:nowrap}.gsst_e{opacity:0.55;}.gsst_a:hover .gsst_e,.gsst_a:focus .gsst_e{opacity:0.72;}.gsst_a:active .gsst_e{opacity:1;}.gsst_f{background:white;text-align:left}.gsst_g{background-color:white;border:1px solid #ccc;border-top-color:#d9d9d9;box-shadow:0 2px 4px rgba(0,0,0,0.2);-webkit-box-shadow:0 2px 4px rgba(0,0,0,0.2);margin:-1px -3px;padding:0 6px}.gsst_h{background-color:white;height:1px;margin-bottom:-1px;position:relative;top:-1px}.gssb_a{padding:0 7px}.gssb_e{border:0}.gssb_l{margin:5px 0}.gssb_c .gsc-completion-container{position:static}.gssb_c{z-index:5000}.gsc-completion-container table{background:transparent;font-size:inherit;font-family:inherit}.gssb_c > tbody > tr,.gssb_c > tbody > tr > td,.gssb_d,.gssb_d > tbody > tr,.gssb_d > tbody > tr > td,.gssb_e,.gssb_e > tbody > tr,.gssb_e > tbody > tr > td{padding:0;margin:0;border:0}.gssb_a table,.gssb_a table tr,.gssb_a table tr td{padding:0;margin:0;border:0}</style></head><body><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15594517-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
   
   // ga.src = 'files/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>	
</head><body>

<script type="text/javascript" src="./files/jsapi">
        							</script>
        							<script type="text/javascript">

          							// Load the Google Transliterate API
          								google.load("elements", "1", {
            								packages: "transliteration"
          								});

      							function onLoad() {
        								var options = {
            									sourceLanguage:
                								google.elements.transliteration.LanguageCode.ENGLISH,
            									destinationLanguage:
                								[google.elements.transliteration.LanguageCode.MARATHI],
            									shortcutKey: 'ctrl+g',
            									transliterationEnabled: true
        									};

        								// Create an instance on TransliterationControl with the required
        								// options.
        								var control =
            								new google.elements.transliteration.TransliterationControl(options);

        								// Enable transliteration in the textbox with id
        								// 'transliterateTextarea'.
          								control.makeTransliteratable(['aboutus1']);
          								control.makeTransliteratable(['societyname']); 
          								control.makeTransliteratable(['societyaddr']);
          								control.makeTransliteratable(['mname']); 
          								control.makeTransliteratable(['mpost']);
          								control.makeTransliteratable(['branchaddr']);
										control.makeTransliteratable(['name']);
      								}
      								google.setOnLoadCallback(onLoad);
    								</script><script src="./files/saved_resource(1)" type="text/javascript"></script><link href="./files/transliteration.css" type="text/css" rel="stylesheet"><script src="./files/transliteration.I.js" type="text/javascript"></script>

 <div class="content">

<table align="center" border="0" cellpadding="0" cellspacing="0">
<tr>
  <td valign="top">
  <p align=center>
 
  </p>
  		<div id="tabs">
  			<ul>
  				<li><a href="#tabs-1"><h2><p align=center>कॉमन</p></h2></a></li>
  				<li><a href="#tabs-2"><h2><p align=center>&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2366;&#2344;</p></h2></a></li>
  				<li><a href="#tabs-3"><h2><p align=center>&#2357;&#2381;&#2351;&#2357;&#2360;&#2381;&#2341;&#2366;&#2346;&#2344;</p></h2></a></li>
  				<li><a href="#tabs-4"><h2><p align=center>&#2351;&#2379;&#2332;&#2344;&#2366;</p></h2></a></li>
  				<li><a href="#tabs-5"><h2><p align=center>फोटो समूह</p></h2></a></li>
                <li><a href="#tabs-6"><h2><p align=center>&#2360;&#2306;&#2346;&#2352;&#2381;&#2325;</p></h2></a></li>
				
  			</ul>
  			<div id="tabs-1">
            <h2>कॉमन</h2>
            <form action="actionpage.php" method="post" enctype="multipart/form-data" name="updatelogo" id="updatelogo" onSubmit="return LogoValidation(this)">	
            <fieldset style="width:750px">
            <legend>Change Logo</legend>
             <table border="0" width="550" height="40" align="center" background='images/shared/image1.jpg'>
				<tr>
					<td height="39" width="422" colspan="2" align=center><FONT face="Verdana, Arial, Helvetica" color=#000000 size=2>
					Press Browse button and select the file to be uploaded</FONT>
					<?php
	   		   		include('conn.php');	
					$result = mysql_query("SELECT name FROM logo where id=10") or die('Query Not Executed');
					$num = mysql_num_rows($result);
					if($num > 0) 
					{
						while($row = mysql_fetch_array($result)){
					     echo "<img src='../images/$row[0]' width=175 height=65>";
						}
					}
					else
					    echo "<img src='../images/logo.png' width=175 height=65>";
					?>	
					</td>
				</tr>
				
				<tr>
					<td height="43" width="188" align="center"><FONT face=Verdana color=#e30102 size=-2>
					*</FONT><FONT face="Verdana, Arial, Helvetica" color=#000000 size=2>
					 Choose File</font>
					</td>
					<td height="43" width="234"><input type="hidden" name="MAX_FILE_SIZE" value="2000000">
					<input name="newlogo" type="file" id="newlogo" onchange="return CheckLogo();" />
					</td>
				</tr>
				
				<tr>
					<td height="30" width="422" colspan="2" valign="middle" align='center'>
					<input id="updatelogo" type="submit" name="updatelogo" value="UPDATE" class='form_submit'>
					</td>
				</tr>
			</table>
         	</form>
         	</fieldset>
         	
         	<form action="actionpage.php" method="post" enctype="multipart/form-data" name="updatesocietyinfo" id="updatesocietyinfo" onSubmit="return SocietyValidation(this)">	
            <fieldset style="width:750px">
            <legend>Society Details</legend>
            Type in Marathi (Press Ctrl+g to toggle between English and Marathi) 
             <table border="0" width="550" height="40" align="center" background='images/shared/image1.jpg'>
				<tr>
					<td height="39" width="422" colspan="2" align=center><FONT face="Verdana, Arial, Helvetica" color=#000000 size=2><h1>
					<?php
	   		   		include('conn.php');	
					$result = mysql_query("SELECT * FROM societyinfo where id=10") or die('Query Not Executed');
					$num = mysql_num_rows($result);
					if($num > 0) 
					{
						while($row = mysql_fetch_array($result)){
					     echo "<textarea name='societyname' rows=5 cols=40 id='societyname' class='form_textarea1'>$row[1]</textarea>";
					     ?>
						
					</h1></FONT>
					<input id="updatesocname" type="submit" name="updatesocname" value="UPDATE" class='form_submit'>
					</td>
					
					<td height="39" width="422" colspan="2" align=center colspan=2><FONT face="Verdana, Arial, Helvetica" color=#000000 size=2><h1>
					<?php
	   		   		
					     echo "<textarea name='societyaddr' rows=5 cols=40 id='societyaddr' class='form_textarea1'>$row[2]</textarea>";
						}
						}
					?>
					</h1></FONT>
					<input id="updatesocaddr" type="submit" name="updatesocaddr" value="UPDATE" class='form_submit'>
					</td>

				</tr>
			</table>
           	</fieldset>
			</form>
			 	
         	<br>
        </div>
  		<div id="tabs-2">
            <h2>&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2366;&#2344;</h2>	
           	<form action="actionpage.php" method="post" enctype="multipart/form-data" name="addslider" id="addslider" onSubmit="return SliderValidation(this)">	
            <fieldset style="width:750px">
            <legend>Slider</legend>
           	 <table border="0" width="550" height="40" align="center" background='images/shared/image1.jpg'>
				<tr>
					<td height="39" width="422" colspan="2" align=center><FONT face="Verdana, Arial, Helvetica" color=#000000 size=2>
					Press Browse button and select the file to be uploaded</FONT>
					</td>
				</tr>
				
				<tr>
					<td height="43" width="188" align="center"><FONT face=Verdana color=#e30102 size=-2>
					*</FONT><FONT face="Verdana, Arial, Helvetica" color=#000000 size=2>
					 Choose File</font>
					</td>
					<td height="43" width="234"><input type="hidden" name="MAX_FILE_SIZE" value="2000000">
					<input name="csv" type="file" id="csv" onchange="return Checkfiles();" />
					</td>
				</tr>
				
				<tr>
					<td height="30" width="422" colspan="2" valign="middle" align='center'>
					<input id="addslider" type="submit" name="addslider" value="UPLOAD" class='form_submit'>
					</td>
				</tr>
			</table>
         	</form>
         	<hr>
         	 <?php
	     		include('conn.php');	
				$result = mysql_query("SELECT * FROM slider order by photoid desc") or die('Query Not Executed');
				$i=0;
				echo "<marquee behavior=scroll direction=left scrollamount=7 onmouseout=this.start() onmouseover=this.stop() scrolldelay=90 style='background-color:white;'>"; 
				while($row = mysql_fetch_array($result)){
				     echo "<a href='../slider/" . $row['name'] . "' rel='lightbox1' class='effectable'><img src='../slider/" . $row['name'] . "' width=50 height=50 alt='$row[name]'/></a>";
			 	    echo "<a href='actionpage.php?sliderphotoid=$row[photoid]'><img src=images/cross.png border=0 width=25 height=25></a>";
				}
				echo "</marquee>";
				?>			
			</fieldset>
            <form action="actionpage.php" method="post" enctype="multipart/form-data" name="aboutus" id="aboutus" onSubmit="return AboutValidation(this)">	
            <fieldset style="width:750px">
            <legend>About Us</legend>
             <table border="0" width="400" height="40" align="center" background='images/shared/image1.jpg'>
				<tr>
					<td height="39" width="422" colspan="2" align=center><FONT face="Verdana, Arial, Helvetica" color=#000000 size=2><h1>
					<?php
	   		   		include('conn.php');	
					$result = mysql_query("SELECT * FROM aboutus where id=10") or die('Query Not Executed');
					$num = mysql_num_rows($result);
					if($num > 0) 
					{
						while($row = mysql_fetch_array($result))
						{
					    echo "<textarea name='aboutus1' rows=25 cols=90 id='aboutus1' class='form_textarea'>$row[1]</textarea>";
					    }
					} 
					?>
					<input id="updateaboutus" type="submit" name="updateaboutus" value="UPDATE" class='form_submit'>

					</h1></FONT>
					</td>

				</tr>
			</table>
           	</fieldset>
			</form>
			<br><br> 	
   				          
        </div>
        <div id="tabs-3">
            <h2>&#2357;&#2381;&#2351;&#2357;&#2360;&#2381;&#2341;&#2366;&#2346;&#2344;</h2>	
           <a href="#" class="topopup"><img src=images/plus.png>Add New</a>
    
			    <div id="toPopup"> 
			    	
			        <div class="close"></div>
			       	<span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
					<div id="popup_content"> <!--your content start-->
					 <form action="actionpage.php" method="post" enctype="multipart/form-data" name="addmanagement" id="addmanagement" onSubmit="return ManageValidation(this)">	
			           <table border="0" width="360" height="40" align="center" background='images/shared/image1.jpg'>
										
						<tr>
							<td height="43" width="180" align="center"><FONT face=Verdana color=#e30102 size=-2>
							*</FONT><FONT face="Verdana, Arial, Helvetica" color=#000000 size=2>
							&#2344;&#2366;&#2357;</font>
							</td>
							<td height="43" width="236">
							<input name="mname" type="text" id="mname" class="form_input1"/>
							</td>
						</tr>
						
						<tr>
							<td height="43" width="180" align="center"><FONT face=Verdana color=#e30102 size=-2>
							*</FONT><FONT face="Verdana, Arial, Helvetica" color=#000000 size=2>
							&#2346;&#2342; </font>
							</td>
							<td height="43" width="236">
							<input name="mpost" type="text" id="mpost" class="form_input1"/>
							</td>
						</tr>
										
						<tr>
							<td height="43" width="180" align="center"><FONT face=Verdana color=#e30102 size=-2>
							*</FONT><FONT face="Verdana, Arial, Helvetica" color=#000000 size=2>
							&#2347;&#2379;&#2335;&#2379;  </font>
							</td>
							<td height="43" width="236"><input type="hidden" name="MAX_FILE_SIZE" value="2000000">
							<input name="mphoto" type="file" id="mphoto" onchange="return CheckMfiles();" />
							</td>
						</tr>
						
						<tr>
							<td height="30" width="354" colspan="2" valign="middle" align='center'>
							<input id="addmanagement" type="submit" name="addmanagement" value="Submit" class="form_submit">
							</td>
						</tr>
					</table>
					</form>
			        </div> <!--your content end-->
			       </div> <!--toPopup end-->
			    
				<div class="loader"></div>
			   	<div id="backgroundPopup"></div>
              	
				<?php
				include('conn.php');	
				$result = mysql_query("SELECT * FROM management") or die('Query Not Executed');
				$num = mysql_num_rows($result);
				if($num > 0) 
				{
					echo "<table border='0' width='476' height='143'>";
					echo "<tr><td colspan=5><hr></td></tr>";
					echo "<tr>";
						echo "<td height='30' width='37'>क्रमांक</td>";
						echo "<td height='30' width='104' align=center>&#2344;&#2366;&#2357;</td>";
						echo "<td height='30' width='166' align=center>&#2346;&#2342;</td>";
						echo "<td height='30' width='141' align=center>&#2347;&#2379;&#2335;&#2379;</td>";
						echo "<td height='30' width='141' align=center>काढून टाका</td>";
					echo "</tr>";
					echo "<tr><td colspan=5><hr></td></tr>";
					$i=0;
					while($row = mysql_fetch_array($result)){
					++$i;
				    echo "<tr>";
						echo "<td height='56' width='37' align=center>$i</td>";
						echo "<td height='56' width='104' align=center>$row[1]</td>";
						echo "<td height='56' width='166' align=center>$row[2]</td>";
							echo "<td height='56' width='141' align=center><a href='../management/" . $row[3] . "' rel='lightbox1' class='effectable'><img src='../management/$row[3]' border=0 width=100 height=100></a></td>";
						echo "<td height='56' width='166' align=center><a href='actionpage.php?manageid=$row[0]'><img src=images/cross.png border=0 width=25 height=25></a></td>";							
					echo "</tr>";
					echo "<tr><td colspan=5><hr></td></tr>";
					}     
					echo "</table>";
				 }    
				 
				?>			          
        </div>
  			<div id="tabs-4">
            	
            <form action="actionpage.php" method="post" enctype="multipart/form-data" name="uploadyojana" id="uploadyojana" onSubmit="return UploadValidation(this)">	
            <fieldset style="width:750px">
            <legend><h2>&#2351;&#2379;&#2332;&#2344;&#2366; आणि  &#2357;&#2366;&#2352;&#2381;&#2359;&#2367;&#2325; &#2309;&#2361;&#2357;&#2366;&#2354;</h2></legend>
           	 <table border="0" width="550" height="40" align="center" background='images/shared/image1.jpg'>
				<tr>
					<td height="43" width="188" align="center"><FONT face=Verdana color=#e30102 size=-2>
					*</FONT><FONT face="Verdana, Arial, Helvetica" color=#000000 size=2>
					 Type Of File</font>
					</td>
					<td height="43" width="234"><input type="hidden" name="MAX_FILE_SIZE" value="2000000">
					<select name="filetype" class="form_input1"> 
					<option name="yojana" value="yojana">&#2351;&#2379;&#2332;&#2344;&#2366;</option>
					<option name="years" value="years">&#2357;&#2366;&#2352;&#2381;&#2359;&#2367;&#2325; &#2309;&#2361;&#2357;&#2366;&#2354;</option>
					</select>
					</td>
				</tr>
				
				<tr>
					<td height="43" width="188" align="center"><FONT face=Verdana color=#e30102 size=-2>
					*</FONT><FONT face="Verdana, Arial, Helvetica" color=#000000 size=2>
					 Name</font>
					</td>
					<td height="43" width="234"><input type="hidden" name="MAX_FILE_SIZE" value="2000000">
					<input name="name" type="text" id="name" class="form_input1"/>
					</td>
				</tr>


				
				<tr>
					<td height="43" width="188" align="center"><FONT face=Verdana color=#e30102 size=-2>
					*</FONT><FONT face="Verdana, Arial, Helvetica" color=#000000 size=2>
					 Choose File</font>
					</td>
					<td height="43" width="234"><input type="hidden" name="MAX_FILE_SIZE" value="2000000">
					<input name="myfile" type="file" id="myfile" onchange="return CheckUpload();" class="form_input1"/>
					</td>
				</tr>
				
				<tr>
					<td height="30" width="422" colspan="2" valign="middle" align='center'>
					<input id="addupload" type="submit" name="addupload" value="UPLOAD" class='form_submit'>
					</td>
				</tr>
			</table>
         	</form>
         	<hr>
      		<?php
      		echo "<table border='0' width='758'>";
				echo "<tr>";
					echo "<td width='370' colspan=2>";
					include('conn.php');	
					$result = mysql_query("SELECT * FROM yojana order by id desc") or die('Query Not Executed');
					$num = mysql_num_rows($result);
					if($num > 0) 
					{
					echo "<table cellpadding='0' cellspacing='0' width='371'>";
					echo "<tr><td><b>&#2351;&#2379;&#2332;&#2344;&#2366;</b></td>";
					echo "<tr><td><hr></td>";
						while($row = mysql_fetch_array($result))
						{
						echo "<tr>";
							echo "<td width='371' height='5'><a href='../yojana/$row[2]'>$row[1]</a></td>";
							echo "<td width='371' height='5'><a href='actionpage.php?yojanaid=$row[0]'><img src=images/cross.png border=0 width=25 height=25></a></td>";
						echo "</tr>";
						}
					echo "</table>";
					echo "</td>";
					}
					echo "<td width='370'>";
					$result1 = mysql_query("SELECT * FROM ahval order by id desc") or die('Query Not Executed');
					$num1 = mysql_num_rows($result1);
					if($num1 > 0) 
					{
					echo "<table cellpadding='0' cellspacing='0' width='371'>";
					echo "<tr><td><b>&#2357;&#2366;&#2352;&#2381;&#2359;&#2367;&#2325; &#2309;&#2361;&#2357;&#2366;&#2354;</b></td>";
					echo "<tr><td><hr></td>";
						while($row1 = mysql_fetch_array($result1))
						{
						echo "<tr>";
								echo "<td width='371' height='5'><a href='../ahval/$row1[2]'>$row1[1]</a></td>";
							echo "<td width='371' height='5'><a href='actionpage.php?ahvalid=$row1[0]'><img src=images/cross.png border=0 width=25 height=25></a></td>";
						echo "</tr>";
						}
					echo "</table>";
					echo "</td>";
					}
					echo "</td>";
				echo "</tr>";
			echo "</table>";
      		?>
         	
           

        </div>
        
        <div id="tabs-5">
            <form action="actionpage.php" method="post" enctype="multipart/form-data" name="addgallery" id="addgallery" onSubmit="return GalleryValidation(this)">	
            <fieldset style="width:750px">
            <legend>फोटो समूह</legend>
           	 <table border="0" width="550" height="40" align="center" background='images/shared/image1.jpg'>
				<tr>
					<td height="39" width="422" colspan="2" align=center><FONT face="Verdana, Arial, Helvetica" color=#000000 size=2>
					Press Browse button and select the file to be uploaded</FONT>
					</td>
				</tr>
				
				<tr>
					<td height="43" width="188" align="center"><FONT face=Verdana color=#e30102 size=-2>
					*</FONT><FONT face="Verdana, Arial, Helvetica" color=#000000 size=2>
					 Choose File</font>
					</td>
					<td height="43" width="234"><input type="hidden" name="MAX_FILE_SIZE" value="2000000">
					<input name="photo" type="file" id="photo" onchange="return Checkfiles1();" />
					</td>
				</tr>
				
				<tr>
					<td height="30" width="422" colspan="2" valign="middle" align='center'>
					<input id="addgallery" type="submit" name="addgallery" value="UPLOAD" class='form_submit'>
					</td>
				</tr>
			</table>
         	</form>
         	<hr>
         	 <?php
	     		include('conn.php');	
				$result = mysql_query("SELECT * FROM gallery order by photoid desc") or die('Query Not Executed');
				$i=0;
				echo "<marquee behavior=scroll direction=left scrollamount=7 onmouseout=this.start() onmouseover=this.stop() scrolldelay=90 style='background-color:white;'>"; 
				while($row = mysql_fetch_array($result)){
				     echo "<a href='../gallery/" . $row['name'] . "' rel='lightbox1' class='effectable'><img src='../gallery/" . $row['name'] . "' width=50 height=50 alt='$row[name]'/></a>";
			 	 echo "<a href='actionpage.php?galleryphotoid=$row[photoid]'><img src=images/cross.png border=0 width=25 height=25></a>";
				}
				echo "</marquee>";
				?>			
			</fieldset>   
			<br><br><br><br>
        </div>   
        
		 <div id="tabs-6">
            <h2>&#2360;&#2306;&#2346;&#2352;&#2381;&#2325;</h2>	
           <form action="actionpage.php" method="post" enctype="multipart/form-data" name="addcontact" id="addcontact" onSubmit="return AddressValidation(this)">	
            <fieldset style="width:750px">
            <legend>Branch Addresses</legend>
            Type in Marathi (Press Ctrl+g to toggle between English and Marathi) 
             <table border="0" width="550" height="40" align="center">
				<tr>
					<td height="40" width="550" align=center colspan=2>
					<textarea name='branchaddr' rows=5 cols=40 id='branchaddr' class='form_textarea1'></textarea><br>
				    <input id="insertaddr" type="submit" name="insertaddr" value="ADD" class='form_submit'>
					</td>

				</tr>
				<tr>
					<td height="40" width="550" align=center colspan=2>
					<?php
					include('conn.php');	
					$result = mysql_query("SELECT * FROM branchaddr") or die('Query Not Executed');
					$num = mysql_num_rows($result);
					if($num > 0) 
					{
						echo "<table border='0' width='476' height='143'>";
						echo "<tr><td colspan=5><hr></td></tr>";
						echo "<tr>";
							echo "<td height='30' width='37'>क्रमांक</td>";
							echo "<td height='30' width='104' align=center>पत्ता</td>";
							echo "<td height='30' width='141' align=center>काढून टाका</td>";
						echo "</tr>";
						echo "<tr><td colspan=5><hr></td></tr>";
						$i=0;
						while($row = mysql_fetch_array($result)){
						++$i;
					    echo "<tr>";
							echo "<td height='56' width='37' align=center>$i</td>";
							echo "<td height='56' width='104' align=center>$row[1]</td>";
							echo "<td height='56' width='166' align=center><a href='actionpage.php?addrid=$row[0]'><img src=images/cross.png border=0 width=25 height=25></a></td>";							
						echo "</tr>";
						echo "<tr><td colspan=5><hr></td></tr>";
						}     
						echo "</table>";
					 }    
					 
					?>			   
					</td>
				</tr>
			</table>
           	</fieldset>
			</form>
               
        </div>       
    
  	</div>  	
  </td>
</tr>
</table>  	
</div>	
</body>
</html>