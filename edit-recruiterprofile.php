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
                                        
                                        $query = sprintf("SELECT e.user_id,e.company_name, e.designation,e.mobile,e.enquiry_requirement,e.country,u.name,u.email  from employers e LEFT JOIN  users u ON e.user_id = u.id  WHERE  e.user_id='%s' AND del_status='%s'",$user_id,'0');  
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
         <select id="country" name="country" class="valid">
             <option value="-1">Select Country</option>
             <option value="Afghanistan">Afghanistan</option>
             <option value="Albania">Albania</option>
             <option value="Algeria">Algeria</option>
             <option value="American Samoa">American Samoa</option>
             <option value="Angola">Angola</option>
             <option value="Anguilla">Anguilla</option>
             <option value="Antartica">Antartica</option>
             <option value="Antigua and Barbuda">Antigua and Barbuda</option>
             <option value="Argentina">Argentina</option>
             <option value="Armenia">Armenia</option>
             <option value="Aruba">Aruba</option>
             <option value="Ashmore and Cartier Island">Ashmore and Cartier Island</option>
             <option value="Australia">Australia</option>
             <option value="Austria">Austria</option>
             <option value="Azerbaijan">Azerbaijan</option>
             <option value="Bahamas">Bahamas</option>
             <option value="Bahrain">Bahrain</option>
             <option value="Bangladesh">Bangladesh</option>
             <option value="Barbados">Barbados</option>
             <option value="Belarus">Belarus</option>
             <option value="Belgium">Belgium</option>
             <option value="Belize">Belize</option>
             <option value="Benin">Benin</option>
             <option value="Bermuda">Bermuda</option>
             <option value="Bhutan">Bhutan</option>
             <option value="Bolivia">Bolivia</option>
             <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
             <option value="Botswana">Botswana</option>
             <option value="Brazil">Brazil</option>
             <option value="British Virgin Islands">British Virgin Islands</option>
             <option value="Brunei">Brunei</option>
             <option value="Bulgaria">Bulgaria</option>
             <option value="Burkina Faso">Burkina Faso</option>
             <option value="Burma">Burma</option>
             <option value="Burundi">Burundi</option>
             <option value="Cambodia">Cambodia</option>
             <option value="Cameroon">Cameroon</option>
             <option value="Canada">Canada</option>
             <option value="Cape Verde">Cape Verde</option>
             <option value="Cayman Islands">Cayman Islands</option>
             <option value="Central African Republic">Central African Republic</option>
             <option value="Chad">Chad</option>
             <option value="Chile">Chile</option>
             <option value="China">China</option>
             <option value="Christmas Island">Christmas Island</option>
             <option value="Clipperton Island">Clipperton Island</option>
             <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
             <option value="Colombia">Colombia</option>
             <option value="Comoros">Comoros</option>
             <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
             <option value="Congo, Republic of the">Congo, Republic of the</option>
             <option value="Cook Islands">Cook Islands</option>
             <option value="Costa Rica">Costa Rica</option>
             <option value="Cote d'Ivoire">Cote d'Ivoire</option>
             <option value="Croatia">Croatia</option>
             <option value="Cuba">Cuba</option>
             <option value="Cyprus">Cyprus</option>
             <option value="Czeck Republic">Czeck Republic</option>
             <option value="Denmark">Denmark</option>
             <option value="Djibouti">Djibouti</option>
             <option value="Dominica">Dominica</option>
             <option value="Dominican Republic">Dominican Republic</option>
             <option value="Ecuador">Ecuador</option>
             <option value="Egypt">Egypt</option>
             <option value="El Salvador">El Salvador</option>
             <option value="Equatorial Guinea">Equatorial Guinea</option>
             <option value="Eritrea">Eritrea</option>
             <option value="Estonia">Estonia</option>
             <option value="Ethiopia">Ethiopia</option>
             <option value="Europa Island">Europa Island</option>
             <option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option>
             <option value="Faroe Islands">Faroe Islands</option>
             <option value="Fiji">Fiji</option>
             <option value="Finland">Finland</option>
             <option value="France">France</option>
             <option value="French Guiana">French Guiana</option>
             <option value="French Polynesia">French Polynesia</option>
             <option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option>
             <option value="Gabon">Gabon</option>
             <option value="Gambia, The">Gambia, The</option>
             <option value="Gaza Strip">Gaza Strip</option>
             <option value="Georgia">Georgia</option>
             <option value="Germany">Germany</option>
             <option value="Ghana">Ghana</option>
             <option value="Gibraltar">Gibraltar</option>
             <option value="Glorioso Islands">Glorioso Islands</option>
             <option value="Greece">Greece</option>
             <option value="Greenland">Greenland</option>
             <option value="Grenada">Grenada</option>
             <option value="Guadeloupe">Guadeloupe</option>
             <option value="Guam">Guam</option>
             <option value="Guatemala">Guatemala</option>
             <option value="Guernsey">Guernsey</option>
             <option value="Guinea">Guinea</option>
             <option value="Guinea-Bissau">Guinea-Bissau</option>
             <option value="Guyana">Guyana</option>
             <option value="Haiti">Haiti</option>
             <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
             <option value="Holy See (Vatican City)">Holy See (Vatican City)</option>
             <option value="Honduras">Honduras</option>
             <option value="Hong Kong">Hong Kong</option>
             <option value="Howland Island">Howland Island</option>
             <option value="Hungary">Hungary</option>
             <option value="Iceland">Iceland</option>
             <option value="India">India</option>
             <option value="Indonesia">Indonesia</option>
             <option value="Iran">Iran</option>
             <option value="Iraq">Iraq</option>
             <option value="Ireland">Ireland</option>
             <option value="Ireland, Northern">Ireland, Northern</option>
             <option value="Israel">Israel</option>
             <option value="Italy">Italy</option>
             <option value="Jamaica">Jamaica</option>
             <option value="Jan Mayen">Jan Mayen</option>
             <option value="Japan">Japan</option>
             <option value="Jarvis Island">Jarvis Island</option>
             <option value="Jersey">Jersey</option>
             <option value="Johnston Atoll">Johnston Atoll</option>
             <option value="Jordan">Jordan</option>
             <option value="Juan de Nova Island">Juan de Nova Island</option>
             <option value="Kazakhstan">Kazakhstan</option>
             <option value="Kenya">Kenya</option>
             <option value="Kiribati">Kiribati</option>
             <option value="Korea, North">Korea, North</option>
             <option value="Korea, South">Korea, South</option>
             <option value="Kuwait">Kuwait</option>
             <option value="Kyrgyzstan">Kyrgyzstan</option>
             <option value="Laos">Laos</option>
             <option value="Latvia">Latvia</option>
             <option value="Lebanon">Lebanon</option>
             <option value="Lesotho">Lesotho</option>
             <option value="Liberia">Liberia</option>
             <option value="Libya">Libya</option>
             <option value="Liechtenstein">Liechtenstein</option>
             <option value="Lithuania">Lithuania</option>
             <option value="Luxembourg">Luxembourg</option>
             <option value="Macau">Macau</option>
             <option value="Macedonia, Former Yugoslav Republic of">Macedonia, Former Yugoslav Republic of</option>
             <option value="Madagascar">Madagascar</option>
             <option value="Malawi">Malawi</option>
             <option value="Malaysia">Malaysia</option>
             <option value="Maldives">Maldives</option>
             <option value="Mali">Mali</option>
             <option value="Malta">Malta</option>
             <option value="Man, Isle of">Man, Isle of</option>
             <option value="Marshall Islands">Marshall Islands</option>
             <option value="Martinique">Martinique</option>
             <option value="Mauritania">Mauritania</option>
             <option value="Mauritius">Mauritius</option>
             <option value="Mayotte">Mayotte</option>
             <option value="Mexico">Mexico</option>
             <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
             <option value="Midway Islands">Midway Islands</option>
             <option value="Moldova">Moldova</option>
             <option value="Monaco">Monaco</option>
             <option value="Mongolia">Mongolia</option>
             <option value="Montserrat">Montserrat</option>
             <option value="Morocco">Morocco</option>
             <option value="Mozambique">Mozambique</option>
             <option value="Namibia">Namibia</option>
             <option value="Nauru">Nauru</option>
             <option value="Nepal">Nepal</option>
             <option value="Netherlands">Netherlands</option>
             <option value="Netherlands Antilles">Netherlands Antilles</option>
             <option value="New Caledonia">New Caledonia</option>
             <option value="New Zealand">New Zealand</option>
             <option value="Nicaragua">Nicaragua</option>
             <option value="Niger">Niger</option>
             <option value="Nigeria">Nigeria</option>
             <option value="Niue">Niue</option>
             <option value="Norfolk Island">Norfolk Island</option>
             <option value="Northern Mariana Islands">Northern Mariana Islands</option>
             <option value="Norway">Norway</option>
             <option value="Oman">Oman</option>
             <option value="Pakistan">Pakistan</option>
             <option value="Palau">Palau</option>
             <option value="Panama">Panama</option>
             <option value="Papua New Guinea">Papua New Guinea</option>
             <option value="Paraguay">Paraguay</option>
             <option value="Peru">Peru</option>
             <option value="Philippines">Philippines</option>
             <option value="Pitcaim Islands">Pitcaim Islands</option>
             <option value="Poland">Poland</option>
             <option value="Portugal">Portugal</option>
             <option value="Puerto Rico">Puerto Rico</option>
             <option value="Qatar">Qatar</option>
             <option value="Reunion">Reunion</option>
             <option value="Romainia">Romainia</option>
             <option value="Russia">Russia</option>
             <option value="Rwanda">Rwanda</option>
             <option value="Saint Helena">Saint Helena</option>
             <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
             <option value="Saint Lucia">Saint Lucia</option>
             <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
             <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
             <option value="Samoa">Samoa</option>
             <option value="San Marino">San Marino</option>
             <option value="Sao Tome and Principe">Sao Tome and Principe</option>
             <option value="Saudi Arabia">Saudi Arabia</option>
             <option value="Scotland">Scotland</option>
             <option value="Senegal">Senegal</option>
             <option value="Seychelles">Seychelles</option>
             <option value="Sierra Leone">Sierra Leone</option>
             <option value="Singapore">Singapore</option>
             <option value="Slovakia">Slovakia</option>
             <option value="Slovenia">Slovenia</option>
             <option value="Solomon Islands">Solomon Islands</option>
             <option value="Somalia">Somalia</option>
             <option value="South Africa">South Africa</option>
             <option value="South Georgia and South Sandwich Islands">South Georgia and South Sandwich Islands</option>
             <option value="Spain">Spain</option>
             <option value="Spratly Islands">Spratly Islands</option>
             <option value="Sri Lanka">Sri Lanka</option>
             <option value="Sudan">Sudan</option>
             <option value="Suriname">Suriname</option>
             <option value="Svalbard">Svalbard</option>
             <option value="Swaziland">Swaziland</option>
             <option value="Sweden">Sweden</option>
             <option value="Switzerland">Switzerland</option>
             <option value="Syria">Syria</option>
             <option value="Taiwan">Taiwan</option>
             <option value="Tajikistan">Tajikistan</option>
             <option value="Tanzania">Tanzania</option>
             <option value="Thailand">Thailand</option>
             <option value="Tobago">Tobago</option>
             <option value="Toga">Toga</option>
             <option value="Tokelau">Tokelau</option>
             <option value="Tonga">Tonga</option>
             <option value="Trinidad">Trinidad</option>
             <option value="Tunisia">Tunisia</option>
             <option value="Turkey">Turkey</option>
             <option value="Turkmenistan">Turkmenistan</option>
             <option value="Tuvalu">Tuvalu</option>
             <option value="Uganda">Uganda</option>
             <option value="Ukraine">Ukraine</option>
             <option value="United Arab Emirates">United Arab Emirates</option>
             <option value="United Kingdom">United Kingdom</option>
             <option value="Uruguay">Uruguay</option>
             <option value="USA">USA</option>
             <option value="Uzbekistan">Uzbekistan</option>
             <option value="Vanuatu">Vanuatu</option>
             <option value="Venezuela">Venezuela</option>
             <option value="Vietnam">Vietnam</option>
             <option value="Virgin Islands">Virgin Islands</option>
             <option value="Wales">Wales</option>
             <option value="Wallis and Futuna">Wallis and Futuna</option>
             <option value="West Bank">West Bank</option>
             <option value="Western Sahara">Western Sahara</option>
             <option value="Yemen">Yemen</option>
             <option value="Yugoslavia">Yugoslavia</option>
             <option value="Zambia">Zambia</option>
             <option value="Zimbabwe">Zimbabwe</option>
         </select>
        
        </div>
            <div class="col-md-6">
        <input id="moblie" name="mobile" type="text" value="<?php echo $row['mobile'];?>" placeholder="MOBILE ">    
        
        </div>
         <div class="col-md-12">
             <textarea name="enquiry" id="enquiry" placeholder="ENQUIRY/REQUIREMENT"><?php echo $row['enquiry_requirement'];?></textarea>  
        
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
                
                jQuery.validator.addMethod("nonNumeric", function( value, element ) {
                    var regex = new RegExp("^[a-zA-Z ]+$");
                    var key = value;

                    if (!regex.test(key)) {
                        return false;
                    }
                    return true;
                }, "Please Do not use Numbers or Special Characters");
                
                jQuery.validator.addMethod("notEqual", function( value ) {
                    var regex = new RegExp("-1");
                    var key = value;

                    if (regex.test(key)) {
                        return false;
                    }
                    return true;
                });

                // Setup form validation on the #register-form element

                $("#contact-form").validate({

                    // Specify the validation rules

                    rules: {
                        name: {required:true, nonNumeric:true},
                        companyname: {required:true, nonNumeric:true},
                        designation: {required:true, nonNumeric:true},
                        country: { notEqual : true },
                        mobile:{
                        required: true,
                        number:true,
                        minlength: 10, //or look at the additional-methods.js to see available phone validations
                        maxlength: 15                        
                        },
                        enquiry: "required",
                        email: {required: true,email: true}
                    },
                    // Specify the validation error messages

                    messages: {
                        name: {required:"Please enter Name"},
                        companyname: {required:"Please enter Company Name"},
                        designation: {required:"Please enter Designation"},
                        country:"Please select Country",
                         mobile:{
                        required: "Please enter your mobile number.",
                        minlength: "Enter valid contact number",
                        maxlength: "Enter valid contact number",
                        number:"Please enter Numbers only"
                        },
                        enquiry: "Please enter enquiry",
                        email: {required: "Please enter email",email: "Please enter valid email"}
                    },

                    submitHandler: function (form) {

                        form.submit();

                    }

                });   
                
                $('#country [value="<?php echo $row['country']; ?>"]').attr("selected","selected");
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