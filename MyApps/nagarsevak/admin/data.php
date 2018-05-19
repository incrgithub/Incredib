<div class="row">
	<div class="col-md-12">
	    <!-- Advanced Tables -->
	    <div class="panel panel-default">
	        <div class="panel-heading">
	             <h3>Pending Complaints</h3>
	        </div>
	        <div class="panel-body">
	            <div class="table-responsive">
	                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                    <thead>
	                        <tr>
	                            <th>&#2340;&#2325;&#2381;&#2352;&#2366;&#2352;&#2342;&#2366;&#2352;&#2366;&#2330;&#2375; &#2344;&#2366;&#2357;</th>
								<th>&#2350;&#2379;&#2348;&#2366;&#2312;&#2354; &#2344;&#2306;&#2348;&#2352;</th>
								<th>&#2340;&#2325;&#2381;&#2352;&#2366;&#2352; &#2357;&#2367;&#2349;&#2366;&#2327;</th>
								<th>&#2346;&#2340;&#2381;&#2340;&#2366;</th>
								<th>&#2340;&#2325;&#2381;&#2352;&#2366;&#2352; &#2340;&#2346;&#2358;&#2368;&#2354;</th>
								<th>Delete</th>
				             </tr>
	                    </thead>
	                    <tbody>
						<?php
						
						include('conn.php');
						$fetch_details="select * from tbl_complaint_dtls";	
						
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
