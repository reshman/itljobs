<!doctype html>
<?php include 'check_session_rec.php'; ?>

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
            <!-- End home section -->
            <!-- <div class="container">
             <div class="row">    
             <div class="search-box">
          <form> 
           <input type="text" placeholder="JOB TITLE,KEYWORDS" id="box1">
           <input type="text" placeholder="COUNTRY" id="box2">
            <input type="submit" value="SEARCH JOBS" id="btn-search">
            </form> 
             </div>
             </div>
             </div>     -->


            <section class="page-section">
                <div class="container">
                    <div class="row">


                        <?php
                        if (isset($_SESSION['reclog'])) {
                            $user_id = $_SESSION['reclog'];
                        }
                        ?>
                        <input type="hidden" name="id" id="id" value="<?php echo $user_id; ?>"/>

                        <section class="tables-page-section services-offer-section services-page-section">


                            <div class="container">

                                <div class="title-section">
                                    <h1>Jobs List</h1>
                                </div>
                                <?php include('myprofile-sidemenu.php'); ?>
                                <div class="col-md-10">
                                    <script>
                                        $('#status-message').fadeOut(5000);
                                    </script>
                                    <?php
                                    if (isset($_SESSION['illegal'])) {
                                        ?>
                                        <div class="alert alert-danger alert-dismissable">

                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                            Sorry You are not allowed to Modify or View this Job.

                                        </div>
                                        <?php
                                        unset($_SESSION['illegal']);
                                    }
                                    if (isset($_SESSION['regsucc']) != '') {

                                        if ($_SESSION['regsucc'] == '1') {
                                            ?>

                                            <div class="alert alert-success alert-dismissable">

                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                Job Edited successfully <a href="#" class="alert-link"></a>.

                                            </div>

                                            <?php
                                        } else if ($_SESSION['regsucc'] == '0') {
                                            ?>

                                            <div class="alert alert-success alert-dismissable">

                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                Job Deleted successfully <a href="#" class="alert-link"></a>.

                                            </div>

                                            <?php
                                        } else if ($_SESSION['regsucc'] == '3') {
                                            ?>

                                            <div class="alert alert-danger alert-dismissable">

                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                Salary Range invalid <a href="#" class="alert-link"></a>.

                                            </div>

                                            <?php
                                        } else if ($_SESSION['regsucc'] == '4') {
                                            ?>

                                            <div class="alert alert-danger alert-dismissable">

                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                File upload failed because of one of the following reasons
                                                <ol>
                                                    <li>Incorrect File type</li>
                                                    <li>Size of file exceeds 10 MB</li>
                                                    <li>Server Error</li>
                                                </ol>
                                                <a href="#" class="alert-link"></a>.

                                            </div>

                                            <?php
                                        } else {
                                            ?>

                                            <div class="alert alert-danger alert-dismissable">

                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                Failed <a href="#" class="alert-link"></a>.

                                            </div>

                                            <?php
                                        }
                                        unset($_SESSION['regsucc']);
                                    }
                                    ?>

                                    <div class="table-responsive">
                                        <div id="dissearch"></div>
                                        <div id="oldtable">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Title</th>
                                                        <th>Company</th>
                                                        <th>Create Date</th>
                                                        <th>Closing Date</th>
                                                        <th>Applicants List</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>

                                                    </tr>
                                                </thead>

                                                <?php
                                                $i = 1;
                                                require_once 'db.php';
                                                $query = sprintf("SELECT * FROM jobs WHERE user_id='%s' AND del_status=0 ORDER BY job_listing", $user_id);
                                                $result = Db::query($query);
                                                if (mysql_num_rows($result) < 1) {
                                                    ?>
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="6">NO JOBS FOUND</td>
                                                        </tr>
                                                    </tbody>
                                                <?php
                                                } else {
                                                    while ($row = mysql_fetch_array($result)) {

                                                        $created = explode('-', $row['created_date']);
                                                        $created = array_reverse($created);
                                                        $created = implode('/', $created);

                                                        $closing = explode('-', $row['closing_date']);
                                                        $closing = array_reverse($closing);
                                                        $closing = implode('/', $closing);
                                                        ?>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php echo $i; ?></td>
                                                                <td><a href="view_rec_job.php?id=<?php echo $row['id']; ?>"><?php echo $row['job_listing'] ?></a></td>
                                                                <td><?= $row['company_name'] ?></td>
                                                                <td><?php echo $created; ?></td>
                                                                <td><?php echo $closing; ?></td>
                                                                <td><a href="list_applicants.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"><span class="fa fa-list"></span></a></td>
                                                                <td><a href="edit_rec_job.php?id=<?php echo $row['id']; ?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a></td>
                                                                <td><a onclick="deleteConfirm('delete_rec_job.php?id=<?php echo $row['id']; ?>')" class="btn btn-danger"><span class="fa fa-times"></span></a></td>

                                                            </tr>
                                                        </tbody>

                                                        <?php
                                                        $i++;
                                                    }
                                                }
                                                ?>

                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>

            <!-- footer 
                            ================================================== -->

<?php include("footer.php"); ?>

            <!-- End footer -->

        </div>
        <script>
            function deleteConfirm(href) {
                var ask = window.confirm("Are you sure you want to delete this item?");
                if (ask) {
                    document.location.href = href;
                }
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