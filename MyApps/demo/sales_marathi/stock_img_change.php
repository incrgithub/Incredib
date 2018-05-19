<?php
session_start();
 include('connect.php');
?> 

<!DOCTYPE html>
<html>
    
    <head>
        <title>Change Images </title>
        <!-- Bootstrap -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <style type="text/css">
<!--
.style1 {font-size: 14px}
-->
        </style>
		
		
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
 <style type="text/css">
		
	#mask {
	  position:absolute;
	  left:0;
	  top:0;
	  z-index:99998;
	  background-color: #4D4D4D;
	  display:none;
	  
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
	
<script type="text/javascript">

	function setNewColor(el, bg) 
		{
		  if (el.style) el.style.backgroundColor = bg;
		}
		
	function checkPhoto(form) 
		{
		  var bgBad = "#FF9999";
		  var bgGood = "#66FFCC";
		  var valid = true;
		  var errmsg="";
		  
		  /* Photo validation */ 		  
		 if (form.photo.value == "" || form.photo.value.trim().length==0) {
			error_photo.innerHTML ="Please select your Photo";
			setTimeout(function () {error_photo.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_photo.innerHTML ="";
				setNewColor(form.photo, bgGood);
		  }
		return valid;  
		}	  
		
	function CheckPhotoExt()
	{
		var fup = document.getElementById('photo');
     	var fileName = fup.value;
		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		if(ext == "jpg" || ext == "png" || ext == "gif" || ext == "bmp" || ext == "JPG" || ext == "PNG" || ext == "GIF" || ext == "BMP")
			{
			return true;
			} 
		else
		{
			fileName="";
			error_photo.innerHTML ="&nbsp;&nbsp;Upload .jpg,.png,.gif,.bmp files only.";
			document.getElementById('photo').value="";
			fup.focus();
			return false;
		}
	}
	
	</script>
	<script src="js/jquery.min.js" type="text/javascript"></script> 
</head>
    
    <body>
       <?php include("header.php");?>
        <div class="container-fluid">
            <div class="row-fluid">
             <?php include("slidebar.php");?>
				
				
                <div class="span9" id="content">
                      <!-- morris stacked chart -->
               
                    <div class="row-fluid">
                        
  					<div class="row-fluid">
 					 <div class="row-fluid section">

                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="pull-left"><b> Add New Photo </b> </div>
								<div class="muted pull-right"> <a href="img_item.php" ><i class="icon-arrow-left"></i> Back </a></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
 						<form class="form-horizontal" name="updatePhoto" method="post" enctype="multipart/form-data" action="stock_img_change.php" onSubmit="return checkPhoto(this)">
                                      <fieldset>
									  <?php
include('connect.php');
 session_start();
 $item_id =$_GET['id'];

 	$query_search="select * from item_master where item_id = '$item_id'";
	$result = mysql_query($query_search) or die("Search query for ITEM MASTER is wrong  ");
	$data=NULL;
	$srno=1;

error_reporting(0);
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
 	}
	
	$count=1;
 	    foreach($data as $ecol)
		{
  	 	$item_group_id=$ecol['item_group_id']; 
 		$item_name= $ecol['item_name'];
	 	$item_stock= $ecol['item_stock'];
	  	$purchase_price=$ecol['purchase_price'];
		$sale_price=$ecol['sale_price'];
		
		$_SESSION['item_id']=$item_id;
		 
			$sql1="select item_group_name  from item_group_master where item_group_id='$item_group_id' "; $result1 =mysql_query($sql1); while ($data1=mysql_fetch_assoc($result1))
			{  $igr_name=$data1['item_group_name'];  }
			
		 	$sqlm="select imagename  from item_img where item_id='$item_id' "; 
			$resultm =mysql_query($sqlm); 
			
			$datam=NULL;
	while ($rowm = mysql_fetch_array($resultm))
	{
    	$datam[] = $rowm;	
	}
	
				$img_name=NULL;
			  foreach($datam as $ecolm)
				{ $img_name=$ecolm['imagename']; } 
 		}
 ?>
									    <div class="control-group">
                                          <label class="control-label" for="typeahead"> Group</label>
                                          <div class="controls">
                                            <input type="text"  value="<?php echo"$igr_name";?>" id="typeahead"  data-provide="typeahead" readonly >
											Item Name
											  <input type="text"   id="typeahead"  data-provide="typeahead"value="<?php echo"$item_name";?>" readonly>
                                          </div>
                                      </div>
									
									  <div class="control-group">
                                          <label class="control-label" for="typeahead">Quantity </label>
                                          <div class="controls">
                                            <input type="text"   id="typeahead"  data-provide="typeahead" value="<?php echo"$item_stock";?>" readonly>
											
                                          </div>
                                      </div>
									
									   <div class="control-group">
                                          <label class="control-label" for="typeahead">Purchase Rate </label>
                                          <div class="controls">
                                            <input type="text"   name="purchase_rate" value="<?php echo"$purchase_price";?>" readonly  tabindex="1">
											Sales Rate
                                            <input type="text"   name="sale_rate"  value="<?php echo"$sale_price";?>"  readonly tabindex="2" >
                                          </div>
                                      </div>
										    
                                      <div class="control-group">
                                          <label class="control-label" for="typeahead">Image  </label>
                                          <div class="controls">
 											<?PHP if($img_name==NULL)
											{
											echo "<td width='133' height='100'> <img src='images/noimg.gif' border='0' width='133' height='100' class='img-500'> </td>";
											}
										else
											{	
											echo "<td width='133' height='100'><div style='width:100px;height:133px;'><img src='images/$img_name' border='0' width='133' height='100' class='img-500'></div></td>";
											}?>
										 											
                                          </div>
                                      </div>

 
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
	if(isset($_POST['uploadPhoto']))
	{
 include('connect.php');
 session_start();
 $item_id=$_SESSION['item_id'];
		$fileSize=$_FILES['photo']['size'];
		
	$sqlm="select imagename  from item_img where item_id='$item_id' "; 
			$resultm =mysql_query($sqlm); 
			
			$datam=NULL;
	while ($rowm = mysql_fetch_array($resultm))
	{
    	$datam[] = $rowm;	
	}
	
				$img_name=NULL;
			  foreach($datam as $ecolm)
				{ $img_name=$ecolm['imagename']; } 
								
 if($img_name==NULL )
 {
											
	if($fileSize <= 0)
			{
				$photo_insert = "INSERT INTO item_img(imagename,item_id) "."VALUES ('noimg.gif','$item_id')";
				mysql_query($photo_insert) or die(mysql_error());
			}
		else
			{
				$fileName = $_FILES['photo']['name'];
				$target_path="images/";
				
				$target_path=$target_path.basename($fileName);
				
				if(move_uploaded_file($_FILES['photo']['tmp_name'],$target_path))
					{
					$photo_insert = "INSERT INTO item_img(imagename,item_id) "."VALUES ('$fileName','$item_id')";
					mysql_query($photo_insert) or die(mysql_error());
					}
			}	
											
 }
										else
											{	
  												$fileName = $_FILES['photo']['name'];
												$target_path="images/";
 												$target_path=$target_path.basename($fileName);
				
												if(move_uploaded_file($_FILES['photo']['tmp_name'],$target_path))
												{
													$photo_insert = "UPDATE item_img set imagename='$fileName' where item_id='$item_id' ";
													mysql_query($photo_insert) or die(mysql_error());
												}
 											}
		
?>
<div id="boxes1">
		<div style="top:150px; left: 551.5px; display: none;" id="dialog1" class="window">
			<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
				<a href='img_item.php'><img src='images/cross.png' width='30' style='border:none; cursor:pointer;' /></a>
			</div>
			
			<div align="center" style="margin:5px 0 5px 0;">
			   &nbsp;Image Uploaded Successfully!!!!
			</div>
		</div>
		<!-- Mask to cover the whole screen -->
		<div style="width: 2000px; height: 2000px; display: none; opacity: 0.7;" id="mask"></div>
</div>
<?php
}
?>
<div class="control-group">
                                          <label class="control-label" for="typeahead"> Select Photo </label>
                                          <div class="controls">
<input name="photo" type="file" id="photo" onchange="return CheckPhotoExt();"/><DIV id="error_photo" style="color:red;"></DIV>
                                          </div>
                                      </div>
<div class="control-group">
                                           <div class="controls">
 <input type="submit" name="uploadPhoto" value="Upload" class="form_submit">
                                          </div>
                                      </div>
	
									
									   
                                        </fieldset>
                                    </form>
                                 </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					 
             <hr>
<script>
	setTimeout(function () {error_photo.innerHTML =""; }, 12000);
</script>
 <?php include("footer.php");?>
        </div>
        <!--/.fluid-container-->
         <?php include("footer_information.php");?>
        </script>
		
    </body>

</html>