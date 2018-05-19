    <meta charset="UTF-8">
<aside id="leftsidebar" class="sidebar">

 <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                          
                            <li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
<!-- Menu -->
<div class="menu">
	<ul class="list">
		<?php
		$role=$_SESSION['role'];
		if($role  ==  "SU") 
		{
			echo "<li class='active'><a href='superadmin.php'> <i class='material-icons'>view_list</i><span>List Of School Admins</span></a> </li>";
			echo "<li class='active'><a href='listchairmanadmin.php'> <i class='material-icons'>view_list</i><span>List Of Chairman Admins</span></a></li>";
			echo "<li class='active'><a href='glcodelist.php'> <i class='material-icons'>view_list</i><span> Account Head </span></a></li>";
		}
		if($role  ==  "CA") 
		{
			echo "<li class='active'><a href='chairmanadmin.php'> <i class='material-icons'>view_list</i><span>Dashboard</span></a> </li>";
			echo "<li class='active'><a href='#'> <i class='material-icons'>view_list</i><span>Add Task</span></a></li>";
			echo "<li class='active'><a href='#'> <i class='material-icons'>library_books</i><span>Reports</span></a></li>";
		}
		if($role  ==  "SA") 
		{	
			echo "<li class='active'><a href='schooldashboard.php'><i class='material-icons'>home</i><span>Dashboard</span></a></li>";
			echo "<li class='active'><a href='schooladmin.php'> <i class='material-icons'>person</i><span>My Profile</span></a> </li>";
			echo "<li class='active'><a href='schooladmin_jama.php'> <i class='material-icons'>add_to_photos</i><span>जमा नोंदणी  </span></a> </li>";
			echo "<li class='active'><a href='schooladmin_nave.php'> <i class='material-icons'>content_cut</i><span>नावे नोंदणी  </span></a> </li>";
			echo "<li class='active'><a href='#'> <i class='material-icons'>forward</i><span>ट्रान्सफर नोंदणी  </span></a> </li>";
			echo "<li class='active'><a href='#'> <i class='material-icons'>business</i><span> बँक नोंदणी  </span></a> </li>";
		}
		echo  "<li class='active'><a href='logout.php'><i class='material-icons'>input</i><span>Logout</span></a></li>";
		?>
	</ul>		
</div>
<!-- #Menu -->
<!-- Footer -->
<div class="legal">
	<div class="copyright">
		&copy; 2016 <a href="javascript:void(0);">School Accounting</a>.
	</div>
	<div class="version">
		<b>Version: </b> 1.0.0
	</div>
</div>
<!-- #Footer -->
</aside>