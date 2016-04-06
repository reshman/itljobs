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
	<section class="register-section">
        <div class="container">
       <div class="title-section">
       <h1>POST A JOB</h1></div>
        
        <form id="contact-form">
        <div class="col-md-12"> 
        <div class="col-md-2">
        <span class="post-title">COMPANY NAME: </span>    
        </div>
        
       <div class="col-md-9">
       <input name="name" id="name" type="text" placeholder="">    
       </div>
       </div> 


        <div class="col-md-12"> 
        <div class="col-md-2">
        <span class="post-title">JOB TITLE:</span>    
        </div>
        
       <div class="col-md-9">
        <input name="name" id="name" type="text" placeholder="">    
        </div>

        </div> 


        <div class="col-md-12"> 
        <div class="col-md-2">
        <span class="post-title">JOB DESCRIPTION:</span>    
        </div>
        
       <div class="col-md-9">
       <textarea name="comment" id="comment" placeholder=""></textarea>    
        </div>

        </div>  
        

        <div class="col-md-12"> 
        <div class="col-md-2">
        <span class="post-title">CITY / STATE:</span>    
        </div>
        
       <div class="col-md-9">
        <input name="name" id="name" type="text" placeholder="">    
        </div>

        </div> 


       <div class="col-md-12"> 
        <div class="col-md-2">
        <span class="post-title">JOB TYPE:</span>    
        </div>
        
       <div class="col-md-9">
        <select>
            
        <option>FULL TIME</option>
        <option>PART TIME</option>
        <option>TEMPORARY</option>
        <option>CONTRACT</option>
        <option>INTERNSHIP</option>
        <option>FRESHER</option>
        <option>WALKIN</option>
       
        </select>     
        </div>

        </div> 


          <div class="col-md-12"> 
        <div class="col-md-2">
        <span class="post-title">RESUME REQUIREMENT:</span>    
        </div>
        
       <div class="col-md-9">
        <select>
            
        <option>REQUIRED</option>
        <option>NOT REQUIRED</option>
        </select>     
        </div>

        </div>

        <div class="col-md-12"> 
        <div class="col-md-2">
        <span class="post-title">SALARY:</span>    
        </div>
        
       <div class="col-md-7">
       <input name="name" id="name" type="text" placeholder="">      
        </div>
       
       <div class="col-md-2">
       <select>
        <option>PER YEAR</option>    
        <option>PER DAY</option>
        <option>DAILY</option>
       </select>         
        </div>

        </div>

       <div class="col-md-12">
       <div class="col-md-11"> 
       <div id="post-job">
       <input type="submit" value="POST JOB">
       </div>
       </div>
       </div>    
             
        </form>    




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