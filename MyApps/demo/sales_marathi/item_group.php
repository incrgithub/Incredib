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
        <title>Item Group Master</title>
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

 </script>
 
</head>
    
    <body>
       <?php include("header.php");?>
        <div class="container-fluid">
            <div class="row-fluid">
              <?php include("slidebar.php");?>
				
                 <div class="span9" id="content" >
                      <!-- morris stacked chart -->
                     <div class="row-fluid">
                                         <div class="row-fluid" >
                        <!-- block -->
  <div class="row-fluid section">
                         <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                           <div class="pull-left"><b><h4> मालाचे नाव / ग्रुपचे नाव    </h4> </b> </div>
							 <div class="muted pull-right"><a href="dash_stock.php" ><i class="icon-arrow-left"></i> Back </a></div>       
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <div id="rootwizard">
                                        <div class="navbar">
                                          <div class="navbar-inner">
                                            <div class="container">
                                              <ul>
											   <li><a href="#tab4" data-toggle="tab"> नवीन माल  </a></li>
											  <li><a href="#tab3" data-toggle="tab"> नवीन ग्रुप  </a></li>
											   <li><a href="#tab5" data-toggle="tab"> मालाच्या नावात फेरबदल  </a></li>
											    <li><a href="#tab6" data-toggle="tab"> ग्रुप नावात फेरबदल  </a></li>
                                        </ul>
                                         </div>
                                          </div>
                                        </div>
               
			   <div class="tab-content">
               <div class="tab-pane" id="tab4">
           	    <form class="form-horizontal" action="insert_item_name.php" onSubmit="return validatedata(this)" method="post" >
                                      <fieldset>
  									   <div class="control-group">
                                          <label class="control-label" for="inputError" > ग्रुप नाव  </label>
                                          <div class="controls">
										  <select id="group_id" name="group_id">
<?php $sql1="SELECT item_group_id,item_group_name FROM item_group_master ORDER BY item_group_name"; $result1 =mysql_query($sql1); while ($data1=mysql_fetch_assoc($result1)){?>
		   <option value ="<?php echo $data1['item_group_id'] ?>" ><?php echo $data1['item_group_name'] ?></option>
		           <?php } ?>                                                                                    
                                            </select>
 										  </div></div>
										 
                                        <div class="control-group">
      									 <label class="control-label" for="typeahead"> मालाचे नाव </label>
                                          <div class="controls">
                                            <input name="item_name" type="text"     placeholder=" Enter Item   Name"  class="input-large">
                                          </div>
                                      </div>
							 
									  	 <div class="control-group">		
										 <div class="controls">
								 <button type="submit" class="btn btn-info"> SAVE</button>
 										  </div>
										  </div>
                                      </fieldset>
									  </form>
                                            </div>
							
							
											
			 <div class="tab-pane" id="tab3">
               <form class="form-horizontal" action="insert_item_group.php" onSubmit="return validatedata(this)" method="post" >
                                      <fieldset>
 										<div class="control-group">
       <label class="control-label" for="typeahead"> अं.न. </label>
	       <div class="controls">
<span class="input-large uneditable-input"><?php $q="select max(item_group_id) from item_group_master"; $res=mysql_query($q); $row=mysql_fetch_row($res); $itm_grp_no= $row[0]+1; echo "$itm_grp_no"; ?> </span></div>

                                      </div>
                                        <div class="control-group">
       <label class="control-label" for="typeahead"> ग्रुपचे नाव </label>
                                          <div class="controls">
                                            <input name="item_group_name" type="text"     placeholder=" इथे ग्रुपचे नाव लिहा "  class="input-large">
                                          </div>
                                      </div>
							
									  	 <div class="control-group">		
										 <div class="controls">
								 <button type="submit" class="btn btn-info"> SAVE</button>
                                          <button type="reset" class="btn">Reset</button>
										  </div>
										  </div>
                                      </fieldset>
									  </form>
                                            </div>
											
                <div class="tab-pane" id="tab5">
           	    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
		 <tr ><th><div align="center">अं.न.</div></th><th><div align="center"> मालाचे नाव </div></th><th><div align="center"> ग्रुपचे नाव   </div></th></tr>
	
										</thead>
										<tbody>
											
	<?php include('connect.php');
	$query_search="select * from item_master ";
	$result = mysql_query($query_search) or die("Search query for Item Master  is wrong  ");
	$data=NULL;
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
	}
	
	$count=1;
	$cost=1;
	$total_cost=0;
 	    foreach($data as $ecol)
		{
	  	$item_id=$ecol['item_id']; 
 	 	$item_group_id=$ecol['item_group_id']; 
		
		$item_name= $ecol['item_name'];
	 	$item_stock= $ecol['item_stock'];
	  	$purchase_price=$ecol['purchase_price'];
		$sale_price=$ecol['sale_price'];
		
		$cost=$item_stock * $purchase_price;
		
		$total_cost= $total_cost + $cost;
		 
			$sql1="select item_group_name  from item_group_master where item_group_id='$item_group_id' "; $result1 =mysql_query($sql1); while ($data1=mysql_fetch_assoc($result1))
			{  $igr_name=$data1['item_group_name'];  }
		 
																			   
											echo"<tr>";
						               		echo"<td> $count </td> ";
									   	  	echo"<td><a href=edit_item_name.php?id=$item_id>$item_name </a> </td>";
						                 
						                  	echo"<td> $igr_name</td>";
										  	
										  
											  
						                echo"</tr>";

				$count=$count+1;
				} ?>
								
										</tbody>
									</table>
                                            </div>
							
				 <div class="tab-pane" id="tab6">
           	    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
		 <tr ><th><div align="center">अं.न.</div></th><th><div align="center">ग्रुपचे नाव </div></th></tr>
	
										</thead>
										<tbody>
											
	<?php include('connect.php');
	$query_search="select * from item_group_master ";
	$result = mysql_query($query_search) or die("Search query for Item Master  is wrong  ");
	$data=NULL;
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
	}
	
	$count=1;
	$cost=1;
	$total_cost=0;
 	    foreach($data as $ecol)
		{
 
 	 	$item_group_id=$ecol['item_group_id']; 
		
		$item_group_name= $ecol['item_group_name'];
	 	 
		 
		
		 
																			   
											echo"<tr>";
						               		echo"<td> $count </td> ";
									   	  	echo"<td><a href=edit_group_name.php?id=$item_group_id>$item_group_name </a> </td>";
						      echo"</tr>";

				$count=$count+1;
				} ?>
								
										</tbody>
									</table>
                                            </div>			
			  
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					</div>
	 
            <hr>
             <?php include("footer.php");?>
        
              <?php include("footer_information.php");?>
</div>

    </body>

</html>