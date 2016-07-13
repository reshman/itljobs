<!doctype html>
<?php
//include 'check_session_rec.php';
if (isset($_GET['id'])) {
    $id = trim($_GET['id']);
} else if(isset($_GET['token'])){    
    $id = openssl_decrypt(trim($_GET['token']), "seed", "token");
} else {
    echo '<h1>Access Denied</h1>';
    die();
}

$page = isset($_GET['p']) ? trim($_GET['p']) : 1;
$num_rec_per_page = 10;
$start = ($page - 1) * $num_rec_per_page;
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
        <link rel="stylesheet" href="css/jquery-ui.css">

        <script src="js/jquery-ui.js"></script>


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
            <section id="home-section" class="slider2"></section>
            <!-- End home section -->


            <!--    <div class="container">
                <div class="row">
                <div class="search-box">
                     <form>
                         <input type="text" name="keyword" id="keyword"  tabindex="1" placeholder="JOB TITLE,KEYWORDS">
                         <input type="text" name="location" id="location"  tabindex="1" placeholder="LOCATION">
                         <input  type="button" value="Create Alert" id="btn-search">
                     </form>
                </div>
                </div>
                </div>    -->
            <!-- services-offer
                            ================================================== -->

            <!-- End services-offer section -->


            <section class="page-section">
                <div class="container">
                    <div class="row">

                        <?php
                        if (isset($_SESSION['reclog'])) {
                            $user_id = $_SESSION['reclog'];
                        }
                        ?>
                        <input type="hidden" name="id" id="id" value="<?php echo $user_id; ?>"/>

                        <section class="tables-page-section">


                            <div class="container">
                                <div class="table-responsive">
                                    <div id="dissearch"></div>
                                    <div id="oldtable">
                                        <center class="title-section"><h1>APPLICANTS LIST</h1></center>
                                        <table class="table">
                                            <?php
                                            $i = $start + 1;
                                            require_once 'db.php';
                                            $query = sprintf("SELECT * from resume r RIGHT JOIN jobs_applied ja ON r.user_id=ja.user_id LEFT JOIN users u ON u.id = r.user_id WHERE ja.job_id=%d", $id);
                                            $query .= ' LIMIT ' . $start . ',' . $num_rec_per_page;                                            
                                            $result = Db::query($query);
                                            $countrow = mysql_num_rows($result);
                                            if ($countrow > 0) {
                                                ?>
                                                <thead>
                                                    <tr>
                                                        <th>Sl.No</th>
                                                        <th>Name</th>
                                                        <th>Experience in India</th>
                                                        <th>Experience abroad</th>
                                                        <th>Specification/Certification</th>
                                                        <th>Resume</th>

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    while ($row = mysql_fetch_array($result)) {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo $row['name']; ?></td>
                                                            <td><?php echo $row['india_experience'] . ' Year(s)'; ?></td>
                                                            <td><?php echo $row['abroad_experience'] . ' Year(s)'; ?></td>
                                                            <td><?php echo $row['specification']; ?></td>
                                                            <td><?php
                                                                $filename = "uploads/" . $row['file_name'];
                                                                if (file_exists($filename)) {
                                                                    ?>
                                                                    <a href="download-recruiter-file.php?filename=<?php echo $row['file_name'] ?>" target="_blank"><?= $row['file_name']; ?></a>
                                                                    <?php
                                                                } else {
                                                                    echo 'File Doesnot exists';
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <?php
                                                    $i++;
                                                }
                                            } else {
                                                ?>

                                                <div class="col-md-12"><h2 style="text-align: center; margin-bottom: 10px; font-size: 30px;">NO APPLICANTS.</h2></div>

                                            <?php } ?>

                                        </table>
                                    </div>


                                </div>
                                <?php
                                $result = Db::query($total_query);
                                $total_records = mysql_num_rows($result);
                                $total_pages = ceil($total_records / $num_rec_per_page);
                                if ($total_pages > 1) {
                                    ?>
                                    <center>
                                        <ul class="pagination">
                                            <li <?php if ($page == 1) { ?> class='disabled' <?php } ?>><a href="list_applicants.php?id=<?= $id ?>&p=1"><<</a></li>
                                            <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                                                <li <?php if ($page == $i) { ?> class='active' <?php } ?>><a href="list_applicants.php?id=<?= $id ?>&p=<?= $i ?>"><?= $i ?></a></li>
                                            <?php } ?>
                                            <li <?php if ($page == $total_pages) { ?> class='disabled' <?php } ?>><a href="list_applicants.php?id=<?= $id ?>&p=<?= $total_pages ?>">>></a></li>
                                        </ul>
                                    </center>
                                <?php } ?>
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
        <!-- Revolution slider -->



        <script>
            $(function () {

                $('#keyword').autocomplete({
                    source: function (request, response) {
                        $.ajax({
                            url: 'searchkeyword.php',
                            dataType: "json",
                            data: {
                                query: $('#keyword').val(),
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

                $('#location').autocomplete({
                    source: function (request, response) {
                        $.ajax({
                            url: 'searchlocation.php',
                            dataType: "json",
                            data: {
                                query: $('#location').val(),
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
        <script>

            $('#btn-search').on('click', function () {

                var keyword = $('#keyword').val();
                var location = $('#location').val();
                var id = $('#id').val();
                $.ajax({
                    url: 'searchprocessalert.php',
                    type: 'POST',
                    data: {keyword: keyword, location: location, id: id},
                    success: function (data) {
                        // alert(data.title);

                        $('#dissearch').html(data);
                        $('#oldtable').hide();
                    }
                })

            });

        </script>
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