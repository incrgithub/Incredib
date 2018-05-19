<?php
session_start();
 include('connect.php');
?> 

<!DOCTYPE html>
<html>
    
    <head>
        <title>CUSTOMER DETAIL </title>
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
                                <div class="pull-left"><h4> CUSTOMER ACCOUNT DETAIL   </h4></div>
								<div class="muted pull-right"> <a href="customer.php" ><i class="icon-arrow-left"></i>  GO BACK </a></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" action="#" method="post">
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
											ADDRESS									
		 							 <input type="text" name="cust_add"  id="typeahead"  data-provide="typeahead"value="<?php echo"$cust_address";?>" required>
                                          </div>
                                      </div>
									
									  <div class="control-group">
                                          <label class="control-label" for="typeahead">MOBILE </label>
                                          <div class="controls">
                                            <input type="text"  name="cust_mobile" id="typeahead"   maxlength="10" data-provide="typeahead" value="<?php echo"$mobile";?>" required>
                                          </div>
                                      </div>
										    
                                       <div class="control-group">
                                          <label class="control-label" for="typeahead"> OUTSTANIG AMOUNT  </label>
                                          <div class="controls">
                                            <input type="text"  name="due_amount" value="<?php echo"$due_amount";?>" readonly>
 
                                          </div>
                                      </div>
									  
										 
										
                                 
                                      </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					 
					 
					         <div class="row-fluid">
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="pull-left"> <b> <h4> BILL DETAIL </h4></b>  </div>
                                    <div class="pull-right"><?php echo" <a href=add_bill.php?id=$cust_id> <button ><h4> ADD NEW BILL </h4> </button> </a> "; ?> </div>
                                </div>
                                <div class="block-content collapse in">
                                 <table class="table">
						              <thead>
						                <tr>
						                  <th>SR.NO</th>
										  <th>DATE </th>
  										  <th> BILL AMOUNT </th>
  						                </tr>
						              </thead>
						              <tbody>
 						               <?php
include('connect.php');
  $cust_id=$_SESSION['cust_id'];
 
	$query_search="select * from all_tran where acc_id = '$cust_id' and dr_amount>0 order by tran_date desc ";
	$result = mysql_query($query_search) or die("Search query for Job Trascntion is wrong  ");
	$data=NULL;
	$srno=1;

error_reporting(0);
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
	 
	}
 	$count=1;
	$gtotal=0;
	$cr="credit";
 	    foreach($data as $ecol)
		{
  	 	$bill_date= $ecol['tran_date'];
		$total_amount=$ecol['dr_amount'];
  		
		$gtotal=$gtotal + $total_amount;
		 
		$j_date=date("d-m-Y" ,strtotime($bill_date));
		
		 if($count%2==0)
		 {
						   
						             echo" <tr class=success>";
 						                  echo"<td> $count</td>";
										  echo"<td> $j_date</td>";
 										  echo"<td>$total_amount</td>";
   						                echo"</tr>";
			}
			else
			{
			                         echo" <tr class=error>";
 						                  echo"<td> $count</td>";
										  echo"<td> $j_date</td>";
  										  echo"<td>$total_amount</td>";
  						                echo"</tr>";
			}			
			$count=$count+1;
			}
			?>                  
						<tr><td></td><td>TOTAL </td><td> <?php echo"$gtotal"; ?></td> </tr>
						              </tbody>
						            </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                        <div class="span6">
                            <!-- block -->
                            <div class="block">
                                <div class="navbar navbar-inner block-header">
                                    <div class="pull-left"> <b> <h4> PAID AMOUNT DETAIL </h4> </b></div>
                                    <div class="pull-right"><?php echo" <a href=add_cash.php?id=$cust_id> <button ><h4> PAID BILL AMOUNT </h4> </button> </a> "; ?> </div>
                                </div>
                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                           <th>SR.NO</th>
										   <th>DATE  </th>
										   <th>AMOUNT </th>
                                             </tr>
                                        </thead>
                                        <tbody>
												<?php
include('connect.php');
 
 $c_no=$_SESSION['cust_id'];
 
$query_search="select * from all_tran where acc_id = '$cust_id' and cr_amount>0 order by tran_date desc ";
	$result = mysql_query($query_search) or die("Search query for Payment  Trascntion is wrong  ");
	$data=NULL;
	$srno=1;

error_reporting(0);
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
	 
	}
 	$count=1;
	$jtotal=0;
 	    foreach($data as $ecol)
		{
 	 	$pay_id=$ecol['tran_id'];
 	 	$pay_date= $ecol['tran_date'];
		$total_amount=$ecol['cr_amount'];
		$jtotal=$jtotal + $total_amount;
		
	 			    $p_date= date('d-m-Y', strtotime($pay_date));
					
 						             echo"<tr>";
 						                  echo"<td>  $count  </td>";
										  echo"<td> $p_date </td>";
 										   echo"<td>$total_amount</td>";
  						                echo"</tr>";
			$count=$count+1;
			}?> 
			<tr><td></td><td>TOTAL </td><td> <?php echo"$jtotal"; ?></td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /block -->
                        </div>
                    </div>
                                    
            <hr>
 <?php include("footer.php");?>
        </div>
        <!--/.fluid-container-->
         <?php include("footer_information.php");?>
        </script>
    </body>

</html>