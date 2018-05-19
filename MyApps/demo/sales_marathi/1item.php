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
        <title>Item Master</title>
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
		function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		return xmlhttp;
    }
		function getState(countryId) {		
		
		var strURL="findCity.php?country="+countryId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statediv').innerHTML=req.responseText;
						document.getElementById('citydiv').innerHTML='<select name="city">'+
						'<option>Select City</option>'+
				        '</select>';						
					} else {
						alert("Problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	
	function getCity(countryId,stateId) {		
		var strURL="findCity.php?country="+countryId+"&state="+stateId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('citydiv').innerHTML=req.responseText;						
					} else {
						alert("Problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
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
                                <div class="pull-left"><h4>  Item Master </h4></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <div id="rootwizard">
                                        <div class="navbar">
                                          <div class="navbar-inner">
                                            <div class="container">
                                              <ul>
											  <li><a href="#tab3" data-toggle="tab"> Add </a></li>
											 </ul>
                                         </div>
                                          </div>
                                        </div>
                                         <div class="tab-content">
                                       
                                            <div class="tab-pane" id="tab3">
											
                           <form class="form-horizontal" action="insert_item.php" onSubmit="return validatedata(this)" method="post" >
                                      <fieldset>
                                        
										
									   <div class="control-group">
                                          <label class="control-label" for="inputError" > Group </label>
                                          <div class="controls">
										  <select id="group_id" name="group_id" onChange="getState(this.value)" tabindex="1">
										  <option value="null">Select Group</option>
<?php $sql1="SELECT item_group_id,item_group_name FROM item_group_master ORDER BY item_group_name"; $result1 =mysql_query($sql1); while ($data1=mysql_fetch_assoc($result1)){?>
		   <option value ="<?php echo $data1['item_group_id'] ?>" ><?php echo $data1['item_group_name'] ?></option>
		           <?php } ?>                                                                                    
                                            </select>
											 <span class="help-inline success">New Group !</span>
										  </div></div>
										 
                                        <div class="control-group">
      									 <label class="control-label" for="typeahead"> Name</label>
                                          <div class="controls" id="statediv">
                                          <select name="item_id" ><option>Select Item</option></select>
                                          </div>
                                      </div>
							  <div class="control-group">
      									 <label class="control-label" for="typeahead"> Stock</label>
                                          <div class="controls">
                                            <input name="item_stock" type="text"     placeholder=" Enter opening Stock"  class="input-large" tabindex="3">
                                          </div>
                                      </div>
									   <div class="control-group">
      									 <label class="control-label" for="typeahead"> Purchase Rate</label>
                                          <div class="controls">
                                            <input name="purchase_rate" type="text"     placeholder=" Enter Purchase Rate"  class="input-large"  tabindex="4">
                                          </div>
                                      </div>
									  
									   <div class="control-group">
      									 <label class="control-label" for="typeahead"> Sales Rate</label>
                                          <div class="controls">
                                            <input name="sale_rate" type="text"     placeholder=" Enter Sales Rate to customer "  class="input-large" tabindex="5" >
                                          </div>
                                      </div>
									  	 <div class="control-group">		
										 <div class="controls">
								 <button type="submit" class="btn btn-info" tabindex="6"> SAVE</button>
                                          <button type="reset" class="btn" tabindex="7">Reset</button>
										  </div>
										  </div> 
                                      </fieldset>
									  </form>
                                            </div>
            
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					</div>
			   
            <hr>
             <?php include("footer.php");?>
        </div>
              <?php include("footer_information.php");?>

    </body>

</html>