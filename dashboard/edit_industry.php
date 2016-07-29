<!DOCTYPE html>
<html>
    <?php
    if ($_GET) {
    include("logincheck.php");
    ?>
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
        <style>
            .btn {
                width:150px;
                height:40px;
            }
            .form-group {
                width: 30%;
            }
        </style>
    </head>
    <body class="skin-blue sidebar-mini">
        <div class="wrapper">

            <?php include 'header.php'; ?>

            <?php include 'menu.php'; ?>

            <?php //include 'db.php';  ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Edit Industry 
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
                                    <h3 class="box-title">EDIT INDUSTRY</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form action="edit_industry_process.php" method="post" role="form">
                                        <div class="form-group">
                                            <label for="job_category">Job Category</label>
                                            <?php
                                            $id = $_GET['id'];
                                            $query = sprintf("SELECT jc.id as id FROM job_categories jc LEFT JOIN industry_category ic ON ic.category_id = jc.id WHERE ic.industry_id=%d", $id);
                                            $result = Db::query($query);
                                            $row = mysql_fetch_assoc($result);
                                            $curr_category = $row['id'];

                                            $query = sprintf("SELECT * FROM job_categories");
                                            $result = Db::query($query);
                                            ?>
                                            <input type="text" name="id" value="<?= $id ?>" hidden/>
                                            <select name="job_category" id="job_category" class="form-control">
                                                <?php
                                                while($row = mysql_fetch_assoc($result)){
                                                ?>
                                                <option value="<?= $row['id'] ?>" <?php if($row['id']==$curr_category){ ?> selected <?php } ?>><?= $row['name'] ?></option>
                                                <?php } ?>
                                            </select>
                                            <?php
                                            $query = sprintf("SELECT industry_name FROM industries WHERE id=%d", $id);
                                            $result = Db::query($query);
                                            $row = mysql_fetch_assoc($result);
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="industry">Industry</label>
                                            <input type="text" value="<?= $row['industry_name'] ?>" name="industry" id="industry" class="form-control   "/>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-warning" value="EDIT">
                                        </div>
                                    </form>
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

        <script>
            function deleteConfirm(href) {
                var ask = window.confirm("Are you sure you want to delete this item?");
                if (ask) {
                    document.location.href = href;
                }
            }
        </script>

    </body>
</html>
<?php
} else {
    echo '<h1>ACCESS DENIED!!!</h1>';
}