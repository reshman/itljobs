<!doctype html>

<?php 
    session_start();
    include 'db.php';
?>
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

        <link href="css/datepicker.css" rel="stylesheet" />
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
	
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
            
        <style>
            .existingfile{
                border: 1px solid;
                padding: 15px;
                border-color: #C1C1C1;

                //margin-right: 10px;
            }
        </style>
        
</head>
 

<body onload="document.getElementById('captcha-form').focus()">

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		 <?php
                 
                    include("header.php");
                    $id      = $_SESSION['log'];
                    
                ?>
        
         <!-- home-section 
			================================================== -->
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
        <h1>Edit My Profile</h1>
		</div>
            <?php
                  $query = sprintf("SELECT r.id,r.mobile,r.qualification, r.user_id, r.abroad_experience,r.india_experience, r.experience,r.specification,r.abroad_experience,r.current_location,r.date_of_birth,r.sub_category,r.file_name, u.name as name,u.email ,jc.name as jobcatname, jc.id from resume r LEFT JOIN  users u ON r.user_id = u.id LEFT JOIN job_categories jc ON r.job_category_id=jc.id WHERE r.user_id='%s'",$id ); 
                  $result = Db::query($query);
                  $rowresult = mysql_fetch_array($result);
                  $jobcat= $rowresult['id'];
                  $subcat= $rowresult['sub_category'];
                  $pre= $rowresult['name'];
                  $pre_of_name = strstr($pre, '.', true);
                  $name = substr($pre, strpos($pre, ".") + 1);   
                  $ab_exp= $rowresult['abroad_experience'];
                  $ind_exp= $rowresult['india_experience'];

                   
              ?>    
            
            
            <form id="contact-form" method="POST" action="editresume-process.php" enctype="multipart/form-data">  
             <?php
                          error_reporting(0);
                          session_start();
                          if ($_SESSION['editsucc'] != '') {
                            if ($_SESSION['editsucc'] == '1') {
                            ?>
                             <div class="alert alert-success">
                            Resume Details Updated successfully
                            </div>
                             <?php
                             }else if ($_SESSION['editsucc'] == '3'){ ?>
                            <div class="alert alert-danger">
                            <?php echo "<span style='color:red'/><b>Already registered!</b></span><br/><br/>"; ?>
                            </div>
                            <?php
                             }else{ ?>
                              <div class="alert alert-danger">
                            <?php echo "<span style='color:red'/><b>Failed</b></span><br/><br/>"; ?>
                            </div>
                            <?php
                             }
                            unset($_SESSION['editsucc']);
                            }
                        ?>
                <div class="col-md-12">
        <div class="col-md-4">
        
        <select name="title">
        <option value="Mr" <?php if($pre_of_name == 'Mr'){ echo 'selected="selected"';} ?>>Mr</option>
        <option value="Mrs" <?php if($pre_of_name == 'Mrs'){ echo 'selected="selected"';} ?>>Mrs</option>
        <option value="Miss" <?php if($pre_of_name == 'Miss'){ echo 'selected="selected"';} ?>>Miss</option>
        <option value="Ms" <?php if($pre_of_name == 'Ms'){ echo 'selected="selected"';} ?>>Ms</option>
        </select>  
        </div>
            
        <div class="col-md-4">
        
        <input name="name" id="name" type="text" placeholder="FULL NAME" value="<?php echo $name; ?>">    
        </div>
        
        <div class="col-md-4">
           <input type='text' id="datepicker" name="dob" placeholder="DATE OF BIRTH" value="<?php echo $rowresult['date_of_birth']; ?>"/>
        </div>
         
        </div> 
                
                        <div class="col-md-12">
         <div class="col-md-4">
        
        <input name="email" id="email" type="text" placeholder="EMAIL" value="<?php echo $rowresult['email']; ?>">    
        </div>
           
        <div class="col-md-4">
       
            <select name="job_category_id" class="job">
        <option disabled="" selected="">JOB APPLIED FOR</option>   
        <?php
            $qry = sprintf("SELECT * FROM `job_categories`");
            $res = Db::query($qry);
            while ($row = mysql_fetch_array($res)) {
         ?>
        <option value="<?php echo $row['id'];?>" <?php if($jobcat == $row['id']){ echo 'selected="selected"';} ?>><?php echo $row['name'];?></option>
        <?php
        }
        ?>
        </select>    
        </div>
          
        <div class="col-md-4" id="cat">
        
            <select name="sub_category">
                  <option disabled="" selected="">Sub category</option>
                  <?php
                    $qry = sprintf("SELECT job_listing FROM `jobs` WHERE job_category_id='%s'",$jobcat); 
                    $res = Db::query($qry);
                    while ($row = mysql_fetch_array($res)) {
               ?>
               
                <option value="<?php echo $row['job_listing']; ?>" <?php if($subcat == $row['job_listing']){ echo 'selected="selected"';} ?>><?php echo $row['job_listing']; ?></option>
            <?php } ?>
        </select>     
        </div>  

        <div id="response" class="col-md-4">
        </div>
        </div>
                
                
        <div class="col-md-12">
            
        <div class="col-md-4">
        <select name="india" class="inexp">
            <option disabled="" selected="" value="0">EXPERIENCE IN INDIA</option>
        <?php
        for($i=0;$i<=40;$i++){  ?>
        <option value="<?php echo $i;?>" <?php if($ind_exp == $i){ echo 'selected="selected"';} ?>><?php echo "$i year(s)";?></option>
        <?php } ?>
        </select>   
        </div>
            
        <div class="col-md-4">
        <select name="abroad" class="exp">
            <option disabled="" selected="" value="0">EXPERIENCE IN ABROAD</option>
        <?php
        for($i=0;$i<=40;$i++){  ?>
        <option value="<?php echo $i;?>" <?php if($ab_exp == $i){ echo 'selected="selected"';} ?>><?php echo "$i year(s)";?></option>
        <?php } ?>
        </select>  
        </div>
            
        <div class="col-md-4" id="totalyrs">
        <input name="total" id="email" type="text" placeholder="TOTAL YRS" value="<?php echo $rowresult['experience']; ?>">    
        </div>
        
        <div class="col-md-4" id="result">
           
        </div>
        
        </div>        
                
                
                
        <div class="col-md-12">
       
     
        <div class="col-md-4">
        
        <input name="mobile" id="mobile" type="text" placeholder="MOBILE NUMBER " value="<?php echo $rowresult['mobile']; ?>">    
        </div>
            <div class="col-md-4">
        
        <input name="specification" id="specification" type="text" placeholder="SPECIFICATION / CERTIFICATION " value="<?php echo $rowresult['specification']; ?>">    
        </div>
            <div class="col-md-4">
        
        <input name="qualification" id="qualification" type="text" placeholder="QUALIFICATION " value="<?php echo $rowresult['qualification']; ?>">    
        </div>
        </div>
        <div class="col-md-12">
 
        
        <div class="col-md-4">
        
        <input name="current_location" id="location" type="text" placeholder="CURRENT LOCATION " value="<?php echo $rowresult['current_location']; ?>">    
        </div>
         <div class="col-md-4">
            <input type="file"  name="fileToUpload" id="fileToUpload">  <?php// echo $rowresult['file_name']; ?>
         </div>
             <div class="col-md-4 existingfile">
                 Existing File: <a href="uploads/<?php echo $rowresult['file_name'] ?>" target="_blank"><?php echo $rowresult['file_name']; ?></a>
         </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        </div>
        

            <div class="col-md-12">
            <div class="col-md-12">
            <div id="job">
                <input type="submit" value="Submit">
		</div>
            </div>
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
        <script type="text/javascript">
    $(document).ready(function(){
        $("select.job").change(function(){
            var jobcat = $(".job option:selected").val();
            
            $.ajax({
                type: "POST",
                url: "category.php",
                data: { jobcat : jobcat } 
            }).done(function(data){
                $("#response").html(data);
                $("#cat").hide();
            });
        });
    });
    </script>
    
    <script type="text/javascript">
    $(document).ready(function(){
        $("select.exp").change(function(){
            var inexp = $(".inexp option:selected").val();
            var abexp = $(".exp option:selected").val();
           
            var total =  +abexp + +inexp ;
            
            $.ajax({
                type: "POST",
                url: "check.php",
                data: { total : total } 
            }).done(function(data){
                $("#result").html(data);
                $("#totalyrs").hide();
            });
        });
    });
    
        $(document).ready(function(){
        $("select.inexp").change(function(){
            var inexp = $(".inexp option:selected").val();
            var abexp = $(".exp option:selected").val();
           
            var total =  +abexp + +inexp ;
            
            $.ajax({
                type: "POST",
                url: "check.php",
                data: { total : total } 
            }).done(function(data){
                $("#result").html(data);
                $("#totalyrs").hide();
            });
        });
    });
    </script>
    
    
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
                        job_category_id: "required",
                        sub_category:"required",
                        experience: "required",
                        mobile:{
                        required: true,
                        minlength: 10, //or look at the additional-methods.js to see available phone validations
                        maxlength: 15
                        },
                        specification:"required",
                        qualification:"required",
                        current_location:"required",
                        abroad_experience:"required",
                        //day:"required",
                        month:"required",
                        //year:"required",
                        captcha:"required",
                   //   fileToUpload:"required",
                        email: {required: true,email: true}
                    },
                    // Specify the validation error messages

                    messages: {
                        name: "Please enter your full name",
                        job_category_id: "Please select job applied for",
                        sub_category:"Please select job title",
                        experience: "Please enter year of experience",
                        mobile:{
                        required: "Please enter your mobile number.",
                        minlength: "Enter valid contact number",
                        maxlength: "Enter valid contact number"
                        },
                        specification:"Please enter specification",
                        qualification:"Please enter qualification",
                        current_location:"Please enter current location",
                        abroad_experience:"Please select about abroad experience",
                        //day:"Please enter date of birth",
                        month:"Enter date of birth",
                        //year:"Please enter date of birth",
                        captcha:"Please enter captcha",
                    //  fileToUpload:"Please upload your resume",
                        email:{required: "Please enter email", email: "Please enter valid email!"}

                    },

                    submitHandler: function (form) {

                        form.submit();

                    }

                });



            });

        </script> 
        
         
    	<script src="js/bootstrap-datepicker.js"></script>
   	<script src="js/bootstrap-datetimepicker.min.js"></script>
        
          <script>
            $(function() {
                $("#datepicker").datepicker();
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