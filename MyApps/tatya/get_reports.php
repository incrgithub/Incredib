<?php
include('connect.php');
session_start();
if (!isset($_SESSION['member_id'])){
header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <?PHP  include("head_meta.php");?>
 </head>

<body>
       <?php include("header.php");?>

      <?php include("slider.php");?>
        
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"> रिपोर्ट  </h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
			
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
हप्ता तारीख निवडा               
      </div>
                        <div class="panel-body">
                              <form class="form-horizontal" onSubmit="return validatedata(this)" action="set_cash_rpt.php" method="post">
                                      
                                     <div class="control-group">
      <div class="col-md-2">	<label class="control-label" for="typeahead"> हप्ता दिनांक  </label>			</div>
      <div class="col-md-2">     <input type="date" name="start_date"  tabindex="1"  > </div>
 
      <div class="col-md-2">  <button type="submit"  name="save" class="btn btn-info" tabindex="2">रिपोर्ट दाखवा </button>		</div>

                                       </div>
 				 </form> 
						</div>
                     </div>
                    <!-- /.col-lg-4 -->
                </div>
 		  </div>
                      <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
					
 या  <?php session_start(); $sd=date('d-m-Y', strtotime($_SESSION['rpt_start_date']));  echo"$sd"; ?>     तारखेला जमा होणारे हप्ते                   </div>
                        <div class="panel-body">
                            <form class="form-horizontal" onSubmit="return validatedata(this)" action="set_cash_rpt.php" method="post">
     <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
 	<tr bgcolor="pink">
						<td>अ.नं.</td>
						 <td>कर्जदाराचे नाव 	</td> 
 						 <td> मोबाईल 		</td>
						 <td> हप्ता दिनांक 	</td>
	 </tr> 
		<?php
		include('connect.php');
 
 $start_d= $_SESSION['rpt_start_date'];
  

 
	$query_search="select * from personal_book where next_date <= '$start_d' and active='Yes' ";
	$result = mysql_query($query_search) or die("Search query for LOAN MASTER table is wrong  ");
	$data=NULL;
	$srno=1;

error_reporting(0);
	while ($row = mysql_fetch_array($result))
	{
    	$data[] = $row;	
	 }
 
	$count=1;
	$tt_a=0;
	$tt_c=0;
	
 	    foreach($data as $ecol)
		{
		$per_name= $ecol['per_name'];
		$per_add= $ecol['per_add'];
		$per_mobile= $ecol['per_mobile'];


		$loan_date= $ecol['loan_date'];
		$next_date=$ecol['next_date'];
	 	
		$loan_inst= $ecol['loan_inst'];
 		 	   
			   						$loan_dates=date('d-m-Y', strtotime($next_date));

	 
 						            	 echo"<tr>";
						           	     echo"<td> $count </td> ";
 										  echo"<td> $per_name </td>";
 										  echo"<td> $per_mobile   </td>";
 										  echo"<td>  $loan_dates </td>";
      						          		 echo"</tr>";
 			$count=$count+1;
   			}
 			?>                 
						              </tbody>
						            </table >
 									 </form> 
                         </div>
                     </div>
                    <!-- /.col-lg-4 -->
                </div>
			</div>
        </div>
<?PHP  include("footer.php");?>

</body>

</html>
