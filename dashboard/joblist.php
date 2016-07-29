<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<?php  include("logincheck.php");?>
    <head>

        <meta charset="UTF-8">

        <title>ITL JOBS</title>

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

        <!--<link href="plugins/datetimepicker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />-->



        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>

            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

        <![endif]-->


        <script src="//code.jquery.com/jquery-1.9.1.js"></script>

        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

        <link href="css/jquery.Jcrop.min.css" rel="stylesheet" type="text/css" />

        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

        <script src="ckeditor/ckeditor.js"></script>

        <script>

            // When the browser is ready...

            $(function () {

                // Setup form validation on the #register-form element

                $("#frm").validate({

                    // Specify the validation rules

                    rules: {
                        
                        page: "required",
                        fileToUpload:{required:true}
                    },
                    // Specify the validation error messages

                    messages: {

                        page: "Please enter page",
                        fileToUpload:{required: "Please Upload image"}

                    },

                    submitHandler: function (form) {

                        form.submit();

                    }

                });



            });

            jQuery.validator.addMethod("myRule", function (value, element, options) {

                if (parseInt($('#w').val()))

                    return true;

                return false;



            }, "");



        </script>  

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
            include 'db.php'; 

            session_start();

            ?>

            <!-- Content Wrapper. Contains page content -->

            <div class="content-wrapper">

                <!-- Content Header (Page header) -->

                <section class="content-header">

                    <h1>

                         Job List |

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

                                        <h3 class="box-title">Job List</h3>

                                </div><!-- /.box-header -->

                                <!-- form start -->

                                <form  role="form" name="frm" id="frm" method="POST" action="" enctype="multipart/form-data">

                                    <div class="box-body">

                                        <div class="form-group">
                                             <?php
                                                $sql    = sprintf("SELECT id, name FROM `users` WHERE role_id='%s'",2);
                                                $result = Db::query($sql);
                                                $ct     = isset($_GET['ct']) ? $_GET['ct'] : 0;
                                            ?>

                                            <label id="seloptionslb" >Select Admin</label>

                                            <select class="form-control" name="seloptions"  id="seloptions">
                                               <option selected="true" disabled="disabled">Select</option>   
                                                <?php while($row = mysql_fetch_assoc($result)){?>
                                                    <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
                                                <?php } ?>
                                                
                                             </select> 

                                        </div>
                                        
                                    </div><!-- /.box-body -->

                                </form>

                            </div><!-- /.box -->
   <div class="row">
        <div class="col-lg-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Job Details
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <div id="list-doctor-fix"></div>
                    </div>
                </div>

            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
                        </div><!--/.col (left) 

                        <!--/.box-body  -->

                    </div><!-- /.box -->

            </div><!-- /.col (right) -->

        </div>  <!--  /.row -->

    </section> <!-- /.content -->

</div>  <!--/.content-wrapper -->



<!-- Bootstrap 3.3.2 JS -->

<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--<script src="plugins/datetimepicker/moment.js" type="text/javascript"></script>-->
<!--<script src="plugins/datetimepicker/bootstrap-datetimepicker.js" type="text/javascript"></script>-->

<!-- FastClick -->

<script src='plugins/fastclick/fastclick.min.js'></script>

<!-- AdminLTE App -->

<script src="dist/js/app.min.js" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->

<script src="dist/js/demo.js" type="text/javascript"></script>


<script src="plugins/dataTables/jquery.dataTables.js"></script>
<script src="plugins/dataTables/dataTables.bootstrap.js"></script>

<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>
  <script>
$(document).ready(function(){
  $(".del").click(function(){
    if (!confirm("Do you want to delete")){
      return false;
    }
  });

    $('#seloptions').on('change', function(){
        alert('sdfgfsdg');
        $.ajax({
            'url': 'list-job-ajax.php?id='+this.value,
        }).done(function(data){
            $('#list-job-fix').html(data);

        });
    });

    $.ajax({
        'url': 'list-job-ajax.php?id=<?=$ct?>',
    }).done(function(data){
        $('#list-job-fix').html(data);

    });


});
</script>

</body>


</html>

