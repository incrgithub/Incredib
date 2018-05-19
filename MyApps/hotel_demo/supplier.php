<?php
include('connect.php');
session_start();
if (!isset($_SESSION['member_id'])){
header('location:index.php');
}
?>


<!DOCTYPE html>
<html>
    
    <head>
        <title>Supplier Information Detail</title>
        <!-- Bootstrap -->
		 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <link href="assets/DT_bootstrap.css" rel="stylesheet" media="screen">
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
	  width:600px; 
	  height:400px;
	  padding:0px;
	  background-color: #FFFFFF;
	}
	
	
	
	</style>
	
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
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                             <div class="pull-left"><b> Supplier Account Detail  </b> </div>
							 <div class="muted pull-right"><a href="#" ><i class="icon-user"></i> New Supplier  </a></div>    
                            </div>
 <script type="text/javascript">
	$("a").click(function() {	
	
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
	
	<div id="boxes1">
		<div style="top:150px; left: 551.5px; display: none;" id="dialog1" class="window">
			<div align="right" style="font-weight:bold; margin:5px 3px 0 0;">
				<a href='supplier.php'><img src='images/cross.png' width='30' style='border:none; cursor:pointer;' /></a>
			</div>
			
			<div align="center" style="margin:5px 0 5px 0;">
			   <div class="block-content collapse in">
                                <div class="span12">
								
<form class="form-horizontal" action="insert_nsupplier.php" onSubmit="return validatedata(this)" method="post">
                                      <fieldset>
                                         <div class="control-group">
      									 <label class="control-label" for="typeahead">Name</label>
                                          <div class="controls">
                        <input name="supp_name" type="text"   class="input-xlarge"  tabindex="1"  placeholder=" Enter Name of Supplier " >
                                          </div>
                                      </div>
 										<div class="control-group">
                                          <label class="control-label" for="typeahead">Address </label>
                                          <div class="controls">
                         <input name="supp_address" type="text"   class="input-xlarge"   tabindex="2"  placeholder=" Enter Address of Supplier " >
                                          </div>
                                      </div>
										<div class="control-group">
                                          <label class="control-label" for="typeahead">Mobile No </label>
                                          <div class="controls">
   	 <input name="mobile_no" type="text"  maxlength="10"   onkeypress="return isNumberKey(event)"   tabindex="3"  placeholder=" Enter Mobile Number " >
                                          </div>
                                      </div>
                                     
											<div class="control-group"><div class="controls">
                                              <button type="submit" class="btn btn-info" tabindex="5">Save</button>
                                          <button type="reset" class="btn" tabindex="6">Cancel</button>
                                          </div>
                                      </div>
                                      </fieldset>
                                    </form>
                                 </div>
                            </div>
			</div>
		</div>                            <div class="block-content collapse in">
                                <div class="span12">
                                  <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Address</th>
												<th>Mobile</th>
   											</tr>
										</thead>
										<tbody>
											<tr >
	<?php include('connect.php');
	$query_search="select * from supplier_master ";
	$result = mysql_query($query_search) or die("Search query for Supplier is wrong  ");
	$data=NULL;
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
	}
	if(!$data)
	{
	echo "<script language=\"javascript\">";
	echo "confirm( \" sorry !Data Not Found!  \"); window.location = 'dash_purchase.php'; ";
		echo "</script>";
	}	
	$count=1;
  	    foreach($data as $ecol)
		{
	     $supp_id= $ecol['supp_id'];
  	 	$supp_name= $ecol['supp_name'];
		$supp_add= $ecol['supp_add'];
		$supp_mobile=$ecol['supp_mobile'];
 		
										   echo"<td>   $count   </td> "; 
						                   echo" <td><a href=purchase.php?id=$supp_id> $supp_name  </a></td> "; 
										   echo"<td> $supp_add  </td>";
 										   echo" <td> $supp_mobile  </td>";
   										   echo" </tr>";
										   
										   $count= $count+1;
			} ?>
										</tbody>
									</table>
                                 </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
              <hr>
            <?php include("footer.php");?>
    </div>
        <!--/.fluid-container-->
         <?php include("footer_information.php");?>
		<script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>
        <script src="assets/scripts.js"></script>
        <script src="assets/DT_bootstrap.js"></script>
        <script>
        $(function() {
        });
        </script>
		
    </body>

</html>