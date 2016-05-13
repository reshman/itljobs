<!DOCTYPE html>
<html>
    <?php  //include("logincheck.php");?>
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
                        Job Notifications 
                        <small> List Of notifications </small>
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
                                    <h3 class="box-title"> Job Notifications </h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                   
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                           <tr>
                                                <th>Sl.No</th>
                                                <th>Notification</th>
<!--                                                <th>Delete</th>                     -->
                                            </tr>
                                        </thead>
                                       <tbody>
                                          <?php
                                            $j=1;
                                            $queryuser = sprintf("SELECT id FROM users ORDER BY id DESC LIMIT 1");
                                            $resultuser = Db::query($queryuser);
                                            $data=mysql_fetch_assoc($resultuser);
                                            $numuser= $data['id'];
                                         //   echo $numuser;
                                              
                                            $querydate = sprintf("SELECT datetime,id FROM log ORDER BY id DESC LIMIT 1"); 
                                            $resultdate = Db::query($querydate);
                                            $datetime=mysql_fetch_assoc($resultdate);
                                            $log= $datetime['datetime'];
                                            
                                           for($i=1;$i<=$numuser;$i++){
                                         //  $date         = date("Y-m-d"); 
                                          // $query = sprintf("SELECT * from jobs WHERE date='%s' AND user_id='%s'",$date,$i);
                                           $query = sprintf("SELECT * from jobs j LEFT JOIN  users u ON j.user_id = u.id WHERE date>='%s' AND user_id='%s'",$log,$i);
                                           $result = Db::query($query);
                                           $countrow=mysql_num_rows($result);
                                           if($countrow>0)
                                           {
                                           $data=mysql_fetch_assoc($result);

                                                         ?>

                                                <tr>
                                                    <td><?php echo $j; ?></td>
                                                    <td><?php echo $countrow; ?> new jobs added by <?php echo $data['name'];?></td>
                                                   <!-- <td class=center><a type="button" href="javascript:void(0)" onclick="deleteConfirm('delete_admin.php?delid=<?= $row['id'] ?>')" class="btn btn-danger "><i class="fa fa-times"></i></a></td>-->
                                                </tr>
                                                <?php
                                                $j = $j + 1;
                                           } }
                                            ?>
                                        </tbody>
                                 
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                           
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->
          

<!--             Control Sidebar       
            <aside class="control-sidebar control-sidebar-dark">                
                 Create the tabs 
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
                
            </aside> /.control-sidebar 
             Add the sidebar's background. This div must be placed
                 immediately after the control sidebar 
            <div class='control-sidebar-bg'></div>-->
        </div> <!-- wrapper -->

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
//        
//         $('.toggle-event').bootstrapToggle({
//            on: 'Hold',
//            off: 'Unhold'
//         });
        $('.toggle-event').change(function() {
            //alert("asda");
            var status = $(this).prop('checked')==true?'1':'0';
            var rowId  = $(this).attr('rowid');
            url = "active_admins.php";
            $.ajax({
                url:url,
                type:'POST',
                data:{id:rowId, status:status}
            }).done(function( data ) {
                //location.reload();
            });

        })


    })
</script>
    </body>
</html>
