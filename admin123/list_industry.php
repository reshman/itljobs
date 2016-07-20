<!DOCTYPE html>
<html>
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

            <?php //include 'db.php'; ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Job Category List 
                        <small> ITL JOBS</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <!--                        <li><a href="#">Tables</a></li>
                                                <li class="active">Data tables</li>-->
                    </ol>
                </section>
                <?php
                if (isset($_SESSION['delsucc'])) {

                    if ($_SESSION['delsucc']) {
                        ?>
                        <br>
                        <div class="alert alert-success alert-dismissable">

                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                            Industry Deleted Successfully <a href="#" class="alert-link"></a>.

                        </div>

                        <?php } else {
                        ?>
                        <br>
                        <div class="alert alert-danger alert-dismissable">

                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                            Industry Deletion Failed <a href="#" class="alert-link"></a>.

                        </div>
                        <?php
                    }
                    unset($_SESSION['delsucc']);
                }
                if (isset($_SESSION['editsucc'])) {

                    if ($_SESSION['editsucc']) {
                        ?>
                        <br>
                        <div class="alert alert-success alert-dismissable">

                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                            Industry Edited Successfully <a href="#" class="alert-link"></a>.

                        </div>

                        <?php } else {
                        ?>
                        <br>
                        <div class="alert alert-danger alert-dismissable">

                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                            Industry Edition Failed <a href="#" class="alert-link"></a>.

                        </div>
                        <?php
                    }
                    unset($_SESSION['editsucc']);
                }
                ?>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"> INDUSTRIES</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <select name="category_list" id="category_list" class="form-control">
                                        <option value="">Choose Category to List Industries</option>
                                        <?php
                                        $sql = sprintf("SELECT * FROM job_categories ORDER BY name");
                                        $result = Db::query($sql);
                                        while ($row = mysql_fetch_array($result)) {
                                            ?>
                                            <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option> 
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <?php
                                    if ($_GET) {
                                        $id = $_GET['id'];
                                        $sql = sprintf("SELECT name from job_categories WHERE id=%d", $id);
                                        $result = Db::query($sql);
                                        $row = mysql_fetch_assoc($result);
                                        echo '<br><br><div class="alert"><h4><small>INDUSTRIES IN</small> "' . $row['name'] . '" <small>CATEGORY</small></h4></div>';
                                        ?>
                                        <table id="example2" class="table table-bordered table-hover">
                                                <tr>
                                                    <th>Sl.No</th>
                                                    <th>Industry</th>
                                                    <!--<th>Status</th>-->
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                $query = sprintf("SELECT i.id as id,i.industry_name as name FROM `industries` as i LEFT JOIN industry_category as ic ON i.id=ic.industry_id WHERE ic.category_id=%d", $id);

                                                $result = Db::query($query);
                                                while ($row = mysql_fetch_array($result)) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $row['name']; ?></td>  
                                                        <td class=center><a href="edit_industry.php?id=<?= $row['id'] ?>" class="btn btn-primary "><i class="fa fa-edit"></i></a></td>
                                                        <td class=center><a href="javascript:void(0)" onclick="deleteConfirm('delete_industry.php?id=<?= $row['id'] ?>')" class="btn btn-danger "><i class="fa fa-times"></i></a></td>
                                                    </tr>
                                                    <?php
                                                    $i = $i + 1;
                                                }
                                                ?>
                                            </tbody>

                                        </table>
                                    <?php } ?>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->


                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

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

                                                        $('#category_list').change(function () {
                                                            var id = $('#category_list').val();
                                                            window.location.href = "list_industry.php?id=" + id;
                                                        });
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
    </body>
</html>