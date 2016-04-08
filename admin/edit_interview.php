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
        
     <link href="css/datepicker.css" rel="stylesheet" />
     <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
     <link href="https://cdn.jsdelivr.net/bootstrap.timepicker/0.2.6/css/bootstrap-timepicker.css" rel="stylesheet" />

   <script>

            // When the browser is ready...

            $(function () {

                // Setup form validation on the #register-form element

                $("#frm").validate({

                    // Specify the validation rules

                    rules: {
                        
                        name: {required:true,lettersonly:true},
                        title: "required",
                        date: {required:true, dateFormat: true},
                        description: "required",
                        company_name: {required:true,lettersonly:true},
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
                        company_name: {required:"Please enter company name",lettersonly:"Please enter letters only"},
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
                            $sql    = sprintf("SELECT id,title,name,company_name,schedule_date,schedule_time,venue,interview,contact,description FROM interviews WHERE id = '%s'", $id); 
                            $result = Db::query($sql);
                            $row    = array();
                            if (mysql_num_rows($result) > 0) {
                                $rowedit = mysql_fetch_assoc($result);
                                $title   =$rowedit['title'];
                                $converteddate = date("m/d/Y", strtotime($rowedit['schedule_date']));
                            }
                            ?>
                           <div class="box-body">
                                             
                                <div class="form-group">

                                            <label for="exampleInputEmail1">Name</label>

                                            <input type="text" class="form-control" id="name" value="<?php echo $rowedit['name']?>" placeholder="Name" name="name">

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

                                            <label for="exampleInputEmail1">Company Name</label>

                                            <input type="text" class="form-control" id="company_name" placeholder="Company Name" name="company_name" value="<?php echo $rowedit['company_name']?>">

                                        </div>
                                        
                                        
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Interview Date</label>

                                            <input type="text" class="form-control" id="datepicker" name="date" value="<?php echo $converteddate?>" placeholder="Interview Date" data-format="MM-dd-yyyy"/>

                                        </div>
                               
                                        <label for="exampleInputEmail1">Interview Time</label>
                                        <div class="input-group bootstrap-timepicker timepicker">
                                            <input id="timepicker1" type="text" class="form-control input-small" placeholder="Schedule Time" name="time" value="<?php echo $rowedit['schedule_time']?>"> 
                                                <span class="input-group-addon"></span>
                                        </div>
                                        
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Venue</label>

                                            <input type="text" class="form-control" id="venue" placeholder="Venue" name="venue" value="<?php echo $rowedit['venue']?>">

                                        </div>   
                                        
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Description</label>

                                            <textarea  class="form-control" rows="3" placeholder="Enter ..." name="description"><?php echo $rowedit['description']?></textarea>

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
                                        
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Contact Number</label>

                                            <input type="text" class="form-control" id="contact" placeholder="Contact" name="contact" value="<?php echo $rowedit['contact']?>">

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
 <script src="js/datepick.js"></script>
 <script src="js/bootstrap-datepicker.js"></script>
 <script src="js/bootstrap-datetimepicker.min.js"></script>
  <script>
    $(function() {
        $("#datepicker").datepicker();
    });
 </script> 
 <script type="text/javascript">
            $('#timepicker1').timepicker();
 </script>

</body>

</html>

