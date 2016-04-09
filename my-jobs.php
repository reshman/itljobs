<!doctype html>
<?php include 'check_session_js.php'; ?>

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
    <link rel="stylesheet" type="text/css" href="css/blockui.css" media="screen">

	
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
    <script type="text/javascript" src="js/jquery.blockui.js"></script>

</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
                
                 <?php  include("header.php");
                    session_start();
                    $id = $_SESSION['log'];
//                    $id = 2;
                 ?>
		
		<!-- End Header -->
        
      <!-- home-section 
			================================================== -->
		<section id="home-section" class="slider2">
	
			<div class="tp-banner-container">
				<div class="tp-banner" >
					<ul>	<!-- SLIDE  -->

							<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide">
							<!-- MAIN IMAGE -->
							<img src="images/main-slider-bg.jpg"  alt="slidebg1" data-lazyload="images/main-slider-bg.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							
                            <div class="tp-caption medium_thin_grey customin"     
								data-x="310"
								data-y="160" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="1000"
								data-start="1200"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">NEED NOT SEARCH ... JUST CHOOSE</span>
							</div>

							<!-- LAYER NR. 1 -->
							<div class="tp-caption finewide_medium_white lft tp-resizeme rs-parallaxlevel-0"
								data-x="300"
								data-y="230" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="1000"
								data-start="1600"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">Let's get to work
							</div>

							
							<!-- LAYER NR. 3 
							<div class="tp-caption lfb tp-resizeme rs-parallaxlevel-0"
								data-x="0"
								data-y="320" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="1000"
								data-start="2500"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-linktoslide="next"
								style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='trans-btn'>LOGIN</a>
							</div>-->

							<!-- LAYER NR. 4
							<div class="tp-caption lfr tp-resizeme rs-parallaxlevel-0"
								data-x="180"
								data-y="320" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="1000"
								data-start="2600"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-linktoslide="next"
								style="z-index: 11; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#' class='trans-btn2'>REGISTER</a>
							</div> -->

						</li>
					
					</ul>
					<div class="tp-bannertimer"></div>
				</div>
			</div>
		</section>
		<!-- End home section -->
    <!--<div class="container">
    <div class="row">    
    <div class="search-box">
 <form> 
  <input type="text" placeholder="JOB TITLE,KEYWORDS" id="box1">
  <input type="text" placeholder="COUNTRY" id="box2">
   <input type="submit" value="SEARCH JOBS" id="btn-search">
   </form> 
    </div>
    </div>
    </div> -->   
        <!-- services-offer 
			================================================== -->
		<section class="services-offer-section">
		<div class="container">
		<div class="services-box ser-box2">
                

               <div class="col-md-12">
						<div class="accordion-box">
							<div class="accord-elem">
								<div class="accord-title">
									<a class="accord-link" href="#"></a>
									<h2>SAVED</h2>
								</div>
                                                            <?php
                                                            include 'db.php';
                                                            $query = sprintf("SELECT j.job_listing, j.job_description,j.id, j.experience,j.job_location,j.closing_date  FROM jobs j JOIN  jobs_saved js ON j.id = js.job_id WHERE js.user_id = '%s' AND js.del_status = '%s'", $id, 0);
                                                            $result = Db::query($query);
                                                            if(mysql_num_rows($result) > 0){
                                                            while ($row = mysql_fetch_array($result)) {
                                                             ?>   
                                                            <div class="accord-content" style="display: none;" id="accord-saved-<?php echo $row['id'];?>">
                                                                <h4><?php echo $row['job_listing'];?></h4>
                                                                <p><?php echo $row['job_description'];?></p>
                                                                <p><span style="color:#6495ED">Experience : </span><?php echo $row['experience'];?> years,
                                                                <span style="color:#6495ED">Location : </span><?php echo $row['job_location'];?>,
                                                                <span style="color:#6495ED">Closing date : </span><?php echo $row['closing_date'];?></p> 
                                                                <input type="hidden" name="bid" id="bid" value="<?php echo $row['id'];?>"/>
                                                            
                                                                 <div class="dropdown">
                                                                    <button onclick="apply(<?php echo $row['id'];?>, this)" type="button">
                                                                     Apply Now
                                                                      <!--<span class="caret"></span>-->
                                                                    </button>
                                                                    <!--<ul class="dropdown-menu" aria-labelledby="dLabel">
                                                                        <li><a id="applied"> Move to Applied</a></li>
                                                                        <li><a id="archived"> Move to Archived</a></li>
                                                                    </ul>-->
                                                                  </div></div>
                                                            <?php
                                                            } }else{ ?>
                                                            <div class="accord-content" style="display: none;">
                                                            <p>Save jobs you are interested in by using the "Save" button on search results or in Visited. </p>
                                                                </div>
                                                            <?php }
                                                            ?>
							</div>

							<div class="accord-elem">
								<div class="accord-title">
									<a class="accord-link" href="#"></a>
									<h2>APPLIED</h2>
								</div>
                                    <div id="applied-affix">
                                        <?php
                                        $qry = sprintf("SELECT j.id, j.job_description, j.experience, j.closing_date, j.job_listing FROM jobs j JOIN `jobs_applied` ja ON j.id = ja.job_id WHERE ja.user_id = '%s' AND ja.del_status = '%s'", $id, 0);
                                        $res = Db::query($qry);
                                        if(mysql_num_rows($res) > 0){
                                        while ($rw = mysql_fetch_array($res)) {
                                         ?>
                                            <div class="accord-content" style="display: none;">
                                                <h4><?php echo $rw['job_listing'];?></h4>
                                                <p><?php echo $rw['job_description'];?></p>
                                                <p><span style="color:#6495ED">Experience : </span><?php echo $rw['experience'];?> years,
                                                <span style="color:#6495ED">Location : </span><?php echo $rw['job_location'];?>,
                                                <span style="color:#6495ED">Closing date : </span><?php echo $rw['closing_date'];?></p>
                                                 <input type="hidden" name="jbid" id="jbid" value="<?php echo $rw['id'];?>"/>

                                            </div>
                                        <?php
                                        } }else{ ?>
                                        <div class="accord-content" style="display: none;">
                                        <p>Track all of your job applications:</p>
                                        <p><ul>
                                            <li> When you apply to jobs posted on Indeed, they will appear here automatically </li>
                                            <li> Organize jobs you've applied to on other websites by saving them, then choosing "Move to applied" in Saved </li>
                                        </ul> </p>
                                        </div>
                                            <?php
                                            }
                                        ?>
                                    </div>
							</div>

						<!--	<div class="accord-elem">
								<div class="accord-title">
									<a class="accord-link" href="#"></a>
									<h2>INTERVIEWING</h2>
								</div>
                                                               
								<div class="accord-content" style="">
                                                                    <p>Move your jobs to Interviewing after you've scheduled an interview.</p>
								</div>
							</div> -->

							<div class="accord-elem">
								<div class="accord-title">
									<a class="accord-link" href="#"></a>
									<h2>OFFERED</h2>
								</div>
                                                             <?php
                                                                //get job category resume
                                                                $sqlResume     = sprintf("SELECT job_category_id FROM resume WHERE user_id = '%s'", $id);
                                                                $resultResume  = Db::query($sqlResume);
                                                                $resumeArray   = mysql_fetch_assoc($resultResume);
                                                                $jobCategoryId = $resumeArray['job_category_id'];

                                                                 $jobsArray     = array();
                                                                 $jobsSaveArray = array();
                                                                 $sqlJobsApplied = sprintf("SELECT job_id FROM jobs_applied WHERE user_id = '%s' AND del_status = '%s'", $_SESSION['log'], 0);
                                                                 $resultApplied  = Db::query($sqlJobsApplied);
                                                                 if (mysql_num_rows($resultApplied) > 0) {
                                                                     while ($rowApplied = mysql_fetch_assoc($resultApplied)) {
                                                                         $jobsArray[] = $rowApplied['job_id'];
                                                                     }
                                                                 }

                                                             $jobsStr = implode("','", $jobsArray);


                                                             $qryOffer = sprintf("SELECT * FROM jobs WHERE active='%s' AND job_category_id = '%s' AND  id NOT IN('%s') ORDER BY job_order DESC", 1, $jobCategoryId, $jobsStr);
                                                             $resOffer = Db::query($qryOffer);
                                                                if(mysql_num_rows($resOffer) > 0){
                                                                while ($rwofr = mysql_fetch_array($resOffer)) {
                                                                 ?>
								<div class="accord-content" style="" id="accord-offered-<?php echo $rwofr['id'];?>">
								<h4><?php echo $rwofr['job_listing'];?></h4>
                                                                <p><?php echo $rwofr['job_description'];?></p>
                                                                <p><span style="color:#6495ED">Experience : </span><?php echo $rwofr['experience'];?> years,
                                                                <span style="color:#6495ED">Location : </span><?php echo $rwofr['job_location'];?>,
                                                                <span style="color:#6495ED">Closing date : </span><?php echo $rwofr['closing_date'];?></p>
                                                                <input type="submit" value="Apply Now" onclick="offered(<?php echo $rwofr['id'];?>, this)"/>
								</div>
                                                            <?php
                                                            } }else{ ?>
                                                                <div class="accord-content" style="display: none;">
                                                                <p>Keep track of offers you've received by moving your jobs to Offered.</p>
                                                                </div>
                                                                <?php
                                                                }
                                                            ?>
							</div>

                                                      
						</div>
					</div>

                </div>
                </div>
		</section>
		<!-- End services-offer section -->
        
        
        <!-- footer 
			================================================== -->
        
          <?php  include("footer.php");?>
		
		<!-- End footer -->
		
     </div>
        <script>

            function apply(job_id, $this) {
                var current = $this;
                /*$.blockUI({ css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                },
                    message:'Loading'
                });*/
                $.ajax({
                    url:'ajax-job-saved-appiled.php?jobid='+job_id
                }).done(function(data) {
                    //$.unblockUI;
                    $('#applied-affix').append(data);
                    $('#accord-saved-'+job_id).empty();
                    $.growlUI('SAVED JOBS', 'Job Applied Successfully');
                    //if (data == 'SUCCESS') {

                        //$.unblockUI;

                        //viewDiv = $(current).parent().next();
                        //$(viewDiv).hide();
                        //$(current).children().val('APPLIED');
                    //}
                });
            }

            function offered(jobid, $this) {
                $.ajax({
                    url:'ajax-job-offered.php?jobid='+jobid
                }).done(function(data){
                    $('#accord-offered-'+jobid).remove();
                    $('#applied-affix').append(data);
                    $.growlUI('OFFERED JOBS', 'Offered Job Applied Successfully');
                });
            }


    </script>

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