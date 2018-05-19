<html>
     <head>
        <title>Bill</title>
		<style type="text/css">
        .red-outline {
  outline: 1px solid;
}
.style1 {font-size: 24px}
        .style2 {font-size: 18px}
        .style3 {font-size: 16px}
        .style5 {font-size: 16px; font-weight: bold; }
        </style>
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script type="text/javascript">
function confirmPrint() {
    var txt;
    var r = confirm(" Do You Want to Save This Bill ? ");
	var tablename=document.myform.tablename.value;
    if (r == true) {
        txt = "You pressed OK!";
 			window.location.href = "insert_bills.php?table="+tablename;
    } else {
        txt = "You pressed Cancel!";
		window.location.href = "bill_one.php?table="+tablename;
    }
}

</script>
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />
 </head>
    <body onLoad="confirmPrint()">
	<?php
include('connect.php');
error_reporting(0);
session_start();
$t_no=$_SESSION['t_no'];

?>
	
	<form method="post" name="myform"   >
	<input type='hidden' name='tablename' value="<?php echo"$t_no"; ?>">
</form>
    
			 
							
    </body>
 </html>