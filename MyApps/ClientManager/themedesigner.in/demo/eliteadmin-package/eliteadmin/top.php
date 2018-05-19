  <nav class="navbar navbar-default navbar-static-top m-b-0">
     <div class="navbar-header">  <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
       <div class="top-left-part"><a class="logo" href="dashboard.php"><b><img src="images/logo_1.png" alt="home"/><span class="hidden-xs"><img src="images/logo.png" alt="home" /></span></b></a></div>
       <ul class="nav navbar-top-links navbar-left hidden-xs">
         <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
         <li>
			<h2><font color="white">Client Project Manager</font></h2>
         </li>
       </ul>
       <ul class="nav navbar-top-links navbar-right pull-right">
          
         <li class="dropdown">
			<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
			<img src="../plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle" />
			<b class="hidden-xs"><?php $_SESSION['name']; ?></b></a>
           <ul class="dropdown-menu dropdown-user animated flipInY">
            <!-- <li><a href="#"><i class="ti-user"></i> My Profile </a></li>-->
             <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout </a></li>
           </ul>
		 </li>
         <li class="right-side-toggle">  <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
		</ul>
     </div>
   </nav>