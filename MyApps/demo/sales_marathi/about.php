<!DOCTYPE html>
<html>
    
    <head>
        <title>About Software</title>
        <!-- Bootstrap -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
       <?php include("header.php");?>
        <div class="container-fluid">
            <div class="row-fluid">
                       <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li >
                            <a href="dash.php"><i class="icon-chevron-right"></i> Control Panel</a>                        </li>
                        <li >
                            <a href="stock_detail.php" title="&#2348;&#2367;&#2354;&#2367;&#2306;&#2327; / &#2325;&#2379;&#2335;&#2375;&#2358;&#2344; &#2346;&#2381;&#2352;&#2367;&#2306;&#2335; &#2325;&#2366;&#2338;&#2366;"><i class="icon-chevron-right"></i> &#2348;&#2367;&#2354;&#2367;&#2306;&#2327; / &#2325;&#2379;&#2335;&#2375;&#2358;&#2344; </a>                        </li>
                        <li>
                            <a href="purchase.php" title="&#2346;&#2381;&#2352;&#2340;&#2381;&#2351;&#2375;&#2325; &#2344;&#2357;&#2368;&#2344; &#2360;&#2381;&#2335;&#2377;&#2325;&#2330;&#2368; &#2319;&#2306;&#2335;&#2381;&#2352;&#2368; &#2325;&#2352;&#2366;"><i class="icon-chevron-right"></i> &#2326;&#2352;&#2375;&#2342;&#2368;</a>                        </li>
                        <li>
                            <a href="sales.php" title=" &#2357;&#2367;&#2325;&#2354;&#2375;&#2354;&#2381;&#2351;&#2366; &#2350;&#2366;&#2354;&#2366;&#2330;&#2368; &#2319;&#2339;&#2381;&#2335;&#2381;&#2352;&#2368; &#2325;&#2352;&#2366;"><i class="icon-chevron-right"></i> &#2357;&#2367;&#2325;&#2381;&#2352;&#2368;</a>                        </li>
                        <li >
                            <a href="customer.php" title=" &#2327;&#2381;&#2352;&#2366;&#2361;&#2325;&#2366;&#2330;&#2366; &#2340;&#2346;&#2358;&#2367;&#2354; &#2313;&#2343;&#2366;&#2352; / &#2332;&#2350;&#2366; &#2344;&#2379;&#2306;&#2342;"><i class="icon-chevron-right"></i> &#2327;&#2381;&#2352;&#2366;&#2361;&#2325; &#2340;&#2346;&#2358;&#2367;&#2354;</a>                        </li>
                        <li>
                            <a href="Company.php" title="&#2325;&#2306;&#2346;&#2344;&#2368; &#2326;&#2352;&#2375;&#2342;&#2368; , &#2346;&#2375;&#2350;&#2375;&#2306;&#2335; &#2360;&#2352;&#2381;&#2357; &#2344;&#2379;&#2306;&#2342; "><i class="icon-chevron-right"></i> &#2325;&#2306;&#2346;&#2344;&#2368; &#2357;&#2381;&#2351;&#2357;&#2361;&#2366;&#2352; </a>                        </li>
                        <li>
                            <a href="bank.php" title=" &#2348;&#2373;&#2306;&#2325; &#2357;&#2381;&#2351;&#2357;&#2361;&#2366;&#2352; &#2340;&#2346;&#2358;&#2367;&#2354;"><i class="icon-chevron-right"></i> &#2348;&#2373;&#2306;&#2325; &#2357;&#2381;&#2351;&#2357;&#2361;&#2366;&#2352;</a>                        </li>
                        <li>
                            <a href="reports.php" title=" &#2360;&#2352;&#2381;&#2357; &#2352;&#2367;&#2346;&#2379;&#2352;&#2381;&#2335; &#2340;&#2351;&#2366;&#2352; &#2325;&#2352;&#2366;"><i class="icon-chevron-right"></i> &#2352;&#2367;&#2346;&#2379;&#2352;&#2381;&#2335; </a>                        </li>
                        <li >
                            <a href="master_control.php"  title="&#2360;&#2306;&#2346;&#2370;&#2352;&#2381;&#2339; &#2360;&#2377;&#2347;&#2381;&#2335;&#2357;&#2375;&#2352; &#2325;&#2306;&#2335;&#2381;&#2352;&#2379;&#2354; &#2325;&#2352;&#2366;"><i class="icon-chevron-right"></i>  &#2350;&#2366;&#2360;&#2381;&#2335;&#2352; &#2360;&#2375;&#2335;&#2367;&#2306;&#2327;</a>                        </li>
                        <li >
                            <a href="sms_page.php" title="SMS Sending Option "><span class="badge badge-important pull-right">Not Active</span> SMS Panel</a>                        </li>
                        <li class="active">
                            <a href="about.php" title=" &#2352;&#2367;&#2350;&#2379;&#2335; &#2321;&#2344;&#2354;&#2366;&#2311;&#2344; &#2361;&#2375;&#2354;&#2381;&#2346;"> &#2321;&#2344;&#2354;&#2366;&#2311;&#2344; &#2361;&#2375;&#2354;&#2381;&#2346;  </a>                        </li>
                        <li>
                      <a href="support.php" title="&#2360;&#2377;&#2347;&#2381;&#2335;&#2357;&#2375;&#2352; &#2348;&#2342;&#2342;&#2381;&#2354; &#2350;&#2366;&#2361;&#2367;&#2340;&#2368;"><span class="badge badge-success pull-right">7588504729</span> &#2360;&#2377;&#2347;&#2381;&#2335;&#2357;&#2375;&#2352; </a>                        </li>
                    </ul>
                </div>
                <!--/span-->
				
                <div class="span9" id="content">
                      <!-- morris stacked chart -->
               
                 
                     
            <hr>
             <?php include("footer.php");?>
        </div>
        <!--/.fluid-container-->
        <link href="vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

        <script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/jquery.uniform.min.js"></script>
        <script src="vendors/chosen.jquery.min.js"></script>
        <script src="vendors/bootstrap-datepicker.js"></script>

        <script src="vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>


        <script src="assets/scripts.js"></script>
        <script>
        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>
    </body>

</html>