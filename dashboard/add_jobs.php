<?php include("logincheck.php"); ?>
<!DOCTYPE html>
<html>
    
    <head>

        <meta charset="UTF-8">

        <title>ITL JOBS</title>

        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <!-- Bootstrap 3.3.4 -->

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link href="https://cdn.jsdelivr.net/bootstrap.timepicker/0.2.6/css/bootstrap-timepicker.css" rel="stylesheet" />


        <!-- Font Awesome Icons -->

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <!-- Ionicons -->

        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />

        <!-- Theme style -->

        <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

        <!-- AdminLTE Skins. Choose a skin from the css/skins 

             folder instead of downloading all of them to reduce the load. -->

        <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />


        <link href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

        <!-- SELECT 2 -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />


        <style>
            .error{
                color: #C80000 !important;

            }
        </style>
    </head>

    <body class="skin-blue sidebar-mini">

        <div class="wrapper">

            <?php include 'header.php'; ?>

            <?php
            include 'menu.php';
            include_once 'db.php';

            session_start();
            ?>

            <!-- Content Wrapper. Contains page content -->

            <div class="content-wrapper">

                <!-- Content Header (Page header) -->

                <section class="content-header">

                    <h1>

                        Jobs |

                        <small>ITL JOBS</small>

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

                                    <h3 class="box-title">Add Jobs </h3>

                                </div><!-- /.box-header -->

                                <!-- form start -->

                                <form  role="form" name="frm" id="frm" method="POST" action="addjobs_process.php" enctype="multipart/form-data">

                                    <?php
                                    if ($_SESSION['addsucc'] != '') {

                                        if ($_SESSION['addsucc'] == '1') {
                                            ?>

                                            <div class="alert alert-success alert-dismissable">

                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                Job Added Successfully <a href="#" class="alert-link"></a>.

                                            </div>

                                        <?php } else if ($_SESSION['addsucc'] == '2') {
                                            ?>
                                            <div class="alert alert-danger alert-dismissable">

                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                Unable to add job<a href="#" class="alert-link"></a>.

                                            </div>
                                        <?php } else if ($_SESSION['addsucc'] == '3') {
                                            ?>
                                            <div class="alert alert-danger alert-dismissable">

                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                Job create date should be lesser than closing date!<a href="#" class="alert-link"></a>.

                                            </div>
                                            <?php
                                        }
                                        unset($_SESSION['addsucc']);
                                    }
                                    ?>

                                    <div class="box-body">

                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Industry</label>

                                            <select class="form-control" name="job_cat" id="job_cat">
                                                <option disabled="" selected="">Select Job Title</option>
                                                <?php
                                                $qry = sprintf("SELECT id,name FROM `job_categories` ORDER BY name");
                                                $res = Db::query($qry);
                                                if (mysql_num_rows($res)) {
                                                    while ($row = mysql_fetch_array($res)) {
                                                        ?>
                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>

                                        </div>

                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Job Title</label>

                                            <select class="form-control" name="title" id="title">
                                                <option disabled="" selected="">Select an Industry to Populate</option>
                                            </select>

                                        </div>


                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Company Name</label>

                                            <select type="text" class="form-control" id="company" placeholder="Company Name" name="company">
                                                <?php
                                                    $sql = sprintf('SELECT * FROM company ORDER BY company_name');
                                                    $result = Db::query($sql);
                                                    while($row = mysql_fetch_assoc($result)){
                                                ?>
                                                <option value="<?=$row['company_name']?>"><?=$row['company_name']?></option>
                                                <?php } ?>
                                            </select>

                                        </div>

                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Job Description</label>

                                            <textarea class="ckeditor" id="job_description" name="job_description"></textarea>

                                        </div>

                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Experience</label>

                                            <input type="text" class="form-control" id="experience" placeholder="Experience" name="experience">

                                        </div>

                                        <div class="form-group">
                                            <?php
                                            date_default_timezone_set('Asia/Calcutta');
                                            $todaydate = date("d/m/Y");
                                            ?>

                                            <label for="exampleInputEmail1">Create Date</label>

                                            <input type="text" class="form-control" name="create_date" placeholder="Create Date" value="<?php echo $todaydate; ?>" readonly=""/>

                                        </div>

                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Closing Date</label>

                                            <input type="text" class="form-control" id="datepicker1" name="closing_date" placeholder="Closing Date" data-format="yyyy-MM-dd"/>

                                        </div>

                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Job Type</label>

                                            <select class="form-control" name="job_type">
                                                <option disabled="" selected="">SELECT</option>
                                                <option value="FULL TIME">FULL TIME</option>
                                                <option value="PART TIME">PART TIME</option>
                                                <option value="TEMPORARY">TEMPORARY</option>
                                                <option value="CONTRACT">CONTRACT</option>
                                                <option value="INTERNSHIP">INTERNSHIP</option>
                                                <option value="FRESHER">FRESHER</option>
                                                <option value="WALKIN">WALKIN</option>
                                            </select>

                                        </div>

                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Job Location</label>

                                            <input type="text" class="form-control" id="location" placeholder="Job Location" name="location">

                                        </div>

                                        <div class="form-group">
                                            <label for="keys">Key Words(optional)</label>
                                            <select class="form-control select2" id="keys" name="keys[]" multiple>
                                            </select>
                                        </div>

                                        <div class="box-footer">

                                            <button type="submit" class="btn btn-primary">Submit</button>

                                        </div>

                                    </div><!-- /.box-body -->

                                </form>

                            </div><!-- /.box -->

                            <!--/.box-body  -->

                        </div><!-- /.box -->

                    </div><!--.row-->

                </section> <!-- /.content -->

            </div>  <!--/.content-wrapper -->


            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
            <!-- Bootstrap 3.3.2 JS -->

            <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

            <!-- FastClick -->

            <script src='plugins/fastclick/fastclick.min.js'></script>

            <!-- AdminLTE App -->

            <script src="dist/js/app.min.js" type="text/javascript"></script>

            <!-- AdminLTE for demo purposes -->

            <script src="dist/js/demo.js" type="text/javascript"></script>


            <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

<!--        <script src="js/jquery.Jcrop.min.js"></script>
        <link href="css/jquery.Jcrop.min.css" rel="stylesheet" type="text/css" />-->

            <script src="ckeditor/ckeditor.js"></script>

            <script src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCs0t_PMvRJFMcxdA1ytRbIWE8GdobPsyg"></script>
            <script src="js/jquery.geocomplete.js"></script>


            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js"></script>

            <!-- SELECT 2 -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
            <script>

                // When the browser is ready...

                $(function () {

                    $("#keys").select2({
                        tags: true
                    });

                    $('#title').attr("disabled", "disabled");
                    $('#job_cat').change(function () {
                        var id = $('#job_cat').val();
                        $.post("get_industry.php", {
                            id: id
                        },
                                function (response) {
                                    if (response != '<option selected disabled>Select Job Category</option>') {
                                        $('#title').html(response);
                                        $('#title').removeAttr("disabled");
                                    } else {
                                        var msg = "<option value=\"Unavailable\" selected>No Job Category Available for the selected Industry</option>";
                                        $('#title').html(msg);
                                    }
                                });
                    });

                    $('#datepicker1').datepicker({
                        format: "dd/mm/yyyy",
                        startDate: '0'
                    });
                    $("#location").geocomplete({
                        types: ["geocode", "establishment"],
                    });
                    $.validator.addMethod('experience', function (value) {
//                        return /^[0-9 ]+((-){0,1}[0-9 ]+){0,1}$/.test(value);
                        return /^[0-9] [A-Za-z]{4,}( - [0-9] [A-Za-z]{4,}){0,1}$/.test(value);

                    }, 'Please enter valid experience in or months or year as in range as low-High. Example : 6 months - 1 year');
                    // Setup form validation on the #register-form element

                    $("#frm").validate({
                        // Specify the validation rules
                        ignore: [],
                        debug: false,
                        rules: {
                            job_cat: {required: true},
                            company: {required: true, lettersonly: true},
                            experience: {required: true, experience: true},
                            location: "required",
                            create_date: "required",
                            closing_date: "required",
                            job_cat: "required",
                            job_type: "required",
                            job_description: {
                                required: function ()
                                {
                                    CKEDITOR.instances.job_description.updateElement();
                                },
                                minlength: 10
                            }
                        },
                        // Specify the validation error messages

                        messages: {
                            job_cat: {required: "Please enter industry"},
                            company: {required: "Please enter company name", lettersonly: "Please enter letters , '&' and '-' only"},
                            experience: {required: "Please enter experience"},
                            location: "Please enter location",
                            create_date: "Please enter create date",
                            closing_date: "Please enter closing date",
                            job_cat: "Please enter job category",
                            job_type: "Please select job type",
                            job_description: {
                                required: "Please enter job description",
                                minlength: "Please enter atleast 10 characters"
                            }
                        },
                        submitHandler: function (form) {

                            form.submit();
                        }

                    });
                    jQuery.validator.addMethod("lettersonly", function (value, element) {
                        return this.optional(element) || /^[a-zA-Z\-\&\s]+$/i.test(value);
                    });

                });

            </script> 
        </div>

    </body>


</html>


