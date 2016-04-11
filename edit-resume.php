<!doctype html>
<?php include 'check_session_js.php'; ?>

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

    <link href="css/datepicker.css" rel="stylesheet" />
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" />


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
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
    <script src="js/jquery.geocomplete.js"></script>
    <style>

        /* Hide the file input using
        opacity */
        [type=file] {
            position: absolute;
            filter: alpha(opacity=0);
            opacity: 0;
        }
        input, [type="file"] ~ label {
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
    <style>
        .rbutton{
            font-size: 30px;
            margin-top: 10px;
        }
    </style>
</head>


<body onload="document.getElementById('contact-form').focus()">

<!-- Container -->
<div id="container">
<!-- Header
    ================================================== -->
<?php
session_start();
include 'header.php';
?>

<!-- home-section
   ================================================== -->

<section class="page-banner-section">
    <div class="container">

    </div>
</section>



<section class="register-section services-offer-section services-page-section">
<div class="container">
<div class="title-section">
    <h1>EDIT MY PROFILE</h1>
</div>
<?php include('myprofile-sidemenu.php');?>
<div class="col-md-10">
<form id="contact-form" method="POST" action="editresume-process.php" enctype="multipart/form-data">

<?php
error_reporting(0);
session_start();
include 'db.php';
$id = $_SESSION['log'];


if ($_SESSION['editsucc'] != '') {
    if ($_SESSION['editsucc'] == '1') {
        ?>
        <div class="alert alert-success">
            Resume Details Updated successfully
        </div>
    <?php
    } else if ($_SESSION['editsucc'] == '3') {
        ?>
        <div class="alert alert-danger">
            <?php echo "<span style='color:red'/><b>Incorrect Captcha!!</b></span><br/><br/>"; ?>
        </div>
    <?php
    } else if ($_SESSION['editsucc'] == '4') {
        ?>
        <div class="alert alert-danger">
            <?php echo "<span style='color:red'/><b>Please upload only PDF Files!</b></span><br/><br/>"; ?>
        </div>
    <?php
    } else {
        ?>
        <div class="alert alert-danger">
            <?php echo "<span style='color:red'/><b>Failed</b></span><br/><br/>"; ?>
        </div>
    <?php
    }
    unset($_SESSION['editsucc']);
}
?>
<input name="id" type="hidden" value="<?php echo $id;?>">
<?php
    $query  = sprintf("SELECT jc.id,r.mobile,r.qualification, r.user_id, r.abroad_experience,r.india_experience, r.experience,r.specification,r.abroad_experience, r.experience, r.current_location,r.date_of_birth,r.sub_category,r.file_name, u.name as name,u.email ,jc.name as jobcatname from resume r LEFT JOIN  users u ON r.user_id = u.id LEFT JOIN job_categories jc ON r.job_category_id=jc.id WHERE r.user_id='%s'",$id );

    $result = Db::query($query);
    $rowresult = mysql_fetch_array($result);
    $jobcat = $rowresult['id'];
    $subcat = $rowresult['sub_category'];
    $pre    = $rowresult['name'];
    $pre_of_name = strstr($pre, '.', true);
    $name   = substr($pre, strpos($pre, ".") + 1);
    $ab_exp = $rowresult['abroad_experience'];
    $ind_exp= $rowresult['india_experience'];
    $qualification = $rowresult['qualification'];
    $ab_exp  = filter_var($ab_exp, FILTER_SANITIZE_NUMBER_INT);
    $ind_exp = filter_var($ind_exp, FILTER_SANITIZE_NUMBER_INT);

    $dob     = strtotime($rowresult['date_of_birth']);
?>
<div class="col-md-12">
    <div class="col-md-12">

        <select name="job_category_id" class="job">
            <option disabled="" selected="">JOB APPLIED FOR</option>
            <?php

            $qry = sprintf("SELECT * FROM `job_categories`");
            $res = Db::query($qry);
            while ($row = mysql_fetch_array($res)) {
                ?>
                <option <?php echo ($jobcat == $row['id'])? 'selected = selected' : '';?> value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
            <?php
            }
            ?>
        </select>
    </div>
</div>


<div class="col-md-12">
    <div class="col-md-4">

        <select name="title">
            <option disabled="" selected="">TITLE</option>
            <option <?php echo ($pre_of_name == 'Mr')? 'selected = selected' : '';?> value="Mr">Mr</option>
            <option <?php echo ($pre_of_name == 'Mrs')? 'selected = selected' : '';?> value="Mrs">Mrs</option>
            <option <?php echo ($pre_of_name == 'Miss')? 'selected = selected' : '';?> value="Miss">Miss</option>
            <option <?php echo ($pre_of_name == 'Ms')? 'selected = selected' : '';?> value="Ms">Ms</option>
        </select>
    </div>

    <div class="col-md-4">

        <input name="name" id="name" type="text" placeholder="FULL NAME " value="<?php echo $name?>">
    </div>

    <div class="col-md-4">
        <input type='text' id="datepicker" name="dob" placeholder="DATE OF BIRTH (DD/MM/YYYY)" value="<?php echo date('d/m/Y', $dob)?>" readonly/>
    </div>

</div>
<!--     ************************************************  -->
<div class="col-md-12">

    <div class="col-md-4">
        <!-- <input name="qualification" id="qualification" type="text" placeholder="QUALIFICATION ">    -->
        <select name="qualification">
            <option disabled="" selected="">Select Qualification</option>
            <option <?php echo ($rowresult['qualification'] == 'B.A')? 'selected = selected' : '';?> value="B.A">B.A</option>
            <option <?php echo ($rowresult['qualification'] == 'B.Arch')? 'selected = selected' : '';?> value="B.Arch">B.Arch</option>
            <option <?php echo ($rowresult['qualification'] == 'BCA')? 'selected = selected' : '';?> value="BCA">BCA</option>
            <option <?php echo ($rowresult['qualification'] == 'BBA')? 'selected = selected' : '';?> value="BBA">BBA</option>
            <option <?php echo ($rowresult['qualification'] == 'B.Com')? 'selected = selected' : '';?> value="B.Com">B.Com</option>
            <option <?php echo ($rowresult['qualification'] == 'B.Ed')? 'selected = selected' : '';?> value="B.Ed">B.Ed</option>
            <option <?php echo ($rowresult['qualification'] == 'BDS')? 'selected = selected' : '';?> value="BDS">BDS</option>
            <option <?php echo ($rowresult['qualification'] == 'BHM')? 'selected = selected' : '';?> value="BHM">BHM</option>
            <option <?php echo ($rowresult['qualification'] == 'B.Pharma')? 'selected = selected' : '';?> value="B.Pharma">B.Pharma</option>
            <option <?php echo ($rowresult['qualification'] == 'B.Sc')? 'selected = selected' : '';?> value="B.Sc">B.Sc</option>
            <option <?php echo ($rowresult['qualification'] == 'B.Tech / B.E')? 'selected = selected' : '';?> value="B.Tech / B.E">B.Tech / B.E</option>
            <option <?php echo ($rowresult['qualification'] == 'LLB')? 'selected = selected' : '';?> value="LLB">LLB</option>
            <option <?php echo ($rowresult['qualification'] == 'MBBS')? 'selected = selected' : '';?> value="MBBS">MBBS</option>
            <option <?php echo ($rowresult['qualification'] == 'Diploma')? 'selected = selected' : '';?> value="Diploma">Diploma</option>
            <option <?php echo ($rowresult['qualification'] == 'BVSC')? 'selected = selected' : '';?> value="BVSC">BVSC</option>
            <option <?php echo ($rowresult['qualification'] == 'CA')? 'selected = selected' : '';?> value="CA">CA</option>
            <option <?php echo ($rowresult['qualification'] == 'CS')? 'selected = selected' : '';?> value="CS">CS</option>
            <option <?php echo ($rowresult['qualification'] == 'ICWA (CMA)')? 'selected = selected' : '';?> value="ICWA (CMA)">ICWA (CMA)</option>
            <option <?php echo ($rowresult['qualification'] == 'Integrated PG')? 'selected = selected' : '';?> value="Integrated PG">Integrated PG</option>
            <option <?php echo ($rowresult['qualification'] == 'LLM')? 'selected = selected' : '';?> value="LLM">LLM</option>
            <option <?php echo ($rowresult['qualification'] == 'M.A')? 'selected = selected' : '';?> value="M.A">M.A</option>
            <option <?php echo ($rowresult['qualification'] == 'M.Arch')? 'selected = selected' : '';?> value="M.Arch">M.Arch</option>
            <option <?php echo ($rowresult['qualification'] == 'M.Com')? 'selected = selected' : '';?> value="M.Com">M.Com</option>
            <option <?php echo ($rowresult['qualification'] == 'M.Ed')? 'selected = selected' : '';?> value="M.Ed">M.Ed</option>
            <option <?php echo ($rowresult['qualification'] == 'M.Pharma')? 'selected = selected' : '';?> value="M.Pharma">M.Pharma</option>
            <option <?php echo ($rowresult['qualification'] == 'MSc')? 'selected = selected' : '';?> value="MSc">MSc</option>
            <option <?php echo ($rowresult['qualification'] == 'M.Tech')? 'selected = selected' : '';?> value="M.Tech">M.Tech</option>
            <option <?php echo ($rowresult['qualification'] == 'MBA/PGDM')? 'selected = selected' : '';?> value="MBA/PGDM">MBA/PGDM</option>
            <option <?php echo ($rowresult['qualification'] == 'MCA')? 'selected = selected' : '';?> value="MCA">MCA</option>
            <option <?php echo ($rowresult['qualification'] == 'MS')? 'selected = selected' : '';?> value="MS">MS</option>
            <option <?php echo ($rowresult['qualification'] == 'PG Diploma')? 'selected = selected' : '';?> value="PG Diploma">PG Diploma</option>
            <option <?php echo ($rowresult['qualification'] == 'MVSC')? 'selected = selected' : '';?> value="MVSC">MVSC</option>
            <option <?php echo ($rowresult['qualification'] == 'MCM')? 'selected = selected' : '';?> value="MCM">MCM</option>
            <option <?php echo ($rowresult['qualification'] == 'Ph.D/Doctorate')? 'selected = selected' : '';?> value="Ph.D/Doctorate">Ph.D/Doctorate</option>
            <option <?php echo ($rowresult['qualification'] == 'M.Phil')? 'selected = selected' : '';?> value="M.Phil">M.Phil</option>
            <option <?php echo ($rowresult['qualification'] == 'Other')? 'selected = selected' : '';?> value="Other">Other</option>

        </select>
    </div>

    <div class="col-md-4" id="cat">
        <select name="sub_category">
            <option disabled="" selected="">INDUSTRY </option>
        </select>
    </div>
    <div id="response" class="col-md-4">
    </div>

    <div class="col-md-4">
        <input name="specification" id="specification" type="text" placeholder="SPECIALISATION/CERTIFICATION" value="<?php echo $rowresult['specification']?>">
    </div>

</div>
<!--     ************************************************  -->
<div class="col-md-12">

    <div class="col-md-4">
        <select name="abroad" class="exp">
            <option disabled="" selected="" value="0">EXPERIENCE IN ABROAD</option>
            <?php
            for($i=0;$i<=40;$i++){  ?>
                <option <?php echo ($ab_exp == $i)? 'selected = selected' : '';?> value="<?php echo $i;?>" ><?php echo "$i year(s)";?></option>
            <?php } ?>
        </select>
    </div>

    <div class="col-md-4">
        <select name="india" class="inexp">
            <option disabled="" selected="" value="0">EXPERIENCE IN INDIA</option>
            <?php
            for($i=0;$i<=40;$i++){  ?>
                <option <?php echo ($ind_exp == $i)? 'selected = selected' : '';?> value="<?php echo $i;?>" ><?php echo "$i year(s)";?></option>
            <?php } ?>
        </select>
    </div>



    <div class="col-md-4" id="totalyrs">
        <input name="total" id="email" type="text" placeholder="TOTAL YEARS" disabled="" value="<?php echo $rowresult['experience']?>">
    </div>

    <div class="col-md-4" id="result">

    </div>

</div>
<!--     ************************************************  -->
<div class="col-md-12">
    <div class="col-md-4">
        <input name="mobile" id="mobile" type="text" placeholder="MOBILE NUMBER " value="<?php echo $rowresult['mobile']?>">
    </div>

    <div class="col-md-4">
        <input name="email" id="email" type="text" placeholder="EMAIL " value="<?php echo $rowresult['email']?>">
    </div>

    <div class="col-md-4">
        <input name="current_location" id="location" type="text" placeholder="CURRENT LOCATION " value="<?php echo $rowresult['current_location']?>">
    </div>

</div>

<div class="col-md-12">


    <div class="col-md-4">

        <input type="text" name="captcha" placeholder="ENTER CAPTCHA">
    </div>

    <div class="col-md-2">
        <img src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image, type it in the box" width="150" height="50" align="absbottom" id="captcha"/>
    </div>
    <div class="col-md-2">
        <a href="javascript:void(0)" onclick="
        document.getElementById('captcha').src='verificationimage.php?'+Math.random();"
           id="change-image"><i class="fa fa-refresh rbutton"></i></a>
    </div>
</div>
<div class="col-md-12">
    <div class="col-md-12">

        <input type="file"  class="resume" name="fileToUpload" id="f02">
        <label for="f02"><?php echo isset($rowresult['file_name'])? $rowresult['file_name'] : 'UPLOAD YOUR CV (Pdf Only)'?></label>

    </div>

</div>

<div class="col-md-12">
    <div class="col-md-2">
        <div id="job">
            <input type="submit" value="SUBMIT">
        </div>
    </div>
</div>

</form>

</div> <!-- 00 -->
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

<script src="js/bootstrap-datepicker.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script>
    $("[type=file]").on("change", function(){
        // Name of file and placeholder
        var file = this.files[0].name;
        var dflt = $(this).attr("placeholder");
        if($(this).val()!=""){
            $(this).next().text(file);
        } else {
            $(this).next().text("Select you Resume.");
        }
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){

        $.ajax({
            type: "POST",
            url: "category.php",
            data: { jobcat : '<?php echo $jobcat?>', subcat : '<?php echo $subcat?>' }
        }).done(function(data){
            $("#response").html(data);
            $("#cat").hide();
        });


        $("select.job").change(function(){
            var jobcat = $(".job option:selected").val();
            $.ajax({
                type: "POST",
                url: "category.php",
                data: { jobcat : jobcat }
            }).done(function(data){
                $("#response").html(data);
                $("#cat").hide();
            });
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $("select.exp").change(function(){
            var inexp = $(".inexp option:selected").val();
            var abexp = $(".exp option:selected").val();

            var total =  +abexp + +inexp ;

            $.ajax({
                type: "POST",
                url: "check.php",
                data: { total : total }
            }).done(function(data){
                $("#result").html(data);
                $("#totalyrs").hide();
            });
        });
    });

    $(document).ready(function(){
        $("select.inexp").change(function(){
            var inexp = $(".inexp option:selected").val();
            var abexp = $(".exp option:selected").val();

            var total =  +abexp + +inexp ;

            $.ajax({
                type: "POST",
                url: "check.php",
                data: { total : total }
            }).done(function(data){
                $("#result").html(data);
                $("#totalyrs").hide();
            });
        });
    });
</script>

<script>
    $(function() {
        $('#datepicker').datepicker({
            format: 'dd/mm/yyyy',
            endDate: '+0d',
            autoclose: true
        });
    });
</script>

<script>

    // When the browser is ready...

    $(function () {

        // Setup form validation on the #register-form element
        jQuery.validator.addMethod("nonNumeric", function( value ) {
                    var regex = new RegExp("^[a-zA-Z ]+$");
                    var key = value;

                    if (!regex.test(key)) {
                        return false;
                    }
                    return true;
                }, "Please Do not use Numbers or Special Characters");
                
        $("#contact-form").validate({

            // Specify the validation rules
            
                
            rules: {

                title: "required",
                name: {required:true,nonNumeric:true},
                job_category_id: "required",
                sub_category:"required",
                india: "required",
                abroad:"required",
                dob:{required:true, dateFormat: true},
                mobile:{
                    required: true,
                    digits  :true,
                    minlength: 10, //or look at the additional-methods.js to see available phone validations
                    maxlength: 10
                },
                specification:{required:true,nonNumeric:true},
                qualification:"required",
                current_location:"required",

                //day:"required",
                month:"required",
                //year:"required",
                captcha:"required",
                email: {required: true,email: true}
            },
            // Specify the validation error messages

            messages: {
                title: "Please select title",
                name: "Please enter your full name",
                job_category_id: "Please select job applied for",
                sub_category:"Please select job title",
                india: "Please enter experience in India",
                abroad:"Please enter experience in abroad",
                dob:{required: "Please enter date of birth", dateFormat: "Please enter a date in the format dd/mm/yyyy."},
                mobile:{
                    required: "Please enter your mobile number.",
                    digits: "Enter digits only",
                    minlength: "Enter valid contact number",
                    maxlength: "Enter valid contact number"
                },
                specification:"Please enter specification",
                qualification:"Please enter qualification",
                current_location:"Please enter current location",

                //day:"Please enter date of birth",
                month:"Enter date of birth",
                //year:"Please enter date of birth",
                captcha:"Please enter captcha",
                email:{required: "Please enter email", email: "Please enter valid email!"}

            },

            submitHandler: function (form) {

                form.submit();

            }

        });

        $.validator.addMethod("dateFormat",
            function(value, element) {
                return value.match(/^(?=\d)(?:(?:31(?!.(?:0?[2469]|11))|(?:30|29)(?!.0?2)|29(?=.0?2.(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00)))(?:\x20|$))|(?:2[0-8]|1\d|0?[1-9]))([-.\/])(?:1[012]|0?[1-9])\1(?:1[6-9]|[2-9]\d)?\d\d(?:(?=\x20\d)\x20|$))?(((0?[1-9]|1[012])(:[0-5]\d){0,2}(\x20[AP]M))|([01]\d|2[0-3])(:[0-5]\d){1,2})?$/);
            },
            "Please enter a date in the format dd/mm/yyyy."
        );

        $("#location").geocomplete({
            types: ["geocode", "establishment"],
        });

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