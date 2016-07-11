<!DOCTYPE html>
<html>
    <?php include("logincheck.php"); ?>
    <head>

        <meta charset="UTF-8">

        <title>Super Admin | ITL JOBS</title>

        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <!-- Bootstrap 3.3.4 -->

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- Font Awesome Icons -->

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <!-- Ionicons -->

        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />

        <!-- Theme style -->

        <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />


        <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />


        <script type="text/javascript" src="../js/countrystate.js"></script>


        <script src="//code.jquery.com/jquery-1.9.1.js"></script>

        <script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>

        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

        <script src="ckeditor/ckeditor.js"></script>

        <link href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
        <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

        <link href="css/datepicker.css" rel="stylesheet" />
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/bootstrap.timepicker/0.2.6/css/bootstrap-timepicker.css" rel="stylesheet" />
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet" />


        <style>
            .error{
                color: #C80000 !important;

            }
        </style>
    </head>
    <body class="skin-blue sidebar-mini">
        <div class="wrapper">

            <?php include 'header.php'; ?>

            <?php include 'menu.php'; ?>

            <?php include_once 'db.php'; ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Your Interview List
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
                                    <h3 class="box-title"> Interviews</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body" style="overflow-y: scroll;">
                                    
                                       <?php
                                           
                                            if ($_SESSION['addsucc'] != '') {

                                                if ($_SESSION['addsucc'] == '1') {

                                                    ?>

                                                    <div class="alert alert-success alert-dismissable">

                                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                        Interview Details Updated Successfully <a href="#" class="alert-link"></a>.

                                                    </div>

                                                    <?php

                                                }
                                               unset($_SESSION['addsucc']);
                                            }
 
                                            if (isset($_SESSION['delsucc'])) {

                                            if ($_SESSION['delsucc']) {
                                                ?>
                                                <br>
                                                <div class="alert alert-success alert-dismissable">

                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                    Interview Deleted Successfully <a href="#" class="alert-link"></a>.

                                                </div>

                                            <?php } else {
                                                ?>
                                                <br>
                                                <div class="alert alert-danger alert-dismissable">

                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                    Interview Deletion Failed <a href="#" class="alert-link"></a>.

                                                </div>
                                                <?php
                                            }
                                            unset($_SESSION['delsucc']);
                                        }
                                        ?>
                         
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                           <tr>
                                                <th>Sl.No</th>
                                                <th>Position</th>
                                                <!--<th>Title</th>-->
                                                <th>Description</th>
                                                <th>Salary</th>
                                                <th>Company Name</th>
                                                <th>Contact</th>
                                                <th>View more</th>
                                                <th>Status</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                       <tbody>
                                          <?php 
                                          session_start();
                                          $id= $_SESSION['id'];
                                          $i = 1;
                                          date_default_timezone_set('Asia/Kolkata');
                                          $today_date = date('Y-m-d');
                                          $query = sprintf("SELECT iv.id as intId,iv.id,iv.schedule_date,iv.salary,iv.country,iv.user_id,iv.name,iv.description,iv.active,iv.company_name,iv.schedule_time,iv.venue,iv.interview,iv.contact,iv.coordinator FROM interviews as iv WHERE iv.schedule_date>='%s' AND iv.del_status='%s' AND iv.user_id='%s' ORDER BY schedule_date",$today_date,0,$id); 
                                                                             
                                          $result = Db::query($query);
                                           while ($row = mysql_fetch_array($result)) {
                                          ?>
                                           
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <!--<td><?php // echo $row['job_title']; ?></td>-->
                                                    <td><?php echo $row['description']; ?></td>
                                                    <td><?php echo $row['salary']; ?></td>
                                                    <td><?php echo $row['company_name']; ?></td>
                                                    <td><?php echo $row['contact']; ?></td>
                                                    <td><a href="more-own-interviews.php?id=<?php echo $row['intId'];?>">view more</a></td>
                                                  
                                                    <td>
                                                      <input <?php echo ($row['active']=='1') ? 'checked' : '';?> rowid="<?php echo $row['intId'];?>" data-on="Active" data-off="Inactive" class="toggle-event" data-toggle="toggle" type="checkbox">                                
                                                    </td>   
                                                <td class=center><a href="edit_interview.php?id=<?= $row['intId'] ?>" class="btn btn-primary "><i class="fa fa-edit"></i></a></td>
                                                <td class=center><a href="javascript:void(0)" onclick="deleteConfirm('delete_interviews.php?delid=<?= $row['intId'] ?>&own=true')" class="btn btn-danger "><i class="fa fa-times"></i></a></td>
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
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js"></script>
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

            $(function () {

                $('.toggle-event').change(function () {
                    //            alert("asda");
                    var status = $(this).prop('checked') == true ? '1' : '0';
                    var rowId = $(this).attr('rowid');
                    //            alert(status);
                    url = "interview_status.php";
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: {id: rowId, status: status}
                    }).done(function (data) {
                        // location.reload();
                    });

                });
            });
        </script>

        <script>
            //    $(function(){
            function updatecheck($this) {
                //         var current_element = $this;

                console.log($($this).prev().val());
                //return false;

                var order = $($this).prev().val();
                var id = $($this).next().val();
                // var id    = $('#id').val();

                url = "job-order.php";
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {id: id, order: order}
                }).done(function (data) {
                    if (data == 'SUCCESS') {
                        alert('Job order updated successfully');
                    } else if (data == 'ALREADY EXISTED JOB ORDER') {
                        alert('Already existed job order,Please choose another');
                        location.reload();
                    }
                });

            }
        </script>

    </body>
</html>