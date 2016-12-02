<?php
include_once 'db.php';
if (empty($_GET['id'])) {
    header('location:itl-access-denied.php');
    die();
}
$id = $_GET['id'];
$sql = sprintf('SELECT * FROM company WHERE id=%d', $id);
$result = Db::query($sql);
if (mysql_num_rows($result) <= 0) {
    header('location:itl-access-denied.php');
    die();
}
$row = mysql_fetch_assoc($result);
$name = $row['company_name'];
$logo = $row['logo'];
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <title>ITL JOBS</title>

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap 3.3.4 -->

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <link href="https://cdn.jsdelivr.net/bootstrap.timepicker/0.2.6/css/bootstrap-timepicker.css" rel="stylesheet"/>


    <!-- Font Awesome Icons -->

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>

    <!-- Ionicons -->

    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css"/>

    <!-- Theme style -->

    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css"/>

    <!-- AdminLTE Skins. Choose a skin from the css/skins

         folder instead of downloading all of them to reduce the load. -->

    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css"/>


    <link href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet"
          type="text/css"/>

    <!-- SELECT 2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet"/>

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
        .error {
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

            EDIT COMPANY |

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

                        <h3 class="box-title">Add Company </h3>

                    </div>
                    <!-- /.box-header -->

                    <!-- form start -->

                    <form role="form" name="frm" id="frm" method="POST" action="edit_company_process.php"
                          enctype="multipart/form-data">

                        <?php
                        if (isset($_SESSION['message'])) {
                            ?>

                            <div class="alert alert-<?= $_SESSION['type'] ?> alert-dismissable">

                                <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>

                                <?= $_SESSION['message'] ?> <a href="#" class="alert-link"></a>.

                            </div>

                            <?php
                            unset($_SESSION['message']);
                            unset($_SESSION['type']);
                        }

                        ?>

                        <div class="box-body">
                            <input type="hidden" value="<?= $id ?>" name="id">

                            <div class="form-group">

                                <label for="company">Company Name</label>
                                <input type="text" class="form-control" id="company" placeholder="Company Name"
                                       name="company" value="<?= $name ?>">

                            </div>
                            <div class="form-group row">
                                <div class="col-md-10">
                                    <input type="file" class="resume" name="logo" id="f02"
                                           placeholder="UPLOAD COMPANY LOGO">
                                    <label for="f02">UPLOAD NEW COMPANY LOGO (JPG, PNG, JPEG)</label>
                                    <span class="pull-right text-bold">Current Logo -></span>
                                </div>
                                <div class="col-md-2"><img src="../images/logos/<?= $logo ?>" class="img-responsive">
                                </div>
                            </div>

                            <div class="box-footer">

                                <button type="submit" class="btn btn-primary">Submit</button>

                            </div>

                        </div>
                        <!-- /.box-body -->

                    </form>

                </div>
                <!-- /.box -->

                <!--/.box-body  -->

            </div>
            <!-- /.box -->

        </div>
        <!--.row-->

    </section>
    <!-- /.content -->

</div>
<!--/.content-wrapper -->


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

<script
    src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCs0t_PMvRJFMcxdA1ytRbIWE8GdobPsyg"></script>
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
                    if (response != '<option selected disabled>Select Industry</option>') {
                        $('#title').html(response);
                        $('#title').removeAttr("disabled");
                    } else {
                        var msg = "<option value=\"Unavailable\" selected>No Industry Available for the selected Category</option>";
                        $('#title').html(msg);
                    }
                });
        });

        $('#datepicker1').datepicker({
            format: "dd/mm/yyyy",
            startDate: '0'
        });
        $("#location").geocomplete({
            types: ["geocode", "establishment"]
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
                company: {required: true, lettersonly: true}
            },
            // Specify the validation error messages

            messages: {
                company: {required: "Please enter company name", lettersonly: "Please enter letters , '&' and '-' only"}
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


