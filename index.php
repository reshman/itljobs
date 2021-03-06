<?php
(!isset($_SESSION)) ? session_start() : null;
include_once 'db.php';
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
    <title>Job Search | Overseas Jobs | Recruitment | Vacancies | Work Abroad</title>

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

    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/jquery-ui.js"></script>
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
                    //form.submit();

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
<section id="home-section" class="slider2">

    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>    <!-- SLIDE  -->

                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"
                    data-title="Intro Slide">
                    <!-- MAIN IMAGE -->
                    <img src="images/main-slider-bg.jpg" alt="slidebg1" data-lazyload="images/main-slider-bg.jpg"
                         data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->

                    <div class="tp-caption medium_thin_grey customin"
                         data-x="310"
                         data-y="160"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="1000"
                         data-start="1200"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">LOOKING FOR A
                        BETTER JOB ...</span>
                    </div>

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption finewide_medium_white lft tp-resizeme rs-parallaxlevel-0"
                         data-x="195"
                         data-y="230"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="1000"
                         data-start="1600"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">GET IT RIGHT FIRST
                        TIME
                    </div>


                    <!-- LAYER NR. 3
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
                    </div>-->

                    <!-- LAYER NR. 4
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
                    </div> -->

                </li>

            </ul>
            <div class="tp-bannertimer"></div>
        </div>
    </div>
</section>
<!-- End home section -->
<div class="container">
    <div class="row">
        <div class="search-box">
            <form method="GET" action="search-job.php" enctype="multipart/form-data">
                <input type="text" placeholder="JOB TITLE,KEYWORDS" id="box1" name="q">
                <input type="text" placeholder="COUNTRY" id="box2" name="l">
                <input type="submit" value="SEARCH JOBS" id="btn-search">
            </form>
        </div>
    </div>
</div>
<!-- services-offer
                ================================================== -->
<section class="services-offer-section">
    <div class="container">
        <div class="title-section">
            <!--<h1>LOOKING FOR A BETTER JOB ... GET IT RIGHT FIRST TIME</h1>-->

            <p>You can start by posting a chore you need done, <br>
                or a service you can do for others</p>

            <div id="job">
                <a href="itljobs-registration.php" style="text-decoration: none;">
                    <input type="submit" value="POST A RESUME">
                </a>
            </div>
        </div>

    </div>
</section>
<!-- End services-offer section -->

<section class="page-section">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <section class="news-section">
                    <div class="title-section">
                        <h1>HOT JOBS</h1>
                    </div>
                    <div class="news-box" id="jobs-box">
                        <div class="arrow-box-job">
                            <a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
                            <a href="#" class="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <div id="owl-job" class="owl-carousel">
                            <?php
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
                            $query = sprintf("SELECT j.*,jc.name as jcname,c.logo as clogo FROM jobs as j JOIN job_categories as jc ON jc.id=j.job_category_id JOIN company as c ON c.company_name=j.company_name WHERE active='%s' AND del_status='%s' AND closing_date>='%s' AND j.job_order>%d ORDER BY job_order LIMIT 5", 1, 0, date('Y-m-d'), 0);
                            $result = Db::query($query);
                            while ($row = mysql_fetch_assoc($result)) {
                                ?>
                                <div class="item">
                                  <div class="col-md-12 bod ">
                                    <div class="col-md-3">
                                      <div class="logo-location">
                                        <img src="images/logos/<?= $row['clogo'] ?>" alt="" class="img-resp">
                                      </div>
                                    </div>
                                    <div class="col-md-9">
                                      <div class="company_name">
                                        <h3><?= $row['job_listing'] ?></h3>
                                        <small><?= $row['company_name'] ?></small>
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="col-md-12 col-xs-12 col-sm-12">
                                    <div class="job_desc">
                                        <p>
                                            <?php
                                                echo $row['job_description'];
                                            ?>
                                        </p>
                                    </div>
                                  </div>
                                        <div class="buttons">
                                            <?php if (isset($_SESSION['log'])) { ?>
                                                <div id="apply"><a href="javascript:void(0)"
                                                                   onclick="apply(<?php echo $row['id'] ?>, this)"><input
                                                            type="submit"
                                                            value="<?php echo (in_array($row['id'], $jobsArray)) ? 'APPLIED' : 'APPLY' ?>"></a>
                                                </div>
                                            <?php } else { ?>
                                                <span id="apply"><a href="javascript:void(0)" data-toggle="modal"
                                                                    data-target="#myModal"><input type="submit"
                                                                                                  value="APPLY"></a>
                                                </span>
                                            <?php } ?>
                                            <div id="view">
                                                <form action="itljobs-hotjobs.php"><input type="submit"
                                                                                          value="MORE JOBS"></form>
                                            </div>
                                        </div>
                                </div>
                            <?php } ?>
                            <!-- Interview section -->
                            <?php
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
                            $query = sprintf("SELECT interviews.*, job_categories.name as jcname,company.logo as clogo FROM interviews JOIN job_categories ON interviews.job_category_id = job_categories.id JOIN company ON company.company_name=interviews.company_name WHERE schedule_date>='%s' AND active='%s' AND del_status='%s' AND vih=%d ORDER BY schedule_date LIMIT 5", date('Y-m-d'), 1, 0,1);
                            $result = Db::query($query);
                            while ($row = mysql_fetch_assoc($result)) {
                                ?>
                                <div class="item">
                                  <div class="col-md-12 bod">
                                    <div class="col-md-3">
                                      <div class="logo-location">
                                        <img src="images/logos/<?= $row['clogo'] ?>" alt="" class="img-resp">
                                      </div>
                                    </div>
                                    <div class="col-md-9">
                                      <div class="company_name">
                                        <h3><?= $row['industry'] ?></h3>
                                        <small><?= $row['company_name'] ?></small>
                                      </div>
                                    </div>
                                  </div>
                                    <div class="col-md-12 col-xs-12 job_desc">
                                        <p>
                                            <?php
                                                echo str_replace(str_split('{}'),'',$row['description']);
                                            ?>
                                        </p>
                                    </div>
                                        <div class="buttons">
                                            <?php if (isset($_SESSION['log'])): ?>
                                                <div id="apply"><a href="javascript:void(0)"
                                                                   onclick="applyInterview(<?php echo $row['id'] ?>, this)"><input
                                                            type="submit"
                                                            value="<?php echo (in_array($row['id'], $interviewArray)) ? 'APPLIED' : 'APPLY' ?>"></a>
                                                </div>
                                            <?php else: ?>
                                                <div id="apply"><a href="javascript:void(0)" data-toggle="modal"
                                                                   data-target="#myModal"><input type="submit"
                                                                                                 value="APPLY"></a>
                                                </div>
                                            <?php endif; ?>
                                            <div id="view">
                                                <form action="itljobs-hotjobs.php"><input type="submit"
                                                                                          value="MORE JOBS"></form>
                                            </div>
                                        </div>
                                </div>
                            <?php } ?>
                        </div>

                    </div>
                </section>

            </div>
            <div class="col-md-6">
                <section class="news-section">
                    <div class="title-section">
                        <h1>UPCOMING INTERVIEWS</h1>
                    </div>
                    <div class="news-box" id="jobs-box">
                        <div class="arrow-box-upcoming">
                            <a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
                            <a href="#" class="next"><i class="fa fa-angle-right"></i></a>
                        </div>

                        <div id="owl-upcoming" class="owl-carousel">
                            <?php
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

                            $sql = sprintf("SELECT DISTINCT company.company_name,logo,interviews.country FROM company JOIN interviews ON company.company_name = interviews.company_name WHERE active='%s' AND del_status='%s' AND schedule_date>='%s' ORDER BY interviews.schedule_date DESC LIMIT 5", 1, 0, date('Y-m-d'));
                            $cresult = Db::query($sql);
                            while ($crow = mysql_fetch_assoc($cresult)) {
                                ?>
                                <div class="item">
                                  <div class="col-md-12 bod">
                                    <div class="col-md-3">
                                      <div class="logo-location">
                                        <img src="images/logos/<?= $crow['logo'] ?>" alt="" class="img-resp">
                                      </div>
                                    </div>
                                    <div class="col-md-9">
                                      <div class="company_name">
                                        <h3><?= $crow['company_name'] ?></h3>
                                        <small><?= $crow['country'] ?></small>
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="col-md-12 col-xs-12">
                                    <div class="job_list">
                                        <?php
                                        $query = sprintf("SELECT interviews.*, job_categories.name as jcname FROM interviews JOIN job_categories ON interviews.job_category_id = job_categories.id WHERE schedule_date>='%s' AND active='%s' AND del_status='%s' AND company_name='%s' AND country='%s' ORDER BY schedule_date LIMIT 3", date('Y-m-d'), 1, 0, $crow['company_name'],$crow['country']);
                                        $result = Db::query($query);
                                        while ($row = mysql_fetch_assoc($result)) {
                                            $interview_location = array();
                                            $postDate = date("d/m/Y", strtotime($row['created_date']));
                                            $explode = explode(',', $row['venue']);
                                            $end = '';
                                            if (count($explode) > 0) {
                                                $end = array_pop($explode);
                                            } else {
                                                $end = $row['venue'];
                                            }
                                            preg_match_all("/{{(.*)}}/U", $row['description'], $match_array);
                                            foreach ($match_array[1] as $value) {
                                                $location = explode('AT', $value)[1];
                                                if(count($interview_location)>2){
                                                    $interview_location [] = '...';
                                                    break;
                                                }
                                                if(!in_array($location,$interview_location)){
                                                    $interview_location []= $location;
                                                }
                                            }
                                            ?>
                                            <div class="interview-border col-md-12 col-sm-12 col-xs-12">
                                              <div class="col-md-9 col-sm-9 col-xs-12">
                                                <div class="each_job">
                                                    <div class="job_name">
                                                        <?php echo strtoupper($row['industry']);
                                                        if(count($interview_location)>0) {
                                                            echo ' - ' . implode(' | ', $interview_location);
                                                        }
                                                        ?></div>
                                                </div>
                                              </div>
                                              <div class="col-md-3 col-sm-3 col-xs-12">
                                                 <div class="buttons">
                                                            <?php if (isset($_SESSION['log'])): ?>
                                                            <div id="apply"><a href="javascript:void(0)"
                                                                           onclick="applyInterview(<?php echo $row['id'] ?>, this)"><input
                                                                    type="submit"
                                                                    value="<?php echo (in_array($row['id'], $interviewArray)) ? 'APPLIED' : 'APPLY' ?>"></a>
                                                            </div>
                                                            <?php else: ?>
                                                            <div id="apply"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal"><input type="submit" value="APPLY"></a>
                                                            </div>
                                                            <?php endif; ?>
                                                 </div>
                                               </div>
                                            </div>
                                                    <?php } ?>
                                            </div>
                                      </div>
                                    <div id="view">
                                        <form action="itljobs-upcominginterviews.php"><input type="submit"
                                                                                             value="MORE INTERVIEWS"></form>
                                    </div>
                                  </div>
                            <?php } ?>
                        </div>

                    </div>

                </section>
            </div>

        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>

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
<div class="item news-post">
    <img src="images/itl-clients-11.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-clients-12.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-clients-13.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-clients-14.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-clients-15.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-clients-16.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-clients-17.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-clients-18.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-clients-19.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-clients-20.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-clients-21.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-clients-22.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-clients-23.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-clients-24.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-clients-25.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-clients-26.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-clients-27.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-clients-29.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-clients-30.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-clients-31.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-clients-32.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-clients-33.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-clients-34.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-clients-35.jpg" alt="">


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

</div>
<!-- Revolution slider -->
<script type="text/javascript">

    $(function () {
        $('#popup-login').on('click', function () {
            var email = $.trim($('#popup-email').val());
            var password = $.trim($('#popup-password').val());
            if (email != '' && password != '') {
                $.ajax({
                    url: 'popup-login.php?email=' + email + '&password=' + password
                }).done(function (status) {
                    if (status == 'SUCCESS') {
                        window.location.reload();
                    }
                })
            }
        });
    });

    function view(job_id, $this) {
        var current = $this;
        $(current).children().val('SAVING...');
        $.ajax({
            url: 'ajax-jobs-saved.php?jobid=' + job_id
        }).done(function (data) {
            if (data == 'SUCCESS') {
                $(current).children().val('SAVED');
                //$(current).notify('Job Successfully Saved!', 'success');

                $(current).children().notify(
                    "Job Successfully Saved!", "success",
                    {position: "right"}
                );
            } else if (data == 'ALREADY SAVED') {

                $(current).children().val('SAVED');
                $(current).children().notify(
                    "Job Already Saved!",
                    {position: "right"}
                );
            }
        });
    }

    //apply job
    function apply(job_id, $this) {
        var current = $this;
        $.ajax({
            url: 'ajax-jobs-applied.php?jobid=' + job_id
        }).done(function (data) {
            if (data == 'SUCCESS') {
                //viewDiv = $(current).parent().next();
                //$(viewDiv).hide();
                $(current).children().val('APPLIED');
            }
        });
    }

    //apply interview
    function applyInterview(int_id, $this) {
        var current = $this;
        $.ajax({
            url: 'ajax-interviews-applied.php?intid=' + int_id
        }).done(function (data) {
            if (data == 'SUCCESS') {
                //viewDiv = $(current).parent().next();
                //$(viewDiv).hide();
                $(current).children().val('APPLIED');
            }
        });
    }
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

<script>
    $(function () {

        $('#box1').autocomplete({
            source: function (request, response) {
                $.ajax({
                    url: 'searchkeywordindex.php',
                    dataType: "json",
                    data: {
                        query: $('#box1').val(),
                        type: 'search'
                    },
                    success: function (data) {
                        response($.map(data, function (item) {
                            return {
                                label: item,
                                value: item
                            }
                        }));
                    }
                });
            },
            autoFocus: true,
            minLength: 1
        });

        $('#box2').autocomplete({
            source: function (request, response) {
                $.ajax({
                    url: 'searchlocationindex.php',
                    dataType: "json",
                    data: {
                        query: $('#box2').val(),
                        type: 'search'
                    },
                    success: function (data) {
                        response($.map(data, function (item) {
                            return {
                                label: item,
                                value: item
                            }
                        }));
                    }
                });
            },
            autoFocus: true,
            minLength: 0
        });

    });
</script>
</body>
</html>