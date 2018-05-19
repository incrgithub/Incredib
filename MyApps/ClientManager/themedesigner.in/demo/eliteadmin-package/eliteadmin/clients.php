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
       <div class="row bg-title">
         <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
           <h4 class="page-title">Clients</h4>
         </div>
         <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		  <button class="btn btn-info" data-toggle="modal" data-target="#responsive-modal">Add New Client </button>

         </div>
         <!-- /.col-lg-12 -->
       </div>
       <!-- /row -->
       <div class="row">
	   <?php
        if(isset($_GET['msg'])) 
			{
			$param=$_GET['msg'];
			if($param=="save")
				 echo "<script>createCustomAlert('Saved Successfully..','','SUCCESS');</script>";
			if($param=="update")
				 echo "<script>createCustomAlert('Updated Successfully..','','SUCCESS');</script>";	 
			if($param=="delete")
				 echo "<script>createCustomAlert('Deleted Successfully..','','SUCCESS');</script>";	 	 
			}
		?>	
         <div class="col-sm-12">
           <div class="white-box">
			<?php	
			if(isset($_GET['msg'])) 
			{ 
			$param=$_GET['msg'];
		
			if($param == "editclient")
				{
				$id=$_GET['id'];
				$db->sql("SELECT * FROM tbl_clients td where td.clientid='$id'");
				$res = $db->getResult();
				foreach($res as $x) 
					{
					$client_name  = $x['clientname'];	
					$client_address = $x['clientaddress'];
					$client_emailid = $x['clientemailid'];
					$client_contactno	= $x['clientcontactno'];
					$client_type = $x['clienttype'];
					}
				?>	
				 <form data-toggle="validator" method="post" action="actions.php" name="updateclient">
					<input type="hidden" name="updateclient" value="updateclient">
					<input type="hidden" name="clientid" value="<?php echo $id; ?>">
				   <div class="form-group">
					 <label for="clientname" class="control-label">Client / Company Name </label>
					 <input type="text" class="form-control" id="clientname" placeholder="Incredible Tech Solutions" required="" name="clientname" value="<?php echo $client_name; ?>"/>
				   </div>
				   <div class="form-group">
					 <label for="clientaddr" class="control-label">Client / Company Address</label>
					 <textarea id="textarea" class="form-control" required="" name="clientaddr"><?php echo $client_address; ?></textarea>
					</div>
				   <div class="form-group">
					 <label for="clientemailid" class="control-label">Email Id </label>
					 <input type="email" class="form-control" id="clientemailid" placeholder="Email" data-error="Email address is invalid" required="" name="clientemailid" name="clientemailid" value="<?php echo $client_emailid; ?>"/>
					 <div class="help-block with-errors"></div>
				   </div>
				   <div class="form-group">
					 <label for="clientcontactno" class="control-label">Contact No </label>
					 <input type="text" class="form-control" id="clientcontactno" placeholder="Contact No" required="" name="clientcontactno" value="<?php echo $client_contactno; ?>"/>
					 <div class="help-block with-errors"></div>
				   </div>
				   
				   <div class="form-group">
					 <label for="clienttype" class="control-label">Type</label>
					 <select class="form-control select2" name="clienttype" required="">
					  <?php
							$clienttypeOptions  = array('Fixed', 'Proposed');
							foreach($clienttypeOptions as $option){
								if($client_type == $option){
									echo "<option selected='selected' value='$option'>$option</option>" ;
								}else{
									echo "<option value='$option'>$option</option>" ;
								}
							}
						?>
					 </select>
					</div>
				
				   <div class="modal-footer">
					  <button type="submit" class="btn btn-success">Update </button>
				   </div>
				 </form>  
				<?php
					}
				}	
				?>	
             <div class="table-responsive">
                 <table id="clients" class="display nowrap" cellspacing="0" width="100%">
                   <?php
					$db->select('tbl_clients','*',NULL,NULL,NULL,NULL); 
					$rs = $db->getResult();
					echo "<thead>";
						echo "<tr>";
							echo "<th>Client Name</th>";
							echo "<th>Client Address</th>";
							echo "<th>Email Id</th>";
							echo "<th>Contact No</th>";
							echo "<th>Status</th>";
							echo "<th>Edit</th>";
							echo "<th>Delete</th>";
						echo "</tr>";
					echo "</thead>";
				
					echo "<tbody>";
					foreach($rs as $x) 
						{
						 echo "<tr>";  
							 $id=$x['clientid'];
							 $address= wordwrap($x['clientaddress'],35,"<br>\n");
							 $name=$x['clientname'];
							 $clienttype=$x['clienttype'];
							 echo  "<td><a href='showdetails.php?id=$id&name=$name'>". $x['clientname']."</a></td>";
							 echo  "<td>". $address."</td>";
							 echo  "<td>". $x['clientemailid']."</td>";
							 echo  "<td>". $x['clientcontactno']."</td>";
							 if($clienttype == "Fixed")
								echo  "<td><div class='label label-table label-success'>Fixed </div></td>";
							 else if($clienttype == "Proposed")
								echo  "<td><div class='label label-table label-warning'>Proposed </div></td>";	
							 echo  "<td><a href='clients.php?id=$id&msg=editclient'><img src='images/edit.png'></a></td>";
							 echo  "<td><a href='actions.php?id=$id&msg=deleteclient'><img src='images/cross.png'></a></td>";
						echo "</tr>"; 
						}
					echo "</tbody>"; 
					?>
                 </table>
             </div>
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
 
<div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
   <div class="modal-dialog">
	 <div class="modal-content">
	   <div class="modal-header">
		 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">× </button>
		 <h4 class="modal-title">Add New Client </h4>
	   </div>
	   <div class="modal-body">
		<form data-toggle="validator" method="post" action="actions.php" name="saveclient">
		  <input type="hidden" name="saveclient" value="saveclient">
		 
		   <div class="form-group">
			 <label for="clientname" class="control-label">Client / Company Name </label>
			 <input type="text" class="form-control" id="clientname" placeholder="Incredible Tech Solutions" required="" name="clientname"/>
		   </div>
		   <div class="form-group">
			 <label for="clientaddr" class="control-label">Client / Company Address</label>
			 <textarea id="textarea" class="form-control" required="" name="clientaddr"></textarea>
			</div>
		   <div class="form-group">
			 <label for="clientemailid" class="control-label">Email Id </label>
			 <input type="email" class="form-control" id="clientemailid" placeholder="Email" data-error="Email address is invalid" required="" name="clientemailid" name="clientemailid"/>
			 <div class="help-block with-errors"></div>
		   </div>
		   <div class="form-group">
			 <label for="clientcontactno" class="control-label">Contact No </label>
			 <input type="text" class="form-control" id="clientcontactno" placeholder="Contact No" required="" name="clientcontactno"/>
			 <div class="help-block with-errors"></div>
		   </div>
		   <div class="form-group">
			 <label for="clienttype" class="control-label">Type</label>
			 <select class="form-control select2" name="clienttype" required="">
			   <option value="" />Select</option> 
			   <option value="Fixed" />Fixed</option> 
			   <option value="Proposed" />Proposed</option>
			 </select>
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
    $('#clients').DataTable( {
        dom: 'Blfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print','colvis',
        ],
		
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
 <!--Style Switcher -->
 <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
 </body>
 </html>

 