<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/html">
<?php  include("logincheck.php");?>
<head>

    <meta charset="UTF-8">

    <title>Admin | ITL JOBS</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap 3.3.4 -->

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome Icons -->

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Ionicons -->

    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme style -->

    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

    <!-- AdminLTE Skins. Choose a skin from the css/skins

         folder instead of downloading all of them to reduce the load. -->

    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />


    <!--<script src="//code.jquery.com/jquery-1.9.1.js"></script>-->

    <!--<script> jQuery.noConflict();</script>-->

    <!-- <script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>-->

    <!--        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>-->

    <link href="plugins/datetimepicker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->



    <script src="//code.jquery.com/jquery-1.9.1.js"></script>

    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
    <script src="js/jquery.geocomplete.js"></script>

    <script src="ckeditor/ckeditor.js"></script>
        
     <link href="css/datepicker.css" rel="stylesheet" />
     <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
     <link href="https://cdn.jsdelivr.net/bootstrap.timepicker/0.2.6/css/bootstrap-timepicker.css" rel="stylesheet" />

    <link href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="../js/countrystate.js"></script>

	<style>
         .error{
            color: #C80000 !important;
        
            }
        </style>  

</head>

<body class="skin-blue sidebar-mini">

<div class="wrapper">



    <?php include 'header.php'; ?>

    <?php include 'menu.php';
            
    session_start();
    date_default_timezone_set('Asia/Calcutta');
    ?>
    <?php $id = isset($_GET['id']) ? $_GET['id'] : 0;?>
    


    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header">

            <h1>
                ITL JOBS

<!--                <small>ITL JOBS</small>-->

            </h1>

            <ol class="breadcrumb">

                <li><a href="home.php"><i class="fa fa-dashboard"></i>Home</a></li>

                <!--                        <li><a href="#">Forms</a></li>

                                        <li class="active">Add Packages </li>-->

            </ol>

        </section>



        <!-- Main content -->

        <section class="content">

            <div class="row">

                <!-- left column -->

                <div class="col-md-6">

                    <!-- general form elements -->

                    <div class="box box-primary">

                        <div class="box-header">

                            <h3 class="box-title">Edit ITL JOBS </h3>

                        </div><!-- /.box-header -->

                        <!-- form start -->
                     

                        <form  role="form" name="frm" id="frm" method="POST" action="edit_interviewprocess.php" enctype="multipart/form-data">
                            <?php
                                error_reporting(0);
                                            if ($_SESSION['addsucc'] != '') {

                                                if ($_SESSION['addsucc'] == '1') {

                                                    ?>

                                                    <div class="alert alert-success alert-dismissable">

                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                        Interview Details Updated Successfully <a href="#" class="alert-link"></a>.

                                                    </div>

                                                    <?php

                                                }else if ($_SESSION['addsucc'] == '2') { ?>
                                                    <div class="alert alert-danger alert-dismissable">

                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                        Unable to update Interview Details<a href="#" class="alert-link"></a>.

                                                    </div>
                                            <?php
                                                }else if ($_SESSION['addsucc'] == '3') { ?>
                                                    <div class="alert alert-danger alert-dismissable">

                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                        Interview date should be greater than today's date!<a href="#" class="alert-link"></a>.

                                                    </div>
                                            <?php
                                                }
                                                unset($_SESSION['addsucc']);
                                            }

                                            ?>

                            <?php
                            require_once("db.php");
                            $sql    = sprintf("SELECT id,title,name,company_name,country,salary,schedule_date,schedule_time,venue,interview,coordinator,contact,description FROM interviews WHERE id = '%s'", $id); 
                            $result = Db::query($sql);
                            $row    = array();
                            if (mysql_num_rows($result) > 0) {
                                $rowedit = mysql_fetch_assoc($result);
                                $title   =$rowedit['title'];
                                $converteddate = date("d/m/Y", strtotime($rowedit['schedule_date']));
                            }
                            ?>
                           <div class="box-body">
                                             
                                <div class="form-group">

                                            <label for="exampleInputEmail1">Position</label>

                                            <input type="text" class="form-control" id="name" value="<?php echo $rowedit['name']?>" placeholder="Position" name="name">

                                        </div>
                               
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Description</label>

                                            <textarea  class="form-control" rows="3" placeholder="Enter ..." name="description"><?php echo $rowedit['description']?></textarea>

                                        </div>
                                        
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Salary Structure</label>

                                            <input type="text" class="form-control" id="company_name" placeholder="Salary (minimum - maximum)" name="salary" value="<?php echo $rowedit['salary']?>">

                                        </div>
                                        
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Company Name</label>

                                            <input type="text" class="form-control" id="company_name" placeholder="Company Name" name="company_name" value="<?php echo $rowedit['company_name']?>">

                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select id="country" name="country" class="form-control">
                                <option value="-1">Select Country</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antartica">Antartica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Ashmore and Cartier Island">Ashmore and Cartier Island</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Virgin Islands">British Virgin Islands</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burma">Burma</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Clipperton Island">Clipperton Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
                                <option value="Congo, Republic of the">Congo, Republic of the</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czeck Republic">Czeck Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Europa Island">Europa Island</option>
                                <option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia, The">Gambia, The</option>
                                <option value="Gaza Strip">Gaza Strip</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Glorioso Islands">Glorioso Islands</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                <option value="Holy See (Vatican City)">Holy See (Vatican City)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Howland Island">Howland Island</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Ireland, Northern">Ireland, Northern</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Jan Mayen">Jan Mayen</option>
                                <option value="Japan">Japan</option>
                                <option value="Jarvis Island">Jarvis Island</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Johnston Atoll">Johnston Atoll</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Juan de Nova Island">Juan de Nova Island</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, North">Korea, North</option>
                                <option value="Korea, South">Korea, South</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia, Former Yugoslav Republic of">Macedonia, Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Man, Isle of">Man, Isle of</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Midway Islands">Midway Islands</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcaim Islands">Pitcaim Islands</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romainia">Romainia</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Scotland">Scotland</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and South Sandwich Islands">South Georgia and South Sandwich Islands</option>
                                <option value="Spain">Spain</option>
                                <option value="Spratly Islands">Spratly Islands</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard">Svalbard</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Tobago">Tobago</option>
                                <option value="Toga">Toga</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad">Trinidad</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="USA">USA</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Virgin Islands">Virgin Islands</option>
                                <option value="Wales">Wales</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="West Bank">West Bank</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Yugoslavia">Yugoslavia</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                                            <!--<input type="text" class="form-control" id="country" placeholder="Country" name="country" value="<?php// echo $rowedit['country']?>">-->
                                        </div>
                                        
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Interview Date</label>

                                            <input type="text" class="form-control" id="datepicker" name="date" value="<?php echo $converteddate?>" placeholder="Interview Date" data-format="MM-dd-yyyy"/>

                                        </div>
                                        
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Venue</label>

                                            <input type="text" class="form-control" id="venue" placeholder="Venue" name="venue" value="<?php echo $rowedit['venue']?>">

                                        </div>  
                                        
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Name of co ordinator</label>

                                            <input type="text" class="form-control" id="coordinator" placeholder="Name of co ordinator" name="coordinator" value="<?php echo $rowedit['coordinator']?>">

                                        </div>
                                        
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Contact Number</label>

                                            <input type="text" class="form-control" id="contact" placeholder="Contact" name="contact" value="<?php echo $rowedit['contact']?>">

                                        </div>

                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Job Category</label>

                                            <select class="form-control" name="title">
                                                <option disabled="" selected="">select</option>
                                                <?php
                                                $qry = sprintf("SELECT id,name FROM `job_categories`");
                                                $res = Db::query($qry);
                                                if(mysql_num_rows($res)){
                                                while ($row = mysql_fetch_array($res)) {
                                                ?>
                                                <option value="<?php echo $row['id'];?>" <?php if($title == $row['id']){ echo 'selected="selected"';} ?>><?php echo $row['name'];?></option>
                                                <?php
                                                }  }
                                                ?>
                                            </select>

                                        </div>
                                        
                                        <div class="form-group">
                                        <label for="exampleInputEmail1">Interview Time</label>
                                            <input id="timepicker1" type="text" class="form-control input-small" placeholder="Schedule Time" name="time" value="<?php echo $rowedit['schedule_time']?>"> 
                                              
                                        </div>
                                        
                                        <div class=""form-group>
                                                <label for="exampleInputEmail1">Interview Type</label>
                                                <select name="interview" class="form-control">
                                                    <!--<option disabled="" selected="">SELECT</option>-->
                                                    <option value="Overseas" <?php if($rowedit['interview']=='Overseas'){?> selected=""<?php } ?> >Overseas</option>
                                                    <option value="India" <?php if($rowedit['interview']=='India'){?> selected=""<?php } ?> >India</option>
                                                    <option value="Direct" <?php if($rowedit['interview']=='Direct'){?> selected=""<?php } ?> >Direct</option>
                                                </select>
                                        </div>
                                        
                                    <input type="hidden"  name="id" value="<?php echo $id;?>" />

                                <div class="box-footer">

                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </div>

                            </div><!-- /.box-body -->





                        </form>

                    </div><!-- /.box -->







                </div><!--/.col (left)

• Extensive involvement in all aspects of the project developm

                        <!--/.box-body  -->

            </div><!-- /.box -->
            
            </section> <!-- /.content -->

    </div><!-- /.col (right) -->

</div>  <!--  /.row -->



</div>  <!--/.content-wrapper -->


<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="plugins/datetimepicker/moment.js" type="text/javascript"></script>
<script src="plugins/datetimepicker/bootstrap-datetimepicker.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/bootstrap.timepicker/0.2.6/js/bootstrap-timepicker.min.js"></script>

<!-- FastClick -->

<script src='plugins/fastclick/fastclick.min.js'></script>

<!-- AdminLTE App -->

<script src="dist/js/app.min.js" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->

<script src="dist/js/demo.js" type="text/javascript"></script>
<!-- <script src="js/datepick.js"></script>
 <script src="js/bootstrap-datepicker.js"></script>
 <script src="js/bootstrap-datetimepicker.min.js"></script>-->
<script>

            // When the browser is ready...

            $(function () {
                $('#datepicker').datepicker({
                    format:"dd/mm/yyyy",
                    startDate: '0'
                });
                
//                 $("#country").geocomplete({
//                    types: ["geocode", "establishment"],
//                });
                
                $.validator.addMethod("dateFormat",
                    function(value, element) {
                        return value.match(/^(?=\d)(?:(?:31(?!.(?:0?[2469]|11))|(?:30|29)(?!.0?2)|29(?=.0?2.(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00)))(?:\x20|$))|(?:2[0-8]|1\d|0?[1-9]))([-.\/])(?:1[012]|0?[1-9])\1(?:1[6-9]|[2-9]\d)?\d\d(?:(?=\x20\d)\x20|$))?(((0?[1-9]|1[012])(:[0-5]\d){0,2}(\x20[AP]M))|([01]\d|2[0-3])(:[0-5]\d){1,2})?$/);
                    },
                    "Please enter a date in the format dd/mm/yyyy."
                );
                // Setup form validation on the #register-form element

                $("#frm").validate({
                    
                    // Specify the validation rules

                    rules: {
                        
                        name: {required:true,lettersonly:true},
                        title: "required",
                        date: {required:true, dateFormat: true},
                        description: "required",
                        company_name: "required",
                        time : "required",
                        venue : {required:true,lettersonly:true},
                        interview : "required",
                        contact : {
                        required: true,
                        digits  :true,
                        minlength: 10, //or look at the additional-methods.js to see available phone validations
                        maxlength: 15
                        }
                    },
                    // Specify the validation error messages

                    messages: {

                        name: {required:"Please enter name",lettersonly:"Please enter letters only"},
                        title: "Please select job category",
                        date: {required: "Please enter date",dateFormat: "Please enter a date in the format dd/mm/yyyy."},
                        description: "Please enter description",
                        company_name: "Please enter company name",
                        time: "Please enter time",
                        venue: {required:"Please enter venue",lettersonly:"Please enter letters only"},
                        interview: "please select interview",
                        contact:{
                        required: "Please enter your contact number.",
                        digits: "Enter digits only",
                        minlength: "Enter valid contact number",
                        maxlength: "Enter valid contact number"
                        }
                    },
                    
                    submitHandler: function (form) {

                        form.submit();
                    }
                    
                });
                jQuery.validator.addMethod("lettersonly", function(value, element) {
                    return this.optional(element) || /^[a-z\s]+$/i.test(value);
                  });
                  $('#country [value="<?php echo $rowedit['country']; ?>"]').attr("selected", "selected");
            });

        </script> 
 <script type="text/javascript">
            $('#timepicker1').timepicker();
 </script>

</body>

</html>

