<?php
session_start();
 include('connect.php');
?> 

<!DOCTYPE html>
<html>
    
    <head>
        <title>Supplier Detail</title>
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
                                <div class="pull-left"><h4>  Supplier Payment Detail  </h4></div>
								<div class="muted pull-right"> <a href="supplier_view.php" ><i class="icon-arrow-left"></i> Back </a></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" action="supp_info_update.php" method="post">
                                      <fieldset>
<?php
include('connect.php');
 session_start();
 $supp_id =$_GET['id'];

	$query_search="select * from supplier_master where supp_id='$supp_id' ";
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
 		session_start();
 		$_SESSION['supp_id']=$supp_id;
 
 			} 
			
 $supp_id=$_SESSION['supp_id'];

	$query_bill="select * from pur_bill_master where supp_id = '$supp_id' order by inv_date desc ";
	$result_bill = mysql_query($query_bill) or die("Search query for PUR_BILL_MASTER is wrong  ");
	$data_bill=NULL; 
 	while ($row = mysql_fetch_array($result_bill)){ $data_bill[] = $row; }
	$total_bill=0;
 	    foreach($data_bill as $ecol_bill)	{ $t_b=$ecol_bill['total_amount']; 	$total_bill=$total_bill + $t_b;		}
			
 $c_no=$_SESSION['supp_id'];
 $query_payment="select * from all_tran where acc_id = '$c_no' and acc_type='supplier' order by tran_date desc ";
	$result_payment = mysql_query($query_payment) or die("Search query for ACC_TRAN  Trascntion is wrong  ");
	$data_payment=NULL;
 
 	while ($row_payment = mysql_fetch_array($result_payment)) 	{     	$data_payment[] = $row_payment;		} 
 	$jtotal=0;
 	    foreach($data_payment as $ecol_payment) { $total_a=$ecol_payment['dr_amount']; $jtotal=$jtotal + $total_a;    }
		
	?> 				
									 <div class="control-group">
                                          <label class="control-label" for="typeahead"> Name</label>
                                          <div class="controls">
                                            <input type="text"  value="<?php echo"$supp_name";?>" id="typeahead"  name="supp_name"  required >
											Address
											  <input type="text"    value="<?php echo"$supp_add";?>" name="supp_add" required >
                                          </div>
                                      </div>
									
									  <div class="control-group">
                                          <label class="control-label" for="typeahead">Mobile </label>
                                          <div class="controls">
                           <input type="text"   maxlength="10" onKeyPress="return isNumberKey(event)" value="<?php echo"$supp_mobile";?>" name="supp_mobile" required  >
                                          </div>
                                      </div>
										    
                                       <div class="control-group">
                                          <label class="control-label" for="typeahead"> Outstanding </label>
                                          <div class="controls">
                                            <input type="text"   name="due_amount"  value="<?php $tt= $total_bill - $jtotal; echo"$tt";?>" readonly >
											<button type="submit"  name="save" class="btn btn-info" tabindex="13">UPDATE</button>
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
                                    <div class="pull-left"> <b>Bill Details</b>  </div>
                                </div>
                                <div class="block-content collapse in">
                                 <table class="table">
						              <thead>
						                <tr>
						                  <th>## </th>
										  <th> Date </th>
						                  <th>Inovice No  </th>
 										  <th>  Total</th>
 						                </tr>
						              </thead>
						              <tbody>
 						               <?php
include('connect.php');
  $supp_id=$_SESSION['supp_id'];

	$query_search="select * from pur_bill_master where supp_id = '$supp_id' order by inv_date desc ";
	$result = mysql_query($query_search) or die("Search query for Bill Register is wrong  ");
	$data=NULL;
	$srno=1;

error_reporting(0);
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
	 
	}
 	$count=1;
	$total_bill=0;
 	    foreach($data as $ecol)
		{
 	 	$bill_no=$ecol['pur_bill_id']; 
		$inv_no=$ecol['inv_no'];
  	 	$bill_date= $ecol['inv_date'];
		$total_b=$ecol['total_amount'];
		$vat_amount=$ecol['vat_amount'];
		$cst_amount=$ecol['cst_amount'];
		
		$total_bill=$total_bill + $total_b;
		$j_date=date("d-m-Y" ,strtotime($bill_date));
		
		 if($count%2==0)
		 {
						   
						             echo" <tr class=success>";
 						                  echo"<td> $count</td>";
										  echo"<td> $j_date</td>";
										  echo"<td>  $inv_no </td>";
 										  echo"<td>$total_b</td>";
  						                echo"</tr>";
			}
			else
			{
			                         echo" <tr class=error>";
 						                echo"<td> $count</td>";
										  echo"<td> $j_date</td>";
										  echo"<td>  $inv_no </td>";
 										  echo"<td>$total_b</td>";
 						                echo"</tr>";
			}			
			$count=$count+1;
			}
			?>         
			<tr><td></td><td></td><td>Total</td><td> <?PHP echo"$total_bill"; ?></td></tr>
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
                                    <div class="pull-left"> <b>Payment Detail</b></div>
                                     
                                </div>
                                <div class="block-content collapse in">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                               <th>Sr.No</th>
										    <th>Date  </th>
										  <th>Amount</th>
										   <th>Extra Note</th>
                                            </tr>
                                        </thead>
                                        <tbody>
												<?php
include('connect.php');
 
 $c_no=$_SESSION['supp_id'];
 
$query_search="select * from all_tran where acc_id = '$c_no' and acc_type='supplier' order by tran_date desc ";
	$result = mysql_query($query_search) or die("Search query for supp_Payment  Trascntion is wrong  ");
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
		$total_amount=$ecol['dr_amount'];
		$extra_note=$ecol['extra_note']; 
		
		$jtotal=$jtotal + $total_amount;
		
	 			    $p_date= date('d-m-Y', strtotime($pay_date));
					
 						             echo"<tr>";
 						                  echo"<td> <a href=editPayment_supp.php?id=$pay_id>  $count  </td>";
										  echo"<td> $p_date </td>";
 										   echo"<td>$total_amount</td>";
										    echo"<td> $extra_note </td>";
 						                echo"</tr>";
			$count=$count+1;
			}?> 
			<tr class="warning">
						                 
										  <td></td>
						                 <td>Total  </td>
										  <td><?php echo"$jtotal"; ?></td>
										   <td></td>
						                </tr>
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