<!doctype html>
<?php include 'check_session_rec.php'; 
if($_GET['subcategory']=='-1' && $_GET['experiencemin']==NULL && $_GET['experiencemax']==NULL && $_GET['location']==NULL){
    if(!isset($_GET['category'])  && !isset($_GET['qualification'])){
    $_SESSION['subsucc'] = 1;
    echo "<script type='text/javascript'>
location.href = 'search-resume.php';
</script>";
    die();
} }
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

                 <?php  include("header.php");?>

		<!-- End Header -->

      <!-- home-section
			================================================== -->
		<section id="home-section" class="slider2">

			<div class="tp-banner-container">
				<div class="tp-banner" >
					<ul>	<!-- SLIDE  -->

							<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"  data-title="Intro Slide">
							<!-- MAIN IMAGE -->
							<img src="images/main-slider-bg.jpg"  alt="slidebg1" data-lazyload="images/main-slider-bg.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
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
								style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">NEED NOT SEARCH ... JUST CHOOSE</span>
							</div>

							<!-- LAYER NR. 1 -->
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
                                       if(isset($_SESSION['reclog'])){
                                        $user_id  = $_SESSION['reclog'];
                                       }
                                   ?>
           <input type="hidden" name="id" id="id" value="<?php echo $user_id; ?>"/>

       	   <section class="tables-page-section">


			<div class="container">
<!--
				<div class="title-section">
					<h1>ALERTS</h1>
				</div>-->

				<div class="table-responsive">
                                   <div id="dissearch"></div>
                                   <div id="oldtable">
                                   <table class="table">
                                       <?php
                                                  $i=1;
                                                  require 'db.php';
                                                  $category      = $_GET['category'];
                                                  $subcategory   = $_GET['subcategory'];
//                                                  $experience    = $_POST['experience'];
                                                  $experiencemin    = isset($_GET['experiencemin']) ? trim($_GET['experiencemin']) : 0;
                                                  $experiencemax    = isset($_GET['experiencemax']) ? trim($_GET['experiencemax']) : 0;

                                                  $location      = $_GET['location'];
                                                  $qualificationArr = isset($_GET['qualification']) ? $_GET['qualification'] : array();
                                                  $qualification = "('" . implode("','", $qualificationArr) . "')";

                                                  //$query = sprintf("SELECT * from resume r RIGHT JOIN users u ON u.id = r.user_id WHERE r.job_category_id='%s' AND (r.sub_category = '%s' OR r.experience >= '%s' OR r.current_location = '%s' OR r.qualification = '%s') AND u.del_status='0'",$category,$subcategory,$experience,$location,$qualification);
                                                  $query_st = "SELECT * from resume r RIGHT JOIN users u ON u.id = r.user_id WHERE r.job_category_id='$category' AND u.del_status=0";
                                                  if($subcategory!=-1){
                                                      $query_st = $query_st." AND sub_category='$subcategory'";
                                                  }

                                                   $query_st = ($_GET['experiencemin'] > 0) ? $query_st." AND experience >= $experiencemin": $query_st;
                                                   $query_st = ($experiencemax > 0) ? $query_st." AND experience <= $experiencemax": $query_st;


                                                  if($location!=''){
                                                      $location = explode(',',$location);
                                                      $query_st=$query_st." AND current_location LIKE '%$location[0]%'";
                                                  }
                                                  if(!empty($qualificationArr)){
                                                      $query_st=$query_st." AND qualification IN $qualification";
                                                  }

                                                  $result = Db::query($query_st);

                                                  $countrow=mysql_num_rows($result);

                                                  if($countrow>0){

                                            ?>
						<thead>
							<tr>
                                                            <th>Sl.No</th>
						            <th>Name</th>
                                                            <th>Experience in India</th>
                                                            <th>Experience abroad</th>
                                                            <th>Specification/Certification</th>
                                                            <th>Resume Name</th>

							</tr>
						</thead>

                                                <tbody>
                                                <?php
                                                   while ($row = mysql_fetch_array($result)) {
                                                ?>
						                        <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td><?php echo $row['india_experience']; ?></td>
                                                    <td><?php echo $row['abroad_experience']; ?></td>
                                                    <td><?php echo $row['specification']; ?></td>
                                                    <!--<td><a href="uploads/<?php /*echo $row['file_name'] */?>" target="_blank"><?php /*$filename = "uploads/".$row['file_name']; if(file_exists($filename)){echo $row['file_name'];} else { echo 'File Doesnot exits'; } */?></a></td>-->
                                                    <td><a href="download-recruiter-file.php?filename=<?php echo $row['file_name'] ?>" target="_blank"><?php $filename = "uploads/".$row['file_name']; if(file_exists($filename)){echo $row['file_name'];} else { echo 'File Doesnot exits'; } ?></a></td>
			                                    </tr>
                                                  </tbody>
                                                       <?php $i++;  } }else{ ?>

                                                  <div class="col-md-12"><h2 style="text-align: center; margin-bottom: 10px; font-size: 30px;">NO MATCHING RESUMES. TRY A BROADER SEARCH.</h2></div>

                                                 <?php } ?>

					</table>
                                </div>


				</div>
                            </div>
		</section>



       </div>
       </div>
       </section>


       <!-- footer
			================================================== -->

          <?php  include("footer.php");?>

		<!-- End footer -->

     </div>
<!-- Revolution slider -->



<script>
        $(function(){

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