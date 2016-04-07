<!doctype html>


<html lang="en" class="no-js">
<head>
	<title>ITL JOBS</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,900,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
    <!-- REVOLUTION BANNER CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">


	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
  	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.js"></script>
        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/jquery-ui.js"></script>

</head>
<body>

		<!-- Header
		    ================================================== -->

                 <?php  include("header.php");?>

		<!-- End Header -->

      <!-- home-section
			================================================== -->
        <?php
            $q = trim($_GET['q']);
            $l = trim($_GET['l']);
            $keyword         = isset($q)? trim($_GET['q']) : '';
            $location        = isset($l) ? trim($_GET['l']) : '';
        ?>
<section class="page-banner-section">
			<div class="container">
                <div class="row">
                    <div class="search-box">
                        <form method="GET" action="search-job.php" enctype="multipart/form-data">
                            <input type="text" value="<?php echo $keyword;?>" placeholder="JOB TITLE,KEYWORDS" id="box1" name="q">
                            <input type="text" value="<?php echo $location;?>" placeholder="COUNTRY" id="box2" name="l">
                            <input type="submit" value="SEARCH JOBS" id="btn-search">
                        </form>
                    </div>
                </div>
			</div>
		</section>
	<section class="register-section">
        <div class="container">
       <div class="title-section">
       <h1>SEARCH RESULTS</h1></div>
        <?php
            include 'db.php';

            date_default_timezone_set('Asia/Kolkata');
            $date                = date('Y-m-d h:i:s');

            $jobsArray = array();
            $sqlJobsApplied = sprintf("SELECT job_id FROM jobs_applied WHERE user_id = '%s'", $_SESSION['log']);
            $resultApplied  = Db::query($sqlJobsApplied);
            if (mysql_num_rows($resultApplied) > 0) {
                while ($rowApplied = mysql_fetch_assoc($resultApplied)) {
                    $jobsArray[] = $rowApplied['job_id'];
                }
            }



            if (empty($keyword) && !empty($location)) {
                $query = sprintf("SELECT j.id,j.job_listing, j.job_description, j.job_location, jc.name,j.closing_date,j.active  from jobs j LEFT JOIN  job_categories jc ON j.job_category_id = jc.id  WHERE  j.job_location LIKE '%s'  AND j.closing_date>='%s' AND j.active='%s' AND j.del_status='%s'",'%'.$location.'%',$date,'1','0');
            } else if (empty($location) && !empty($keyword)) {
                $query = sprintf("SELECT j.id,j.job_listing, j.job_description, j.job_location, jc.name,j.closing_date,j.active  from jobs j LEFT JOIN  job_categories jc ON j.job_category_id = jc.id  WHERE jc.name LIKE '%s'  OR j.job_listing LIKE '%s' AND j.closing_date>='%s' AND j.active='%s' AND j.del_status='%s'",'%'.$keyword.'%','%'.$keyword.'%',$date,'1','0');
            } else {
                $query = sprintf("SELECT j.id,j.job_listing, j.job_description, j.job_location, jc.name,j.closing_date,j.active  from jobs j LEFT JOIN  job_categories jc ON j.job_category_id = jc.id  WHERE jc.name LIKE '%s' OR j.job_location LIKE '%s' OR j.job_listing LIKE '%s' AND j.closing_date>='%s' AND j.active='%s' AND j.del_status='%s'",'%'.$keyword.'%','%'.$location.'%','%'.$keyword.'%',$date,'1','0');
            }

            $result = Db::query($query);
            while ($row = mysql_fetch_array($result)) {

           ?>
       <div class="jobs-box">

       <div class="col-md-12">
       <h3><?php echo $row['job_listing'];?></h3>
       <p><?php echo $row['job_description'];?></p>
       <div id="apply"><a href="javascript:void(0)" onclick="apply(<?php echo $row['id']?>, this)"><input type="submit" value="<?php echo (in_array($row['id'], $jobsArray)) ? 'APPLIED' : 'APPLY'?>"></a></div>
       <div id="view"><a href="itljobs-login.php"><input type="submit" value="SAVE"></a></div>
       </div>
       </div>
        <?php
            }
        ?>
       </div>
       </section>

        <!-- footer
			================================================== -->

          <?php  include("footer.php");?>

		<!-- End footer -->

     </div>
<!-- Revolution slider -->
	<script type="text/javascript">

        function apply(job_id, $this) {
            var current = $this;
            $.ajax({
                url:'ajax-jobs-applied.php?jobid='+job_id
            }).done(function(data){
                if (data == 'SUCCESS') {
                    $(current).children().val('APPLIED');
                }
            });
        }

		jQuery(document).ready(function() {

			jQuery('.tp-banner').show().revolution(
			{
				dottedOverlay:"none",
				delay:10000,
				startwidth:1140,
				startheight:450,
				hideThumbs:200,

				thumbWidth:100,
				thumbHeight:50,
				thumbAmount:5,

				navigationType:"bullet",

				touchenabled:"on",
				onHoverStop:"off",

				swipe_velocity: 0.7,
				swipe_min_touches: 1,
				swipe_max_touches: 1,
				drag_block_vertical: false,

										parallax:"mouse",
				parallaxBgFreeze:"on",
				parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

				keyboardNavigation:"off",

				navigationHAlign:"center",
				navigationVAlign:"bottom",
				navigationHOffset:0,
				navigationVOffset:"center",

				shadow:0,

				spinner:"spinner4",

				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,

				shuffle:"off",

				autoHeight:"off",
				forceFullWidth:"off",



				hideThumbsOnMobile:"off",
				hideNavDelayOnMobile:1500,
				hideBulletsOnMobile:"off",
				hideArrowsOnMobile:"off",
				hideThumbsUnderResolution:0,

				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				startWithSlide:0,
				fullScreenOffsetContainer: ".header"
			});

		});	//ready

		//isotope
		jQuery(document).ready(function() {
			var $container = $('.iso-call');
			// init
			$container.isotope({
				// options
				itemSelector: '.services-project, .project-post',
				masonry: {
				    columnWidth: '.default-size'
				}
			});
		});	//ready
	</script>

    <script>
        $(function(){

            $('#box1').autocomplete({

                source: function (request, response) {
                    $.ajax({
                        url: 'searchkeywordindex.php',
                        dataType: "json",
                        data: {
                            query: $('#box1').val(),
                            type: 'search'
                        },
                        success: function (data) {
                            response($.map(data, function (item) {
                                return {
                                    label: item,
                                    value: item
                                }
                            }));
                        }
                    });
                },
                autoFocus: true,
                minLength: 0
            });

            $('#box2').autocomplete({

                source: function (request, response) {
                    $.ajax({
                        url: 'searchlocationindex.php',
                        dataType: "json",
                        data: {
                            query: $('#box2').val(),
                            type: 'search'
                        },
                        success: function (data) {
                            response($.map(data, function (item) {
                                return {
                                    label: item,
                                    value: item
                                }
                            }));
                        }
                    });
                },
                autoFocus: true,
                minLength: 0
            });

        });
    </script>
</body>
</html>