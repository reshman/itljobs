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

</head>
<body>

		<!-- Header
		    ================================================== -->
                
                 <?php  include("header.php");?>
		
		<!-- End Header -->
        
      <!-- home-section 
			================================================== -->
			<section class="page-banner-section">
			<div class="container">
				
			</div>
		</section>
<section class="services-offer-section">
		<div class="container">
		<div class="services-box ser-box2">
                

               <div class="col-md-12">
						<div class="accordion-box">
                                                    
                                                    <?php
            include 'db.php';
            date_default_timezone_set('Asia/Kolkata');
            $today_date = date('Y-m-d');
            $query = sprintf("SELECT * FROM `jobs` WHERE active='%s'AND job_order!='%s' AND del_status='%s' AND closing_date>='%s' ORDER BY job_order DESC ",1,0,0,$today_date); 
            $result = Db::query($query);
            while ($row = mysql_fetch_array($result)) {    
           ?>
                                                    
							<div class="accord-elem">
								<div class="accord-title">
									<a class="accord-link" href="#"></a>
									<h2><?php echo strtoupper($row['job_listing']);?></h2>
								</div>
								<div class="accord-content" style="display: none;">
									<p><?php echo $row['job_description'];?></p>
									<div id="apply"><a href="itljobs-login.php?jid=<?php echo $row['id']?>"><input type="submit" value="APPLY"></a></div>
                                                                        <div id="view"><a href="itljobs-login.php?jid=<?php echo $row['id']?>"><input type="submit" value="SAVE"></a></div>  
								</div>
							</div>

							

				 <?php
                          }
                                    ?>			

						</div>
					</div>



                </div>
                </div>
		</section>
        
        <!-- footer 
			================================================== -->
        
          <?php  include("footer.php");?>
		
		<!-- End footer -->
		
     </div>
<!-- Revolution slider -->
	<script type="text/javascript">

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
</body>
</html>