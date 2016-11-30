<?php include("logincheck.php"); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
    
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



        <link href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

        <link href="css/datepicker.css" rel="stylesheet" />
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/bootstrap.timepicker/0.2.6/css/bootstrap-timepicker.css" rel="stylesheet" />






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

                        Interviews |

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

                                    <h3 class="box-title">Add Interview </h3>  
                                    <?php
                                    $id = $_SESSION['id'];
                                    ?>

                                </div><!-- /.box-header -->

                                <!-- form start -->

                                <form  role="form" name="frm" id="frm" method="POST" action="addinterview_process.php" enctype="multipart/form-data">

                                    <?php
                                    if ($_SESSION['addsucc'] != '') {

                                        if ($_SESSION['addsucc'] == '1') {
                                            ?>

                                            <div class="alert alert-success alert-dismissable">

                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                Interview Details Added Successfully <a href="#" class="alert-link"></a>.

                                            </div>

                                        <?php } else if ($_SESSION['addsucc'] == '2') {
                                            ?>
                                            <div class="alert alert-danger alert-dismissable">

                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                Unable to add Interview Details<a href="#" class="alert-link"></a>.

                                            </div>
                                        <?php } else if ($_SESSION['addsucc'] == '3') {
                                            ?>
                                            <div class="alert alert-danger alert-dismissable">

                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                Interview date should be greater than today's date!<a href="#" class="alert-link"></a>.

                                            </div>
                                            <?php
                                        }
                                        unset($_SESSION['addsucc']);
                                    }
                                    ?>
                                    <div class="box-body">

<!--                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Position</label>

                                            <input type="text" class="form-control" id="name" placeholder="Position" name="name">

                                        </div>-->

                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Job Category</label>

                                            <select class="form-control" name="job_cat" id="job_cat">
                                                <option disabled="" selected="">Select Job Category</option>
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

                                            <label for="exampleInputEmail1">Industry</label>

                                            <select class="form-control" name="title" id="title">
                                                <option disabled="" selected="">Select a Category to Populate</option>
                                            </select>

                                        </div>

                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Description</label>

                                            <textarea  class="ckeditor" rows="3" placeholder="Enter ..." name="description" id="description"></textarea>

                                        </div>

                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Salary Structure</label>

                                            <input type="text" class="form-control" id="salary" placeholder="Salary" name="salary">

                                        </div>

                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Company Name</label>

                                            <input type="text" class="form-control" id="company_name" placeholder="Company Name" name="company_name">

                                        </div>

                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Country</label>

                                            <select id="country" name="country" class="form-control"></select>
                                            <script language="javascript">
                                                populateCountries("country");
                                            </script>

                                        </div>

                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Interview Date</label>

                                            <input type="text" class="form-control" id='datepicker' name="date" placeholder="Interview Date"/>

                                        </div>

                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Location</label>

                                            <input type="text" class="form-control" id="venue" placeholder="Location" name="venue">

                                        </div>

                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Name of co ordinator</label>

                                            <input type="text" class="form-control" id="coordinator" placeholder="Name of co ordinator" name="coordinator">

                                        </div>

                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Contact Number</label>

                                            <input type="text" class="form-control" id="contact" placeholder="Contact" name="contact">

                                        </div>

                                        <!--                                        <div class="form-group">
                                        
                                                                                    <label for="exampleInputEmail1">Job Applied For</label>
                                        
                                                                                    <select class="form-control" name="title">
                                                                                        <option disabled="" selected="">select</option>
                                        <?php
//                                                $qry = sprintf("SELECT id,name FROM `job_categories` ORDER BY name");
//                                                $res = Db::query($qry);
//                                                if(mysql_num_rows($res)){
//                                                while ($row = mysql_fetch_array($res)) {
                                        ?>
                                                                                        <option value="<?php // echo $row['id'];         ?>"><?php // echo $row['name'];         ?></option>
                                        <?php
//                                                }  }
                                        ?>
                                                                                    </select>
                                        
                                                                                </div>-->

                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Interview Time</label>

                                            <input id="timepicker1" type="text" class="form-control input-small" placeholder="Schedule Time" name="time">  

                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Interview Type</label>
                                            <select name="interview" class="form-control" id="interview">
                                                <option disabled="" selected="">SELECT</option>
                                                <option name="Overseas">Overseas</option>
                                                <option name="India">India</option>
                                            </select>
                                        </div>

                                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>

                                        <div class="box-footer">

                                            <button type="submit" class="btn btn-primary">Submit</button>

                                        </div>

                                    </div><!-- /.box-body -->

                                </form>

                            </div><!-- /.box -->

                        </div>

                    </div>  <!--  /.row -->

                </section> <!-- /.content -->

            </div>  <!--/.content-wrapper -->


            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
            <!-- Bootstrap 3.3.2 JS -->

            <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
            <!-- FastClick -->

            <script src='plugins/fastclick/fastclick.min.js'></script>

            <!-- AdminLTE App -->

            <script src="dist/js/app.min.js" type="text/javascript"></script>
            <!--
                         AdminLTE for demo purposes 
            
                        <script src="dist/js/demo.js" type="text/javascript"></script>-->

            <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
            <script src="ckeditor/ckeditor.js"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js"></script>

            <script src="https://cdn.jsdelivr.net/bootstrap.timepicker/0.2.6/js/bootstrap-timepicker.min.js"></script>

            <script src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCs0t_PMvRJFMcxdA1ytRbIWE8GdobPsyg"></script>
            <script src="js/jquery.geocomplete.js"></script>

            <script>

                                                // When the browser is ready...

                                                $(function () {

                                                    $('#title').attr("disabled", "disabled");
                                                    $('#job_cat').change(function () {
                                                        var id = $('#job_cat').val();
                                                        $.post("get_industry.php", {
                                                            id: id
                                                        },
                                                        function (response) {
                                                            if (response != '<option selected disabled>Select Industry</option>') {
                                                                $('#title').html(response);
                                                                $('#title').removeAttr("disabled");
                                                            } else {
                                                                var msg = "<option value=\"Unavailable\" selected>No Industry Available for the selected Category</option>";
                                                                $('#title').html(msg);
                                                            }
                                                        });
                                                    });

                                                    $("#venue").geocomplete({
                                                        types: ["geocode", "establishment"],
                                                    });


                                                    $('#datepicker').datepicker({
                                                        format: "dd/mm/yyyy",
                                                        startDate: '0'
                                                    });

                                                    /*$.validator.addMethod('salrange', function (value) {
                                                        return /^[0-9]+( - [0-9]+ )+\s*[A-Z]{3}\s*$/.test(value);
                                                    }, 'Please enter a valid Salary Range like: lowest Salary - Highest Salary followed by ISO currency code || Example:100000 - 150000 INR ||. If salary is Fixed give Both side the same salary.');*/

                                                    $.validator.addMethod("dateFormat",
                                                            function (value, element) {
                                                                return value.match(/^(?=\d)(?:(?:31(?!.(?:0?[2469]|11))|(?:30|29)(?!.0?2)|29(?=.0?2.(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00)))(?:\x20|$))|(?:2[0-8]|1\d|0?[1-9]))([-.\/])(?:1[012]|0?[1-9])\1(?:1[6-9]|[2-9]\d)?\d\d(?:(?=\x20\d)\x20|$))?(((0?[1-9]|1[012])(:[0-5]\d){0,2}(\x20[AP]M))|([01]\d|2[0-3])(:[0-5]\d){1,2})?$/);
                                                            },
                                                            "Please enter a date in the format dd/mm/yyyy."
                                                            );
                                                    $.validator.addMethod('alphanumeric', function (value) {
                                                        return /^[A-Za-z0-9,\. ]+$/i.test(value);
                                                    }, 'Please enter letters, comma, dot and numbers only.');

                                                    // Setup form validation on the #register-form element

                                                    $("#frm").validate({
                                                        // Specify the validation rules
                                                        ignore: [],
                                                        debug: false,
                                                        rules: {
                                                           // name: {required: true, alphanumeric: true},
                                                            title: {required: true},
                                                            job_cat: "required",
                                                            date: {dateFormat: true},
                                                            company_name: {required: true, lettersonly: true},
                                                            country: "required",
                                                            //salary: {required: true},
                                                            venue: {required: true, alphanumeric: true},
                                                            interview: "required",
                                                            //coordinator: {required: true, lettersonly: true},
                                                            contact: {
                                                                required: true,
                                                                digits: true,
                                                                minlength: 10, //or look at the additional-methods.js to see available phone validations
                                                                maxlength: 15
                                                            },
                                                            /*description: {
                                                                required: function ()
                                                                {
                                                                    CKEDITOR.instances.description.updateElement();
                                                                },
                                                                minlength: 10
                                                            }*/
                                                        },
                                                        // Specify the validation error messages

                                                        messages: {
                                                            //name: {required: "Please enter position", lettersonly: "Please enter letters only"},
                                                            title: {required: "Please enter industry"},
                                                            job_cat: "Please enter job category",
                                                            date: {required: "Please enter date", dateFormat: "Please enter a date in the format dd/mm/yyyy."},
                                                            company_name: {required: "Please enter company name", lettersonly: "Please enter letters only"},
                                                            country: "Please enter country",
                                                            //salary: {required: "Please Enter Salary"},
                                                            time: "Please enter time",
                                                            venue: {required: "Please enter location"},
                                                            interview: "please select interview",
                                                            //coordinator: {required: "Please enter name of coordinator", lettersonly: "Please enter letters only"},
                                                            contact: {
                                                                required: "Please enter your contact number.",
                                                                digits: "Enter digits only",
                                                                minlength: "Enter valid contact number",
                                                                maxlength: "Enter valid contact number"
                                                            },
                                                            /*description: {
                                                                required: "Please enter description",
                                                                minlength: "Please enter 10 characters"
                                                            }*/
                                                        },
                                                        submitHandler: function (form) {

                                                            form.submit();
                                                        }

                                                    });
                                                    jQuery.validator.addMethod("lettersonly", function (value, element) {
                                                        return this.optional(element) || /^[a-z\s]+$/i.test(value);
                                                    });
                                                });

            </script> 
            <script type="text/javascript">
                $('#timepicker1').timepicker();
            </script>

    </body>


</html>


