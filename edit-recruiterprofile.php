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
         <script type="text/javascript" src="js/countrystate.js"></script>
    
</head>
 

<body onload="document.getElementById('captcha-form').focus()">

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<?php
                session_start();
                    include 'header.php';
                    include 'db.php';
                ?>
        
      <!-- home-section 
			================================================== -->
			
				
<section class="page-banner-section">
			<div class="container">
				
			</div>
		</section>
<!--		<section id="home-section" class="slider2">
	
			<div class="tp-banner-container">
				<div class="tp-banner" >
					<ul>	 SLIDE  

							<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide">
							 MAIN IMAGE 
							<img src="images/main-slider-bg.jpg"  alt="slidebg1" data-lazyload="images/main-slider-bg.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
							 LAYERS 

							 LAYER NR. 1 
							
                                                        <div class="tp-caption medium_thin_grey customin"     
								data-x="300"
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

							 LAYER NR. 1 
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

							
							 LAYER NR. 3 
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
							</div>

							 LAYER NR. 4
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
							</div> 

						</li>
					
					</ul>
					<div class="tp-bannertimer"></div>
				</div>
			</div>
		</section>-->
		<!-- End home section -->
   
        <!-- services-offer 
			================================================== -->
	<section class="register-section">
        <div class="container">
        <div class="title-section">
        <h1>EDIT RECRUITER PROFILE</h1>
		</div>
        <form id="contact-form" method="POST" action="updaterecruiter-profile.php" enctype="multipart/form-data">  
                     <?php
                                            if (isset($_SESSION['editsucc']) != '') {

                                                if ($_SESSION['editsucc'] == '1') {

                                                    ?>

                                                    <div class="alert alert-success alert-dismissable">

                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                        Profile Updated successfully <a href="#" class="alert-link"></a>.

                                                    </div>

                                                    <?php

                                                } 
                                                else if($_SESSION['editsucc'] == '3') { ?>
                                                     
                                                   <div class="alert alert-danger alert-dismissable">

                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                        Already Registered Email <a href="#" class="alert-link"></a>.

                                                    </div>
                                         
                                       <?php
                                            }
                                            }

                                            unset($_SESSION['editsucc']);     
                                            ?>
                                    <?php
                                        if(isset($_SESSION['reclog'])){
                                         $user_id  = $_SESSION['reclog'];
                                        }
                                        
                                        $query = sprintf("SELECT e.user_id,e.company_name, e.designation,e.mobile,e.enquiry_requirement,u.name,u.email  from employers e LEFT JOIN  users u ON e.user_id = u.id  WHERE  e.user_id='%s' AND del_status='%s'",$user_id,'0');  
                                          $result = Db::query($query);
                                          $row=mysql_fetch_array($result);
                                  ?>                                   

        <div class="col-md-6">
        <input  id="name" name="name" type="text" value="<?php echo $row['name'];?>" placeholder="NAME ">    
        
        </div>
        <div class="col-md-6">
        <input  id="email" name="email" type="text" value="<?php echo $row['email'];?>" placeholder="EMAIL ">    
        
        </div>
        <div class="col-md-6">
        <input id="companyname" name="companyname" value="<?php echo $row['company_name'];?>" type="text" placeholder="COMPANY NAME ">    
        
        </div>
        <div class="col-md-6">
        <input  id="designation" name="designation" value="<?php echo $row['designation'];?>" type="text" placeholder="DESIGNATION ">    
        <div id="countries"></div>
        </div>
        <div class="col-md-6">
         <select id="country" name="country"></select>
            <script language="javascript">
              populateCountries("country");
            </script>
        
        </div>
            <div class="col-md-6">
        <input id="moblie" name="mobile" type="text" value="<?php echo $row['mobile'];?>" placeholder="MOBILE ">    
        
        </div>
         <div class="col-md-12">
             <textarea name="enquiry" id="enquiry" type="text" placeholder="ENQUIRY/REQUIREMENT"><?php echo $row['enquiry_requirement'];?></textarea>  
        
        </div>
         <input type="hidden" name="id" value="<?php echo $user_id; ?>"/>
         <div class="col-md-6">
           
                <input type="submit" value="UPDATE" >
 
         </div>
            
        </form>   
           
        </div>
            
            
		</section>
        
        
        
		<!-- End services-offer section -->
        
		<section class="news-section">
			<div class="container">
		     <div class="title-section">
					<h1>OUR CLIENTS</h1>
				</div>
				<div class="news-box">
					<div class="arrow-box">
						<a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
						<a href="#" class="next"><i class="fa fa-angle-right"></i></a>
					</div>
					
					<div id="owl-demo" class="owl-carousel">
						<div class="item news-post">
							<img src="images/itl-clients-1.jpg" alt="">
							
						
						</div>
                        
                        <div class="item news-post">
							<img src="images/itl-clients-2.jpg" alt="">
							
						
						</div>
						
						<div class="item news-post">
							<img src="images/itl-clients-3.jpg" alt="">
							
						
						</div>
                        
                        <div class="item news-post">
							<img src="images/itl-clients-4.jpg" alt="">
							
						
						</div>
                        
                        <div class="item news-post">
							<img src="images/itl-clients-5.jpg" alt="">
							
						
						</div>
                        
                        <div class="item news-post">
							<img src="images/itl-clients-6.jpg" alt="">
							
						
						</div>
                        
                        <div class="item news-post">
							<img src="images/itl-clients-7.jpg" alt="">
							
						
						</div>
                        
                        <div class="item news-post">
							<img src="images/itl-clients-8.jpg" alt="">
							
						
						</div>
                        
                        <div class="item news-post">
							<img src="images/itl-clients-9.jpg" alt="">
							
						
						</div>
                        
                        <div class="item news-post">
							<img src="images/itl-clients-10.jpg" alt="">
							
						
						</div>
					
					</div>
				</div>

			</div>
		</section>
        
        <!-- footer 
			================================================== -->
		<?php
                    include 'footer.php';
                ?>
		
     </div>

   
        <script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>

        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
       
        
        <script>

            // When the browser is ready...

            $(function () {

                // Setup form validation on the #register-form element

                $("#contact-form").validate({

                    // Specify the validation rules

                    rules: {
                        name: "required",
                        companyname: "required",
                        designation: "required",
                        country: "required",
                        mobile:{
                        required: true,
                        minlength: 10, //or look at the additional-methods.js to see available phone validations
                        maxlength: 15
                        },
                        enquiry: "required",
                        email: {required: true,email: true}
                    },
                    // Specify the validation error messages

                    messages: {
                        name: "Please enter name",
                        companyname: "Please enter company name",
                        designation: "Please enter designation",
                        country: "Please enter country",
                         mobile:{
                        required: "Please enter your mobile number.",
                        minlength: "Enter valid contact number",
                        maxlength: "Enter valid contact number"
                        },
                        enquiry: "Please enter enquiry",
                        email: {required: "Please enter email",email: "Please enter valid email"}
                    },

                    submitHandler: function (form) {

                        form.submit();

                    }

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