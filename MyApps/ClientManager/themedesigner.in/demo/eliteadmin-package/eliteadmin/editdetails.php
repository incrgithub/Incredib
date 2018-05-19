<?php include('logincommon.php'); ?>
<?php
include('classes/crud.php');
$db = new Database();
$db->connect();
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
<!-- Original URL: http://themedesigner.in/demo/eliteadmin-package/eliteadmin/data-table.html
Date Downloaded: 13/11/2016 9:40:37 AM !-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />
 <meta name="description" content="" />
 <meta name="author" content="" />
 <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png" />
 <title>Client Master</title>
 <!-- Bootstrap Core CSS -->
 <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
 <link href="../plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
 <link href="../../../../cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
 <!-- Menu CSS -->
 <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet" />
 <!-- animation CSS -->
 <link href="css/animate.css" rel="stylesheet" />
 <!-- Custom CSS -->
 <link href="css/style.css" rel="stylesheet" />
 <!-- color CSS -->
 <link href="css/colors/blue.css" id="theme" rel="stylesheet" />

 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
    <script src="../../../../oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="../../../../oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script type="text/javascript" src="js/customalert.js"></script>
	<link href="css/customalert.css" rel="stylesheet" />
 </head>
 <body class="fix-sidebar">
 <!-- Preloader -->
 <div class="preloader">
   <div class="cssload-speeding-wheel"></div>
 </div>
 <div id="wrapper">
   <!-- Navigation -->
   <?php include('top.php'); ?>
   <!-- Left navbar-header -->
   <?php include('leftsidebar.php'); ?>	
   <!-- Left navbar-header end -->
	<!-- Page Content -->
   <div id="page-wrapper">
     <div class="container-fluid">
      
       <!-- /row -->
	   <br><br>
	   <div class="row">
	   
		<?php
		if(isset($_GET['msg'])) 
		{
		$param=$_GET['msg'];
		if($param  == "editwebsite")
			{
		?>	
		<div class="col-lg-4 col-sm-4" id="website">
		    <div class="panel panel-info">
             <div class="panel-heading"> 
				Website Development
			 </div>
             <div class="panel-wrapper collapse in" aria-expanded="true">
               <div class="panel-body">
					<form data-toggle="validator" method="post" action="clientprojectactions.php" name="updatewebsitedev">
						<?php
						$websiteid  =$_GET['id'];
						$website_db = new Database();
						$website_db->connect();
						$website_db->sql("SELECT * FROM tbl_websites where websiteid='$websiteid'");
						$website_result = $website_db->getResult();
						foreach($website_result as $x) 
							{
								 $id=$x['websiteid'];
								 $domainname= $x['domainname'];
								 $webspace= $x['webspace'];
								 $noofemailds= $x['noofemailds'];
								 $domainexpirydate= $x['expirydate'];
							}
						?>
						<input type="hidden" name="updatewebsitedev" value="updatewebsitedev">
						<input type="hidden" name="websiteid" value="<?php echo $websiteid; ?>">
					   <div class="form-group">
						 <label for="domainname" class="control-label">Domain Name </label>
						 <input type="text" class="form-control" id="domainname" placeholder="www.incredibletechsolve.com" required="" name="domainname" value="<?php echo $domainname; ?>"/>
					   </div>
					   <div class="form-group">
						 <label for="webspace" class="control-label">Webspace</label>
						 <select class="form-control select2" name="webspace" required="">
						<?php
							$webspaceOptions  = array('200MB', '500MB','800MB','1GB','2GB','3GB');
							foreach($webspaceOptions as $option){
								if($webspace == $option){
									echo "<option selected='selected' value='$option'>$option</option>" ;
								}else{
									echo "<option value='$option'>$option</option>" ;
								}
							}
						?>
						 </select>
						</div>
					   <div class="form-group">
						 <label for="noemailids" class="control-label">No of Email Id's </label>
						 <input type="text" class="form-control" id="noemailids"  required="" name="noemailids" value="<?php echo $noofemailds; ?>"/>
						 <div class="help-block with-errors"></div>
					   </div>
					  
					    <div class="example">
						  <label for="domainexpirydate" class="control-label">Expiry Date</label>
						   <div class="input-group">
							 <input type="text" class="form-control" id="domainexpirydate" placeholder="yyyy/mm/dd" name="domainexpirydate" value="<?php echo $domainexpirydate; ?>"/>
							 <span class="input-group-addon"><i class="icon-calender"></i></span>  
						   </div>
						 </div>
						 <br>
						<button type="submit" class="btn btn-success">Submit </button> 
					</form> 
               </div>
             </div>
           </div>
         </div>
		 <?php
			}
		}
		if(isset($_GET['msg'])) 
		{		
		$param=$_GET['msg'];
		if($param  == "editmobileappdev")
			{
		?>		
         <!-- /.col-lg-4 -->
         <div class="col-lg-4 col-sm-4">
           <div class="panel panel-warning">
             <div class="panel-heading"> 
				Mobile Application Development
             </div>
             <div class="panel-wrapper collapse in" aria-expanded="true">
               <div class="panel-body">
					 <form data-toggle="validator" method="post" action="clientprojectactions.php" name="updatemobileappdev">
						<?php
						$mobileappdevid  =$_GET['id'];
						$mobileappdev_db = new Database();
						$mobileappdev_db->connect();
						$mobileappdev_db->sql("SELECT * FROM tbl_mobileappdev where appid='$mobileappdevid'");
						$mobileappdev_result = $mobileappdev_db->getResult();
						foreach($mobileappdev_result as $x) 
						{
							$appname=$x['appname'];
							$mobileappexpirydate=$x['mobileappexpirydate'];
						}
						?>
						<input type="hidden" name="updatemobileappdev" value="updatemobileappdev">
						<input type="hidden" name="mobileappdevid" value="<?php echo $mobileappdevid; ?>">
						
						<div class="form-group">
						 <label for="appname" class="control-label">Application Name</label>
						 <input type="text" class="form-control" id="appname"  required="" name="appname" value="<?php echo $appname; ?>"/>
						 <div class="help-block with-errors"></div>
					   </div>
					   
					   <div class="example">
						   <label for="mobileappexpirydate" class="control-label">Expiry Date</label>
						   <div class="input-group">
							 <input type="text" class="form-control" id="mobileappexpirydate" placeholder="yyyy/mm/dd" name="mobileappexpirydate" value="<?php echo $mobileappexpirydate; ?>"/>
							 <span class="input-group-addon"><i class="icon-calender"></i></span>  
						   </div>
						 </div>
						 <br>
						<button type="submit" class="btn btn-success">Submit </button> 
					</form> 
               </div>
             </div>
           </div>
         </div>
		 <?php
			}
		}	
		if(isset($_GET['msg'])) 
		{
		$param=$_GET['msg'];
		 if($param  == "editdesktopappdev")
			{
		 ?>
         <!-- /.col-lg-4 -->
         <div class="col-lg-4 col-sm-4" id="desktopapp">
           <div class="panel panel-danger">
             <div class="panel-heading"> Desktop Application Development
              </div>
             <div class="panel-wrapper collapse in" aria-expanded="true">
               <div class="panel-body">
                  <form data-toggle="validator" method="post" action="clientprojectactions.php" name="updatedesktopappdev">
						<?php
						$desktopappdevid  =$_GET['id'];
						$desktopappdev_db = new Database();
						$desktopappdev_db->connect();
						$desktopappdev_db->sql("SELECT * FROM tbl_desktopappdev where appid='$desktopappdevid'");
						$desktopappdev_result = $desktopappdev_db->getResult();
						foreach($desktopappdev_result as $x) 
						{
							$appname=$x['appname'];
							$desktopappexpirydate=$x['desktopappexpirydate'];
						}
						?>
						<input type="hidden" name="updatedesktopappdev" value="updatedesktopappdev">
						<input type="hidden" name="desktopappdevid" value="<?php echo $desktopappdevid; ?>">
						
						<div class="form-group">
						 <label for="appname" class="control-label">Application Name</label>
						 <input type="text" class="form-control" id="appname"  required="" name="appname" value="<?php echo $appname; ?>"/>
						 <div class="help-block with-errors"></div>
					   </div>
					   
					   <div class="example">
						   <label for="desktopappexpirydate" class="control-label">Expiry Date</label>
						   <div class="input-group">
							 <input type="text" class="form-control" id="desktopappexpirydate" placeholder="yyyy/mm/dd" name="desktopappexpirydate" value="<?php echo $desktopappexpirydate; ?>"/>
							 <span class="input-group-addon"><i class="icon-calender"></i></span>  
						   </div>
						 </div>
						 <br>
						<button type="submit" class="btn btn-success">Submit </button> 
					</form> 
               </div>
             </div>
           </div>
         </div>
		  <?php
			}
		}	
		if(isset($_GET['msg'])) 
		{
		$param=$_GET['msg'];
		if($param  == "editwebappappdev")
			{
		 ?>
         <!-- /.col-lg-4 -->
         <!-- /.col-lg-4 -->
         <div class="col-lg-4 col-sm-4" id="webapp">
           <div class="panel panel-success">
             <div class="panel-heading"> Web Application Development
              </div>
             <div class="panel-wrapper collapse in" aria-expanded="true">
               <div class="panel-body">
                 <form data-toggle="validator" method="post" action="clientprojectactions.php" name="updatewebappdev">
						<?php
						$webappdevid  =$_GET['id'];
						$webappdev_db = new Database();
						$webappdev_db->connect();
						$webappdev_db->sql("SELECT * FROM tbl_webappdev where appid='$webappdevid'");
						$webappdev_result = $webappdev_db->getResult();
						foreach($webappdev_result as $x) 
						{
							$appname=$x['appname'];
							$webappexpirydate=$x['webappexpirydate'];
						}
						?>
						<input type="hidden" name="updatewebappdev" value="updatewebappdev">
						<input type="hidden" name="webappdevid" value="<?php echo $webappdevid; ?>">
						
						<div class="form-group">
						 <label for="noemailids" class="control-label">Application Name</label>
						 <input type="text" class="form-control" id="appname"  required="" name="appname" value="<?php echo $appname; ?>"/>
						 <div class="help-block with-errors"></div>
					   </div>
					   
					   <div class="example">
						   <label for="webappexpirydate" class="control-label">Expiry Date</label>
						   <div class="input-group">
							 <input type="text" class="form-control" id="webappexpirydate" placeholder="yyyy/mm/dd" name="webappexpirydate" value="<?php echo $webappexpirydate; ?>"/>
							 <span class="input-group-addon"><i class="icon-calender"></i></span>  
						   </div>
						 </div>
						 <br>
						<button type="submit" class="btn btn-success">Submit </button> 
					</form> 
               </div>
             </div>
           </div>
         </div>
        <?php
			}
		} 
		if(isset($_GET['msg'])) 
		{
	    $param=$_GET['msg'];
		if($param  == "editsms")
			{
		 ?>
        <div class="col-lg-4 col-sm-4" id="sms">
           <div class="panel panel-primary">
            <div class="panel-heading"> 
				SMS Integration  
			</div>
             <div class="panel-wrapper collapse in" aria-expanded="true">
				<div class="panel-body">
					<form data-toggle="validator" method="post" action="clientprojectactions.php" name="updatesms">
						<?php
						$smsid=$_GET['id'];
						$sms_db = new Database();
						$sms_db->connect();
						$sms_db->sql("SELECT * FROM tbl_sms where smsid='$smsid'");
						$sms_result = $sms_db->getResult();
						foreach($sms_result as $x) 
							{
								 $senderid= $x['senderid'];
								 $nosms=$x['nosms'];
								 $smsexpirydate=$x['smsexpirydate'];
							}
						?>
						<input type="hidden" name="updatesms" value="updatesms">
						<input type="hidden" name="smsid" value="<?php echo $smsid; ?>">
						
						<div class="form-group">
						 <label for="senderid" class="control-label">Sender ID</label>
						 <input type="text" class="form-control" id="senderid"  required="" name="senderid" value="<?php echo $senderid; ?>"/>
						 <div class="help-block with-errors"></div>
					   </div>
					   
					   <div class="form-group">
						 <label for="nosms" class="control-label">No of SMS </label>
						 <input type="text" class="form-control" id="nosms"  required="" name="nosms" value="<?php echo $nosms; ?>"/>
						 <div class="help-block with-errors"></div>
					   </div>
					  
						<div class="example">
						   <label for="smsexpirydate" class="control-label">Expiry Date</label>
							<div class="input-group">
							 <input type="text" class="form-control" id="smsexpirydate" placeholder="yyyy/mm/dd" name="smsexpirydate" value="<?php echo $smsexpirydate; ?>"/>
							 <span class="input-group-addon"><i class="icon-calender"></i></span>  
						   </div>
						 </div>
						 <br>
						<button type="submit" class="btn btn-success">Submit </button> 
					</form> 
				</div>
			   </div>
			</div>
		</div>
         <?php
			}
		 }
		if(isset($_GET['msg'])) 
		{
		$param=$_GET['msg'];
		 if($param  == "editvoicecalls")
			{
		 ?>
         <div class="col-lg-4 col-sm-4" id="voicecall">
           <div class="panel panel-inverse">
             <div class="panel-heading"> Voice Calls
              
             </div>
             <div class="panel-wrapper collapse in" aria-expanded="true">
               <div class="panel-body">
                <form data-toggle="validator" method="post" action="clientprojectactions.php" name="updatevoicecalls">
						<?php
						$callsid=$_GET['id'];
						$voicecalls_db = new Database();
						$voicecalls_db->connect();
						$voicecalls_db->sql("SELECT * FROM tbl_voicecalls where callsid='$callsid'");
						$voicecalls_result = $voicecalls_db->getResult();
						foreach($voicecalls_result as $x) 
						{
						 	 $callsid=$x['callsid'];
							 $nocalls=$x['nocalls'];
							 $callsexpirydate=$x['callsexpirydate'];
						}
						?>
						<input type="hidden" name="updatevoicecalls" value="updatevoicecalls">
						<input type="hidden" name="callsid" value="<?php echo $callsid; ?>">
						
						<div class="form-group">
						 <label for="nocalls" class="control-label">No Of Voice Calls</label>
						 <input type="text" class="form-control" id="nocalls"  required="" name="nocalls" value="<?php echo $nocalls; ?>"/>
						 <div class="help-block with-errors"></div>
					   </div>
					  
					  <div class="example">
						   <label for="callsexpirydate" class="control-label">Expiry Date</label>
							<div class="input-group">
							 <input type="text" class="form-control" id="callsexpirydate" placeholder="yyyy/mm/dd" name="callsexpirydate" value="<?php echo $callsexpirydate; ?>"/>
							 <span class="input-group-addon"><i class="icon-calender"></i></span>  
						   </div>
						 </div>
						 <br>
						<button type="submit" class="btn btn-success">Submit </button> 
					</form> 
               </div>
             </div>
           </div>
         </div>
		 <?php
			}
		 }
		 ?>
		</div> 
      
	
       <!-- .right-sidebar -->
		<?php include('rightsidebar.php'); ?>
       <!-- /.right-sidebar -->
     </div>
     <!-- /.container-fluid -->
     
   </div>
   <!-- /#page-wrapper -->
 </div>
 
 <!-- /#wrapper -->
 <!-- jQuery -->
 <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap Core JavaScript -->
 <script src="bootstrap/dist/js/bootstrap.min.js"></script>
 <!-- Menu Plugin JavaScript -->
 <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
 <!--slimscroll JavaScript -->
 <script src="js/jquery.slimscroll.js"></script>
 <!--Wave Effects -->
 <script src="js/waves.js"></script>
 <!-- Custom Theme JavaScript -->
 <script src="js/custom.js"></script>
 <script src="../plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
 <!-- start - This is for export functionality only -->
 <script src="../../../../cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
 <script src="../../../../cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
 <script src="../../../../cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
 <script src="../../../../cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
 <script src="../../../../cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
 <script src="../../../../cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
 <script src="../../../../cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
 <!-- end - This is for export functionality only -->

 <script>
    $(document).ready(function(){
      $('#myTable').DataTable();
      $(document).ready(function() {
        var table = $('#example').DataTable({
          "columnDefs": [
          { "visible": false, "targets": 2 }
          ],
          "order": [[ 2, 'asc' ]],
          "displayLength": 25,
          "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;

            api.column(2, {page:'current'} ).data().each( function ( group, i ) {
              if ( last !== group ) {
                $(rows).eq( i ).before(
                  '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                  );

                last = group;
              }
            } );
          }
        } );

    // Order by the grouping
    $('#example tbody').on( 'click', 'tr.group', function () {
      var currentOrder = table.order()[0];
      if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
        table.order( [ 2, 'desc' ] ).draw();
      }
      else {
        table.order( [ 2, 'asc' ] ).draw();
      }
    });
  });
    });
    $('#websites').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
	$('#smsint').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    }); 
	$('#webappdev').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    }); 
	$('#desktopappdev').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    }); 
	$('#mobileappdev').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    }); 
	$('#voicecalls').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
  </script>
  <script src="js/cbpFWTabs.js"></script>
 <script type="text/javascript">
      (function() {

                [].slice.call( document.querySelectorAll( '.sttabs' ) ).forEach( function( el ) {
                    new CBPFWTabs( el );
                });

            })();
</script>
<!-- Date Picker Plugin JavaScript -->
 <script src="../plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
 <!-- Date range Plugin JavaScript -->
 <script src="../plugins/bower_components/timepicker/bootstrap-timepicker.min.js"></script>
 <script src="../plugins/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
 <script>

// Date Picker
    jQuery('.mydatepicker, #datepicker').datepicker();
    jQuery('#domainexpirydate').datepicker({
        autoclose: true,
        todayHighlight: true
      });
	
	jQuery('#smsexpirydate').datepicker({
        autoclose: true,
        todayHighlight: true
      });	
	  
	jQuery('#webappexpirydate').datepicker({
        autoclose: true,
        todayHighlight: true
      });	  
	  
	jQuery('#desktopappexpirydate').datepicker({
        autoclose: true,
        todayHighlight: true
      });	    
	
	jQuery('#mobileappexpirydate').datepicker({
        autoclose: true,
        todayHighlight: true
      });	
		
	jQuery('#callsexpirydate').datepicker({
        autoclose: true,
        todayHighlight: true
      });		
		  
      
    jQuery('#date-range').datepicker({
        toggleActive: true
      });
    jQuery('#datepicker-inline').datepicker({
        
        todayHighlight: true
      });


</script>
 <!--Style Switcher -->
 <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
 </body>
 </html>

 