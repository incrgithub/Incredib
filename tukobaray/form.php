<!--
	 
-->

<!DOCTYPE html>
<html>
<head>
<title> जगद्गुरू तुकोबाराय साहित्य परिषद , शाखा मंगळवेढा </title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" जगद्गुरू तुकोबाराय साहित्य परिषद , शाखा मंगळवेढा " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- custom css file -->
<link rel="stylesheet" href="css/style.css">
<!-- //custom css file -->

<!-- google fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- //google fonts -->
		
</head>
<script language="JavaScript" type="text/javascript">
function noBack(){ window.history.forward(); }
function isNumberKey(evt)
       {
          var chCode = (evt.which) ? evt.which : event.keyCode
          if (chCode != 46 && chCode > 31 
            && (chCode < 48 || chCode > 57))
             return false;
          else
          return true;
       }

function minLen(r,f,t,zero)        
		 {
  		 if( r * f >= zero)
    	 {
 		 t.value= (r/100) * f; 
   		 }
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
function setColor(el, bg) 
{
  if (el.style) el.style.backgroundColor = bg;
}

 function isAlpha(keyCode)
        {
            return ((keyCode >= 65 && keyCode <= 90) || keyCode == 8 || keyCode == 32 || keyCode == 9 || keyCode == 46)
        }

 </script>
<body>
<h1> </h1>
<div class="agile-its">
	<h2> सभासद नोंदणी फॉर्म </h2>
	 
	<div class="w3layouts">
		<div class="photos-upload-view">
			<form id="upload" action="insert_member.php" method="POST" enctype="multipart/form-data">
				<input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000" />
					 
						<div class="agileinfo-row">
							<div class="ferry ferry-from">
								<label> संपूर्ण नाव </label>
								<input type="text" name="mem_name"   required="">
							</div>
							<div class="ferry ferry-from">
								<label> पत्ता  ( गावाचे नाव ) </label>
								<input type="text" name="mem_add"  required="">
							</div>
							
							
							 
							<div class="w3_agileits_main_grid_left_l">
								<h3>लिंग </h3>
							</div>
							<div class="form_box">
							   <div class="select-block1">
								<select name="mem_gender" required="">
									<option value="male">पुरुष</option>
									<option value="female">स्त्री</option>
								</select>
							  </div>
							 </div>
							 
							 <div class="ferry ferry-from">
								<label> जन्म तारीख  </label>
								<input type="date" name="mem_dob"  required="">
							</div>
							
							 <div class="ferry ferry-from">
								<label> मोबाईल नं  </label>
								<input type="text" name="mem_mobile" onkeypress="return isNumberKey(event)" maxlength="10" required="">
							</div>
							<div class="ferry ferry-from">
								<label> शिक्षण   </label>
								<input type="text" name="mem_edu"   required="">
							</div>
							 
							 
							<div class="clear"></div>
						</div>
					<div class="wthree-text">  
						<label class="anim">
							<input type="checkbox" class="checkbox" >
							<span>मला परिषदेच्या सर्व अटी व नियम मान्य आहेत </span> 
						</label>
						<div class="wthreesubmitaits">
							<input type="submit" name="submit" value="रजिस्टर व्हा ">
						</div>  
						<div class="clear"> </div>
					</div>
			</form>
						
		</div>
		<div class="clear"></div>
		 
	</div>
</div>
<div class="footer">
	<p> © 2018 सर्व हक्क सुरक्षित जगद्गुरू तुकोबाराय साहित्य परिषद मंगळवेढा  | डिझाईन   <a href="http://incredibletechsolve.com/"> Incredible Tech Solution </a></p>
</div>

<!-- js files -->
<script src="js/filedrag.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- //js files -->

</body>
</html>