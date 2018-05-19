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
 <title>Client</title>
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
	
		<script type="text/javascript">
function showDiv(select){
   if(select.value=="website"){
    document.getElementById('website').style.display = "block";
   } else{
    document.getElementById('website').style.display = "none";
   }
   
   if(select.value=="mobileapp"){
    document.getElementById('mobileapp').style.display = "block";
   } else{
    document.getElementById('mobileapp').style.display = "none";
   }
   
   if(select.value=="webapp"){
    document.getElementById('webapp').style.display = "block";
   } else{
    document.getElementById('webapp').style.display = "none";
   }
   
   if(select.value=="desktopapp"){
    document.getElementById('desktopapp').style.display = "block";
   } else{
    document.getElementById('desktopapp').style.display = "none";
   }
   
   if(select.value=="sms"){
    document.getElementById('sms').style.display = "block";
   } else{
    document.getElementById('sms').style.display = "none";
   }
   
   if(select.value=="voicecall"){
    document.getElementById('voicecall').style.display = "block";
   } else{
    document.getElementById('voicecall').style.display = "none";
   }
} 
</script>


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
       <div class="row bg-title">
         <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
           <h4 class="page-title">
		   <?php 
		   $clientname=$_GET['name']; 
		   $clientid=$_GET['id'];
		   echo $clientname;
		   ?>
		   </h4>
         </div>
         <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		  <button class="btn btn-info" data-toggle="modal" data-target="#txn">Add Transaction </button>
		  <button class="btn btn-info" data-toggle="modal" data-target="#followup">Add Followup </button>
         </div>
         <!-- /.col-lg-12 -->
       </div>
       <!-- /row -->
	   <div class="row">
	    <div class="col-sm-12">
            <div class="white-box">
				Select Service: <select id="test" name="form_select" onchange="showDiv(this)">
			   <option value="">Please Select Client Service</option>
			   <option value="website">Website Development</option>
			   <option value="mobileapp">Mobile Application Development</option>
			   <option value="webapp">Web Application Development</option>
			   <option value="desktopapp">Desktop Application Development</option>
			   <option value="sms">SMS Integration</option>
			   <option value="voicecall">Voice Calls</option>
			</select>
			</div>
         </div>
       </div>
	   <div class="row">
         <div class="col-lg-4 col-sm-4" id="website" style="display:none;">
		    <div class="panel panel-info">
             <div class="panel-heading"> 
				Website Development
			 </div>
             <div class="panel-wrapper collapse in" aria-expanded="true">
               <div class="panel-body">
					<form data-toggle="validator" method="post" action="clientprojectactions.php" name="savewebsitedev">
						<input type="hidden" name="savewebsitedev" value="savewebsitedev">
						<input type="hidden" name="clientid" value="<?php echo $_GET['id']; ?>">
					   <div class="form-group">
						 <label for="domainname" class="control-label">Domain Name </label>
						 <input type="text" class="form-control" id="domainname" placeholder="www.incredibletechsolve.com" required="" name="domainname"/>
					   </div>
					   <div class="form-group">
						 <label for="webspace" class="control-label">Webspace</label>
						 <select class="form-control select2" name="webspace" required="">
						   <option value="" />Select</option> 
						   <option value="200MB" />200MB</option> 
						   <option value="500MB" />500MB</option>
						   <option value="800MB" />800MB</option> 
						   <option value="1GB" />1GB</option>
						   <option value="2GB" />2GB</option> 
						   <option value="3GB" />3GB</option>
						 </select>
						</div>
					   <div class="form-group">
						 <label for="noemailids" class="control-label">No of Email Id's </label>
						 <input type="text" class="form-control" id="noemailids"  required="" name="noemailids" />
						 <div class="help-block with-errors"></div>
					   </div>
					  
					    <div class="example">
						  <label for="domainexpirydate" class="control-label">Expiry Date</label>
						   <div class="input-group">
							 <input type="text" class="form-control" id="domainexpirydate" placeholder="yyyy/mm/dd" name="domainexpirydate"/>
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
         <!-- /.col-lg-4 -->
         <div class="col-lg-4 col-sm-4"  id="mobileapp" style="display:none;">
           <div class="panel panel-warning">
             <div class="panel-heading"> Mobile Application Development
               
             </div>
             <div class="panel-wrapper collapse in" aria-expanded="true">
               <div class="panel-body">
					 <form data-toggle="validator" method="post" action="clientprojectactions.php" name="savemobileappdev">
						<input type="hidden" name="savemobileappdev" value="savemobileappdev">
						<input type="hidden" name="clientid" value="<?php echo $_GET['id']; ?>">
						
						<div class="form-group">
						 <label for="appname" class="control-label">Application Name</label>
						 <input type="text" class="form-control" id="appname"  required="" name="appname" />
						 <div class="help-block with-errors"></div>
					   </div>
					   
					   <div class="example">
						   <label for="mobileappexpirydate" class="control-label">Expiry Date</label>
						   <div class="input-group">
							 <input type="text" class="form-control" id="mobileappexpirydate" placeholder="yyyy/mm/dd" name="mobileappexpirydate"/>
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
         <!-- /.col-lg-4 -->
         <div class="col-lg-4 col-sm-4" id="desktopapp" style="display:none;">
           <div class="panel panel-danger">
             <div class="panel-heading"> Desktop Application Development
              </div>
             <div class="panel-wrapper collapse in" aria-expanded="true">
               <div class="panel-body">
                  <form data-toggle="validator" method="post" action="clientprojectactions.php" name="savedesktopappdev">
						<input type="hidden" name="savedesktopappdev" value="savedesktopappdev">
						<input type="hidden" name="clientid" value="<?php echo $_GET['id']; ?>">
						
						<div class="form-group">
						 <label for="appname" class="control-label">Application Name</label>
						 <input type="text" class="form-control" id="appname"  required="" name="appname" />
						 <div class="help-block with-errors"></div>
					   </div>
					   
					   <div class="example">
						   <label for="desktopappexpirydate" class="control-label">Expiry Date</label>
						   <div class="input-group">
							 <input type="text" class="form-control" id="desktopappexpirydate" placeholder="yyyy/mm/dd" name="desktopappexpirydate"/>
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
         <!-- /.col-lg-4 -->
         <!-- /.col-lg-4 -->
         <div class="col-lg-4 col-sm-4" id="webapp" style="display:none;">
           <div class="panel panel-success">
             <div class="panel-heading"> Web Application Development
              </div>
             <div class="panel-wrapper collapse in" aria-expanded="true">
               <div class="panel-body">
                 <form data-toggle="validator" method="post" action="clientprojectactions.php" name="savewebappdev">
						<input type="hidden" name="savewebappdev" value="savewebappdev">
						<input type="hidden" name="clientid" value="<?php echo $_GET['id']; ?>">
						
						<div class="form-group">
						 <label for="noemailids" class="control-label">Application Name</label>
						 <input type="text" class="form-control" id="appname"  required="" name="appname" />
						 <div class="help-block with-errors"></div>
					   </div>
					   
					   <div class="example">
						   <label for="webappexpirydate" class="control-label">Expiry Date</label>
						   <div class="input-group">
							 <input type="text" class="form-control" id="webappexpirydate" placeholder="yyyy/mm/dd" name="webappexpirydate"/>
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
         <!-- /.col-lg-4 -->
         <!-- /.col-lg-4 -->
        <div class="col-lg-4 col-sm-4" id="sms" style="display:none;">
           <div class="panel panel-primary">
            <div class="panel-heading"> 
				SMS Integration  
			</div>
             <div class="panel-wrapper collapse in" aria-expanded="true">
				<div class="panel-body">
					<form data-toggle="validator" method="post" action="clientprojectactions.php" name="savesms">
						<input type="hidden" name="savesms" value="savesms">
						<input type="hidden" name="clientid" value="<?php echo $_GET['id']; ?>">
						
						<div class="form-group">
						 <label for="noemailids" class="control-label">Sender ID</label>
						 <input type="text" class="form-control" id="senderid"  required="" name="senderid" />
						 <div class="help-block with-errors"></div>
					   </div>
					   
					   <div class="form-group">
						 <label for="nosms" class="control-label">No of SMS </label>
						 <input type="text" class="form-control" id="nosms"  required="" name="nosms" />
						 <div class="help-block with-errors"></div>
					   </div>
					  
						<div class="example">
						   <label for="smsexpirydate" class="control-label">Expiry Date</label>
							<div class="input-group">
							 <input type="text" class="form-control" id="smsexpirydate" placeholder="yyyy/mm/dd" name="smsexpirydate"/>
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
         <!-- /.col-lg-4 -->
         <!-- /.col-lg-4 -->
         <div class="col-lg-4 col-sm-4" id="voicecall" style="display:none;">
           <div class="panel panel-inverse">
             <div class="panel-heading"> Voice Calls
              
             </div>
             <div class="panel-wrapper collapse in" aria-expanded="true">
               <div class="panel-body">
                <form data-toggle="validator" method="post" action="clientprojectactions.php" name="savevoicecalls">
						<input type="hidden" name="savevoicecalls" value="savevoicecalls">
						<input type="hidden" name="clientid" value="<?php echo $_GET['id']; ?>">
						
						<div class="form-group">
						 <label for="nocalls" class="control-label">No Of Voice Calls</label>
						 <input type="text" class="form-control" id="nocalls"  required="" name="nocalls" />
						 <div class="help-block with-errors"></div>
					   </div>
					  
						<div class="example">
						   <label for="callsexpirydate" class="control-label">Expiry Date</label>
							<div class="input-group">
							 <input type="text" class="form-control" id="callsexpirydate" placeholder="yyyy/mm/dd" name="callsexpirydate"/>
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
		</div> 
       <div class="row">
	    <div class="col-sm-12">
           <div class="white-box">
			<?php
			include('loaddata.php');
			$clientid=$_GET['id'];
			
			$db->sql("SELECT * FROM tbl_transactions where clientid='$clientid'");
			$txn_rs = $db->getResult();
			$txn_count=count($txn_rs);
			if($txn_count > 0)
				{
				loadTxns($clientid);
				echo "<hr>";
				}
				
			$db->sql("SELECT * FROM tbl_followup where clientid='$clientid'");
			$followup_rs = $db->getResult();
			$followup_count=count($followup_rs);	
				
			if($followup_count > 0)
				{
				loadFollowup($clientid);	
				echo "<hr>";
				}	
			
			$db->sql("SELECT * FROM tbl_websites where clientid='$clientid'");
			$website_rs = $db->getResult();
			$website_count=count($website_rs);
		
			if($website_count > 0)
				{
				loadWebsites($clientid);
				echo "<hr>";
				}
			$db->sql("SELECT * FROM tbl_sms where clientid='$clientid'");
			$sms_rs = $db->getResult();
			$sms_count=count($sms_rs);	
			
			if($sms_count > 0)
				{
				loadSMS($clientid);
				echo "<hr>";	
				}
			$db->sql("SELECT * FROM tbl_webappdev where clientid='$clientid'");
			$webappdev_rs = $db->getResult();
			$webappdev_count=count($webappdev_rs);	
				
			if($webappdev_count > 0)
				{
				loadWebAppDev($clientid);	
				echo "<hr>";
				}
				
			$db->sql("SELECT * FROM tbl_desktopappdev where clientid='$clientid'");
			$desktopdev_rs = $db->getResult();
			$desktopdev_count=count($desktopdev_rs);	
				
			if($desktopdev_count > 0)
				{
				loadDesktopAppDev($clientid);	
				echo "<hr>";
				}	
			
			$db->sql("SELECT * FROM tbl_mobileappdev where clientid='$clientid'");
			$mobiledev_rs = $db->getResult();
			$mobiledev_count=count($mobiledev_rs);	
				
			if($mobiledev_count > 0)
				{
				loadMobileAppDev($clientid);	
				echo "<hr>";
				}	
			
			$db->sql("SELECT * FROM tbl_voicecalls where clientid='$clientid'");
			$voicecalls_rs = $db->getResult();
			$voicecalls_count=count($voicecalls_rs);	
				
			if($voicecalls_count > 0)
				{
				loadVoiceCalls($clientid);	
				echo "<hr>";
				}				
				
			?>
		    </div>
         </div>
       </div>
       <!-- /.row -->
	    
	
       <!-- .right-sidebar -->
		<?php include('rightsidebar.php'); ?>
       <!-- /.right-sidebar -->
     </div>
     <!-- /.container-fluid -->
     
   </div>
   <!-- /#page-wrapper -->
 </div>
 
 
 
 <div id="txn" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
   <div class="modal-dialog">
	 <div class="modal-content">
	   <div class="modal-header">
		 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">× </button>
		 <h4 class="modal-title">Add Transaction</h4>
	   </div>
	   <div class="modal-body">
		<form data-toggle="validator" method="post" action="txnactions.php" name="savetxn">
			<input type="hidden" name="savetxn" value="savetxn">
			<input type="hidden" name="clientid" value="<?php echo $_GET['id']; ?>">
			<div class="form-group">
			   <label for="txndate" class="control-label">Transaction Date</label>
				<div class="input-group">
				 <input type="text" class="form-control" id="txndate" placeholder="yyyy/mm/dd" name="txndate"/>
				 <span class="input-group-addon"><i class="icon-calender"></i></span>  
			   </div>
			</div>
			 
		   <div class="form-group">
			 <label for="txnno" class="control-label">Transaction No</label>
			 <input type="text" class="form-control" id="txnno"  required="" name="txnno"/>
		   </div>
		   
		   <div class="form-group">
			 <label for="bankname" class="control-label">Bank Name</label>
			 <input type="text" class="form-control" id="bankname"  required="" name="bankname"/>
			</div>
			
		   <div class="form-group">
			 <label for="txnmode" class="control-label">Mode Of Payment</label>
				<select class="form-control select2" name="txnmode" required="">
				   <option value="" />Select</option> 
				   <option value="Cash Payment" />Cash Payment</option> 
				   <option value="NetBanking" />NetBanking</option>
				   <option value="Chqeue" />Chqeue</option>
				   <option value="Paytm" />Paytm</option>
			    </select>
			 <div class="help-block with-errors"></div>
		   </div>
		   
		   <div class="form-group">
			 <label for="txnamount" class="control-label">Amount</label>
			 <input type="text" class="form-control" id="txnamount"  required="" name="txnamount"/>
			 <div class="help-block with-errors"></div>
		   </div>
		   		   
		   <div class="form-group">
			 <label for="clientaddr" class="control-label">Comments</label>
			 <textarea id="txncomments" class="form-control" required="" name="txncomments"></textarea>
			</div>
		
		   <div class="modal-footer">
			  <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
			  <button type="submit" class="btn btn-success">Submit </button>
		   </div>
		 </form>   
	 </div>
	</div>
  </div>
</div> 


 <div id="followup" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
   <div class="modal-dialog">
	 <div class="modal-content">
	   <div class="modal-header">
		 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">× </button>
		 <h4 class="modal-title">Add Followup</h4>
	   </div>
	   <div class="modal-body">
		<form data-toggle="validator" method="post" action="followupactions.php" name="savefollowup">
			<input type="hidden" name="savefollowup" value="savefollowup">
			<input type="hidden" name="clientid" value="<?php echo $_GET['id']; ?>">
			<div class="form-group">
			   <label for="nxtfollowupdate" class="control-label">Next Date</label>
				<div class="input-group">
				 <input type="text" class="form-control" id="nxtfollowupdate" placeholder="yyyy/mm/dd" name="nxtfollowupdate"/>
				 <span class="input-group-addon"><i class="icon-calender"></i></span>  
			   </div>
			</div>
			 
		    <div class="form-group">
			 <label for="followupcomments" class="control-label">Comments</label>
			 <textarea id="txncomments" class="form-control" required="" name="followupcomments"></textarea>
			</div>
		
		   <div class="modal-footer">
			  <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
			  <button type="submit" class="btn btn-success">Submit </button>
		   </div>
		 </form>   
	 </div>
	</div>
  </div>
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
  <script src="../../../../cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js"></script>
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
        dom: 'Blfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print','colvis',
        ]
    });
	$('#smsint').DataTable( {
        dom: 'Blfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print','colvis',
        ]
    }); 
	$('#webappdev').DataTable( {
        dom: 'Blfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print','colvis',
        ]
    }); 
	$('#desktopappdev').DataTable( {
        dom: 'Blfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print','colvis',
        ]
    }); 
	$('#mobileappdev').DataTable( {
        dom: 'Blfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print','colvis',
        ]
    }); 
	$('#voicecalls').DataTable( {
        dom: 'Blfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print','colvis',
        ]
    });
	$('#txns').DataTable( {
        dom: 'Blfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print','colvis',
        ]
    });
	
	$('#takefollowup').DataTable( {
        dom: 'Blfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print','colvis',
        ]
    });
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
	 
	jQuery('#txndate').datepicker({
        autoclose: true,
        todayHighlight: true
      });		
		  	
	jQuery('#nxtfollowupdate').datepicker({
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

 