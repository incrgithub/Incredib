<?php include('logincommon.php'); ?>
<?php
include('classes/crud.php');
$db = new Database();
$db->connect();
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
<!-- Original URL: http://themedesigner.in/demo/eliteadmin-package/eliteadmin/index4.html
Date Downloaded: 13/11/2016 9:40:41 AM !-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />
 <meta name="description" content="" />
 <meta name="author" content="" />
 <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png" />
 <title>Dashboard</title>
 <!-- Bootstrap Core CSS -->
 <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
 <link href="../../../../cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
 <!-- Menu CSS -->
 <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet" />
 <!-- morris CSS -->
 <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet" />
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
 </head>
 <body>
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
           <h4 class="page-title">Dashboard </h4>
         </div>
         <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          
         </div>
         <!-- /.col-lg-12 -->
       </div>
       <!-- .row -->
       <div class="row">
         <div class="col-lg-3 col-sm-3 col-xs-12">
           <div class="white-box analytics-info">
             <h3 class="box-title">Total Websites </h3>
             <ul class="list-inline two-part">
                 <li class="text-center">
					 <span class="counter text-success">
						 <?php
						  $db->sql("SELECT * FROM tbl_websites");
						  $website_result = $db->getResult();
						  echo count($website_result);
						 ?>
					 </span>
				 </li>
             </ul>
           </div>
         </div>
         <div class="col-lg-3 col-sm-3 col-xs-12">
           <div class="white-box analytics-info">
             <h3 class="box-title">Total SMS Integrations</h3>
             <ul class="list-inline two-part">
                <li class="text-center">
					<span class="counter text-purple">
						<?php
						$db->sql("SELECT * FROM tbl_sms");
						$sms_result = $db->getResult();
						echo count($sms_result);
						?>
					</span>
				</li>
             </ul>
           </div>
         </div>
         <div class="col-lg-3 col-sm-3 col-xs-12">
           <div class="white-box analytics-info">
             <h3 class="box-title">Total Web Apps </h3>
             <ul class="list-inline two-part">
                <li class="text-right"> 
					<span class="counter text-info">
						<?php
						$db->sql("SELECT * FROM tbl_webappdev");
						$webappdev_result = $db->getResult();
						echo count($webappdev_result);
						?>
					</span>
				</li>
             </ul>
           </div>
         </div>
         <div class="col-lg-3 col-sm-3 col-xs-12">
           <div class="white-box analytics-info">
             <h3 class="box-title">Total Voice Calls </h3>
             <ul class="list-inline two-part">
                <li class="text-center">
				   <span class="counter text-danger">
						<?php
						$db->sql("SELECT * FROM tbl_voicecalls");
						$voicecalls_result = $db->getResult();
						echo count($voicecalls_result);
						?>
				   </span>
			   </li>
             </ul>
           </div>
         </div>
		  <div class="col-lg-3 col-sm-3 col-xs-12">
           <div class="white-box analytics-info">
             <h3 class="box-title">Total Mobile Apps</h3>
             <ul class="list-inline two-part">
				<li class="text-center">
				   <span class="counter text-purple">
						<?php
						$db->sql("SELECT * FROM tbl_mobileappdev");
						$mobileappdev_result = $db->getResult();
						echo count($mobileappdev_result);
						?>
				   </span>
			   </li>
			</ul>
           </div>
         </div>
		  <div class="col-lg-3 col-sm-3 col-xs-12">
           <div class="white-box analytics-info">
             <h3 class="box-title">Total Desktop Apps </h3>
             <ul class="list-inline two-part">
              <li class="text-center">
				   <span class="counter text-success">
						<?php
						$db->sql("SELECT * FROM tbl_desktopappdev");
						$desktopappdev_result = $db->getResult();
						echo count($desktopappdev_result);
						?>
				   </span>
			   </li>
             </ul>
           </div>
         </div>
       </div>
       <!--/.row -->
     
       
       <div class="row">
	    <div class="col-sm-12">
           <div class="white-box">
			<?php
			include('loaddashboard.php');
			loadWebsites();
			echo "<hr>";
			loadSMS();
			echo "<hr>";
			loadWebAppDev();
			echo "<hr>";
			loadDesktopAppDev();
			echo "<hr>";
			loadMobileAppDev();
			echo "<hr>";
			loadVoiceCalls();
			echo "<hr>";
			?>
		    </div>
         </div>
       </div>
       <!-- /.row -->
       <!-- .right-sidebar -->
       <div class="right-sidebar">
         <div class="slimscrollright">
           <div class="rpanel-title"> Service Panel  <span><i class="ti-close right-side-toggle"></i></span>  </div>
           <div class="r-panel-body">
             <ul>
               <li><b>Layout Options </b></li>
               <li>
                 <div class="checkbox checkbox-info">
                   <input id="checkbox1" type="checkbox" class="fxhdr" />
                   <label for="checkbox1"> Fix Header  </label>
                 </div>
               </li>
               <li>
                 <div class="checkbox checkbox-warning">
                   <input id="checkbox2" type="checkbox" class="fxsdr" />
                   <label for="checkbox2"> Fix Sidebar  </label>
                 </div>
               </li>
               <li>
                 <div class="checkbox checkbox-success">
                   <input id="checkbox4" type="checkbox" class="open-close" />
                   <label for="checkbox4"> Toggle Sidebar  </label>
                 </div>
               </li>
             </ul>
             <ul id="themecolors" class="m-t-20">
               <li><b>With Light sidebar </b></li>
               <li><a href="javascript:void(0)" theme="default" class="default-theme">1 </a></li>
               <li><a href="javascript:void(0)" theme="green" class="green-theme">2 </a></li>
               <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3 </a></li>
               <li><a href="javascript:void(0)" theme="blue" class="blue-theme working">4 </a></li>
               <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5 </a></li>
               <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6 </a></li>
               <li><b>With Dark sidebar </b></li>
               <br />
               <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7 </a></li>
               <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8 </a></li>
               <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9 </a></li>

               <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10 </a></li>
               <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11 </a></li>
               <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12 </a></li>
             </ul>
         
           </div>
         </div>
       </div>
       <!-- /.right-sidebar -->
     </div>
    
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
 <!--weather icon -->
 <script src="../plugins/bower_components/skycons/skycons.js"></script>
 <!--Counter js -->
 <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
 <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
 <!--Morris JavaScript -->
 <script src="../plugins/bower_components/raphael/raphael-min.js"></script>
 <script src="../plugins/bower_components/morrisjs/morris.js"></script>
 <!-- Custom Theme JavaScript -->
 <script src="js/custom.js"></script>
 <script src="js/dashboard4.js"></script>
 <!-- Sparkline chart JavaScript -->
 <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
 <script src="../plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
 <!--Style Switcher -->
 <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
 
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

  </script>

 </body>
 </html>
 