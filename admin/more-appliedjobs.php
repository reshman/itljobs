<!DOCTYPE html>
<html>
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
        <!-- DATA TABLES -->
        <link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins 
             folder instead of downloading all of them to reduce the load. -->
        <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.0/css/bootstrap-toggle.min.css" rel="stylesheet">
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.0/css/bootstrap-toggle.min.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue sidebar-mini">
        <div class="wrapper">
            <?php // include 'db.php'; ?>

            <?php include 'header.php'; ?>

            <?php include 'menu.php'; ?>
            
            <?php include 'db.php'; ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                         Job List 
                        <small> ITL JOBS</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
<!--                        <li><a href="#">Tables</a></li>
                        <li class="active">Data tables</li>-->
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"> Jobs</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    
                                    <table id="example2" class="table table-bordered table-hover">
                                    
                                       <tbody>
                                          <?php
                                          $applied_id = $_REQUEST['param'];
                                          $uid = $_SESSION['id'];
                                          $qry = sprintf("SELECT js.id,js.job_listing,js.user_id,ja.id as apid,ja.job_id,ja.user_id as userid,ja.created_date,us.name,us.email FROM jobs as js JOIN jobs_applied as ja ON js.id = ja.job_id JOIN users as us ON ja.user_id = us.id WHERE js.user_id='$uid' AND ja.id='$applied_id'");
                                          $res = Db::query($qry);
                                          $i = 1;
                                          date_default_timezone_set('Asia/Kolkata');
                                          $today_date = date('Y-m-d');
                                          $row = mysql_fetch_assoc($res); 
                                          
                                          $user_id = $row['userid'];
                                          //$query = sprintf("SELECT experience,specification,current_location,mobile,qualification,date_of_birth,file_name,sub_category,abroad_experience,india_experience FROM resume WHERE user_id='%s'",$user_id);
                                          $query = sprintf("SELECT * FROM resume LEFT JOIN job_categories ON resume.job_category_id=job_categories.id");
                                          $result = Db::query($query); 
                                          $rw = mysql_fetch_assoc($result);
                                          ?>
                                           <tr>
                                                    <th>Job Title</th><td><?php echo $row['job_listing']; ?></td> </tr>
                                                    <tr><th>Candidate Name</th><td><?php echo $row['name']; ?></td> </tr>
                                                    <tr><th>Date of Birth</th><td><?php echo $rw['date_of_birth']; ?></td> </tr>
                                                    <tr><th>Qualification</th><td><?php echo $rw['qualification']; ?></td> </tr>
                                                    <tr><th>Job Category</th><td><?php echo $rw['name']; ?></td> </tr>
                                                    <tr><th>Industry</th><td><?php echo $rw['sub_category']; ?></td> </tr>
                                                    <tr><th>Specialization</th><td><?php echo $rw['specification']; ?></td> </tr>
                                                    <tr><th>Abroad experience</th><td><?php echo $rw['abroad_experience']; ?></td> </tr>
                                                    <tr><th>Indian experience</th><td><?php echo $rw['india_experience']; ?></td> </tr>
                                                    <tr><th>Experience</th><td><?php echo $rw['experience']; ?></td> </tr>
                                                    <tr><th>Mobile</th><td><?php echo $rw['mobile']; ?></td> </tr>
                                                    <tr><th>Email</th><td><?php echo $row['email']; ?></td> </tr>
                                                    <tr><th>Current Location</th><td><?php echo $rw['current_location']; ?></td> </tr>
                                                    <tr><th>Resume</th><td><a onclick="downloadfile('../uploads/<?php echo $rw['file_name']?>')" href="../uploads/<?php echo $rw['file_name']?>"   target="_blank" download=""><?php echo $rw['file_name']; ?></a>
                                                    </td></tr>
                                                    <?php
                                                        $date    = $row['created_date'];
                                                        $regdate = date("d-m-Y", strtotime($date));
                                                        $regtime = date("h:i:sa", strtotime($date));
                                                    ?>
                                                    <tr><th>Applied date</th><td><?php echo $regdate; ?> at <?php echo $regtime; ?></td> </tr>
                                         
                                                 <tr><th>Delete</th><td class=center><a type="button" href="javascript:void(0)" onclick="deleteConfirm('delete_appliedjobs.php?delid=<?= $row['apid'] ?>')" class="btn btn-danger "><i class="fa fa-times"></i></a></td>
                                                </tr>
                                        </tbody>
                                 
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                           
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->
<!--            

            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class='control-sidebar-bg'></div>
        </div><!-- ./wrapper -->

        <!-- jQuery 2.1.4 -->
        <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
        <!-- SlimScroll -->
        <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- FastClick -->
        <script src='plugins/fastclick/fastclick.min.js'></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js" type="text/javascript"></script>
        <!-- page script -->
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js"></script>
        <script type="text/javascript">
                                                        $(function () {
                                                            $("#example1").dataTable();
                                                            $('#example2').dataTable({
                                                                "bPaginate": true,
                                                                "bLengthChange": false,
                                                                "bFilter": false,
                                                                "bSort": true,
                                                                "bInfo": true,
                                                                "bAutoWidth": false
                                                            });
                                                        });
        </script>
        <script>
            function deleteConfirm(href) {
                var ask = window.confirm("Are you sure you want to delete this application?");
                if (ask) {
                    document.location.href = href;
                }
            }
            $(document).ready(function () {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>

 <script>

    $(function() {

        $('.toggle-event').change(function() {
//            alert("asda");
            var status = $(this).prop('checked')==true?'1':'0';
            var rowId  = $(this).attr('rowid');
//            alert(status);
            url = "active_inactive.php";
            $.ajax({
                url:url,
                type:'POST',
                data:{id:rowId, status:status}
            }).done(function( data ) {
               // location.reload();
            });

        });
    });
</script>

<script>
//    $(function(){
     function otpcheck() { 
//         alert('jhgasd');
//        $('.order').change(function(){
            var order = document.getElementById("order").value;
            var id = document.getElementById("id").value;
            // alert(order);
              url = "job-order.php";
            $.ajax({
                url:url,
                type:'POST',
                data:{id:id, order:order}
            }).done(function( data ) {
               location.reload();
            });
//        });
    }
    </script>
    
    </body>
</html>