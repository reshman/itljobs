<?php (!isset($_SESSION)) ? session_start() : null; ?>
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
    <script type="text/javascript" src="js/countrystate.js"></script>

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
    <style>
        .rbutton {
            font-size: 30px;
            margin-top: 10px;
        }
    </style>

</head>
<body>
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
                if ($_SESSION['in'] == 1) {
                    ?>
                    <div class="alert alert-danger alert-dismissable" id="status-message">
                        <?php echo "<span style='color:red'/><b>Invalid email or password</b></span><br/><br/>"; ?>
                    </div>
                    <?php
                    unset($_SESSION['in']);
                }

                ?>
            </div>

            <div class="col-md-12">
                <input id="loginemail" name="loginemail" type="text" placeholder="EMAIL ">
            </div>
            <div class="col-md-12">
                <input id="loginpassword" name="loginpassword" type="password" placeholder="PASSWORD">
            </div>
            <div class="col-md-2">
                <input type="submit" value="LOGIN" style="text-align: center;">
            </div>
            <a class="forgot" data-toggle="modal" data-target="#myModal" href="javascript:void(0)"
               style="float:right; margin-right: 20px;">Forgot Password?</a>

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
                        <input type="email" class="form-control" required name="forgotemail" id="field-forgotemail"
                               value="" placeholder="ENTER YOUR EMAIL ID"/>
                    </div>

                    <div class="row">
                        <div id="error" style="display:none; color:#C80000; margin-left: 20px; font-size:16px;"><b>Invalid
                                Email</b></div>
                    </div>
                    <div class="bg-success text-center" id="success-message" style="padding: 10px; margin: 10px;"></div>
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
<form id="contact-form" method="POST" action="employerenquiry_process.php" enctype="multipart/form-data"
      class="registration">
<?php
if (isset($_SESSION['regsucc']) != '') {

    if ($_SESSION['regsucc'] == '1') {
        ?>

        <div class="alert alert-success alert-dismissable" id="status-message">

            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

            Registration Successful <a href="#" class="alert-link"></a>.

        </div>

    <?php
    } else if ($_SESSION['regsucc'] == '3') {
        ?>

        <div class="alert alert-danger alert-dismissable" id="status-message">

            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

            Already Registered Email <a href="#" class="alert-link"></a>.

        </div>

    <?php
    }
    unset($_SESSION['regsucc']);
}


?>
<script>
    $('#status-message').fadeOut(12000);
</script>

<div class="col-md-6">
    <input id="name" name="name" type="text" placeholder="NAME ">

</div>
<div class="col-md-6">
    <input id="email" name="email" type="text" placeholder="EMAIL ">

</div>
<div class="col-md-6">
    <input id="companyname" name="companyname" type="text" placeholder="COMPANY NAME ">

</div>
<div class="col-md-6">
    <input id="designation" name="designation" type="text" placeholder="DESIGNATION ">

    <div id="countries"></div>
</div>
<div class="col-md-6">
    <select id="country" name="country"></select>
    <script language="javascript">
        populateCountries("country");
    </script>

</div>
<div class="col-md-2">
<select name="phoneCode" id="phoneCode">
<option data-countryCode="IN" value="91" Selected>India (+91)</option>
<option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
<option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
<option data-countryCode="KW" value="965">Kuwait (+965)</option>
<option data-countryCode="BH" value="973">Bahrain (+973)</option>
<option data-countryCode="QA" value="974">Qatar (+974)</option>
<optgroup label="Other countries">
<option data-countryCode="DZ" value="213">Algeria (+213)</option>
<option data-countryCode="AD" value="376">Andorra (+376)</option>
<option data-countryCode="AO" value="244">Angola (+244)</option>
<option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
<option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
<option data-countryCode="AR" value="54">Argentina (+54)</option>
<option data-countryCode="AM" value="374">Armenia (+374)</option>
<option data-countryCode="AW" value="297">Aruba (+297)</option>
<option data-countryCode="AU" value="61">Australia (+61)</option>
<option data-countryCode="AT" value="43">Austria (+43)</option>
<option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
<option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
<!--<option data-countryCode="BH" value="973">Bahrain (+973)</option>-->
<option data-countryCode="BD" value="880">Bangladesh (+880)</option>
<option data-countryCode="BB" value="1246">Barbados (+1246)</option>
<option data-countryCode="BY" value="375">Belarus (+375)</option>
<option data-countryCode="BE" value="32">Belgium (+32)</option>
<option data-countryCode="BZ" value="501">Belize (+501)</option>
<option data-countryCode="BJ" value="229">Benin (+229)</option>
<option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
<option data-countryCode="BT" value="975">Bhutan (+975)</option>
<option data-countryCode="BO" value="591">Bolivia (+591)</option>
<option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
<option data-countryCode="BW" value="267">Botswana (+267)</option>
<option data-countryCode="BR" value="55">Brazil (+55)</option>
<option data-countryCode="BN" value="673">Brunei (+673)</option>
<option data-countryCode="BG" value="359">Bulgaria (+359)</option>
<option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
<option data-countryCode="BI" value="257">Burundi (+257)</option>
<option data-countryCode="KH" value="855">Cambodia (+855)</option>
<option data-countryCode="CM" value="237">Cameroon (+237)</option>
<option data-countryCode="CA" value="1">Canada (+1)</option>
<option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
<option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
<option data-countryCode="CF" value="236">Central African Republic (+236)</option>
<option data-countryCode="CL" value="56">Chile (+56)</option>
<option data-countryCode="CN" value="86">China (+86)</option>
<option data-countryCode="CO" value="57">Colombia (+57)</option>
<option data-countryCode="KM" value="269">Comoros (+269)</option>
<option data-countryCode="CG" value="242">Congo (+242)</option>
<option data-countryCode="CK" value="682">Cook Islands (+682)</option>
<option data-countryCode="CR" value="506">Costa Rica (+506)</option>
<option data-countryCode="HR" value="385">Croatia (+385)</option>
<option data-countryCode="CU" value="53">Cuba (+53)</option>
<option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
<option data-countryCode="CY" value="357">Cyprus South (+357)</option>
<option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
<option data-countryCode="DK" value="45">Denmark (+45)</option>
<option data-countryCode="DJ" value="253">Djibouti (+253)</option>
<option data-countryCode="DM" value="1809">Dominica (+1809)</option>
<option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
<option data-countryCode="EC" value="593">Ecuador (+593)</option>
<option data-countryCode="EG" value="20">Egypt (+20)</option>
<option data-countryCode="SV" value="503">El Salvador (+503)</option>
<option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
<option data-countryCode="ER" value="291">Eritrea (+291)</option>
<option data-countryCode="EE" value="372">Estonia (+372)</option>
<option data-countryCode="ET" value="251">Ethiopia (+251)</option>
<option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
<option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
<option data-countryCode="FJ" value="679">Fiji (+679)</option>
<option data-countryCode="FI" value="358">Finland (+358)</option>
<option data-countryCode="FR" value="33">France (+33)</option>
<option data-countryCode="GF" value="594">French Guiana (+594)</option>
<option data-countryCode="PF" value="689">French Polynesia (+689)</option>
<option data-countryCode="GA" value="241">Gabon (+241)</option>
<option data-countryCode="GM" value="220">Gambia (+220)</option>
<option data-countryCode="GE" value="7880">Georgia (+7880)</option>
<option data-countryCode="DE" value="49">Germany (+49)</option>
<option data-countryCode="GH" value="233">Ghana (+233)</option>
<option data-countryCode="GI" value="350">Gibraltar (+350)</option>
<option data-countryCode="GR" value="30">Greece (+30)</option>
<option data-countryCode="GL" value="299">Greenland (+299)</option>
<option data-countryCode="GD" value="1473">Grenada (+1473)</option>
<option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
<option data-countryCode="GU" value="671">Guam (+671)</option>
<option data-countryCode="GT" value="502">Guatemala (+502)</option>
<option data-countryCode="GN" value="224">Guinea (+224)</option>
<option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
<option data-countryCode="GY" value="592">Guyana (+592)</option>
<option data-countryCode="HT" value="509">Haiti (+509)</option>
<option data-countryCode="HN" value="504">Honduras (+504)</option>
<option data-countryCode="HK" value="852">Hong Kong (+852)</option>
<option data-countryCode="HU" value="36">Hungary (+36)</option>
<option data-countryCode="IS" value="354">Iceland (+354)</option>
<!--<option data-countryCode="IN" value="91">India (+91)</option>-->
<option data-countryCode="ID" value="62">Indonesia (+62)</option>
<option data-countryCode="IR" value="98">Iran (+98)</option>
<option data-countryCode="IQ" value="964">Iraq (+964)</option>
<option data-countryCode="IE" value="353">Ireland (+353)</option>
<option data-countryCode="IL" value="972">Israel (+972)</option>
<option data-countryCode="IT" value="39">Italy (+39)</option>
<option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
<option data-countryCode="JP" value="81">Japan (+81)</option>
<option data-countryCode="JO" value="962">Jordan (+962)</option>
<option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
<option data-countryCode="KE" value="254">Kenya (+254)</option>
<option data-countryCode="KI" value="686">Kiribati (+686)</option>
<option data-countryCode="KP" value="850">Korea North (+850)</option>
<option data-countryCode="KR" value="82">Korea South (+82)</option>
<!--                                        <option data-countryCode="KW" value="965">Kuwait (+965)</option>-->
<option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
<option data-countryCode="LA" value="856">Laos (+856)</option>
<option data-countryCode="LV" value="371">Latvia (+371)</option>
<option data-countryCode="LB" value="961">Lebanon (+961)</option>
<option data-countryCode="LS" value="266">Lesotho (+266)</option>
<option data-countryCode="LR" value="231">Liberia (+231)</option>
<option data-countryCode="LY" value="218">Libya (+218)</option>
<option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
<option data-countryCode="LT" value="370">Lithuania (+370)</option>
<option data-countryCode="LU" value="352">Luxembourg (+352)</option>
<option data-countryCode="MO" value="853">Macao (+853)</option>
<option data-countryCode="MK" value="389">Macedonia (+389)</option>
<option data-countryCode="MG" value="261">Madagascar (+261)</option>
<option data-countryCode="MW" value="265">Malawi (+265)</option>
<option data-countryCode="MY" value="60">Malaysia (+60)</option>
<option data-countryCode="MV" value="960">Maldives (+960)</option>
<option data-countryCode="ML" value="223">Mali (+223)</option>
<option data-countryCode="MT" value="356">Malta (+356)</option>
<option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
<option data-countryCode="MQ" value="596">Martinique (+596)</option>
<option data-countryCode="MR" value="222">Mauritania (+222)</option>
<option data-countryCode="YT" value="269">Mayotte (+269)</option>
<option data-countryCode="MX" value="52">Mexico (+52)</option>
<option data-countryCode="FM" value="691">Micronesia (+691)</option>
<option data-countryCode="MD" value="373">Moldova (+373)</option>
<option data-countryCode="MC" value="377">Monaco (+377)</option>
<option data-countryCode="MN" value="976">Mongolia (+976)</option>
<option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
<option data-countryCode="MA" value="212">Morocco (+212)</option>
<option data-countryCode="MZ" value="258">Mozambique (+258)</option>
<option data-countryCode="MN" value="95">Myanmar (+95)</option>
<option data-countryCode="NA" value="264">Namibia (+264)</option>
<option data-countryCode="NR" value="674">Nauru (+674)</option>
<option data-countryCode="NP" value="977">Nepal (+977)</option>
<option data-countryCode="NL" value="31">Netherlands (+31)</option>
<option data-countryCode="NC" value="687">New Caledonia (+687)</option>
<option data-countryCode="NZ" value="64">New Zealand (+64)</option>
<option data-countryCode="NI" value="505">Nicaragua (+505)</option>
<option data-countryCode="NE" value="227">Niger (+227)</option>
<option data-countryCode="NG" value="234">Nigeria (+234)</option>
<option data-countryCode="NU" value="683">Niue (+683)</option>
<option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
<option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
<option data-countryCode="NO" value="47">Norway (+47)</option>
<option data-countryCode="OM" value="968">Oman (+968)</option>
<option data-countryCode="PW" value="680">Palau (+680)</option>
<option data-countryCode="PA" value="507">Panama (+507)</option>
<option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
<option data-countryCode="PY" value="595">Paraguay (+595)</option>
<option data-countryCode="PE" value="51">Peru (+51)</option>
<option data-countryCode="PH" value="63">Philippines (+63)</option>
<option data-countryCode="PL" value="48">Poland (+48)</option>
<option data-countryCode="PT" value="351">Portugal (+351)</option>
<option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
<!--                                        <option data-countryCode="QA" value="974">Qatar (+974)</option>-->
<option data-countryCode="RE" value="262">Reunion (+262)</option>
<option data-countryCode="RO" value="40">Romania (+40)</option>
<option data-countryCode="RU" value="7">Russia (+7)</option>
<option data-countryCode="RW" value="250">Rwanda (+250)</option>
<option data-countryCode="SM" value="378">San Marino (+378)</option>
<option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
<!--<option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>-->
<option data-countryCode="SN" value="221">Senegal (+221)</option>
<option data-countryCode="CS" value="381">Serbia (+381)</option>
<option data-countryCode="SC" value="248">Seychelles (+248)</option>
<option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
<option data-countryCode="SG" value="65">Singapore (+65)</option>
<option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
<option data-countryCode="SI" value="386">Slovenia (+386)</option>
<option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
<option data-countryCode="SO" value="252">Somalia (+252)</option>
<option data-countryCode="ZA" value="27">South Africa (+27)</option>
<option data-countryCode="ES" value="34">Spain (+34)</option>
<option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
<option data-countryCode="SH" value="290">St. Helena (+290)</option>
<option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
<option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
<option data-countryCode="SD" value="249">Sudan (+249)</option>
<option data-countryCode="SR" value="597">Suriname (+597)</option>
<option data-countryCode="SZ" value="268">Swaziland (+268)</option>
<option data-countryCode="SE" value="46">Sweden (+46)</option>
<option data-countryCode="CH" value="41">Switzerland (+41)</option>
<option data-countryCode="SI" value="963">Syria (+963)</option>
<option data-countryCode="TW" value="886">Taiwan (+886)</option>
<option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
<option data-countryCode="TH" value="66">Thailand (+66)</option>
<option data-countryCode="TG" value="228">Togo (+228)</option>
<option data-countryCode="TO" value="676">Tonga (+676)</option>
<option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
<option data-countryCode="TN" value="216">Tunisia (+216)</option>
<option data-countryCode="TR" value="90">Turkey (+90)</option>
<option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
<option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
<option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
<option data-countryCode="TV" value="688">Tuvalu (+688)</option>
<option data-countryCode="UG" value="256">Uganda (+256)</option>
<option data-countryCode="GB" value="44">UK (+44)</option>
<option data-countryCode="UA" value="380">Ukraine (+380)</option>
<!--                                        <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>-->
<option data-countryCode="UY" value="598">Uruguay (+598)</option>
<option data-countryCode="US" value="1">USA (+1)</option>
<option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
<option data-countryCode="VU" value="678">Vanuatu (+678)</option>
<option data-countryCode="VA" value="379">Vatican City (+379)</option>
<option data-countryCode="VE" value="58">Venezuela (+58)</option>
<option data-countryCode="VN" value="84">Vietnam (+84)</option>
<option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
<option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
<option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
<option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
<option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
<option data-countryCode="ZM" value="260">Zambia (+260)</option>
<option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
</optgroup>
</select>
</div>
<div class="col-md-4">
    <input id="moblie" name="mobile" type="text" placeholder="MOBILE" maxlength="10">

</div>

<div class="col-md-12">

    <input type="file" class="enquiry resume" name="fileToUpload" id="f02" placeholder="UPLOAD YOUR COMPANY LOGO">
    <label for="f02">UPLOAD YOUR COMPANY LOGO (JPG, PNG, JPEG)</label>

</div>

<div class="col-md-12">
    <textarea name="enquiry" id="enquiry" placeholder="ENQUIRY/REQUIREMENT"></textarea>

</div>


<div class="col-md-2">

    <input type="submit" value="REGISTER" style="text-align: center;">

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


<div class="item news-post">
    <img src="images/logo-2/arabian-constructionscompany.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-2-our-clientele/al-falah.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-2-our-clientele/al-faris.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-2-our-clientele/comedat.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-2-our-clientele/dongil.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-2-our-clientele/kharafi-natitional.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-2-our-clientele/last-image-logo-2.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-2-our-clientele/royal-united.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-2-our-clientele/sajer.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-2-our-clientele/union-global.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/al-bilad.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/al-fanar.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/al-jouf-cement.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/al-rawaa-glass.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/alico.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/almarai.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/blleli-saudi-arabia.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/casa-via.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/gulf-union-food.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/hail-agriculkture.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/ibdaa.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/johnson-controls.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/nadec.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/national-plastic.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/pepsi.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/playground-steel-factory.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/qatar-polymer.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/rajhi-streel.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/sanitart.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/saudi-electro.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/saudi-paper-manufacturing.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/shehab-plastic.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/smi.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/td.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/thyssenkrupp.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/western-bakries.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/zamil pipes.jpg" alt="">


</div>
<div class="item news-post">
    <img src="images/itl-company-logos/logo-3-production-and-manufacturing/zartech.jpg" alt="">


</div>


<div class="item news-post">
    <img src="images/itl-company-logos/logo-4-healthcare-and-hospitality/al-kaabi.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-4-healthcare-and-hospitality/al-reem-hospico.jpg" alt="">


</div>


<div class="item news-post">
    <img src="images/itl-company-logos/logo-4-healthcare-and-hospitality/algosaibi-service.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-4-healthcare-and-hospitality/almajal-alarabi.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-4-healthcare-and-hospitality/catering.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-4-healthcare-and-hospitality/crystal-palace.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-4-healthcare-and-hospitality/dar-as-sihha-medical-center.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-4-healthcare-and-hospitality/dm-healthcare.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-4-healthcare-and-hospitality/jeddah-national-hospital.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-4-healthcare-and-hospitality/massara-house.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-4-healthcare-and-hospitality/medical-center.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-4-healthcare-and-hospitality/salamatek-medical-.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-4-healthcare-and-hospitality/samama.jpg" alt="">


</div>


<div class="item news-post">
    <img src="images/itl-company-logos/logo-4-healthcare-and-hospitality/security-forces-hospital.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-4-healthcare-and-hospitality/shifa-rahima-dispensary.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/al-eram-animation-lab.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/al-radhi-cosmetics.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/aluminium.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/apec.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/dar-sa-sihha-medical-centr.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/dar-sa-sihha-opticals.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/dems.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/dubai-cosmtics.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/eis.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/eram-asacon.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/eram-educational-welfare-trust.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/eram-engg-for-lift-tech.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/eram-engineering.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/eram-floors.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/eram-industeial-technologies.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/eram-international.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/eram-isea.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/eram-ksa.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/eram-power-comm.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/eram-rover.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/eram-scientific.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/eram-steel-factories.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/eram-trading.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/ess-arabia.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/hydrofit.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/ira-ksa.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/itl-contracting-co.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/itl-quality-bureau.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/omnex.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/sas-general.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/trip-makrs.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-5-our-associates/zeztate.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/al-farhan-trading.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/al-moaybd-trading.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/al-radhi-plastics.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/al-shahla.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/arabian-equipments-maintanbence.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/arabian-experience.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/ark-trading-contracting.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/choice-cateres.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/e-agnice.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/e-printing.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/eram-floors.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/eram-galleria.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/eram-holidays.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/eram-manpower-sfvice.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/eram-motors.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/eram-technologies.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/espoir.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/idealink.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/itl-communications.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/itl-holidays-pvt.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/itl-world.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/itrade.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/kaku.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/lojam-arabi.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/metaltech.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/mice-minds.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/mmps.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/ramz-ex.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/royal-gulf-food.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/saaq-trading-services.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/shehoun-trading-contracting.jpg" alt="">


</div>

<div class="item news-post">
    <img src="images/itl-company-logos/logo-6-our-associates/united-ark-company.jpg" alt="">


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
    $('#success-message').hide();
    $('#forgot-submit').click(function () {

        var femail = document.getElementById("field-forgotemail").value;

        $.ajax({
            method: "POST",
            url: 'forgot-password.php',
            data: {femail: femail},
            success: function (data) {
                if (data == '1') {
                    $('#success-message').fadeIn(1000).html("Check your mail for new password!");
                    $('#success-message').fadeOut(5000);
                    $('#myModal').fadeOut(5000);
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
            var regex = new RegExp("^[a-zA-Z\-\&\s ]+$");
            var key = value;

            if (!regex.test(key)) {
                return false;
            }
            return true;
        }, "Please use letters, '&' and '-' only");

        jQuery.validator.addMethod("notEqual", function (value) {
            var regex = new RegExp("-1");
            var key = value;

            if (regex.test(key)) {
                return false;
            }
            return true;
        });
        // Setup form validation on the #register-form element

        $("#contact-form.registration").validate({
            // Specify the validation rules

            rules: {
                name: {required: true, nonNumeric: true},
                companyname: {required: true, nonNumeric: true},
                designation: {required: true, nonNumeric: true},
                country: {notEqual: true},
                mobile: {
                    required: true,
                    digits: true,
                    minlength: 10, //or look at the additional-methods.js to see available phone validations
                    maxlength: 10
                },
                enquiry: "required",
                fileToUpload: "required",
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
                fileToUpload: "Please upload company logo",
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