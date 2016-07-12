<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
    <?php include("logincheck.php"); ?>
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


        <script src="//code.jquery.com/jquery-1.9.1.js"></script> 

        <script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>



 <!--<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>-->

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />



       <!-- <style>
         .error{
            color: #C80000 !important;
        
            }
        </style> -->
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

                        Job Categories |

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

                                    <h3 class="box-title">Add Job Categories </h3>

                                </div><!-- /.box-header -->

                                <!-- form start -->

                                <form  role="form" name="frm" id="frm" method="POST" action="addjobcat_process.php" enctype="multipart/form-data">

                                    <?php
                                    if ($_SESSION['addsucc']!='') {

                                        if ($_SESSION['addsucc'] == '1') {
                                            ?>

                                            <div class="alert alert-success alert-dismissable">

                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                Job Category Added Successfully <a href="#" class="alert-link"></a>.

                                            </div>

                                            <?php
                                        }
                                        unset($_SESSION['addsucc']);
                                    }
                                    
                                    ?>

                                    <div class="box-body">

                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Job Category</label>

                                            <input type="text" class="form-control" id="title" placeholder="Job Category" name="title">

                                        </div>
                                        <label>Industry</label>
                                        <select class="js-data-example-ajax form-control" name="industry[]" id="industry" multiple="" placeholder="Industry">
                                            <?php
                                            $qryind = sprintf("SELECT * FROM `industries` ORDER BY industry_name");
                                            $resind = Db::query($qryind);
                                            while ($rowind = mysql_fetch_assoc($resind)) {
                                                ?>
                                                <option value="<?php echo $rowind['industry_name']; ?>"><?php echo $rowind['industry_name']; ?></option>

                                            <?php } ?>
                                        </select>
                                        <span id="errMsg"></span>
                                        <div class="box-footer">

                                            <button type="submit" class="btn btn-primary">Submit</button>

                                        </div>

                                    </div><!-- /.box-body -->

                                </form>

                            </div><!-- /.box -->

                        </div><!--/.col (left) 


                        <!--/.box-body  -->

                    </div><!-- /.box -->

            </div><!-- /.col (right) -->

        </div>  <!--  /.row -->

    </section> <!-- /.content -->

</div>  <!--/.content-wrapper -->


<!-- Bootstrap 3.3.2 JS -->

<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>


<!-- FastClick -->

<script src='plugins/fastclick/fastclick.min.js'></script>

<!-- AdminLTE App -->

<script src="dist/js/app.min.js" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->

<script src="dist/js/demo.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>


<script>
    $('.js-data-example-ajax').select2({
        tags: true

    });
</script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script>
    // When the browser is ready...

    $(function () {

        // Setup form validation on the #register-form element

        $("#frm").validate({
            // Specify the validation rules
            errorPlacement: function (error, element) {
                switch (element.attr("name")) {
                    case 'industry[]':
                        error.insertAfter($("#errMsg"));
                        break;
                    default:
                        error.insertAfter(element);
                }
            },
            ignore: 'input[type=hidden]',
            rules: {
                title: {required: true, lettersonly: true},
                'industry[]': {letters: true}
            },
            // Specify the validation error messages

            messages: {
                title: {required: "Please enter title"}
            },
            submitHandler: function (form) {

                form.submit();
            }

        });
        
        $('#industry').change(function(){
           $('[name="industry[]"]').valid(); 
        });

        jQuery.validator.addMethod("lettersonly", function (value, element) {
            console.log(value);
            return this.optional(element) || /^[a-z\.\+\-\&\:\,\(\)\/\s]+$/i.test(value);
        }, "Invalid Category name. Allowed Special Charecters are - (,,(,),.,+,-,&,:,/)");

        $.validator.addMethod("letters", function (value, element) {
            var flag = true, i, count=0;
            
            var val = $('.select2-selection__choice').map(function () {
                return $(this).attr('title');
            }).get();
            
            if (val.length > 0) {
                for (i = 0; i < val.length; i++) {
                    var test = /^[a-z\.\+\-\&\:\,\(\)\/\s]+$/i.test(val[i]);
                    if (!test) {
                        count++;
                        flag=false;
                    }
                }
                if (flag) {
                    $('#errMsg').html("");
                    return true;
                } else {
                    $('#errMsg').html("<strong>"+count+" Number of Industrie(s) are Invalid. Allowed Special Charecters are - (,,(,),.,+,-,&,:,/)</strong>");
                    return false;
                }

            } else {
                $('#errMsg').html("<strong>Industry required</strong>");
                return false;
            }
        }, "");
    });

</script>
</body>


</html>


