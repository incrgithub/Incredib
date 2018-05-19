<div class="row">
	<div class="col-md-12">
	    <!-- Advanced Tables -->
	    <div class="panel panel-default">
	        <div class="panel-heading">
	             <h3>Marks Of All Students</h3>
	        </div>
	        <div class="panel-body">
	            <div class="table-responsive">
	                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                    <thead>
	                        <tr>
	                            <th>Mobile No</th>
	                            <th>Marathi</th>
				    <th>English</th>
				    <th>Chemistry</th>
				    <th>Physics</th>
				    <th>Mathematics</th>
				    <th>Biology</th>
				    <th>Geography</th>
				    <th>Test No</th>
				    <th>Edit</th>
				    <th>Delete</th>
	                        </tr>
	                    </thead>
	                    <tbody>
				<?php
				
				include('conn.php');
				$fetch_details="select * from tbl_marks";	
				
				$details_rs= mysql_query($fetch_details);
	
				while($details_row = mysql_fetch_array($details_rs)) 
					{
					$id=$details_row[0];
					echo "<tr>";
					echo "<td>".$details_row[1]."</td>";
					echo "<td>".$details_row[2]."</td>";
					echo "<td>".$details_row[3]."</td>";
					echo "<td>".$details_row[4]."</td>";
					echo "<td>".$details_row[5]."</td>";
					echo "<td>".$details_row[6]."</td>";
					echo "<td>".$details_row[7]."</td>";
					echo "<td>".$details_row[8]."</td>";
					echo "<td>".$details_row[9]."</td>";
					echo "<td><a href='edit.php?id=$id&msg=edit'><img src='images/edit.png'></a></td>";
					echo "<td><a href='results.php?id=$id&msg=delete'><img src='images/cross.png'></a></td>";
					echo "</tr>";
					} 
				?>
	                    </tbody>
	                </table>
	            </div>
	       </div>
	    </div>
	</div>
</div>
