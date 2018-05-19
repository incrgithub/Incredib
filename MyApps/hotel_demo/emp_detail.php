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
        <title> EMPLOYEE ATTENDANCE REGISTER </title>
        <!-- Bootstrap -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
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
                             <div class="pull-left"><b><h4> EMPLOYEE ATTENDANCE REGISTER   </h4></b> </div>
                             <div class="pull-right"><b><h4> <?php $d=date('d-m-Y'); echo"$d"; ?>  </h4></b> </div>
                             </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                  <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
											<tr>
												<th>SR.NO</th>
												<th>NAME  </th>
												<th>ADDRESS </th>
												<td colspan="2" align="center"> STATUS</td>
   											</tr>
										</thead>
										<tbody>
											<tr >
	<?php include('connect.php');
	
	$query_search="select * from emp_master ";
	$result = mysql_query($query_search) or die("Search query for Employee is wrong  ");
	$data=NULL;
	while ($row = mysql_fetch_array($result))
	{
	    	$data[] = $row;	
	}
		
	$count=1;
  	    foreach($data as $ecol)
		{
	     $cust_id= $ecol['emp_id'];
  	 	$cust_name= $ecol['emp_name'];
		$cust_add= $ecol['emp_add'];
		$cust_mobile=$ecol['emp_mobile'];
	
		$todays=date('Y-m-d');
	$query_s="select * from present where emp_id='$cust_id' and p_date='$todays' ";
	$result_s = mysql_query($query_s) or die("Search Query for Table is wrong  ");
	$data_s=NULL;
	while ($row_s = mysql_fetch_array($result_s))
	{
	    	$data_s[] = $row_s;	
	}
							
							if(!$data_s)
							{
									  	 echo"<td> $cust_id    </td> "; 
						                   echo"<td> $cust_name </td> "; 
										   echo"<td> $cust_add   </td>";
 										   echo"<td><a href=insert_present.php?id=$cust_id> <h4> <font color=green> PRESENT  </font></h4> </a></td>";
 										   echo"<td><a href=insert_absent.php?id=$cust_id> <h4> <font color=red> ABSENT </font></h4> </a></td>";
   										   echo"</tr>";
										   $count= $count+1;
							}
							else
							{
								
							}
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
         <script src="assets/scripts.js"></script>
        <script src="assets/DT_bootstrap.js"></script>
        <script>
        $(function() {
        });
        </script>
		
    </body>
</html>