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

        <link href="admin/css/datepicker.css" rel="stylesheet" />
        <link href="admin/css/bootstrap-datetimepicker.min.css" rel="stylesheet" /> 
	
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
	
	  
         <script src="admin/js/datepick.js"></script>
         <script src="admin/js/bootstrap-datepicker.js"></script>
         <script src="admin/js/bootstrap-datetimepicker.min.js"></script>

</head>
<body>

		<!-- Header
		    ================================================== -->
                
                 <?php
                    include 'header.php';
                    include 'db.php';
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
       <h1>POST A JOB</h1></div>
              <?php 
                if(isset($_SESSION['reclog'])){
                $user_id      = $_SESSION['reclog'];
               }
               ?>
        
        <form id="contact-form" method="POST" action="recruiter-postjobprocess.php" enctype="multipart/form-data">  
            <?php
                                            if (isset($_SESSION['regsucc']) != '') {

                                                if ($_SESSION['regsucc'] == '1') {

                                                    ?>

                                                    <div class="alert alert-success alert-dismissable">

                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                        Job Added successfully <a href="#" class="alert-link"></a>.

                                                    </div>

                                                    <?php

                                                } 
                                                else if($_SESSION['regsucc'] == '2') { ?>
                                                     
                                                   <div class="alert alert-danger alert-dismissable">

                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                        Failed <a href="#" class="alert-link"></a>.

                                                    </div>
                                         
                                       <?php
                                                 }
                                            }

                                            unset($_SESSION['regsucc']);     
                              ?>   
            
        <div class="col-md-12"> 
        <div class="col-md-2">
        <span class="post-title">COMPANY NAME: </span>    
        </div>
        
       <div class="col-md-9">
       <input name="companyname" id="companyname" type="text" placeholder="">    
       </div>
       </div> 


        <div class="col-md-12"> 
        <div class="col-md-2">
        <span class="post-title">JOB TITLE:</span>    
        </div>
        
       <div class="col-md-9">
        <input name="companytitle" id="companytitle" type="text" placeholder="">    
        </div>

        </div> 


        <div class="col-md-12"> 
        <div class="col-md-2">
        <span class="post-title">JOB DESCRIPTION:</span>    
        </div>
        
       <div class="col-md-9">
       <textarea name="description" id="description" placeholder=""></textarea>    
        </div>

        </div>  
        

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
        <span class="post-title">CREATED DATE:</span>    
        </div>
        
       <div class="col-md-9">
           <input id="datepicker" name="create_date" type="text" placeholder="Create Date" value="<?php echo date('d-m-Y'); ?>" readonly>    
        </div>

        </div>
            
            <div class="col-md-12"> 
        <div class="col-md-2">
        <span class="post-title">CLOSING DATE:</span>    
        </div>
        
       <div class="col-md-9">        
         <input id="datepicker1" name="closing_date" type="text" placeholder="Closing Date" >    
        </div>

        </div> 


       <div class="col-md-12"> 
        <div class="col-md-2">
        <span class="post-title">JOB TYPE:</span>    
        </div>
        
       <div class="col-md-9">
        <select name="jobtype">
            
        <option>FULL TIME</option>
        <option>PART TIME</option>
        <option>TEMPORARY</option>
        <option>CONTRACT</option>
        <option>INTERNSHIP</option>
        <option>FRESHER</option>
        <option>WALK-IN</option>
       
        </select>     
        </div>

        </div> 


<!--          <div class="col-md-12"> 
        <div class="col-md-2">
        <span class="post-title">RESUME REQUIREMENT:</span>    
        </div>
        
       <div class="col-md-9">
        <select>
            
        <option>REQUIRED</option>
        <option>NOT REQUIRED</option>
        </select>     
        </div>

        </div>-->

        <div class="col-md-12"> 
        <div class="col-md-2">
        <span class="post-title">SALARY:</span>    
        </div>
        
       <div class="col-md-7">
       <input name="salary" id="salary" type="text" placeholder="">      
        </div>
       
       <div class="col-md-2">
       <select name="salarycat">
        <option>PER YEAR</option>    
        <option>PER MONTH</option>
        <option>PER DAY</option>
       </select>         
        </div>

        </div>
        <input type="hidden" name="id" value="<?php echo $user_id; ?>"/>
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
       <script>
    $(function() {
        $("#datepicker").datepicker({minDate:0});
    });
 </script> 
  <script>
    $(function() {
        $("#datepicker1").datepicker({minDate:0});
    });
 </script>
     
      <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
     <script>

            // When the browser is ready...

            $(function () {

                $.validator.addMethod('salrange', function (value) { 
                    return /^[0-9]+(-[0-9]+)+$/.test(value); 
                }, 'Please enter a valid Salary Range like: lowest Salary - Highest Salary. If salary is Fixed give Both side the same salary.');

                // Setup form validation on the #register-form element

                $("#contact-form").validate({

                    // Specify the validation rules

                    rules: {
                        companyname: "required",
                        companytitle: "required",
                        description: "required",
                        location: "required",
                        jobtype: "required",
                        salary: {required:true, salrange:true },
                        salarycat: "required",
                        closing_date:"required"       
                        
                    },
                    // Specify the validation error messages

                    messages: {
                        companyname: "Please enter company name",
                        companytitle: "Please enter company title",
                        description: "Please enter description",
                        location: "Please enter location",
                        jobtype: "Please enter jobtype",
                        salary: "Please enter salary",
                        salarycat: "Please enter salary category",
                        closing_date:"Please enter a Closing Date"
                       
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