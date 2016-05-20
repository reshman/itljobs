<!doctype html>
<?php
if ($_GET) {
    require 'check_session_rec.php';
    include 'db.php';
    $id = $_GET['id'];

    mysql_real_escape_string($id);

    $csql = sprintf("SELECT * FROM jobs WHERE id=%d and user_id=%d", $id, $_SESSION['reclog']);
    $cr = Db::query($csql);
    if (mysql_num_rows($cr) != 1) {
        $_SESSION['illegal'] = true;
        echo '<script> window.location.href="recruiter_view_jobs.php";</script>';
        die();
    }
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


            <link href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
            <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

            <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
            <script src="js/jquery.geocomplete.js"></script>

            <script src="admin/ckeditor/ckeditor.js"></script>

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


        </head>
        <body>

            <!-- Header
                ================================================== -->

            <?php
            include 'header.php';
            ?>

            <!-- End Header -->

            <!-- home-section 
                              ================================================== -->

            <section class="page-banner-section">
                <div class="container">

                </div>
            </section>
            <section class="register-section services-offer-section services-page-section">
                <div class="container">
                    <div class="title-section">
                        <h1>EDIT JOB</h1></div>
                    <?php
                    if (isset($_SESSION['reclog'])) {
                        $user_id = $_SESSION['reclog'];
                    }
                    ?>
                    <?php include('myprofile-sidemenu.php'); ?>
                    <div class="col-lg-10">
                        <?php
                        if (empty($_SESSION['illegal'])) {
                            $sql = sprintf("SELECT * FROM jobs WHERE id=%d", $id);
                            $result = Db::query($sql);
                            $jrow = mysql_fetch_assoc($result);

                            $created = explode('-', $jrow['created_date']);
                            $created = array_reverse($created);
                            $created = implode('/', $created);

                            $closing = explode('-', $jrow['closing_date']);
                            $closing = array_reverse($closing);
                            $closing = implode('/', $closing);

                            $salary = preg_split("/[a-zA-Z]{3} [a-zA-Z]+$/", $jrow['salary']);
                            $per = preg_split("/[0-9]+[ -]{0,3}[0-9]+ [a-zA-Z]{3}( )*/", $jrow['salary']);
                        }
                        ?>
                        <form id="contact-form" method="POST" action="recruiter-edit-jobprocess.php" enctype="multipart/form-data">
                            <input id="id" name="id" value="<?php echo $id; ?>" hidden>
                            <input id="id" name="ref_id" value="<?php echo $jrow['ref_id']; ?>" hidden>
                            <div class="col-md-12"> 
                                <div class="col-md-3">
                                    <span class="post-title">COMPANY NAME: </span>    
                                </div>

                                <div class="col-md-8">
                                    <input name="companyname" id="companyname" type="text" placeholder="COMPANY NAME" value="<?php echo $jrow['company_name']; ?>">    
                                </div>
                            </div> 


                            <div class="col-md-12"> 
                                <div class="col-md-3">
                                    <span class="post-title">CATEGORY:</span>    
                                </div>

                                <div class="col-md-8">
                                    <select name="category" id="category">
                                        <?php
                                        $qry = sprintf("SELECT * FROM `job_categories`");
                                        $res = Db::query($qry);
                                        while ($row = mysql_fetch_array($res)) {
                                            ?>
                                            <option<?php
                                            if ($jrow['job_category_id'] == $row['id']) {
                                                echo ' selected';
                                            }
                                            ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>

                                        <?php } ?>

                                    </select>    
                                </div>

                            </div> 

                            <div class="col-md-12"> 
                                <div class="col-md-3">
                                    <span class="post-title">JOB TITLE:</span>    
                                </div>

                                <div class="col-md-8">
                                    <input name="companytitle" id="companytitle" type="text" placeholder="JOB TITLE" value="<?php echo $jrow['job_listing']; ?>">    
                                </div>

                            </div> 


                            <div class="col-md-12">
                                <div class="col-md-3">
                                    <span class="post-title">JOB DESCRIPTION:</span>
                                </div>
                                <div class="col-md-8 jdchoice">
                                    <div class="col-md-1 col-sm-1 col-xs-1">
                                        <input type="radio" id="jdeditorc" name="jdchoice" value="editor" <?php if ($jrow['job_description'] != 'PDF Attached') { ?>checked<?php } ?>>
                                    </div>
                                    <div class="col-md-5 col-sm-5 col-xs-5">
                                        Enter by Text Editor
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-xs-1">
                                        <input type="radio" id="jdfilec" name="jdchoice" value="file" <?php if ($jrow['job_description'] == 'PDF Attached') { ?>checked<?php } ?>>
                                    </div>
                                    <div class="col-md-5 col-sm-5 col-xs-5">
                                        Replace PDF File
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-3"></div>
                                <div class="col-md-8 jdeditor">
                                    <textarea class="ckeditor" id="job_description" placeholder="Job Description" name="job_description"> <?= $jrow['job_description'] ?></textarea><br>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-3"></div>
                                <div class="col-md-8 jdfile">
                                    <input type="file"  class="resume" name="fileToUpload" id="f02" placeholder="CHOOSE FILE (Only PDF)">
                                    <label for="f02">CHOOSE FILE (Only PDF)</label>
                                </div>
                            </div> 
                            <div class="col-md-12"> 
                                <div class="col-md-3">
                                    <span class="post-title">EXPERIENCE(IN YEARS):</span>    
                                </div>

                                <div class="col-md-8">
                                    <input name="experience" id="experience" type="text" placeholder="EXPERIENCE" value="<?php echo $jrow['experience']; ?>">    
                                </div>

                            </div> 


                            <div class="col-md-12"> 
                                <div class="col-md-3">
                                    <span class="post-title">LOCATION:</span>    
                                </div>

                                <div class="col-md-8">
                                    <input name="location" id="location" type="text" placeholder="LOCATION" value="<?php echo $jrow['job_location']; ?>">    
                                </div>

                            </div> 

                            <div class="col-md-12"> 
                                <div class="col-md-3">
                                    <span class="post-title">CREATED DATE:</span>    
                                </div>

                                <div class="col-md-8">
                                    <input name="create_date" type="text" value="<?php echo $created; ?>" readonly>    
                                </div>

                            </div>

                            <div class="col-md-12"> 
                                <div class="col-md-3">
                                    <span class="post-title">CLOSING DATE:</span>    
                                </div>

                                <div class="col-md-8">        
                                    <input id="datepicker1" name="closing_date" type="text" placeholder="Closing Date" value="<?php echo $closing; ?>">    
                                </div>

                            </div> 


                            <div class="col-md-12"> 
                                <div class="col-md-3">
                                    <span class="post-title">JOB TYPE:</span>    
                                </div>

                                <div class="col-md-8">
                                    <select id="jobtype" name="jobtype">

                                        <option <?php if ($jrow['job_type'] == "FULL TIME") { ?> selected <?php } ?>>FULL TIME</option>
                                        <option <?php if ($jrow['job_type'] == "PART TIME") { ?> selected <?php } ?>>PART TIME</option>
                                        <option <?php if ($jrow['job_type'] == "TEMPORARY") { ?> selected <?php } ?>>TEMPORARY</option>
                                        <option <?php if ($jrow['job_type'] == "CONTRACT") { ?> selected <?php } ?>>CONTRACT</option>
                                        <option <?php if ($jrow['job_type'] == "INTERNSHIP") { ?> selected <?php } ?>>INTERNSHIP</option>
                                        <option <?php if ($jrow['job_type'] == "FRESHER") { ?> selected <?php } ?>>FRESHER</option>
                                        <option <?php if ($jrow['job_type'] == "WALKIN") { ?> selected <?php } ?>>WALKIN</option>

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
                                <div class="col-md-3">
                                    <span class="post-title">SALARY:</span>    
                                </div>

                                <div class="col-md-6">
                                    <input name="salary" id="salary" type="text" placeholder="SALARY (minimum - maximum)" value="<?= $salary[0] ?>">      
                                </div>

                                <div class="col-md-2">
                                    <select name="salarycat">
                                        <option <?php
                                        if ($per[1] == "PER YEAR") {
                                            ?>
                                                selected
                                                <?php
                                            }
                                            ?>>PER YEAR</option>    
                                        <option<?php
                                        if ($per[1] == "PER MONTH") {
                                            ?>
                                                selected
                                                <?php
                                            }
                                            ?>>PER MONTH</option>
                                        <option <?php if ($per[1] == "PER DAY") { ?>
                                                selected
                                                <?php
                                            }
                                            ?>>PER DAY</option>
                                    </select>         
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="col-md-11"> 
                                    <div id="post-job">
                                        <input type="submit" value="EDIT JOB">
                                    </div>
                                </div>
                            </div>    

                        </form>    
                    </div>



                </div>

            </section>

            <!-- footer 
                            ================================================== -->

            <?php include("footer.php"); ?>

            <!-- End footer -->

            <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
            <script>

                // When the browser is ready...

                $(function () {
                    $("#location").geocomplete({
                        types: ["geocode", "establishment"],
                    });

                    $('#datepicker1').datepicker({
                        format: "dd/mm/yyyy",
                        startDate: '0'
                    });

                    $.validator.addMethod('salrange', function (value) {
                        return /^[0-9 ]+(-[0-9 ]+)+\s*[A-Z]{3}\s*$/.test(value);
                    }, 'Please enter a valid Salary Range like: lowest Salary - Highest Salary followed by ISO currency code || Example:100000-150000 INR ||. If salary is Fixed give Both side the same salary.');

                    jQuery.validator.addMethod("nonNumeric", function (value) {
                        var regex = new RegExp("^[a-zA-Z ]+$");
                        var key = value;

                        if (!regex.test(key)) {
                            return false;
                        }
                        return true;
                    }, "Please Do not use Numbers or Special Characters");

                    $.validator.addMethod('experience', function (value) {
                        return /^[0-9 ]+((-){0,1}[0-9 ]+){0,1}$/.test(value);

                    }, 'Please enter valid experience in years as digit or range as low-High.');

                    // Setup form validation on the #register-form element

                    $("#contact-form").validate({
                        // Specify the validation rules

                        rules: {
                            companyname: {required: true, nonNumeric: true},
                            companytitle: {required: true, nonNumeric: true},
                            description: "required",
                            location: "required",
                            jobtype: "required",
                            salary: {required: true, salrange: true},
                            salarycat: "required",
                            closing_date: "required",
                            experience: {required: true, experience: true}

                        },
                        // Specify the validation error messages

                        messages: {
                            companyname: {required: "Please Enter company name"},
                            companytitle: {required: "Please Enter Job title"},
                            description: "Please Enter Description",
                            location: "Please Enter Location",
                            jobtype: "Please Enter Jobtype",
                            salary: {required: "Please Enter Salary"},
                            salarycat: "Please Enter Salary Category",
                            closing_date: "Please Enter a Closing Date",
                            experience: {required: "Please Enter Experience"}

                        },
                        submitHandler: function (form) {

                            form.submit();

                        }

                    });

                    var choice = $('[name = "jdchoice"]:checked').val();
                    if (choice == 'file') {
                        $('.jdeditor').hide();
                    } else if (choice == 'editor') {
                        $('.jdfile').hide();
                    }

                    $('[name = "jdchoice"]').change(function () {
                        var choice = $(this).val();
                        if (choice == "file") {
                            $('.jdfile').slideDown();
                            $('.jdeditor').slideUp();
                        } else if (choice == "editor") {
                            $('.jdfile').slideUp();
                            $('.jdeditor').slideDown();
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
    <?php
} else {
    echo '<h1>ACCESSS DENIED</h1>';
}