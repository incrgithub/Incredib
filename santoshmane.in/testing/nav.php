<!--Start Header-->
<header id="header">
    <div class="col-sm-12">
        <div id="logo" align="center">
            <h1><a href="index.php"><img src="images/logo.png"/></a></h1>
        </div>
    </div>

    <!-- Navigation
    ================================================== -->

    <div class="navbar navbar-default navbar-static-top col-sm-12" role="navigation">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
					<?php
					  $pageName = basename($_SERVER['PHP_SELF']);
					  if($pageName == "index.php")
							{
							echo "<li class='active'><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Introduction To College</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Courses Offered</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='jrcollege.php'><img src='images/arrow.png' border='0'>Junior College</a></li>";
							echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Departments</a>";
							echo "<ul class='dropdown-menu'>";
								echo "<li><a href='#'>Science</a>";
									echo "<ul class='dropdown-menu'>";
									echo "<li><a href='chemistry.php'><img src='images/arrow.png' border='0'>Chemistry</a></li>";
									echo "<li><a href='physics.php'><img src='images/arrow.png' border='0'>Physics</a></li>";
									echo "<li><a href='mathematics.php'><img src='images/arrow.png' border='0'>Mathematics</a></li>";
									echo "<li><a href='biology.php'><img src='images/arrow.png' border='0'>Biology</a></li>";
									echo "</ul>";	
								echo "</li>";
							echo "</ul>";	
							echo "</li>";	
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
									echo "<li><a href='career.php'><img src='images/arrow.png' border='0'>Career Opportunities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Infrastructure</a>";
							echo "<ul class='dropdown-menu'>";
								echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
								echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
								echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
								echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
								echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";
								echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";
							echo "</ul>";
							echo "</li>";	
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}
					 if($pageName == "intro.php" || $pageName == "aboutdkkkp.php" || $pageName == "presidentsmessage.php" || $pageName == "secretarymessage.php" || $pageName == "ceomessage.php" || $pageName == "principalmessage.php" || $pageName == "missionvision.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li class='active'><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Introduction To College</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Courses Offered</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='jrcollege.php'><img src='images/arrow.png' border='0'>Junior College</a></li>";
							echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Departments</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='#'>Science</a>";
										echo "<ul class='dropdown-menu'>";
										echo "<li><a href='chemistry.php'><img src='images/arrow.png' border='0'>Chemistry</a></li>";
										echo "<li><a href='physics.php'><img src='images/arrow.png' border='0'>Physics</a></li>";
										echo "<li><a href='mathematics.php'><img src='images/arrow.png' border='0'>Mathematics</a></li>";
										echo "<li><a href='biology.php'><img src='images/arrow.png' border='0'>Biology</a></li>";
										echo "</ul>";	
							echo "</li>";
							echo "</ul>";	
							echo "</li>";	
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
									echo "<li><a href='career.php'><img src='images/arrow.png' border='0'>Career Opportunities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Infrastructure</a>";
							echo "<ul class='dropdown-menu'>";
								echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
								echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
								echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
								echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
								echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";
								echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";
							echo "</ul>";
							echo "</li>";	
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}
						 if($pageName == "jrcollege.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Introduction To College</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li class='active'><a href='#'>Courses Offered</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='jrcollege.php'><img src='images/arrow.png' border='0'>Junior College</a></li>";
							echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Departments</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='#'>Science</a>";
										echo "<ul class='dropdown-menu'>";
										echo "<li><a href='chemistry.php'><img src='images/arrow.png' border='0'>Chemistry</a></li>";
										echo "<li><a href='physics.php'><img src='images/arrow.png' border='0'>Physics</a></li>";
										echo "<li><a href='mathematics.php'><img src='images/arrow.png' border='0'>Mathematics</a></li>";
										echo "<li><a href='biology.php'><img src='images/arrow.png' border='0'>Biology</a></li>";
										echo "</ul>";	
							echo "</li>";
							echo "</ul>";	
							echo "</li>";	
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
									echo "<li><a href='career.php'><img src='images/arrow.png' border='0'>Career Opportunities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Infrastructure</a>";
							echo "<ul class='dropdown-menu'>";
								echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
								echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
								echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
								echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
								echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";
								echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";		
							echo "</ul>";
							echo "</li>";	
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}
						 if($pageName == "chemistry.php" || $pageName == "physics.php" || $pageName == "mathematics.php" || $pageName == "biology.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Introduction To College</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Courses Offered</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='jrcollege.php'><img src='images/arrow.png' border='0'>Junior College</a></li>";
							echo "</ul>";
							echo "</li>";
							echo "<li class='active'><a href='#'>Departments</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='#'>Science</a>";
										echo "<ul class='dropdown-menu'>";
										echo "<li><a href='chemistry.php'><img src='images/arrow.png' border='0'>Chemistry</a></li>";
										echo "<li><a href='physics.php'><img src='images/arrow.png' border='0'>Physics</a></li>";
										echo "<li><a href='mathematics.php'><img src='images/arrow.png' border='0'>Mathematics</a></li>";
										echo "<li><a href='biology.php'><img src='images/arrow.png' border='0'>Biology</a></li>";
										echo "</ul>";	
							echo "</li>";
							echo "</ul>";	
							echo "</li>";	
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
									echo "<li><a href='career.php'><img src='images/arrow.png' border='0'>Career Opportunities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Infrastructure</a>";
							echo "<ul class='dropdown-menu'>";
								echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
								echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
								echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
								echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
								echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";
								echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";
							echo "</ul>";
							echo "</li>";	
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}	
						if($pageName == "teaching.php" || $pageName == "nonteaching.php" || $pageName == "supporting.php"  || $pageName == "career.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Introduction To College</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Courses Offered</a>";
							echo "<ul class='dropdown-menu'>";
							echo "<li><a href='jrcollege.php'><img src='images/arrow.png' border='0'>Junior College</a></li>";
							echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Departments</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='#'>Science</a>";
										echo "<ul class='dropdown-menu'>";
										echo "<li><a href='chemistry.php'><img src='images/arrow.png' border='0'>Chemistry</a></li>";
										echo "<li><a href='physics.php'><img src='images/arrow.png' border='0'>Physics</a></li>";
										echo "<li><a href='mathematics.php'><img src='images/arrow.png' border='0'>Mathematics</a></li>";
										echo "<li><a href='biology.php'><img src='images/arrow.png' border='0'>Biology</a></li>";
										echo "</ul>";	
							echo "</li>";
							echo "</ul>";	
							echo "</li>";	
							echo "<li class='active'><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
									echo "<li><a href='career.php'><img src='images/arrow.png' border='0'>Career Opportunities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Infrastructure</a>";
							echo "<ul class='dropdown-menu'>";
							      	echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
								echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
								echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
								echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
								echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";
								echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>"; 		
							echo "</ul>";
							echo "</li>";	
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}	
						if($pageName == "admissionprocedure.php" || $pageName == "brochure.php" )
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Introduction To College</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Courses Offered</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='jrcollege.php'><img src='images/arrow.png' border='0'>Junior College</a></li>";
							echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Departments</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='#'>Science</a>";
										echo "<ul class='dropdown-menu'>";
										echo "<li><a href='chemistry.php'><img src='images/arrow.png' border='0'>Chemistry</a></li>";
										echo "<li><a href='physics.php'><img src='images/arrow.png' border='0'>Physics</a></li>";
										echo "<li><a href='mathematics.php'><img src='images/arrow.png' border='0'>Mathematics</a></li>";
										echo "<li><a href='biology.php'><img src='images/arrow.png' border='0'>Biology</a></li>";
										echo "</ul>";	
							echo "</li>";
							echo "</ul>";	
							echo "</li>";	
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
									echo "<li><a href='career.php'><img src='images/arrow.png' border='0'>Career Opportunities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li class='active'><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Infrastructure</a>";
							echo "<ul class='dropdown-menu'>";
								echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
								echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
								echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
								echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
								echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";
								echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							echo "</ul>";
							echo "</li>";	
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}
							if($pageName == "labs.php" || $pageName == "library.php" || $pageName == "boyshostel.php" || $pageName == "guesthouse.php" || $pageName == "canteen.php" || $pageName == "transport.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Introduction To College</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Courses Offered</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='jrcollege.php'><img src='images/arrow.png' border='0'>Junior College</a></li>";
							echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Departments</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='#'>Science</a>";
										echo "<ul class='dropdown-menu'>";
										echo "<li><a href='chemistry.php'><img src='images/arrow.png' border='0'>Chemistry</a></li>";
										echo "<li><a href='physics.php'><img src='images/arrow.png' border='0'>Physics</a></li>";
										echo "<li><a href='mathematics.php'><img src='images/arrow.png' border='0'>Mathematics</a></li>";
										echo "<li><a href='biology.php'><img src='images/arrow.png' border='0'>Biology</a></li>";
										echo "</ul>";	
							echo "</li>";
							echo "</ul>";	
							echo "</li>";	
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
									echo "<li><a href='career.php'><img src='images/arrow.png' border='0'>Career Opportunities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li class='active'><a href='#'>Infrastructure</a>";
							echo "<ul class='dropdown-menu'>";
								echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
								echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
								echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
								echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
								echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";
								echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";
							echo "</ul>";
							echo "</li>";	
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}			
						 if($pageName == "gallery.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Introduction To College</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Courses Offered</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='jrcollege.php'><img src='images/arrow.png' border='0'>Junior College</a></li>";
							echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Departments</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='#'>Science</a>";
										echo "<ul class='dropdown-menu'>";
										echo "<li><a href='chemistry.php'><img src='images/arrow.png' border='0'>Chemistry</a></li>";
										echo "<li><a href='physics.php'><img src='images/arrow.png' border='0'>Physics</a></li>";
										echo "<li><a href='mathematics.php'><img src='images/arrow.png' border='0'>Mathematics</a></li>";
										echo "<li><a href='biology.php'><img src='images/arrow.png' border='0'>Biology</a></li>";
										echo "</ul>";	
							echo "</li>";
							echo "</ul>";	
							echo "</li>";	
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
									echo "<li><a href='career.php'><img src='images/arrow.png' border='0'>Career Opportunities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Infrastructure</a>";
							echo "<ul class='dropdown-menu'>";
								echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
								echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
								echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
								echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
								echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";
								echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							echo "</ul>";
							echo "</li>";	
							echo "<li class='active'><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}	
						 if($pageName == "contactus.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Introduction To College</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Courses Offered</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='jrcollege.php'><img src='images/arrow.png' border='0'>Junior College</a></li>";
							echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Departments</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='#'>Science</a>";
										echo "<ul class='dropdown-menu'>";
										echo "<li><a href='chemistry.php'><img src='images/arrow.png' border='0'>Chemistry</a></li>";
										echo "<li><a href='physics.php'><img src='images/arrow.png' border='0'>Physics</a></li>";
										echo "<li><a href='mathematics.php'><img src='images/arrow.png' border='0'>Mathematics</a></li>";
										echo "<li><a href='biology.php'><img src='images/arrow.png' border='0'>Biology</a></li>";
										echo "</ul>";	
							echo "</li>";
							echo "</ul>";	
							echo "</li>";	
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
									echo "<li><a href='career.php'><img src='images/arrow.png' border='0'>Career Opportunities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Infrastructure</a>";
							echo "<ul class='dropdown-menu'>";
								echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
								echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
								echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
								echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
								echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";
								echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							echo "</ul>";
							echo "</li>";	
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li class='active'><a href='contactus.php'>Contact Us</a></li>";
							}	
						 if($pageName == "allnews.php")
							{
							echo "<li><a href='index.php'>Home</a></li>";
							echo "<li><a href='#'>About Us</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>Introduction To College</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>About DKKKP</a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>Presidents Message</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>Secretary Message</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>CEO Message</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>Principal Message</a></li>";
									echo "<li><a href='missionvision.php'><img src='images/arrow.png' border='0'>Mision and Vision</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Courses Offered</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='jrcollege.php'><img src='images/arrow.png' border='0'>Junior College</a></li>";
							echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Departments</a>";
							echo "<ul class='dropdown-menu'>";
									echo "<li><a href='#'>Science</a>";
										echo "<ul class='dropdown-menu'>";
										echo "<li><a href='chemistry.php'><img src='images/arrow.png' border='0'>Chemistry</a></li>";
										echo "<li><a href='physics.php'><img src='images/arrow.png' border='0'>Physics</a></li>";
										echo "<li><a href='mathematics.php'><img src='images/arrow.png' border='0'>Mathematics</a></li>";
										echo "<li><a href='biology.php'><img src='images/arrow.png' border='0'>Biology</a></li>";
										echo "</ul>";	
							echo "</li>";
							echo "</ul>";	
							echo "</li>";	
							echo "<li><a href='#'>Faculty</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>Teaching Staff</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>Non Teaching  Staff</a></li>";
									echo "<li><a href='supporting.php'><img src='images/arrow.png' border='0'>Supporting Staff</a></li>";
									echo "<li><a href='career.php'><img src='images/arrow.png' border='0'>Career Opportunities</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Admissions</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissionprocedure.php'><img src='images/arrow.png' border='0'>Admission Procedure</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>Brochure</a></li>";
								echo "</ul>";
							echo "</li>";
							echo "<li><a href='#'>Infrastructure</a>";
							echo "<ul class='dropdown-menu'>";
								echo "<li><a href='labs.php'><img src='images/arrow.png' border='0'>Laboratories</a></li>";
								echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>Library</a></li>";
								echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>Boys Hostel</a></li>";
								echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>Guest House</a></li>";
								echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>Transport</a></li>";
								echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>Mess and Canteen</a></li>";	
							echo "</ul>";
							echo "</li>";	
							echo "<li><a href='gallery.php'>Photo Gallery</a></li>";
							echo "<li><a href='contactus.php'>Contact Us</a></li>";
							}		
					?>		
				</ul>
			</div>	
		</div>	
	</div>	
</div>			
</header>	