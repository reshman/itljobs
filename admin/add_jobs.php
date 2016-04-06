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

        <!--<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>-->

        <link href="plugins/datetimepicker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />



        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>

            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

        <![endif]-->



        <script src="//code.jquery.com/jquery-1.9.1.js"></script>

        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

        <script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>

        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

        <script src="js/jquery.Jcrop.min.js"></script>
        <link href="css/jquery.Jcrop.min.css" rel="stylesheet" type="text/css" />

        <script src="ckeditor/ckeditor.js"></script>
        
        
        
     <link href="css/datepicker.css" rel="stylesheet" />
     <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" />

           <script>
            // When the browser is ready...

            $(function () {

                // Setup form validation on the #register-form element

                $("#frm").validate({

                    // Specify the validation rules

                    rules: {
                        
                        title: {required: true,lettersonly: true},
                        job_description: "required",
                        experience: {required: true,digits: true},
                        location: {required: true, lettersonly: true},
                        create_date: {required:true, dateFormat: true},
                        closing_date: {required:true, dateFormat: true, greaterThan: "#StartDate"},
                        job_cat: "required"
                    },
                    // Specify the validation error messages

                    messages: {
                        title: {required: "Please enter title",lettersonly: "Please enter letters only"},
                        job_description: "Please enter job description",
                        experience: {required:"Please enter experience",digits:"Please enter number"},
                        location: {required:"Please enter location",lettersonly:"Please enter letters only"},
                        create_date: {required: "Please enter create date",dateFormat: "Please enter a date in the format dd/mm/yyyy."},
                        closing_date: {required: "Please enter closing date",dateFormat: "Please enter a date in the format dd/mm/yyyy."},
                        job_cat: "Please enter job category"
                    },

                    submitHandler: function (form) {

                        form.submit();
                    }

                });
                 jQuery.validator.addMethod("lettersonly", function(value, element) {
                    return this.optional(element) || /^[a-z\s]+$/i.test(value);
                  });
                  jQuery.validator.addMethod("greaterThan", 
                    function(value, element, params) {

                        if (!/Invalid|NaN/.test(new Date(value))) {
                            return new Date(value) > new Date($(params).val());
                        }

                        return isNaN(value) && isNaN($(params).val()) 
                            || (Number(value) > Number($(params).val())); 
                    },'Must be greater than {0}.');
              });

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

                                                    <?php

                                                }else{ ?>
                                                    <div class="alert alert-danger alert-dismissable">

                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                        Unable to add job<a href="#" class="alert-link"></a>.

                                                    </div>
                                            <?php
                                                }
                                                unset($_SESSION['addsucc']);
                                            }

                                            ?>

                                    <div class="box-body">
                                        
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Title</label>

                                            <input type="text" class="form-control" id="title" placeholder="Title" name="title">

                                        </div>
                                
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Experience</label>

                                            <input type="text" class="form-control" id="experience" placeholder="Experience" name="experience">

                                        </div>
                                        
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Job Location</label>

                                            <input type="text" class="form-control" id="location" placeholder="Job Location" name="location">

                                        </div>
                                        
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Create Date</label>

                                            <input type="text" class="form-control" id="datepicker" name="create_date" placeholder="Create Date" data-format="yyyy-MM-dd"/>

                                        </div>
                                         
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Closing Date</label>

                                            <input type="text" class="form-control" id="datepicker1" name="closing_date" placeholder="Closing Date" data-format="yyyy-MM-dd"/>
                                             <?php
                                            if ($_SESSION['addsucc'] != '') {

                                                if ($_SESSION['addsucc'] == '3') {
                                                   
                                                    ?>

                                            <div style="color:#C80000; ">Closing date should be greater than todays date</div>

                                                    <?php

                                                }
                                                
                                            elseif ($_SESSION['addsucc']=='4'){
                                                    
                                                    ?>
                                            <div style="color:#C80000; ">Closing date should be greater than created date</div>
                                            <?php
                                                }

                                            }

                                            unset($_SESSION['addsucc']);     
                                            ?>

                                        </div>
                                        
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Job Category</label>

                                            <select class="form-control" name="job_cat">
                                                <option disabled="" selected="">select</option>
                                                <?php
                                                $qry = sprintf("SELECT id,name FROM `job_categories`");
                                                $res = Db::query($qry);
                                                if(mysql_num_rows($res)){
                                                while ($row = mysql_fetch_array($res)) {
                                                ?>
                                                <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                                                <?php
                                                }  }
                                                ?>
                                            </select>

                                        </div>

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
<script src="plugins/datetimepicker/moment.js" type="text/javascript"></script>
<script src="plugins/datetimepicker/bootstrap-datetimepicker.js" type="text/javascript"></script>

<!-- FastClick -->

<script src='plugins/fastclick/fastclick.min.js'></script>

<!-- AdminLTE App -->

<script src="dist/js/app.min.js" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->

<script src="dist/js/demo.js" type="text/javascript"></script>

 <script src="js/datepick.js"></script>
 <script src="js/bootstrap-datepicker.js"></script>
 <script src="js/bootstrap-datetimepicker.min.js"></script>
  <script>
    $(function() {
        $("#datepicker").datepicker();
    });
 </script> 
  <script>
    $(function() {
        $("#datepicker1").datepicker();
    });
 </script> 
</body>
  

</html>


