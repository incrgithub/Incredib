<?php
session_start();
 include('connect.php');
?> 

<!DOCTYPE html>
<html>
    
    <head>
        <title>Change Rate</title>
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
                                <div class="pull-left"><b> Add New Stock </b> </div>
								<div class="muted pull-right"> <a href="item.php" ><i class="icon-arrow-left"></i> Back </a></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" action="insert_item.php" method="post">
                                      <fieldset>
<?php
include('connect.php');
 session_start();
 $item_id =$_GET['id'];

	$query_search="select * from item_master where item_id = '$item_id'";
	$result = mysql_query($query_search) or die("Search query for Customer is wrong  ");
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
 	 	$item_id=$ecol['item_id']; 
 	 	$item_group_id=$ecol['item_group_id']; 
 		$item_name= $ecol['item_name'];
	 	$item_stock= $ecol['item_stock'];
	  	$purchase_price=$ecol['purchase_price'];
		$sale_price=$ecol['sale_price'];
		
		$_SESSION['item_id']=$item_id;
		 
			$sql1="select item_group_name  from item_group_master where item_group_id='$item_group_id' "; $result1 =mysql_query($sql1); while ($data1=mysql_fetch_assoc($result1))
			{  $igr_name=$data1['item_group_name'];  }
		 
 		}
 ?>
							
									  <div class="control-group">
                                          <label class="control-label" for="typeahead"> Group</label>
                                          <div class="controls">
                                            <input type="text"  value="<?php echo"$igr_name";?>" id="typeahead"  data-provide="typeahead" readonly >
											Item Name
											  <input type="text"   id="typeahead"  data-provide="typeahead"value="<?php echo"$item_name";?>" readonly>
                                          </div>
                                      </div>
									
									  <div class="control-group">
                                          <label class="control-label" for="typeahead">Quantity </label>
                                          <div class="controls">
                                            <input type="text"   id="typeahead"  data-provide="typeahead" value="<?php echo"$item_stock";?>" readonly>
                                          </div>
                                      </div>
									  <div class="control-group">
                                          <label class="control-label" for="typeahead">New Stock </label>
                                          <div class="controls">
                                            <input type="text"   name="item_stock"  tabindex="1">
                                          </div>
                                      </div>
									   <div class="control-group">
                                          <label class="control-label" for="typeahead">Purchase Rate </label>
                                          <div class="controls">
                                            <input type="text"   name="purchase_rate" value="<?php echo"$purchase_price";?>"   tabindex="1">
                                          </div>
                                      </div>
										    
                                       <div class="control-group">
                                          <label class="control-label" for="typeahead"> Sales Rate </label>
                                          <div class="controls">
                                            <input type="text"   name="sale_rate"  value="<?php echo"$sale_price";?>"   tabindex="2" >
                                          </div>
                                      </div>
									  
									 
                                         <div class="control-group">
                                           <div class="controls">
                                           <button type="submit"  tabindex="4" class="btn btn-info" name="save" tabindex="3">Save</button>
                                          <button type="reset" class="btn" tabindex="4">Clear</button>
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