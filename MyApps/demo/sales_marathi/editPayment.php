<?php
session_start();
 include('connect.php');
?> 

<!DOCTYPE html>
<html>
    
    <head>
        <title>Customer Cash Deposit Detail</title>
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
function validatedata(form) 
 {
  var bgBad = "pink";
  var bgGood = "white";
  var valid = true;

   if (form.cust_name.value == "") {
		 alert("ग्राहकाचे चे नाव लिहा ");   
		 form.cust_name.focus();
	    valid = false;
    setColor(form.cust_name, bgBad);
    
  } else {
    setColor(form.cust_name, bgGood);
  }
  
  if (form.cust_address.value == "") {
		 alert(" ग्राहकाचा पत्ता लिहा ");   
		 form.cust_address.focus();
	    valid = false;
    setColor(form.cust_address, bgBad);
    
  } else {
    setColor(form.cust_address, bgGood);
  }

 if (form.mobile_no.value == "") {
		 alert("ग्राहकाचा मोबाईल नंबर लिहा");   
		 form.mobile_no.focus();
	    valid = false;
    setColor(form.mobile_no, bgBad);
    
  } else {
    setColor(form.mobile_no, bgGood);
  }
   
  if (form.balance.value == "") {
		 alert("ग्राहकाचा बॅलेन्स लिहा ( काही नसेल तर ० लिहा) ");   
		 form.balance.focus();
	    valid = false;
    setColor(form.balance, bgBad);
    
  } else {
    setColor(form.balance, bgGood);
  }
 if (!valid) alert(" सगळी माहिती भरा  ");
  return valid;
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
 					 <div class="row-fluid section">

                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="pull-left"><h4>  Edit Customer Payment Detail  </h4></div>
								<div class="muted pull-right"><a href="account_detail.php" ><i class="icon-arrow-left"></i> Back </a></div>
                             </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" action="edit_payment.php" method="post">
                                      <fieldset>
<?php
include('connect.php');
 session_start();
 $pay_id =$_GET['id'];

	$query_search="select * from all_tran where tran_id = '$pay_id'";
	$result = mysql_query($query_search) or die("Search query for All Tran table  is wrong  ");
	$data=NULL;
	$srno=1;

error_reporting(0);
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
 	}
	if(!$data)
	{
	echo "<script language=\"javascript\">";
	echo "var question=confirm(\" No Record Found  \"); window.location = 'customer.php'; ";
 		echo "</script>";
	}	
	$count=1;
 	    foreach($data as $ecol)
		{
 	 	$cust_id=$ecol['acc_id']; 
 	 	$pay_date= $ecol['tran_date'];
		$pay_amount= $ecol['cr_amount'];
	 	$extra_note= $ecol['extra_note'];
	 
		session_start();
 		$_SESSION['cust_id']=$cust_id;
		$_SESSION['pay_id']=$pay_id;
		}
		
?> 
									
									  
										    
                                       <div class="control-group">
                                          <label class="control-label" for="typeahead">  Amount </label>
                                          <div class="controls">
                                            <input type="text"   name="due_amount"  value="<?php echo"$pay_amount";?>" required >
                                          
											&nbsp;&nbsp;&nbsp;&nbsp;Date
											 <input type="text"  tabindex="2" class="datepicker" name="pay_date" value="<?php echo"$pay_date";?>" required>
                                          </div>
                                      </div>
									  
									  
										  <div class="control-group">
                                          <label class="control-label" for="typeahead">Extra Note  </label>
                                          <div class="controls">
                                            <input type="text"  tabindex="3" id="typeahead"  data-provide="typeahead"  name="extra_note" value="<?php echo"$extra_note";?>">
                                  </div>
                                      </div>   
									  
                                         <div class="control-group">
                                           <div class="controls">
                                           <button type="submit"  tabindex="4" class="btn btn-info" name="save">Update</button>
                                          <button type="reset" class="btn">Cancel</button>
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