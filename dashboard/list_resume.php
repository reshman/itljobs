<!DOCTYPE html>
<html>
    <?php include("logincheck.php"); ?>
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
                        Resumes 
                        <small> List Of Resumes </small>
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
                                    <h3 class="box-title"> Resumes </h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <?php
                                    session_start();
                                    if (isset($_SESSION['delsucc'])) {

                                        if ($_SESSION['delsucc']) {
                                            ?>
                                            <br>
                                            <div class="alert alert-success alert-dismissable">

                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                Resume Deleted Successfully <a href="#" class="alert-link"></a>.

                                            </div>

                                        <?php } else {
                                            ?>
                                            <br>
                                            <div class="alert alert-danger alert-dismissable">

                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                                                Resume Deletion Failed <a href="#" class="alert-link"></a>.

                                            </div>
                                            <?php
                                        }
                                        unset($_SESSION['delsucc']);
                                    }
                                    ?>
                                            <a href="export_resume.php"><input type="button" class="btn btn-primary" name="submit" value="Export"></a> 
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Sl.No</th>
                                                <th>Name</th>
                                                <th>E-mail</th>
                                                <th>Mobile</th>
                                                <!--<th>Specification</th>-->
                                                <th>Experience</th>
                                               <!-- <th>Current location</th>
                                                <th>Date Of Birth</th>
                                                <th>Job Category</th>
                                                <th>Sub Category</th>-->
                                                <th>Resume</th>
                                                <th>View More</th>
                                           <!--<th>Download</th>-->
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            $query = sprintf("SELECT r.id,r.experience,r.specification,r.abroad_experience,r.current_location,r.date_of_birth,r.sub_category,r.file_name,r.user_id,r.mobile, r.del_status, u.name as name,u.email ,jc.name as jobcatname from resume r LEFT JOIN  users u ON r.user_id = u.id LEFT JOIN job_categories jc ON r.job_category_id=jc.id WHERE r.del_status='%s'", '0');
                                            $result = Db::query($query);
                                            while ($row = mysql_fetch_array($result)) {
                                                ?>

                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td><?php echo $row['email']; ?></td>
                                                    <td><?php echo $row['mobile']; ?></td>
                                                    <td><?php echo $row['experience'].' Year(s)'; ?></td>
                                                    <td><a onclick="downloadfile('../uploads/<?php echo $row['file_name'] ?>')" href="../uploads/<?php echo $row['file_name'] ?>"   target="_blank" download=""><?php echo $row['file_name']; ?></a>
                                                    </td>
                                                   <!-- <td style="text-align: center;"><a onclick="downloadfile('../uploads/<?php echo $row['file_name'] ?>')" href="../uploads/<?php echo $row['file_name'] ?>"   target="_blank" download=""><img src="images/download_icon.png" alt="download" height="20" width="20"></a>
                                                    </td> -->
                                                    <td><a href="viewmore_resumes.php?id=<?php echo $row['id'] ?>">View More</a></td>
                                                    <td class=center><a type="button" href="javascript:void(0)" onclick="deleteConfirm('delete_resume.php?delid=<?= $row['user_id'] ?>')" class="btn btn-danger "><i class="fa fa-times"></i></a></td>
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
            
            <!-- Control Sidebar -->      
            <aside class="control-sidebar control-sidebar-dark">                
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Recent Activity</h3>
                        <ul class='control-sidebar-menu'>
                            <li>
                                <a href='javascript::;'>
                                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                        <p>Will be 23 on April 24th</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href='javascript::;'>
                                    <i class="menu-icon fa fa-user bg-yellow"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                                        <p>New phone +1(800)555-1234</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href='javascript::;'>
                                    <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                                        <p>nora@example.com</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href='javascript::;'>
                                    <i class="menu-icon fa fa-file-code-o bg-green"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                                        <p>Execution time 5 seconds</p>
                                    </div>
                                </a>
                            </li>
                        </ul><!-- /.control-sidebar-menu -->

                        <h3 class="control-sidebar-heading">Tasks Progress</h3> 
                        <ul class='control-sidebar-menu'>
                            <li>
                                <a href='javascript::;'>               
                                    <h4 class="control-sidebar-subheading">
                                        Custom Template Design
                                        <span class="label label-danger pull-right">70%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                    </div>                                    
                                </a>
                            </li> 
                            <li>
                                <a href='javascript::;'>               
                                    <h4 class="control-sidebar-subheading">
                                        Update Resume
                                        <span class="label label-success pull-right">95%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                    </div>                                    
                                </a>
                            </li> 
                            <li>
                                <a href='javascript::;'>               
                                    <h4 class="control-sidebar-subheading">
                                        Laravel Integration
                                        <span class="label label-waring pull-right">50%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                    </div>                                    
                                </a>
                            </li> 
                            <li>
                                <a href='javascript::;'>               
                                    <h4 class="control-sidebar-subheading">
                                        Back End Framework
                                        <span class="label label-primary pull-right">68%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                    </div>                                    
                                </a>
                            </li>               
                        </ul><!-- /.control-sidebar-menu -->         

                    </div><!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
                    <!-- Settings tab content -->
                    <div class="tab-pane" id="control-sidebar-settings-tab">            
                        <form method="post">
                            <h3 class="control-sidebar-heading">General Settings</h3>
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Report panel usage
                                    <input type="checkbox" class="pull-right" checked />
                                </label>
                                <p>
                                    Some information about this general settings option
                                </p>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Allow mail redirect
                                    <input type="checkbox" class="pull-right" checked />
                                </label>
                                <p>
                                    Other sets of options are available
                                </p>
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Expose author name in posts
                                    <input type="checkbox" class="pull-right" checked />
                                </label>
                                <p>
                                    Allow the user to show his name in blog posts
                                </p>
                            </div><!-- /.form-group -->

                            <h3 class="control-sidebar-heading">Chat Settings</h3>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Show me as online
                                    <input type="checkbox" class="pull-right" checked />
                                </label>                
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Turn off notifications
                                    <input type="checkbox" class="pull-right" />
                                </label>                
                            </div><!-- /.form-group -->

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Delete chat history
                                    <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                                </label>                
                            </div><!-- /.form-group -->
                        </form>
                    </div><!-- /.tab-pane -->
                </div>
            </aside><!-- /.control-sidebar -->
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
//        
//         $('.toggle-event').bootstrapToggle({
//            on: 'Hold',
//            off: 'Unhold'
//         });
                $('.toggle-event').change(function () {
                    //alert("asda");
                    var status = $(this).prop('checked') == true ? '1' : '0';
                    var rowId = $(this).attr('rowid');
                    url = "active_admins.php";
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: {id: rowId, status: status}
                    }).done(function (data) {
                        //location.reload();
                    });

                })


            })
        </script>
    </body>
</html>
