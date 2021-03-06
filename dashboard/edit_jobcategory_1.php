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


    <!--<script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>-->

    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

 <script>
            // When the browser is ready...

            $(function () {

                // Setup form validation on the #register-form element

                $("#frm").validate({

                    // Specify the validation rules

                    rules: {
                        
                        title: {required: true,lettersonly: true}
                    },
                    // Specify the validation error messages

                    messages: {
                        title: {required: "Please enter title",lettersonly: "Please enter letters only"}

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
 <!-- <style>
         .error{
            color: #C80000 !important;
        
            }
   </style> -->

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

                Job Categories

                <small>ITL Jobs</small>

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

                            <h3 class="box-title">Edit Job Categories </h3>

                        </div><!-- /.box-header -->

                        <!-- form start -->

                        <form  role="form" name="frm" id="frm" method="POST" action="edit_jobcatprocess.php" enctype="multipart/form-data">

                            
                            <?php
                            require_once("db.php");
                            $query = sprintf("SELECT * FROM `job_categories` WHERE id='%s'",$id);
                            $result = Db::query($query);
                            if (mysql_num_rows($result) > 0) {
                                $row = mysql_fetch_assoc($result);
                        
                            ?>
                             <div class="box-body">

                              <div class="form-group">

                                            <label for="exampleInputEmail1">Title</label>

                                            <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="<?php echo $row['name']; ?>">

                                        </div>
                               
                                    <input type="hidden"  name="id" value="<?php echo $row['id'];?>"/>
                                      <?php } ?>
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


<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

<!-- FastClick -->

<script src='plugins/fastclick/fastclick.min.js'></script>

<!-- AdminLTE App -->

<script src="dist/js/app.min.js" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->

<script src="dist/js/demo.js" type="text/javascript"></script>


</body>

<!--<script type="text/javascript">
    $(function () {
     

        var upload_number = 2;
        $('#addUpload').on('click', function(){
            var moreUploadTag = '';
            moreUploadTag += '<div class="form-group"><label for="exampleInputFile"' + upload_number + '>Upload File ' + upload_number + '</label>';
            moreUploadTag += '<input type="file" id="upload_file' + upload_number + '" name="upload_file' + upload_number + '"/>';
            moreUploadTag += '&nbsp;<a href="javascript:del_file(' + upload_number + ')" style="cursor:pointer;" onclick="return confirm(\"Are you really want to delete ?\")">Delete ' + upload_number + '</a></div>';
            $('<dl id="delete_file' + upload_number + '">' + moreUploadTag + '</dl>').fadeIn('slow').appendTo('#moreImageUpload');
            upload_number++;
        })
    });

    function del_file(eleId) {
        var ele = document.getElementById("delete_file" + eleId);
        ele.parentNode.removeChild(ele);
    }
</script>-->

</html>

