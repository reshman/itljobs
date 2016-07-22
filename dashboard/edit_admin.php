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


    <script src="ckeditor/ckeditor.js"></script>

                 <script>

            // When the browser is ready...

            $(function () {

                // Setup form validation on the #register-form element

                $("#frm").validate({

                    // Specify the validation rules

                    rules: {
                        
                        name: {required: true,lettersonly: true},
                        email: {required: true,email: true}
                      
                    },
                    // Specify the validation error messages

                    messages: {

                        name: {required: "Please enter name",lettersonly: "Please enter letters only"},
                        email: {required: "Please enter email",email: "Please enter valid email"}

                    },

                    submitHandler: function (form) {

                        form.submit();

                    }

                });

                  jQuery.validator.addMethod("lettersonly", function(value, element) {
                    return this.optional(element) || /^[a-z\s]+$/i.test(value);
                  }, "Letters only please");

            });

        </script>  

</head>

<body class="skin-blue sidebar-mini">

<div class="wrapper">



    <?php include 'header.php'; ?>

    <?php include 'menu.php';

    session_start();

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

                            <h3 class="box-title">Edit Admin </h3>

                        </div><!-- /.box-header -->

                        <!-- form start -->

                        <form  role="form" name="frm" id="frm" method="POST" action="edit_adminprocess.php" enctype="multipart/form-data">


                            <?php
                            require_once("db.php");
                            $sql    = sprintf("SELECT * FROM users WHERE id = '%s'", $id);
                            $result = Db::query($sql);
                            $row    = array();
                            if (mysql_num_rows($result) > 0) {
                                $row = mysql_fetch_assoc($result);
                            }
                            ?>
                            <div class="box-body">

                                <div class="form-group">

                                    <label for="exampleInputEmail1">Name</label>

                                    <input type="text" class="form-control" id="name" value="<?php echo $row['name']?>" placeholder="Name" name="name">

                                </div>
                                
                                <div class="form-group">

                                    <label for="exampleInputEmail1">Email</label>

                                    <input type="email" class="form-control" id="email" value="<?php echo $row['email']?>" placeholder="Email" name="email">

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

<!-- FastClick -->

<script src='plugins/fastclick/fastclick.min.js'></script>

<!-- AdminLTE App -->

<script src="dist/js/app.min.js" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->

<script src="dist/js/demo.js" type="text/javascript"></script>

</body>

</html>

