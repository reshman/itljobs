<!doctype html>
<?php
session_start();
if ($_GET) {
    include 'db.php';
    $id = $_GET['id'];
    
    if (isset($_SESSION['log'])) {

        $interviewArray = array();
        $sqlJobsApplied = sprintf("SELECT interview_id FROM interviews_applied WHERE user_id = '%s' AND del_status = '%s'", $_SESSION['log'], 0);
        $resultApplied = Db::query($sqlJobsApplied);
        if (mysql_num_rows($resultApplied) > 0) {
            while ($rowApplied = mysql_fetch_assoc($resultApplied)) {
                $interviewArray[] = $rowApplied['interview_id'];
            }
        }
    }

    $sql = sprintf("SELECT i.id as id,i.name as name,jc.name as job_cat,i.industry,i.company_name,i.country,i.salary,i.schedule_date,i.schedule_time,i.venue,i.description,i.interview,i.coordinator,i.contact FROM interviews i LEFT JOIN job_categories jc ON jc.id = i.job_category_id WHERE i.id=%d", $id);
    $result = Db::query($sql);
    if (mysql_num_rows($result) != 1) {
        $_SESSION['illegal'] = true;
        echo '<script> window.location.href="itljobs-upcominginterviews.php"; </script>';
        die();
    }

    $row = mysql_fetch_assoc($result);

    $created = explode('-', $row['created_date']);
    $created = array_reverse($created);
    $created = implode('/', $created);

    $closing = explode('-', $row['closing_date']);
    $closing = array_reverse($closing);
    $closing = implode('/', $closing);
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
            <script type="text/javascript" src="js/notify.js"></script>
            <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>


            <script>
                $(function () {
                    $("#login-popup").validate({
                        // Specify the validation rules


                        rules: {
                            'popup-email': {required: true, email: true},
                            'popup-password': {required: true}
                        },
                        // Specify the validation error messages

                        messages: {
                        },
                        submitHandler: function (form) {
                            var email = $.trim($('#popup-email').val());
                            var password = $.trim($('#popup-password').val());
                            if (email != '' && password != '') {
                                $.ajax({
                                    url: 'popup-login.php?email=' + email + '&password=' + password
                                }).done(function (status) {
                                    if (status == 'SUCCESS') {
                                        window.location.reload();
                                    } else {
                                        $('#errorMsg').html("<div class='alert alert-danger'>" + status + "</div>");
                                    }
                                })
                            }

                        }

                    });
                })
            </script>

        </head>
        <body>

            <!-- Container -->
            <div id="container">
                <!-- Header
                    ================================================== -->

                <?php include("header.php"); ?>


                <!-- End Header -->

                <!-- home-section 
                                  ================================================== -->
                <section class="page-banner-section">
                    <div class="container">

                    </div>
                </section>

                <section class="page-section">
                    <div class="container">
                        <div class="row">
                            <input type="hidden" name="id" id="id" value="<?php echo $user_id; ?>"/>

                            <section class="tables-page-section services-offer-section services-page-section">


                                <div class="container">

                                    <div class="title-section">
                                        <h1>Interview Details</h1>
                                    </div>
                                    <?php include('myprofile-sidemenu.php'); ?>
                                    <div class="col-md-10 jobs-m-listing">
                                        <h3>POSITION</h3>
                                        <p><?php echo $row['name']; ?></p>
                                        <h3>JOB CATEGORY</h3>
                                        <p><?php echo $row['job_cat']; ?></p>
                                        <h3>INDUSTRY</h3>
                                        <p><?php echo $row['industry']; ?></p>
                                        <h3>DESCRIPTION</h3>
                                        <p><?php echo html_entity_decode($row['description']); ?></p>
                                        <h3>COUNTRY</h3>
                                        <p><?php echo $row['country']; ?></p>
                                        <h3>SALARY</h3>
                                        <p><?php echo $row['salary']; ?></p>
                                        <h3>SCHEDULE DATE</h3>
                                        <p><?php echo $schedule; ?></p>
                                        <h3>SCHEDULE TIME</h3>
                                        <p><?php echo $row['schedule_time']; ?></p>
                                        <h3>VENUE</h3>
                                        <p><?php echo $row['venue']; ?></p>
                                        <h3>INTERVIEW TYPE</h3>
                                        <p><?php echo $row['interview']; ?></p>
                                        <h3>COORDINATOR</h3>
                                        <p><?php echo $row['coordinator']; ?></p>
                                        <h3>CONTACT</h3>
                                        <p><?php echo $row['contact']; ?></p>
                                        <div>
                                            <?php if (isset($_SESSION['log'])): ?>
                                                <div id="apply"><a href="javascript:void(0)" onclick="apply(<?php echo $row['id'] ?>, this)"><input type="submit" value="<?php echo (in_array($row['id'], $interviewArray)) ? 'APPLIED' : 'APPLY' ?>"></a></div>
                                            <?php else: ?>
                                                <div id="apply"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" ><input type="submit" value="APPLY"></a></div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </section>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h3 class="modal-title" id="myModalLabel">LOGIN</h3>
                            </div>
                            <div class="modal-body">
                                <div id="errorMsg"></div>
                                <form id="login-popup" action="#" novalidate>
                                    <div class="form-group">
                                        <!--label for="exampleInputEmail1">Email address</label-->
                                        <input type="email" name="popup-email" class="form-control" id="popup-email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <!--label for="exampleInputPassword1">Password</label-->
                                        <input type="password" name="popup-password" class="form-control" id="popup-password" placeholder="Password">
                                    </div>

                                    <div id="log"><a href="javascript:void(0)" ><input type="submit" value="LOGIN"></a></div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <!--a href="itljobs-registration.php" class="btn btn-success pull-left">Register</a-->
                                <!--<button type="button" class="btn btn-success pull-left" data-dismiss="modal">Register</button>-->
                                <!--button type="button" class="btn btn-primary" id="popup-login">Login</button-->
                                <p class="text-center"><b>Don't have an account?</b></p>
                                <p class="text-center"><a href="itljobs-registration.php"> Create Account</a></p>
                            </div>
                        </div>
                    </div>
                </div>


                <script>
                    function apply(job_id, $this) {
                        var current = $this;
                        $(current).children().val('APPLYING...');
                        $.ajax({
                            url: 'ajax-interviews-applied.php?intid=' + job_id
                        }).done(function (data) {
                            if (data == 'SUCCESS') {
                                viewDiv = $(current).parent().next();
                                $(viewDiv).hide();
                                $(current).children().val('APPLIED');
                                $(current).notify(
                                        "Interview Applied Successfully", "success",
                                        {position: "right"}
                                );
                            } else if (data == 'ALREADY APPLIED') {
                                viewDiv = $(current).parent().next();
                                $(viewDiv).hide();
                                $(current).children().val('APPLIED');
                                $(current).notify(
                                        "Already  Applied", "success",
                                        {position: "right"}
                                );
                            }
                        });
                    }
                </script>


                <!-- footer 
                                ================================================== -->

                <?php include("footer.php"); ?>

                <!-- End footer -->

            </div>
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
    echo '<h1>ACCESS DENIED!!!';
} 