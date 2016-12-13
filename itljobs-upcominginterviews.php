<?php session_start(); ?>
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
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,900,300' rel='stylesheet'
          type='text/css'>
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

                messages: {},
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

<!-- Header
    ================================================== -->

<?php include("header.php"); ?>

<!-- End Header -->

<!-- home-section
                  ================================================== -->

<section class="page-banner-section">
    <div class="container">

</section>
<section class="services-offer-section">
    <div class="container">
        <div class="services-box ser-box2">
            <?php
            if (isset($_SESSION['illegal'])) {
                ?>
                <div class="alert alert-danger alert-dismissable">

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                    Invalid.

                </div>
                <?php
                unset($_SESSION['illegal']);
            }
            ?>

            <div class="col-md-12">
                <div class="accordion-box">

                    <?php
                    include 'db.php';
                    date_default_timezone_set('Asia/Kolkata');
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
                    $today_date = date('Y-m-d');

                    $query = sprintf("SELECT DISTINCT company_name,country FROM interviews WHERE (schedule_date>='%s' OR schedule_date='') AND active='%s' AND del_status='%s' ORDER BY company_name", $today_date, 1, 0);
                    //                            die();
                    $cresult = Db::query($query);
                    while ($crow = mysql_fetch_assoc($cresult)) {
                    $location_array = array();
                    ?>

                    <div class="accord-elem">
                        <div class="accord-title">
                            <a class="accord-link" href="#"></a>

                            <h2><?php echo strtoupper($crow['company_name']) . ', ' . strtoupper($crow['country']); ?></h2>
                        </div>

                        <div class="accord-content" style="display: none;">
                            <div class="col-md-12">
                                <div class="accordion-box">
                                    <?php
                                    $query = sprintf("SELECT id,job_category_id,company_name,description,industry,schedule_date,schedule_time,venue,interview,contact,country,salary,coordinator,active,del_status,date FROM interviews WHERE (schedule_date>='%s' OR schedule_date='%s') AND active='%s' AND del_status='%s' AND company_name='%s' AND country='%s' ORDER BY schedule_date", $today_date, '', 1, 0, $crow['company_name'], $crow['country']);
                                    //$query = sprintf("SELECT js.id,js.job_listing,js.job_description,js.active,js.del_status,js.experience,js.job_location,js.closing_date,inv.title,inv.active,inv.del_status FROM jobs as js JOIN interviews as inv ON js.id=inv.title WHERE js.active=1 AND inv.active=1 AND js.del_status=0 AND inv.del_status=0 AND inv.schedule_date>='$today_date'"); die;
                                    $result = Db::query($query);
                                    while ($row = mysql_fetch_array($result)) {
                                        $interview_location = array();
                                        $sqlCat = sprintf("SELECT name FROM job_categories WHERE id=%d", $row['job_category_id']);
                                        $resultCat = Db::query($sqlCat);
                                        $rowCat = mysql_fetch_assoc($resultCat);
                                        preg_match_all("/{{(.*)}}/U", $row['description'], $match_array);
                                        foreach ($match_array[1] as $value) {
                                            $location = explode('AT', $value)[1];
                                            if (!in_array($location, $location_array)) {
                                                $location_array [] = $location;
                                            }
                                            if (!in_array($location, $interview_location)) {
                                                $interview_location [] = $location;
                                            }
                                        }

                                        ?>

                                        <div class="accord-elem-inner">
                                            <div class="accord-title-inner">
                                                <a class="accord-link-inner" href="#"></a>

                                                <h2><?php echo strtoupper($row['industry']); ?><span
                                                        style="float:right;"><?php if(count($interview_location)>0){echo implode(' | ', $interview_location) . ' | ';} echo 'Posted on: ' . strtoupper(date("d/m/Y", strtotime($row['date']))); ?></span>
                                                </h2>
                                            </div>
                                            <div class="accord-content-inner" style="display: none;">
                                                <p><?php echo str_replace(str_split('{}'), '', $row['description']); ?></p>

                                                <?php
                                                if (!empty($row['salary'])) {
                                                    ?>
                                                    <p>
                                                            <span
                                                                style="color:#6495ED">Salary Structure : </span><?php echo $row['salary']; ?>
                                                    </p>
                                                <?php
                                                }
                                                ?>

                                                <?php
                                                if (!empty($row['coordinator'])) {
                                                    ?>
                                                    <p>
                                                            <span
                                                                style="color:#6495ED">Co ordinator : </span><?php echo $row['coordinator']; ?>
                                                    </p>
                                                <?php
                                                }
                                                ?>
                                                <p>
                                                        <span
                                                            style="color:#6495ED">Contact : </span><?php echo $row['contact']; ?>
                                                </p>

                                                <p>
                                                    <span style="color:#6495ED">Interview date : </span>
                                                    <?php
                                                    if ($row['schedule_date'] == '') {
                                                        echo 'Comming soon';
                                                    } else {
                                                        echo $row['schedule_date'] . ' at ' . $row['schedule_time'];
                                                    }
                                                    ?>
                                                </p>

                                                <?php if (isset($_SESSION['log'])) { ?>
                                                    <div id="apply"><a href="javascript:void(0)"
                                                                       onclick="apply(<?php echo $row['id'] ?>, this)"><input
                                                                type="submit"
                                                                value="<?php echo (in_array($row['id'], $interviewArray)) ? 'APPLIED' : 'APPLY' ?>"></a>
                                                    </div>
                                                <?php } else { ?>
                                                    <div id="apply"><a href="javascript:void(0)" data-toggle="modal"
                                                                       data-target="#myModal"><input type="submit"
                                                                                                     value="APPLY"></a>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(count($location_array)>0){ ?>
                        <div class="location_below"><?php echo implode(' | ', $location_array); ?></div>
                    <?php }
                    }
                    ?>
                </div>
            </div>


        </div>
    </div>
</section>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="myModalLabel">LOGIN</h3>
                </div>
                <div class="modal-body">
                    <div id="errorMsg"></div>
                    <form id="login-popup" action="#" novalidate>
                        <div class="form-group">
                            <!--label for="exampleInputEmail1">Email address</label-->
                            <input type="email" name="popup-email" class="form-control" id="popup-email"
                                   placeholder="Email">
                        </div>
                        <div class="form-group">
                            <!--label for="exampleInputPassword1">Password</label-->
                            <input type="password" name="popup-password" class="form-control" id="popup-password"
                                   placeholder="Password">
                        </div>

                        <div id="log"><a href="javascript:void(0)"><input type="submit" value="LOGIN"></a></div>
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

<?php include ("footer.php"); ?>

<!-- End footer -->

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