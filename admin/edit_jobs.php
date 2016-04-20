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


    <link href="css/jquery.Jcrop.min.css" rel="stylesheet" type="text/css" />

    <script src="ckeditor/ckeditor.js"></script>
    
     <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
     <script src="js/jquery.geocomplete.js"></script>
     
    <link href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
     
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

    ?>
    <?php $id = isset($_GET['id']) ? $_GET['id'] : 0;?>

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header">

            <h1>

                Jobs

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

                            <h3 class="box-title">Edit Jobs </h3>

                        </div><!-- /.box-header -->

                        <!-- form start -->

                        <form  role="form" name="frm" id="frm" method="POST" action="edit_jobsprocess.php" enctype="multipart/form-data">

                            
                            <?php
                            require_once("db.php");
                            date_default_timezone_set('Asia/Kolkata');
                            $today_date = date('Y-m-d');
                            $query = sprintf("SELECT jc.id as cid,jc.name,j.id,j.job_listing,j.company_name,j.job_description,j.experience,j.job_location,j.job_type,j.created_date,j.closing_date,j.job_category_id,j.active,j.job_order FROM jobs as j JOIN job_categories as jc ON jc.id=j.job_category_id WHERE del_status='%s' AND closing_date>='%s' AND j.id='%s'",0,$today_date,$id);
                            $result = Db::query($query);
                            $row    = array();
                            if (mysql_num_rows($result) > 0) {
                                $row = mysql_fetch_assoc($result);
                        
                            $page= $row['page'];
                            ?>
                             <div class="box-body">

                              <div class="form-group">

                                        <label for="exampleInputEmail1">Job Title</label>

                                            <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="<?php echo $row['job_listing']; ?>">

                                        </div>
                                 
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Job Category</label>

                                            <select class="form-control" name="job_cat">
                                                <option disabled="" selected="">select</option>
                                                <?php
                                                $qry = sprintf("SELECT id,name FROM `job_categories`");
                                                $res = Db::query($qry);
                                                if(mysql_num_rows($res)){
                                                while ($row1 = mysql_fetch_array($res)) {
                                                ?>
                                                <option <?php if($row['cid']==$row1['id']){ ?> selected="" <?php } ?> value="<?php echo $row1['id'];?>"><?php echo $row1['name']; ?></option>
                                                <?php
                                                }  }
                                                ?>
                                            </select>

                                        </div>
                                 
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Company Name</label>

                                            <input type="text" class="form-control" id="company" placeholder="Company Name" name="company" value="<?php echo $row['company_name'];?>">

                                        </div>
                                 
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Job Description</label>

                                            <textarea class="ckeditor" id="job_description" placeholder="Job Description" name="job_description"><?php echo $row['job_description']; ?></textarea>
                                            
                                        </div>
                                 
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Experience</label>

                                            <input type="text" class="form-control" id="experience" placeholder="Experience" name="experience" value="<?php echo $row['experience']; ?>">

                                        </div>
                                 
                                        <div class="form-group">
                                             <?php
                                               date_default_timezone_set('Asia/Calcutta'); 
                                               $createdate         = date("d/m/Y",  strtotime($row['created_date'])); 
                                            ?>

                                            <label for="exampleInputEmail1">Create Date</label>

                                            <input type="text" class="form-control" name="create_date" placeholder="Create Date" data-format="yyyy-MM-dd" value="<?php echo $createdate; ?>" readonly=""/>

                                        </div>
                                         
                                        <div class="form-group">
                                             <?php 
                                               $closedate         = date("d/m/Y",  strtotime($row['closing_date'])); 
                                            ?>

                                            <label for="exampleInputEmail1">Closing Date</label>

                                            <input type="text" class="form-control" id="datepicker1" name="closing_date" placeholder="Closing Date" data-format="yyyy-MM-dd" value="<?php echo $closedate; ?>"/>

                                        </div>
                                 
                                        <div class="form-group">
                                            
                                            <label for="exampleInputEmail1">Job Type</label>

                                            <select class="form-control" name="job_type">
                                                <!--<option disabled="" selected="">SELECT</option>-->
                                                <option value="FULL TIME" <?php if($row['job_type']=='FULL TIME'){?> selected=""<?php } ?>>FULL TIME</option>
                                                <option value="PART TIME" <?php if($row['job_type']=='PART TIME'){?> selected=""<?php } ?>>PART TIME</option>
                                                <option value="TEMPORARY" <?php if($row['job_type']=='TEMPORARY'){?> selected=""<?php } ?>>TEMPORARY</option>
                                                <option value="CONTRACT" <?php if($row['job_type']=='CONTRACT'){?> selected=""<?php } ?>>CONTRACT</option>
                                                <option value="INTERNSHIP" <?php if($row['job_type']=='INTERNSHIP'){?> selected=""<?php } ?>>INTERNSHIP</option>
                                                <option value="FRESHER" <?php if($row['job_type']=='FRESHER'){?> selected=""<?php } ?>>FRESHER</option>
                                                <option value="WALKIN" <?php if($row['job_type']=='WALKIN'){?> selected=""<?php } ?>>WALKIN</option>
                                            </select>

                                        </div>
                                        
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Job Location</label>

                                            <input type="text" class="form-control" id="location" placeholder="Job Location" name="location" value="<?php echo $row['job_location']; ?>">

                                        </div>

                            <?php } ?>
                                    <input type="hidden"  name="id" value="<?php echo $row['id'];?>"/>

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
<script src="plugins/datetimepicker/moment.js" type="text/javascript"></script>
<script src="plugins/datetimepicker/bootstrap-datetimepicker.js" type="text/javascript"></script>

<!-- FastClick -->

<script src='plugins/fastclick/fastclick.min.js'></script>

<!-- AdminLTE App -->

<script src="dist/js/app.min.js" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->

<script src="dist/js/demo.js" type="text/javascript"></script>

<!--<script src="js/datepick.js"></script>
 <script src="js/bootstrap-datepicker.js"></script>
 <script src="js/bootstrap-datetimepicker.min.js"></script>-->
<script>

            // When the browser is ready...

            $(function () {
                $('#datepicker1').datepicker({
                    format:"dd/mm/yyyy",
                    startDate: '0'
                });
                 $("#location").geocomplete({
                    types: ["geocode", "establishment"],
                });
                $.validator.addMethod('experience', function (value) {
                    return /^[0-9 ]+((-){0,1}[0-9 ]+){0,1}$/.test(value);
                
                }, 'Please enter valid experience in years as digit or range as low-High.');
                // Setup form validation on the #register-form element

                $("#frm").validate({

                    // Specify the validation rules
                    ignore: [],
                    debug: false,
                    rules: {
                        
                        title: {required: true,lettersonly: true},
                        company: {required: true,lettersonly: true},
                        experience: {required: true, experience: true},
                        location: "required",
                        create_date: "required",
                        closing_date: "required",
                        job_cat: "required",
                        job_type: "required",
                        job_description:{
                         required: function() 
                        {
                         CKEDITOR.instances.job_description.updateElement();
                        },

                         minlength:10
                    }
                    },
                    // Specify the validation error messages

                    messages: {

                        title: {required: "Please enter title",lettersonly: "Please enter letters only"},
                        company: {required:"Please enter company name",lettersonly:"Please enter letters only"},
                        experience: {required:"Please enter experience"},
                        location: "Please enter location",
                        create_date: "Please enter create date",
                        closing_date:"Please enter closing date",
                        job_cat: "Please enter job category",
                        job_type: "Please select job type",
                        job_description: {
                        required:"Please enter job description",
                        minlength:"Please enter 10 characters"
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
  <script>
    $(function() {
        $("#location").geocomplete({
            types: ["geocode", "establishment"],
        });
    });
 </script> 

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

