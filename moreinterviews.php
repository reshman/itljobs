<!doctype html>
<?php session_start(); ?>

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
<style>
    .job{
        border: 1px solid #c1c1c1;
        color: #666666;
        font-family: "Roboto",sans-serif;
        font-size: 13px;
        margin-bottom: 10px;
        outline: medium none;
        padding: 15px 20px;
        transition: all 0.2s ease-in-out 0s;
        width: 100%;
    }
</style>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
                
                 <?php  include("header.php");?>
               
		<!-- End Header -->
        
      <!-- home-section 
			================================================== -->
<!--		<section id="home-section" class="slider2">
	
			<div class="tp-banner-container">
				<div class="tp-banner" >
					<ul>	<!-- SLIDE  -->

							<!--<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide">-->
							<!-- MAIN IMAGE -->
							<!--<img src="images/main-slider-bg.jpg"  alt="slidebg1" data-lazyload="images/main-slider-bg.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">-->
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							
<!--                            <div class="tp-caption medium_thin_grey customin"     
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
							</div>-->

							<!-- LAYER NR. 1 -->
<!--							<div class="tp-caption finewide_medium_white lft tp-resizeme rs-parallaxlevel-0"
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
							</div>-->

							
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

					<!--	</li>
					
					</ul>
					<div class="tp-bannertimer"></div>
				</div>
			</div>
		</section>-->
		<!-- End home section -->
                
		
<!--    <div class="container">
    <div class="row">    
    <div class="search-box">
         <form> 
             <input type="text" name="keyword" id="keyword"  tabindex="1" placeholder="JOB TITLE,KEYWORDS">
             <input type="text" name="location" id="location"  tabindex="1" placeholder="LOCATION">
             <input  type="button" value="Create Alert" id="btn-search">
         </form> 
    </div>
    </div>
    </div>    -->
        <!-- services-offer 
			================================================== -->
		
		<!-- End services-offer section -->
           <section class="page-banner-section">
			<div class="container">
				
			</div>
		</section>
        
       <section class="page-section">
       <div class="container">
       <div class="row">
      
                                 <?php
                                       if(isset($_SESSION['reclog'])){
                                        $user_id  = $_SESSION['reclog'];
                                       }
                                   ?>
           <input type="hidden" name="id" id="id" value="<?php echo $user_id; ?>"/>

       	   <section class="tables-page-section">
            
                
			<div class="container">
                            <div class="interview">
                                <div class="title-section">
                                        <h1>INTERVIEWS</h1>
                                    </div>
                                       <select name="job" class="job">
                                                <option disabled="" selected="">SELECT</option>
                                                <option name="Overseas">Overseas</option>
                                                <option name="India">India</option>
                                                <option name="Direct">Direct</option>
                                       </select></div>
                                   
				<div class="table-responsive">
                                   <div id="dissearch"></div>
                                   <div id="oldtable">
                                    
                                   <!--Replace table here-->
                                </div>

					
				</div>
                            </div>
		</section>


     
       </div>
       </div>
       </section>
               
        
       <!-- footer 
			================================================== -->
        
          <?php  include("footer.php");?>
		
		<!-- End footer -->		
     </div>
        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
        <script type="text/javascript">
    $(document).ready(function(){
        $("select.job").change(function(){
            var jobcat = $(".job option:selected").val();
//            alert(jobcat);
            $.ajax({
                type: "POST",
                url: "moreinterview_list.php",
                data: { jobcat : jobcat } 
            }).done(function(data){
                $("#oldtable").html(data);
//                $("#cat").hide();
            });
        });
    });
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