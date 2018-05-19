<?php include('logincommon.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> <?php include('title.php'); ?></title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css" />
	<script type="text/javascript" src="js/jsDatePick.min.1.3.js"></script>
	<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"newsdate",
			dateFormat:"%Y-%m-%d"
			
		});
		new JsDatePick({
			useMode:2,
			target:"newsdate1",
			dateFormat:"%Y-%m-%d"
			
		});
	};
	</script>
	<script src="assets/js/jquery-1.10.2.js"></script>
	
	<script type="text/javascript">

	function setColor(el, bg) 
		{
		  if (el.style) el.style.backgroundColor = bg;
		}
		
	function checkInput(form) 
		{
	
			  var bgBad = "#FF9999";
			  var bgGood = "#66FFCC";
			  var valid = true;
			  var errmsg="";
			  
			  /* News Date  validation */ 		  
			 if (form.newsdate.value == "") {
				error_newsdate.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select News Date";
				setTimeout(function () {error_newsdate.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_newsdate.innerHTML ="";
				setColor(form.newsdate, bgGood);
			  }
			  
			 /* Subject validation */ 		  
			 if (form.subject.value == "") {
				error_subject.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter News Subject";
				setTimeout(function () {error_subject.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_subject.innerHTML ="";
				setColor(form.subject, bgGood);
			  }
			  	  
			  /* Description  validation */ 		  
			 if (form.description.value == "") {
				error_description.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter News Description";
				setTimeout(function () {error_description.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_description.innerHTML ="";
				setColor(form.description, bgGood);
			  }
                 
			   
			return valid;
		}
	
	function checkInput1(form) 
		{
	
			  var bgBad = "#FF9999";
			  var bgGood = "#66FFCC";
			  var valid = true;
			  var errmsg="";
			  
			 /* Name  validation */ 		  
			 if (form.name1.value == "") {
				error_name1.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter Faculty Name";
				setTimeout(function () {error_name1.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_name1.innerHTML ="";
				setColor(form.name1, bgGood);
			  }
			  	  
			  /* Designation  validation */ 		  
			 if (form.designation1.value == "") {
				error_designation1.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please ente Designation";
				setTimeout(function () {error_designation1.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_designation1.innerHTML ="";
				setColor(form.designation1, bgGood);
			  }
                         
			  /* Date Of Joining  validation */ 		  
			 if (form.dateofjoin1.value == "") {
				error_dateofjoining1.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select Date Of Joining";
				setTimeout(function () {error_dateofjoining1.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_dateofjoining1.innerHTML ="";
				setColor(form.dateofjoin1, bgGood);
			  }
			  
			  /* Photo validation  		  
			 if (form.photo1.value.length < 10 ) {
				error_photo1.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please select a Photo to upload";
				setTimeout(function () {error_photo1.innerHTML =""}, 10000);
				valid = false;
			  } else {
				error_photo1.innerHTML ="";
				setColor(form.photo1, bgGood);
			  }
			  		  */
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
	   
	function CheckPhotoExt()
	{
		var fup = document.getElementById('photo');
     	var fileName = fup.value;
		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		if(ext == "jpg" || ext == "png" || ext == "gif" || ext == "bmp")
			{
			return true;
			} 
		else
		{
			fileName="";
			error_photo.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Upload .jpg,.png,.gif,.bmp files only.";
			document.getElementById('photo').value="";
			fup.focus();
			return false;
		}
	}
	
	function save()
		{
		var b=new Boolean();	
		b=checkInput(document.addnews);
		if (!b) 
			{
			ERROR.innerHTML ="<h4><img src='images/cross.png' border='0'>&nbsp;&nbsp;Error : Please correct the fields and try submitting again</h4>";
			setTimeout(function () {ERROR.innerHTML =""}, 12000);
			}
		else
			{
			document.addnews.action="newsactions.php?msg=save";
			document.addnews.submit();			
			}
		}
		
		function update()
		{
	
		var b=new Boolean();	
		b=checkInput1(document.editfaculty);
		if (!b) 
			{
			ERROR1.innerHTML ="<h4><img src='images/cross.png' border='0'>&nbsp;&nbsp;Error : Please correct the fields and try submitting again</h4>";
			setTimeout(function () {ERROR1.innerHTML =""}, 12000);
			}
		else
			{
			document.editfaculty.action="facultyactions.php?msg=update";
			document.editfaculty.submit();			
			}
		}

        function nospaces()
           {
           var name=document.addfaculty.name.value;
           var dateofjoin=document.addfaculty.dateofjoin.value;
           var designation=document.addfaculty.designation.value;

           if(name.match(/\s/g))
              {
               name=name.replace(/\s/g,'');
               document.addfaculty.name.value="";
              }

           if(dateofjoin.match(/\s/g))
              {
               dateofjoin=dateofjoin.replace(/\s/g,'');
               document.addfaculty.dateofjoin.value="";
              }
        
           if(designation.match(/\s/g))
              {
               designation=designation.replace(/\s/g,'');
               document.addfaculty.designation.value="";
              }
         }
		
	</script>
</head>
<body>
    <div id="wrapper">
        <?php include('nav.php'); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                              
            <div class="row">
				
			</div>	
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h3>All Current News</h3>
							 <div align='right'>
							 <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                              Add News
							</button>
							</div>
                        </div>
						
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Subject</th>
                                            <th>Description</th>
											<th>Photo</th>
                                            <th>Attachment</th>
											<th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
										include('conn.php');
										include('zoom.php');
										$fetch_basic_profile="select * from tbl_news order by id asc";	
										
										$basic_profile_rs= mysqli_query($con,$fetch_basic_profile);

										while($basic_profile_row = mysqli_fetch_array($basic_profile_rs)) 
											{
											$id=$basic_profile_row[0];
											$images="../news/images/";
											$attachments="../news/attachments/";
											$image=$basic_profile_row[4];
											$attachment=$basic_profile_row[5];
											echo "<tr>";
											echo "<td>".$basic_profile_row[1]."</td>";
											echo "<td>".$basic_profile_row[2]."</td>";
											echo "<td>".$basic_profile_row[3]."</td>";
											if($image == "") 
												echo "<td></td>";
											else
												echo "<td align='center'><a href='$images/$basic_profile_row[4]' rel='lightbox1' class='effectable'><img src='$images/$basic_profile_row[4]' width='160' height='160'></a></td>";
											if($attachment == "") 
												echo "<td></td>";
											else	
												echo "<td><a href='$attachments/$basic_profile_row[5]' target='_blank'>Download</a></td>";
											echo "<td><a href='newsactions.php?id=$id&msg=delete'><img src='images/cross.png'></a></td>";
											echo "</tr>";
											} 
										?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
			
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Add News</h4>
			</div>
			<div class="modal-body">
			<DIV id="ERROR" style="color:red;font-weight:bold;"></DIV>
				<form name="addnews" enctype="multipart/form-data" method="post">
				 <table border="0" width="447" height="40">
					<tr>
						<td height="34" width="180" valign="top"><b>*Date</b></td>
						<td height="34" width="7" valign="top"><b>:</b></td>
						<td height="34" width="238"><input type="text" size="12" id="newsdate" class="form-control" style="width:150px;" name="newsdate"/><br><DIV id="error_newsdate" style="color:red;" onkeyup="nospaces()"></DIV></td>
					</tr>
					<tr>
						<td height="34" width="180" valign="top"><b>*Subject</b></td>
						<td height="34" width="7" valign="top"><b>:</b></td>
						<td height="34" width="238"><input name="subject" type="text" class="form-control" id="subject"  onkeydown= "return isAlpha(event.keyCode);" /><br><DIV id="error_subject" style="color:red;"></DIV></td>
					</tr>
					<tr>
						<td height="34" width="180" valign="top"><b>*Description</b></td>
						<td height="34" width="7" valign="top"><b>:</b></td>
						<td height="34" width="238"><textarea rows="5" cols="80" name="description"  class="form-control" id="description"></textarea><br><DIV id="error_description" style="color:red;"></DIV></td>
					</tr>
					<tr>
						<td height="34" width="180" valign="top"><br><br><br><br><b>Attachment</b></td>
						<td height="34" width="7" valign="top"><br><br><br><br><b>:</b></td>
						<td height="34" width="238"><br><br><br><br><input name="attachment" type="file" id="attachment"/><br><DIV id="error_attachment" style="color:red;"></DIV></td>
					</tr>
					<tr>
						<td height="34" width="180" valign="top"><b>Photo</b></td>
						<td height="34" width="7" valign="top"><b>:</b></td>
						<td height="34" width="238"><input name="photo" type="file" id="photo" onchange="return CheckPhotoExt();" /><br><DIV id="error_photo" style="color:red;"></DIV></td>
					</tr>
				</table>
				
			</form>	
			</div>
			<div class="modal-footer">
				<a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary"  onClick="save();">Save</a>
			</div>
		</div>
	</div>
</div>

	
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
