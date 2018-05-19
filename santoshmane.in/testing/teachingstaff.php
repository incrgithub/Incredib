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
		$('#dataTables-example').dataTable( {
        "order": [[ 0, "asc" ]]
		});
	});
</script>
<script src="assets/js/custom.js"></script>
	
<div class="col-md-12">
	<!-- Advanced Tables -->
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>Sr No</th>
							<th>Name</th>
							<th>Department</th>
							<th>Designation</th>
							<th>Qualification</th>
							<th>Years Of Experience</th>
							<th>Photo</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include('conn.php');
						$fetch_basic_profile="select * from tbl_faculty where type='Teaching' order by id asc";	
						
						$basic_profile_rs= mysqli_query($con,$fetch_basic_profile);
						$i=0;	
						while($basic_profile_row = mysqli_fetch_array($basic_profile_rs)) 
							{
							$id=$basic_profile_row[0];
							$type=$basic_profile_row[1];
							if($type == "Teaching")
								$target_path="faculty/teaching/";
							else if($type == "Non-Teaching")
								$target_path="faculty/nonteaching/";
							else if($type == "Supporting")
								$target_path="faculty/supporting/";	
							++$i;					
							echo "<tr>";
							echo "<td><input type='hidden' name='id' value='$basic_profile_row[0]'>$i</td>";
							echo "<td>".$basic_profile_row[2]."</td>";
							echo "<td>".$basic_profile_row[3]."</td>";
							echo "<td>".$basic_profile_row[4]."</td>";
							echo "<td>".$basic_profile_row[5]."</td>";
							echo "<td>".$basic_profile_row[6]." Years</td>";
							echo "<td align='center'><img src='$target_path/$basic_profile_row[7]' class='myimg'></td>";
							echo "</tr>";
							} 
						?>
					</tbody>
				</table>
			</div>
			
		</div>
	</div>
</div>
