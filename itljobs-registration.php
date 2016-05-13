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
	<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
    	<script src="js/jquery.geocomplete.js"></script>
             <style>
 
    /* Hide the file input using
    opacity */
    [type=file] {
        position: absolute;
        filter: alpha(opacity=0);
        opacity: 0;
    }
    input, [type="file"] + label {
    border: 1px solid #ccc;
    border-radius: 0;
    font-size: 13px;
    left: 0;
    margin: 0;
    padding: 14px;
    position: relative;
    text-align: left;
    width: 100%;
}

    
    </style>
    <style>
        .rbutton{
            font-size: 30px;
            margin-top: 10px;
        }
    </style>         
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
	<section class="register-section">
        <div class="container">
        <div class="title-section">
        <h1>Looking for a Better Job?</h1>
		</div>
        <form id="contact-form" method="POST" action="registration.php" enctype="multipart/form-data">  
             <?php
                          error_reporting(0);
                          session_start();
                          if ($_SESSION['regsucc'] != '') {
                            if ($_SESSION['regsucc'] == '1') {
                            ?>
                             <div class="alert alert-success">
                            Thanks for registering. Will contact you soon!
                            </div>
                             <?php
                             }else if ($_SESSION['regsucc'] == '3'){ ?>
                            <div class="alert alert-danger">
                            <?php echo "<span style='color:red'/><b>Already registered!</b></span><br/><br/>"; ?>
                            </div>
                            <?php
                             }else if ($_SESSION['regsucc'] == '4'){ ?>
                            <div class="alert alert-danger">
                            <?php echo "<span style='color:red'/><b>Please upload only PDF Files!</b></span><br/><br/>"; ?>
                            </div>
                            <?php
                             }else if ($_SESSION['regsucc'] == '5'){ ?>
                            <div class="alert alert-danger">
                            <?php echo "<span style='color:red'/><b>Incorrect Captcha!!</b></span><br/><br/>"; ?>
                            </div>
                            <?php
                             }else{ ?>
                              <div class="alert alert-danger">
                            <?php echo "<span style='color:red'/><b>Failed</b></span><br/><br/>"; ?>
                            </div>
                            <?php
                             }
                            unset($_SESSION['regsucc']);
                            }
                        ?>
            <div class="col-md-12">
                <div class="col-md-12">

                    <select name="job_category_id" class="job">
                    <option disabled="" selected="">JOB APPLIED FOR</option>   
                    <?php
                    $qry = sprintf("SELECT * FROM `job_categories`");
                    $res = Db::query($qry);
                    while ($row = mysql_fetch_array($res)) {
                     ?>
                    <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                    <?php
                    }
                    ?>
                    <option value="Others">Others</option>
                    </select>    
                </div>
            </div>
            

                        <div class="col-md-12">
        <div class="col-md-4">
        
        <select name="title">
        <option disabled="" selected="">TITLE</option>   
        <option value="Mr">Mr</option>
        <option value="Mrs">Mrs</option>
        <option value="Miss">Miss</option>
        <option value="Ms">Ms</option>
        </select>  
        </div>
            
        <div class="col-md-4">
        
        <input name="name" id="name" type="text" placeholder="FULL NAME ">    
        </div>
        
        <div class="col-md-4">
           <input type='text' id="datepicker" name="dob" placeholder="DATE OF BIRTH (DD/MM/YYYY)"/>
        </div>
         
        </div> 
       <!--     ************************************************  -->
        <div class="col-md-12">
            
        <div class="col-md-4">
           <!-- <input name="qualification" id="qualification" type="text" placeholder="QUALIFICATION ">    -->
           <select name="qualification">
            <option disabled="" selected="">SELECT QUALIFICATION</option>
            <?php
            $qryqa = sprintf("SELECT * FROM `qualification` ORDER BY qualification");
            $resqua = Db::query($qryqa);
            while ($rowq = mysql_fetch_assoc($resqua)) { ?>
            <option value="<?php echo $rowq['qualification'];?>"><?php echo $rowq['qualification'];?></option>
            <?php }
            ?>
          </select>  
        </div> 
            
        <div class="col-md-4" id="cat">
            <select name="sub_category">
                <option disabled="" selected="">INDUSTRY </option>
            </select>     
        </div> 
          <div id="response" class="col-md-4">
        </div>
            
        <div class="col-md-4">
            <input name="specification" id="specification" type="text" placeholder="SPECIALIZATION/CERTIFICATION">    
        </div>
      
        
      

        </div>
        <!--     ************************************************  -->
        <div class="col-md-12">
            
        <div class="col-md-4">
            <select name="abroad" class="exp">
                <option disabled="" selected="" value="0">EXPERIENCE IN ABROAD</option>
            <?php
            for($i=0;$i<=40;$i++){  ?>
            <option value="<?php echo $i;?>" ><?php echo "$i year(s)";?></option>
            <?php } ?>
            </select>  
        </div>
            
        <div class="col-md-4">
        <select name="india" class="inexp">
            <option disabled="" selected="" value="0">EXPERIENCE IN INDIA</option>
        <?php
        for($i=0;$i<=40;$i++){  ?>
        <option value="<?php echo $i;?>" ><?php echo "$i year(s)";?></option>
        <?php } ?>
        </select>   
        </div>
            
        
            
        <div class="col-md-4" id="totalyrs">
        <input name="total1" id="email" type="text" placeholder="TOTAL YEARS" disabled="">    
        </div>
        
        <div class="col-md-4" id="result">
           
        </div>
        
        </div>
       <!--     ************************************************  -->
        <div class="col-md-12">
        <div class="col-md-4">
            <input name="mobile" id="mobile" type="text" placeholder="MOBILE NUMBER ">    
        </div>
            
        <div class="col-md-4">
            <input name="email" id="email" type="text" placeholder="EMAIL ">    
        </div>
            
        <div class="col-md-4">
            <input name="current_location" id="location" type="text" placeholder="CURRENT LOCATION ">    
        </div>
        
        </div>
       
        <div class="col-md-12">


            <div class="col-md-4">
		
        <input type="text" name="captcha" placeholder="ENTER CAPTCHA">
        </div>

            <div class="col-md-2">
		<img src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image, type it in the box" width="150" height="50" align="absbottom" id="captcha"/>
                 </div>
        <div class="col-md-2">
                         <a href="javascript:void(0)" onclick="
        document.getElementById('captcha').src='verificationimage.php?'+Math.random();"
            id="change-image"><i class="fa fa-refresh rbutton"></i></a>
      </div>
         </div>
         <div class="col-md-12">
            <div class="col-md-12">

            <input type="file"  class="resume" name="fileToUpload" id="f02" placeholder="UPLOAD YOUR CV" >
            <label for="f02">UPLOAD YOUR CV (PDF ONLY)</label>

            </div>
            
            </div>
      
            <div class="col-md-12">
            <div class="col-md-2">
            <div id="job">
                <input type="submit" value="SUBMIT">
		</div>
            </div>
	</div>
      
        </form>    
            
        </div>
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
        
    	<script src="js/bootstrap-datepicker.js"></script>
   	<script src="js/bootstrap-datetimepicker.min.js"></script>
          <script>
          $("[type=file]").on("change", function(){
          // Name of file and placeholder
          var file = this.files[0].name;
          var dflt = $(this).attr("placeholder");
          if($(this).val()!=""){
            $(this).next().text(file);
          } else {
            $(this).next().text(dflt);
          }
        });
        </script>
     
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
    
    <script>
    $(function() {
        $('#datepicker').datepicker({
            format: 'dd/mm/yyyy',
            endDate: '0',
            autoclose: true
        });
    });
    </script> 
       
        <script>

            // When the browser is ready...

            $(function () {

                // Setup form validation on the #register-form element
                jQuery.validator.addMethod("nonNumeric", function( value ) {
                    var regex = new RegExp("^[a-zA-Z ]+$");
                    var key = value;

                    if (!regex.test(key)) {
                        return false;
                    }
                    return true;
                }, "Please Do not use Numbers or Special Characters");
                
                $("#contact-form").validate({

                    // Specify the validation rules

                    rules: {
                        
                        title: "required",
                        name: {required:true,nonNumeric:true},
                        job_category_id: "required",
//                        sub_category:"required",
                        india: "required",
//                        abroad:"required",
                        dob:{required:true, dateFormat: true},
                        mobile:{
                        required: true,
                        digits  :true,
                        minlength: 10, //or look at the additional-methods.js to see available phone validations
                        maxlength: 10
                        },
//                        specification:{nonNumeric:true},
                        qualification:"required",
                        current_location:"required",
                       
                        //day:"required",
//                        month:"required",
                        //year:"required",
                        captcha:"required",
                        fileToUpload:"required",
                        email: {required: true,email: true}
                    },
                    // Specify the validation error messages

                    messages: {
                        title: "Please select title",
                        name: {required:"Please enter your full name"},
                        job_category_id: "Please select job applied for",
//                        sub_category:"Please select job title",
                        india: "Please enter experience in India",
//                        abroad:"Please enter experience in abroad",
                        dob:{required: "Please enter date of birth", dateFormat: "Please enter a date in the format dd/mm/yyyy."},
                        mobile:{
                        required: "Please enter your mobile number.",
                        digits: "Enter digits only",
                        minlength: "Enter valid contact number",
                        maxlength: "Enter valid contact number"
                        },
//                        specification:{required:"Please enter specialization"},
                        qualification:"Please enter qualification",
                        current_location:"Please enter current location",
                        
                        //day:"Please enter date of birth",
                        month:"Enter date of birth",
                        //year:"Please enter date of birth",
                        captcha:"Please enter captcha",
                        fileToUpload:"Please upload your resume",
                        email:{required: "Please enter email", email: "Please enter valid email!"}

                    },

                    submitHandler: function (form) {

                        form.submit();

                    }

                });

                $.validator.addMethod("dateFormat",
                    function(value, element) {
                        return value.match(/^(?=\d)(?:(?:31(?!.(?:0?[2469]|11))|(?:30|29)(?!.0?2)|29(?=.0?2.(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00)))(?:\x20|$))|(?:2[0-8]|1\d|0?[1-9]))([-.\/])(?:1[012]|0?[1-9])\1(?:1[6-9]|[2-9]\d)?\d\d(?:(?=\x20\d)\x20|$))?(((0?[1-9]|1[012])(:[0-5]\d){0,2}(\x20[AP]M))|([01]\d|2[0-3])(:[0-5]\d){1,2})?$/);
                    },
                    "Please enter a date in the format dd/mm/yyyy."
                );
                
                $("#location").geocomplete({
                    types: ["geocode", "establishment"],
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