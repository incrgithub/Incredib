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
        <title>Customer Contact Detail</title>
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
                        
                        	
                    	 
  
					  <div class="row-fluid" > 
					     
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="pull-left"> <h4>Customer List   </span></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								
  									<table class="table">
						              <thead>
						                <tr>
						                  <th>#</th>
						                  <th>Name  </th>
						                  <th>Address </th>
						                  <th>Mobile</th>
						                  <th>Due Amount</th>
										  
						                </tr>
						              </thead>
									             <tbody>
								<?php
include('connect.php');
 
 

	$query_search="select * from customer_master ";
	$result = mysql_query($query_search) or die("Search query for Customer  name is wrong  ");
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
	$count=1; $total=0;
 	    foreach($data as $ecol)
		{
		
	 	 
 	 	$cust_name= $ecol['cust_name'];
		$cust_address= $ecol['cust_add'];
	 	$mobile= $ecol['cust_mobile'];
 	 	$due_amount=$ecol['cust_balance'];	
		
		$total=$total + $due_amount;
		
		 if($due_amount > 0) 
		 { 
		 if($count%2==0)
		 {
						   
						             echo"   <tr class='success'>";
						               echo"<td> $count </td> ";
						                echo"  <td> $cust_name </td>";
						                  echo"<td>$cust_address</td>";
						                  echo"<td>$mobile</td>";
  										echo"<td>$due_amount</td>";
  						                echo"</tr>";
			}
			else
			{
			    echo" <tr class='error'>";
						               echo"<td> $count </td> ";
						                echo"<td> $cust_name </td>";
						                  echo" <td> $cust_address </td>";
						                  echo"<td>$mobile</td>";
  										echo"<td>$due_amount</td>";
						                echo"</tr>";
			
			
			}			
			$count=$count+1;
			}
			}
			
			?>                 <tr><td></td><td></td><td></td> <td> Total Amount </td><td><?php echo"$total"; ?></td>
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
        <link href="vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

        <script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/jquery.uniform.min.js"></script>
        <script src="vendors/chosen.jquery.min.js"></script>
        <script src="vendors/bootstrap-datepicker.js"></script>

        <script src="vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>


        <script src="assets/scripts.js"></script>
        <script>
        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>
    </body>

</html>