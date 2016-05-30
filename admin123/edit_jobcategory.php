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

            session_start();
            ?>
            <?php $id = isset($_GET['id']) ? $_GET['id'] : 0; ?>

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
                                    //select category
                                    $querycat = sprintf("SELECT * FROM `job_categories` WHERE id='%s'", $id);
                                    $resultcat = Db::query($querycat);
                                    //select existing industries
                                    $query = sprintf("SELECT ind.industry_name as industry_name FROM industries ind JOIN industry_category ic ON ind.id = ic.industry_id WHERE ic.category_id = '$id'");
                                    $result = Db::query($query);
                                    while ($row = mysql_fetch_assoc($result)) {
                                        $rowArr[] = $row['industry_name'];
                                    }


                                    if (mysql_num_rows($resultcat) > 0) {
                                        $rowcat = mysql_fetch_assoc($resultcat);
                                        ?>
                                        <div class="box-body">

                                            <div class="form-group">

                                                <label for="exampleInputEmail1">Title</label>

                                                <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="<?php echo $rowcat['name']; ?>">

                                            </div>
                                            <label for="exampleInputEmail1">Industry</label>
                                            <select class="js-data-example-ajax form-control" name="industry[]" id="industry" multiple="" placeholder="Industry" required="">
                                                <?php
                                                //select all industries
                                                $qryind = sprintf("SELECT * FROM `industries` ORDER BY industry_name");
                                                $resind = Db::query($qryind);

                                                while ($rowind = mysql_fetch_assoc($resind)) {
//                                        
                                                    ?>

                                                    <option <?php echo (in_array($rowind['industry_name'], $rowArr)) ? 'selected == selected' : ''; ?> value="<?php echo $rowind['industry_name']; ?>"><?php echo $rowind['industry_name']; ?></option>

                                                    <?php 
                                                }
                                                ?>
                                            </select>
                                            <span id="errMsg"></span>
                                            <input type="hidden"  name="id" value="<?php echo $rowcat['id']; ?>"/>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>


<script>
            $('.js-data-example-ajax').select2({
                tags: true

            });
</script>

        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />

    <!--<script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>-->

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
                        title: {required: "Please enter title", lettersonly: "Please enter letters only"}

                    },
                    submitHandler: function (form) {

                        form.submit();
                    }

                });

                jQuery.validator.addMethod("lettersonly", function (value, element) {
                    return this.optional(element) || /^[a-z\s]+$/i.test(value);
                }, "Letters only please");

                $('#industry').change(function () {
                    $('[name="industry[]"]').valid();
                });

                $.validator.addMethod("letters", function (value, element) {
                    var flag = true, i, count = 0;

                    var val = $('.select2-selection__choice').map(function () {
                        return $(this).attr('title');
                    }).get();
                    $('#errMsg').html("<strong></strong>");
                    if (val.length > 0) {
                        for (i = 0; i < val.length; i++) {
                            var test = /^[a-z\.\+\-\&\:\/\s]+$/i.test(val[i]);
                            if (!test) {
                                count++;
                                flag = false;
                            }
                        }
                        if (flag) {                            
                            return true;
                        } else {
                            $('#errMsg').html("<strong>" + count + " Number of Industrie(s) are Invalid. Allowed Special Charecters are - (.,+,-,&,:,/)</strong>");
                            return false;
                        }

                    } else {
                        $('#errMsg').html("<strong>Industry required</strong>");
                        return false;
                    }
                });

            });

        </script> 
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

