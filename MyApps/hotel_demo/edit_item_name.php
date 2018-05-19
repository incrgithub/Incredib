<?php
session_start();
 include('connect.php');
?> 

<!DOCTYPE html>
<html>
    
    <head>
        <title>EDIT ITEM NAME </title>
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
                                <div class="pull-left">
                                  <h4>CHANGE ITEM NAME   </h4>
                                </div>
                             </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" action="editName.php" method="post">
                                      <fieldset>
<?php
include('connect.php');
 session_start();
 $item_id =$_GET['id'];

	$query_search="select * from item_master where item_id = '$item_id'";
	$result = mysql_query($query_search) or die("Search query for Item master table   is wrong  ");
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
	echo "var question=confirm(\" No Record Found  \"); window.location = 'item_group.php'; ";
 		echo "</script>";
	}	
	$count=1;
 	    foreach($data as $ecol)
		{
 	 	$item_id=$ecol['item_id']; 
 	 	$item_name= $ecol['item_name'];
		$igr=$ecol['item_group_id'];
		
		 $query_i="select * from item_group_master where item_group_id='$igr' ";
	  $rs = mysql_query($query_i);   while ($row_data = mysql_fetch_array($rs)){$i_data[] = $row_data;}  foreach($i_data as $ecol) {$i_name=$ecol['item_group_name']; } 
		session_start();
 		$_SESSION['item_id']=$item_id;
		
	 
		}
		
?> 
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead"> ITEM NAME  </label>
                                          <div class="controls">
                                            <input type="text"   name="item_name"  value="<?php echo"$item_name";?>" required >
                                            </div>
                                      </div>
									  
									  <div class="control-group">
                                          <label class="control-label" for="inputError" > GROUP NAME  </label>
                                          <div class="controls">
										  <select id="group_id" name="group_id" >
										  <option value="<?php echo"$igr";?>"><?php echo"$i_name"; ?></option>
<?php $sql1="SELECT item_group_id,item_group_name FROM item_group_master ORDER BY item_group_name"; $result1 =mysql_query($sql1); while ($data1=mysql_fetch_assoc($result1)){?>
		   <option value ="<?php echo $data1['item_group_id'] ?>" ><?php echo $data1['item_group_name'] ?></option>
		           <?php } ?>                                                                                    
                                            </select>
 										  </div></div>
										 
									  
                                         <div class="control-group">
                                           <div class="controls">
                                           <button type="submit"  tabindex="4" class="btn btn-info" name="save">SAVE CHANGE </button>
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