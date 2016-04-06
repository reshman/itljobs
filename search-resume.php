<!doctype html>
<?php require 'check_session.php'; ?>

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
                 <?php  include("db.php");
                 session_start();
                 ?>
		
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
       <h1>FILTER RESUMES</h1></div>
        <?php 
                if(isset($_SESSION['reclog'])){
                $user_id      = $_SESSION['reclog'];
               }
               ?>
        
        
        <form id="contact-form" method="POST" action="search.php" enctype="multipart/form-data">
            
          <div class="col-md-12"> 
        <div class="col-md-2">
        <span class="post-title">CATEGORY:</span>    
        </div>
        
       <div class="col-md-9">
        <select name="category" id="category">
         <?php
          $qry = sprintf("SELECT * FROM `job_categories`");
          $res = Db::query($qry);
          while ($row = mysql_fetch_array($res)) {
         ?>
         <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
       
         <?php } ?>
       
        </select>     
        </div>

        </div>
            
        <div class="col-md-12"> 
        <div class="col-md-2">
        <span class="post-title">SUBCATEGORY: </span>    
        </div>
        
       <div class="col-md-9">
       <input name="subcategory" id="subcategory" type="text" placeholder="">    
       </div>
       </div> 


        <div class="col-md-12"> 
        <div class="col-md-2">
        <span class="post-title">EXPERIENCE IN YEAR:</span>    
        </div>
        
       <div class="col-md-9">
        <input name="experience" id="experience" type="text" placeholder="">    
        </div>
        </div> 

<!--
        <div class="col-md-12"> 
        <div class="col-md-2">
        <span class="post-title">SEARCH BY LOCATION:</span>    
        </div>
        
       <div class="col-md-9">
       <textarea name="comment" id="comment" placeholder=""></textarea>    
        </div>

        </div>  
        -->

        <div class="col-md-12"> 
        <div class="col-md-2">
        <span class="post-title">LOCATION:</span>    
        </div>
        
       <div class="col-md-9">
        <input name="location" id="location" type="text" placeholder="">    
        </div>

        </div> 
        
        <div class="col-md-12"> 
        <div class="col-md-2">
        <span class="post-title">QUALIFICATION:</span>    
        </div>
        
       <div class="col-md-9">
        <input name="qualification" id="qualification" type="text" placeholder="">    
        </div>
	
	<!--Dummy input created just for producing the error message....-->
        <div class="col-md-10" style="float:right">
        <input type="radio" name="check" style="width:0px;">
        </div>
        
        </div> 


        
       <div class="col-md-12">
       <div class="col-md-11"> 
       <div id="post-job">
       <input type="submit" value="SEARCH RESUME">
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
<!-- Revolution slider -->
     <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
        <script>

            // When the browser is ready...

            $(function () {

                // Setup form validation on the #register-form element
                
                //Function to check whether all input boxes are empty or not...
                //In case all boxes are empty the function return false and produce an error message without submitting the form...
                $.validator.addMethod("allempty", function() {
                    var flag = 0;
                    if($("form #subcategory").val()==''){
                        if($("form #experience").val()==''){
                            if($("form #location").val()==''){
                                if($("form #qualification").val()==''){
                                    flag=1;
                                }
                            }
                        }
                    }                 
                    
                    if(flag===1){
                        return false;
                    }
                    else{
                        return true;
                    }
                }, 'Fill atleast one input for the Result!');
                
                

                $("#contact-form").validate({

                    // Specify the validation rules

                    rules: {
                        experience: {digits: true},
                        check:"allempty" //Implementing above function

                    },
                    // Specify the validation error messages

                    messages: {
                        experience: "Please enter digits only",

 
                    },

                    submitHandler: function (form) {

                        form.submit();

                    }

                });

            });

        </script>
        
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