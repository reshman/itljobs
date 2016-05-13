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
            ?>


            <section class="page-banner-section">
                <div class="container">

                </div>
            </section>
            
            <section class="login-section" style="margin-top: 20px;">
                <div class="container">

                    <div class="title-section">
                        <h1>ALREADY REGISTERED ? LOGIN HERE</h1>
                    </div>

                    <form id="contact-form" method="POST" action="employerlogin_process.php" enctype="multipart/form-data">  
                        <div id="log">
<?php
error_reporting(0);
session_start();
if ($_SESSION['in'] == 1) {
    ?>
                                <div class="alert alert-danger alert-dismissable">
                                <?php echo "<span style='color:red'/><b>Invalid email or password</b></span><br/><br/>"; ?>
                                </div>                                          
                                <?php
                                }
                                unset($_SESSION['in']);
                                ?>
                        </div>                 

                        <div class="col-md-12">
                            <input  id="loginemail" name="loginemail" type="text" placeholder="EMAIL ">    

                        </div>
                        <div class="col-md-12">
                            <input id="loginpassword" name="loginpassword" type="password" placeholder="PASSWORD">    

                        </div>

                        <div class="col-md-6">          
                            <input type="submit" value="LOGIN">
                        </div>
                        <a class="forgot" data-toggle="modal" data-target="#myModal" href="javascript:void(0)" style="float:right; margin-right: 20px;">Forgot Password?</a>

                    </form>
                </div>

                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Forgot Password</h4>
                            </div>
                            <div class="modal-body">
                                <div class="input-group add-on">    
                                    <input type="email" class="form-control" required name="forgotemail" id="field-forgotemail" value="" placeholder="ENTER YOUR EMAIL ID" />
                                </div>

                                <div class="row">
                                    <div id="error" style="display:none; color:#C80000; margin-left: 20px; font-size:16px;"><b>Invalid Email</b></div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary btn-lg" id="forgot-submit">Submit</button>
                            </div>

                        </div>

                    </div>
                </div>


            </section>
            
            
            <section class="register-section">
                <div class="container">
                    <div class="title-section">
                        <h1>EMPLOYER REGISTRATION</h1>
                    </div>
                    <form id="contact-form" method="POST" action="employerenquiry_process.php" enctype="multipart/form-data">  
                        <?php
                        if (isset($_SESSION['regsucc']) != '') {

                            if ($_SESSION['regsucc'] == '1') {
                                ?>

                                <div class="alert alert-success alert-dismissable">

                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                    Registration Successfull <a href="#" class="alert-link"></a>.

                                </div>

                                <?php
                            } else if ($_SESSION['regsucc'] == '3') {
                                ?>

                                <div class="alert alert-danger alert-dismissable">

                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                    Already Registered Email <a href="#" class="alert-link"></a>.

                                </div>

        <?php
    }
}

unset($_SESSION['regsucc']);
?>


                        <div class="col-md-6">
                            <input  id="name" name="name" type="text" placeholder="NAME ">    

                        </div>
                        <div class="col-md-6">
                            <input  id="email" name="email" type="text" placeholder="EMAIL ">    

                        </div>
                        <div class="col-md-6">
                            <input id="companyname" name="companyname" type="text" placeholder="COMPANY NAME ">    

                        </div>
                        <div class="col-md-6">
                            <input  id="designation" name="designation" type="text" placeholder="DESIGNATION ">    
                            <div id="countries"></div>
                        </div>
                        <div class="col-md-6">
                            <select id="country" name="country"></select>
                            <script language="javascript">
                                populateCountries("country");
                            </script>

                        </div>
                        <div class="col-md-6">
                            <input id="moblie" name="mobile" type="text" placeholder="MOBILE ">    

                        </div>
                        <div class="col-md-12">
                            <textarea name="enquiry" id="enquiry" type="text" placeholder="ENQUIRY/REQUIREMENT"></textarea>  

                        </div>



                        <div class="col-md-6">

                            <input type="submit" value="REGISTER" >

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
                                    $('#forgot-submit').click(function() {

                                        var femail = document.getElementById("field-forgotemail").value;

                                        $.ajax({
                                            method: "POST",
                                            url: 'forgot-password.php',
                                            data: {femail: femail},
                                            success: function (data) {
                                                if (data == '1') {
                                                    alert("Check your email for your new password.");
                                                    window.location.href = "index.php";
                                                    return true;
                                                } else {
                                                    $('#error').show();
                                                    return false;
                                                }
                                            }
                                        });

                                    });
        </script>
        <script>

            // When the browser is ready...

            $(function () {

                jQuery.validator.addMethod("nonNumeric", function (value) {
                    var regex = new RegExp("^[a-zA-Z ]+$");
                    var key = value;

                    if (!regex.test(key)) {
                        return false;
                    }
                    return true;
                }, "Please Do not use Numbers or Special Characters");

                jQuery.validator.addMethod("notEqual", function (value) {
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
                        name: {required: true, nonNumeric: true},
                        companyname: {required: true, nonNumeric: true},
                        designation: {required: true, nonNumeric: true},
                        country: {notEqual: true},
                        mobile: {
                            required: true,
                            number: true,
                            minlength: 10, //or look at the additional-methods.js to see available phone validations
                            maxlength: 15
                        },
                        enquiry: "required",
                        email: {required: true, email: true}
                    },
                    // Specify the validation error messages

                    messages: {
                        name: {required: "Please enter Name"},
                        companyname: {required: "Please enter Company Name"},
                        designation: {required: "Please enter Designation"},
                        country: "Please select country",
                        mobile: {
                            required: "Please enter your mobile number.",
                            number: "Please enter Numbers Only",
                            minlength: "Enter valid contact number",
                            maxlength: "Enter valid contact number"
                        },
                        enquiry: "Please enter enquiry",
                        email: {required: "Please enter email", email: "Please enter valid email"}
                    },
                    submitHandler: function (form) {

                        form.submit();

                    }

                });

            });

        </script>
        <!-- Revolution slider -->
        <script type="text/javascript">

            jQuery(document).ready(function () {

                jQuery('.tp-banner').show().revolution(
                        {
                            dottedOverlay: "none",
                            delay: 10000,
                            startwidth: 1140,
                            startheight: 450,
                            hideThumbs: 200,
                            thumbWidth: 100,
                            thumbHeight: 50,
                            thumbAmount: 5,
                            navigationType: "bullet",
                            touchenabled: "on",
                            onHoverStop: "off",
                            swipe_velocity: 0.7,
                            swipe_min_touches: 1,
                            swipe_max_touches: 1,
                            drag_block_vertical: false,
                            parallax: "mouse",
                            parallaxBgFreeze: "on",
                            parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
                            keyboardNavigation: "off",
                            navigationHAlign: "center",
                            navigationVAlign: "bottom",
                            navigationHOffset: 0,
                            navigationVOffset: "center",
                            shadow: 0,
                            spinner: "spinner4",
                            stopLoop: "off",
                            stopAfterLoops: -1,
                            stopAtSlide: -1,
                            shuffle: "off",
                            autoHeight: "off",
            forceFullWidth: "off",
                            hideThumbsOnMobile: "off",
                            hideNavDelayOnMobile: 1500,
                            hideBulletsOnMobile: "off",
                            hideArrowsOnMobile: "off",
                            hideThumbsUnderResolution: 0,
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            startWithSlide: 0,
                            fullScreenOffsetContainer: ".header"
                        });

            });	//ready

            //isotope
            jQuery(document).ready(function () {
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