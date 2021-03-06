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
        <script type="text/javascript" src="js/notify.js"></script>
        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

    </head>

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
                    //form.submit();

                }

            });
        })
    </script>


    <body>

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
        <section class="services-offer-section">
            <div class="container">
                <div class="services-box ser-box2">


                    <div class="col-md-12">
                        <div class="accordion-box">

<?php
include 'db.php';
date_default_timezone_set('Asia/Kolkata');

if (isset($_SESSION['log'])) {

    $jobsArray = array();
    $jobsSaveArray = array();
    $sqlJobsApplied = sprintf("SELECT job_id FROM jobs_applied WHERE user_id = '%s' AND del_status = '%s'", $_SESSION['log'], 0);
    $resultApplied = Db::query($sqlJobsApplied);
    if (mysql_num_rows($resultApplied) > 0) {
        while ($rowApplied = mysql_fetch_assoc($resultApplied)) {
            $jobsArray[] = $rowApplied['job_id'];
        }
    }

    $sqlJobsSaved = sprintf("SELECT job_id FROM jobs_saved WHERE user_id = '%s' AND del_status = '%s'", $_SESSION['log'], 0);
    $resultJobsSaved = Db::query($sqlJobsSaved);
    if (mysql_num_rows($resultJobsSaved) > 0) {
        while ($rowSave = mysql_fetch_assoc($resultJobsSaved)) {
            $jobsSaveArray[] = $rowSave['job_id'];
        }
    }
}

$today_date = date('Y-m-d');
$query = sprintf("SELECT * FROM `jobs` WHERE active='%s' AND del_status='%s' AND closing_date>='%s' AND job_order>0 ORDER BY job_order ", 1, 0, $today_date);
$result = Db::query($query);
while ($row = mysql_fetch_array($result)) {
    ?><ol>
                                <div class="accord-elem"><li>
                                    <div class="accord-title">
                                        <a class="accord-link" href="#"></a>
                                        <h2><?php echo strtoupper($row['job_listing']); ?></h2>
                                    </div>
                                    <div class="accord-content" style="display: none;">
                                        <p><?php echo $row['job_description']; ?></p>
                                        <p><span style="color:#007ac9">Experience : </span><?php echo ($row['experience'] == 0) ? $row['experience'] . ' year' : $row['experience'] . ' years'; ?> ,
                                            <span style="color:#007ac9">Location : </span><?php echo $row['job_location']; ?>,
                                            <span style="color:#007ac9">Closing date : </span><?php echo date("d/m/Y", strtotime($row['closing_date'])); ?></p>

    <?php if (isset($_SESSION['log'])): ?>
                                            <div id="apply"><a href="javascript:void(0)" onclick="apply(<?php echo $row['id'] ?>, this)"><input type="submit" value="<?php echo (in_array($row['id'], $jobsArray)) ? 'APPLIED' : 'APPLY' ?>"></a></div>
        <?php if (!in_array($row['id'], $jobsArray)): ?>
                                                <div id="view"><a href="javascript:void(0)" onclick="view(<?php echo $row['id'] ?>, this)"><input type="submit" value="<?php echo (in_array($row['id'], $jobsSaveArray)) ? 'SAVED' : 'SAVE' ?>"></a></div>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <div id="apply"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" ><input type="submit" value="APPLY"></a></div>
                                            <div id="view"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"><input type="submit" value="SAVE"></a></div>
                                        <?php endif; ?>

                                    </div>
                                </div>
</li>
                                
    <?php 
}
$query = sprintf("SELECT * FROM `jobs` WHERE active='%s' AND del_status='%s' AND closing_date>='%s' AND job_order=0", 1, 0, $today_date);
$result = Db::query($query);
while ($row = mysql_fetch_array($result)) {
    ?><li>

                                <div class="accord-elem">
                                    <div class="accord-title">
                                        <a class="accord-link" href="#"></a>
                                        <h2><?php echo $i;?><?php echo strtoupper($row['job_listing']); ?></h2>
                                    </div>
                                    <div class="accord-content" style="display: none;">
                                        <p><?php echo $row['job_description']; ?></p>
                                        <p><span style="color:#007ac9">Experience : </span><?php echo ($row['experience'] == 0) ? $row['experience'] . ' year' : $row['experience'] . ' years'; ?> ,
                                            <span style="color:#007ac9">Location : </span><?php echo $row['job_location']; ?>,
                                            <span style="color:#007ac9">Closing date : </span><?php echo date("d/m/Y", strtotime($row['closing_date'])); ?></p>

    <?php if (isset($_SESSION['log'])): ?>
                                            <div id="apply"><a href="javascript:void(0)" onclick="apply(<?php echo $row['id'] ?>, this)"><input type="submit" value="<?php echo (in_array($row['id'], $jobsArray)) ? 'APPLIED' : 'APPLY' ?>"></a></div>
        <?php if (!in_array($row['id'], $jobsArray)): ?>
                                                <div id="view"><a href="javascript:void(0)" onclick="view(<?php echo $row['id'] ?>, this)"><input type="submit" value="<?php echo (in_array($row['id'], $jobsSaveArray)) ? 'SAVED' : 'SAVE' ?>"></a></div>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <div id="apply"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" ><input type="submit" value="APPLY"></a></div>
                                            <div id="view"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"><input type="submit" value="SAVE"></a></div>
                                        <?php endif; ?>

                                    </div>
                                </div>

</li>
   
    <?php
}
?>			
 </ol>                        

                        </div>
                    </div>



                </div>
            </div>
        </section>

        <!-- footer 
                        ================================================== -->

<?php include("footer.php"); ?>



        <!-- End footer -->

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

            function view(job_id, $this) {
                var current = $this;
                $.ajax({
                    url: 'ajax-jobs-saved.php?jobid=' + job_id
                }).done(function (data) {
                    if (data == 'SUCCESS') {
                        $(current).children().val('SAVED');
                        //$(current).notify('Job Successfully Saved!', 'success');

                        $(current).children().notify(
                                "Job Successfully Saved!",
                                {position: "right"}
                        );
                    } else if (data == 'ALREADY SAVED') {
                        $(current).children().notify(
                                "Job Already Saved!",
                                {position: "right"}
                        );
                    }
                });
            }

            function apply(job_id, $this) {
                var current = $this;
                $.ajax({
                    url: 'ajax-jobs-applied.php?jobid=' + job_id
                }).done(function (data) {
                    if (data == 'SUCCESS') {
                        viewDiv = $(current).parent().next();
                        $(viewDiv).hide();
                        $(current).children().val('APPLIED');
                        $(current).notify(
                                "Job Applied Successfully", "success",
                                {position: "right"}
                        );
                    }
                });
            }
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