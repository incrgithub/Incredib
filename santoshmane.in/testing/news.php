<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title> <?php include('title.php'); ?></title>

<link href="ControlPanel/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

<script src="ControlPanel/assets/js/bootstrap.min.js"></script>
<script src="ControlPanel/assets/js/dataTables/jquery.dataTables.js"></script>
<script src="ControlPanel/assets/js/dataTables/dataTables.bootstrap.js"></script>
<script>
	$(document).ready(function () {
		$('#dataTables-example').dataTable();
	});
</script>
<script src="assets/js/custom.js"></script>
	
	
	
<div class="col-md-12">
	 <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h3>All News</h3>
							 
                        </div>
						
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Subject</th>
                                            <th>Description</th>
											<th>Photo</th>
                                            <th>Attachment</th>
							            </tr>
                                    </thead>
                                    <tbody>
										<?php
										include('conn.php');
							
										$fetch_basic_profile="select * from tbl_news order by id asc";	
										
										$basic_profile_rs= mysqli_query($con,$fetch_basic_profile);

										while($basic_profile_row = mysqli_fetch_array($basic_profile_rs)) 
											{
											$id=$basic_profile_row[0];
											$images="news/images/";
											$attachments="news/attachments/";
											$image=$basic_profile_row[4];
											$attachment=$basic_profile_row[5];
											echo "<tr>";
											echo "<td>".$basic_profile_row[1]."</td>";
											echo "<td>".$basic_profile_row[2]."</td>";
											echo "<td>".$basic_profile_row[3]."</td>";
											if($image == "") 
												echo "<td></td>";
											else
												echo "<td align='center'><a href='$images/$basic_profile_row[4]' target='_blank'><img src='$images/$basic_profile_row[4]' width='160' height='160'></a></td>";
											if($attachment == "") 
												echo "<td></td>";
											else	
												echo "<td><a href='$attachments/$basic_profile_row[5]' target='_blank'>Download</a></td>";
											
											echo "</tr>";
											} 
										?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
	
</div>
