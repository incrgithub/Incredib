<?php
session_start();
 include('connect.php');
?> 

<!DOCTYPE html>
<html>
    
    <head>
        <title>CASH PAYMENT</title>
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
function setColor(el, bg) 
{
  if (el.style) el.style.backgroundColor = bg;
}

function isAlpha(keyCode)
        {
            return ((keyCode >= 65 && keyCode <= 90) || keyCode == 8 || keyCode == 32 || keyCode == 9 || keyCode == 46)
        }
  
  		function OpenNewWindow(MyPath)
	     {
			window.open(MyPath,"","toolbar=no,status=no,menubar=no,location=center,scrollbars=no,resizable=no,height=475,width=510");
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
 					 <div class="row-fluid section">

                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="pull-left"><h4>  CUSTOMER ACCOUNT DEATIL   </h4></div>
                             </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" action="insert_add_cash.php" method="post">
                                      <fieldset>
<?php
include('connect.php');
 session_start();
 $cust_id =$_GET['id'];

	$query_search="select * from cust_master where cust_id = '$cust_id'";
	$result = mysql_query($query_search) or die("Search query for Customer   is wrong  ");
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
 	 	$cust_id=$ecol['cust_id']; 
 	 	$cust_name= $ecol['cust_name'];
		$cust_address= $ecol['cust_add'];
	 	$mobile= $ecol['cust_mobile'];
 		session_start();
 		$_SESSION['cust_id']=$cust_id;
		}
		
 
 
$query_payment="select sum(cr_amount),sum(dr_amount) from all_tran where acc_id = '$cust_id' order by tran_date desc ";
	$result_payment = mysql_query($query_payment) or die("Search query for Payment  Trascntion is wrong  ");
	$data_payment=NULL;
  error_reporting(0);
	while ($row_payment = mysql_fetch_array($result_payment))
	{ 
	$data_payment[] = $row_payment;	
	}	
 	    foreach($data_payment as $ecol_payment)
		{ 
		$total_cr=$ecol_payment['0'];	
		$total_dr=$ecol_payment['1'];
		}		
		$due_amount=$total_dr - $total_cr ;
?>

									  <div class="control-group">
                                          <label class="control-label" for="typeahead"> CUSTOMER NAME </label>
                                          <div class="controls">
                                            <input type="text" name="cust_name"  value="<?php echo"$cust_name";?>" id="typeahead"  data-provide="typeahead" required >
	                                       <input type="hidden" name="acc_id"  value="<?php echo"$cust_id";?>" id="typeahead"  data-provide="typeahead" required >

								&nbsp; PAY DATE
                                            <input type="text"  name="bill_date" id="typeahead" id="date01" class="datepicker"  tabindex="1"  required>
									 </div>
                                      </div>
									
									  
										    
									<div class="control-group">
                                          <label class="control-label" for="typeahead">   AMOUNT   </label>
                                          <div class="controls">
                                            <input type="text"  name="bill_amount" id="typeahead"   maxlength="10" data-provide="typeahead"  tabindex="2"  required>
                                          </div>
                                      </div>
										    		
                                         <div class="control-group">
                                           <div class="controls">
                                          <button type="submit"  name="save" class="btn btn-info" tabindex="3"> SAVE  </button>
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
 <?php include("footer.php");?>
        </div>
        <!--/.fluid-container-->
         <?php include("footer_information.php");?>
        </script>
    </body>

</html>