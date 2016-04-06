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
            
            <?php include_once 'db.php'; ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                         Recruiter Job List 
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
                                    <h3 class="box-title"> Recruiter Jobs</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                         
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                           <tr>
                                                <th>Sl.No</th>
                                                <th>Name</th>
                                               <!-- <th>E-mail</th>
                                                <th>Company Name</th>-->
                                                <th>Job Title</th>
                                                <th>Closing Date</th>
                                                <!--<th>Location</th> -->
                                                <th>Status</th>
                                                <th>View More</th>
                                                <!--<th>Job Type</th>-->
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                       <tbody>
                                          <?php 
                                          $i = 1;
                                          date_default_timezone_set('Asia/Kolkata');
                                          $today_date = date('Y-m-d');
                                          $query = sprintf("SELECT u.name,u.role_id,u.email,j.id,j.user_id,j.company_name,j.closing_date,j.job_listing,j.job_description,j.job_location,j.job_type,j.salary,j.del_status,j.active,j.date FROM jobs as j JOIN users u ON u.id=j.user_id WHERE j.del_status='%s' AND u.role_id='%s' AND j.closing_date>='%s'",0,4,$today_date);
                                               
                                          $result = Db::query($query);
                                           while ($row = mysql_fetch_array($result)) {
                                          ?>
                                           
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $row['name']; ?></td>
                                                   <!-- <td><?php echo $row['email']; ?></td>
                                                    <td><?php echo $row['company_name']; ?></td> -->
                                                    <td><?php echo $row['job_listing']; ?></td>
                                                    <!--<td><?php echo $row['job_description']; ?></td>-->
                                                    <td><?php echo $row['closing_date']; ?></td>            
                                                    <!--<td><?php echo $row['job_location']; ?></td> -->
                                                    <td>
                                                      <input <?php echo ($row['active']=='1') ? 'checked' : '';?> rowid="<?php echo $row['id'];?>" data-on="Active" data-off="Inactive" class="toggle-event" data-toggle="toggle" type="checkbox">                                
                                                  </td> 
                                                  <td><a href="viewmore_employersjob.php?id=<?php echo $row['id'] ?>">View More</a></td>
                                                    <!--<td><?php echo $row['job_type']; ?></td>-->
                                                    
                                                <td class=center><a type="button" href="javascript:void(0)" onclick="deleteConfirm('delete_recruiterjobs.php?delid=<?= $row['id'] ?>')" class="btn btn-danger "><i class="fa fa-times"></i></a></td>
                                                </tr>
                                                <?php
                                                $i = $i + 1;
                                            }
                                            ?>
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
                var ask = window.confirm("Are you sure you want to delete this item?");
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