<?php include('logincommon.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php include('title.php'); ?></title>
<meta name="description" content="website description" />
<meta name="keywords" content="website keywords, website keywords" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!-- modernizr enables HTML5 elements and feature detects -->
<script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
<script type="text/javascript" src="js/zoom.js"></script>
<script type="text/javascript" src="js/success.js"></script>
<link rel="stylesheet" type="text/css" href="css/success.css" />



</head>
<body>


<?php include('zoom.php'); ?>   
  <div id="main">
   <?php include('header.php'); ?>
    <div id="site_content">
     
      <div class="content">
      <?php include('smarttab-vertical.php'); ?>
       
	</div>
	</div>
	<script type="text/javascript">
		Element.cleanWhitespace('content1');
		init();
	</script>
	
		<!--Tabbed Accordian ends here-->
      </div>
    </div>
    <div id="scroll">
      <a title="Scroll to the top" class="top" href="#"><img src="images/top.png" alt="top" /></a>
    </div>
     
    <?php include('footer.php'); ?>
  </div>
  <!-- javascript at the bottom for fast page loading -->
 
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
      $('.top').click(function() {$('html, body').animate({scrollTop:0}, 'fast'); return false;});
    });
  </script>  
  

</body>
</html>
