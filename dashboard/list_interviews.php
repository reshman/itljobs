<?php
include("logincheck.php");
if ($_SESSION['role'] != 1) {
    echo 'Acess Denied!';
    exit();
}
?>
<!DOCTYPE html>
<html>
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

            <?php include 'header.php'; ?>

            <?php include 'menu.php'; ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Interview List 
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
                                <div class="box-body" style="overflow-y: scroll">
                                    <?php
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
                                    <a href="export_list_interview.php"><input type="button" class="btn btn-primary" name="submit" value="Export"></a>
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Sl.No</th>
                                                <th>Job Category</th>
                                                <th>Schedule date</th>
                                                <th>Name</th>
                                                <th>Company Name</th>
                                                <th>Contact</th>
                                                <th>View more</th>
                                                <th>View in Hotjjobs?</th>
                                                <th>Status</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $id = $_SESSION['id'];
                                            $i = 1;
                                            date_default_timezone_set('Asia/Kolkata');
                                            $today_date = date('Y-m-d');
                                            $query = sprintf("SELECT us.id,us.name,iv.id as intId,iv.schedule_date, iv.name as jobname,iv.description,iv.schedule_time,iv.industry,iv.company_name,iv.venue,iv.interview,iv.contact, iv.user_id,iv.active,iv.vih,iv.del_status FROM interviews as iv INNER JOIN users as us ON us.id=iv.user_id WHERE (iv.schedule_date>='%s' OR schedule_date='') AND iv.del_status='%s' ORDER BY schedule_date", $today_date, 0);
                                            $result = Db::query($query);
                                            while ($row = mysql_fetch_array($result)) {
                                                ?>

                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $row['industry']; ?></td>
                                                    <td><?php if($row['schedule_date'] == '' ){ echo 'Comming soon'; } else { echo date('d/m/Y', strtotime($row['schedule_date'])); }?></td>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td><?php echo $row['company_name']; ?></td>
                                                    <td><?php echo $row['contact']; ?></td>
                                                    <td><a href="more-interviews.php?id=<?php echo $row['intId']; ?>">view more</a></td>
                                                    <td>
                                                        <input <?php echo ($row['vih'] == '1') ? 'checked' : ''; ?> value="<?php echo $row['intId']; ?>" data-on="Enabled" data-off="Disabled" class="toggle-event vih" data-toggle="toggle" type="checkbox">                                
                                                    </td> 
                                                    <td>
                                                        <input <?php echo ($row['active'] == '1') ? 'checked' : ''; ?> value="<?php echo $row['intId']; ?>" data-on="Active" data-off="Inactive" class="toggle-event activate" data-toggle="toggle" type="checkbox">                                
                                                    </td>   
                                                           <!--<a type="button" href="edit_jobs.php?id=<?//= $row['id'] ?>" class="btn btn-primary "><i class="fa fa-edit"></i></a></td>-->
                                                    <td class=center><a href="javascript:void(0)" onclick="deleteConfirm('delete_interviews.php?delid=<?= $row['intId'] ?>')" class="btn btn-danger "><i class="fa fa-times"></i></a></td>
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
                                                                    "bFilter": true,
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

                $('.toggle-event.activate').change(function() {
                    //            alert("asda");
                    var status = $(this).prop('checked') == true ? '1' : '0';
                    var rowId = $(this).val();
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
                
                $('.vih').change(function () {
                    //            alert("asda");
                    var status = $(this).prop('checked') == true ? '1' : '0';
                    var rowId = $(this).val();
                    //            alert(status);
                    url = "view_in_hotjobs_status.php";
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


    </body>
</html>