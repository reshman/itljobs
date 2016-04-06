<!DOCTYPE html>
<html>
<?php  include("logincheck.php");?>
  <head>
    <meta charset="UTF-8">
    <title>Admin | ITP</title>
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <script src="//code.jquery.com/jquery-1.9.1.js"></script>
        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
        <script>

            // When the browser is ready...


            $(function () {

                // Setup form validation on the #register-form element
                $("#frm").validate(
                        {
                            // Specify the validation rules
                            rules: {
                                txtpass: "required",
                                txtpass1: {required: true, minlength: 5},
                                txtpass2: {required: true, equalTo: "#txtpass1"}

                            },
                            // Specify the validation error messages
                            messages: {
                                txtpass: "Please enter your old password",
                                txtpass1: "Please enter your New password with minimum 5 characters",
                                txtpass2: "Please enter your Confirm password Same as Password",
                            },
                            submitHandler: function (form) {
                                form.submit();
                            }
                        });

            });
// }
        </script>
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      
    <?php include 'header.php';?>

         <?php include 'menu.php';
         session_start();
         ?>
                              

    

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Settings 
            <small>ITP Settings </small>
          </h1>
          <ol class="breadcrumb">
              <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
<!--            <li><a href="#">Forms</a></li>
            <li class="active">Change Password </li>-->
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
                  <h3 class="box-title">Change Password </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="settingsprocess.php" name="frm" id="frm">
                         <?php
                                                    error_reporting(0);
                                                    ?><div class="panel-body"><?php
                                                    if ($_SESSION['invalid'] != '') {
                                                        if ($_SESSION['invalid'] == '2') {
                                                            ?>
                                                                <div class="alert alert-danger">
                                                                    Please enter your old password correctly  
                                                                </div>

                                                                <?php
                                                            }
                                                            else {
                                                                ?>
                                                                <div class="alert alert-success">
                                                                    Your password changed successfully
                                                                </div>
                                                                <?php
                                                                }
                                                            } unset($_SESSION['invalid']);
                                                            ?>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Current Password</label>
                      <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Current Password" name="txtpass">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">New Password</label>
                    
                      <input type="password" class="form-control" id="txtpass1"  placeholder="New Password" name="txtpass1">
                    </div>
                       <div class="form-group">
                      <label for="exampleInputPassword1">Confirm Password</label>
                     
                      <input type="password" class="form-control" id="txtpass2"  placeholder="Confirm Password" name="txtpass2">
                    </div>
<!--                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <input type="file" id="exampleInputFile">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>-->
<!--                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                    </div>-->
<!--                        <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..." name="description"></textarea>
                        </div>-->
<!--                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled/>
                    </div>-->
                      <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  </div><!-- /.box-body -->

                  
                </form>
              </div><!-- /.box -->

              <!-- Form Element sizes -->
<!--              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Different Height</h3>
                </div>
                <div class="box-body">
                  <input class="form-control input-lg" type="text" placeholder=".input-lg">
                  <br/>
                  <input class="form-control" type="text" placeholder="Default input">
                  <br/>
                  <input class="form-control input-sm" type="text" placeholder=".input-sm">
                </div> /.box-body 
              </div> /.box -->

<!--              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Different Width</h3>
                </div>
                <div class="box-body">
                  <div class="row">
                    <div class="col-xs-3">
                      <input type="text" class="form-control" placeholder=".col-xs-3">
                    </div>
                    <div class="col-xs-4">
                      <input type="text" class="form-control" placeholder=".col-xs-4">
                    </div>
                    <div class="col-xs-5">
                      <input type="text" class="form-control" placeholder=".col-xs-5">
                    </div>
                  </div>
                </div> /.box-body 
              </div> /.box -->

              <!-- Input addon -->
              <!--<div class="box box-info">-->
<!--                <div class="box-header">
                  <h3 class="box-title">Input Addon</h3>
                </div>
                <div class="box-body">
                  <div class="input-group">
                    <span class="input-group-addon">@</span>
                    <input type="text" class="form-control" placeholder="Username">
                  </div>
                  <br/>
                  <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-addon">.00</span>
                  </div>
                  <br/>
                  <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" class="form-control">
                    <span class="input-group-addon">.00</span>
                  </div>-->

<!--                  <h4>With icons</h4>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                  <br/>
                  <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-addon"><i class="fa fa-check"></i></span>
                  </div>
                  <br/>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input type="text" class="form-control">
                    <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                  </div>-->

<!--                  <h4>With checkbox and radio inputs</h4>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                        <input type="text" class="form-control">
                      </div> /input-group 
                    </div> /.col-lg-6 
                    <div class="col-lg-6">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <input type="radio">
                        </span>
                        <input type="text" class="form-control">
                      </div> /input-group 
                    </div> /.col-lg-6 
                  </div> /.row -->

<!--                  <h4>With buttons</h4>
                  <p class="margin">Large: <code>.input-group.input-group-lg</code></p>
                  <div class="input-group input-group-lg">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action <span class="fa fa-caret-down"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div> /btn-group -->
<!--                    <input type="text" class="form-control">
                  </div> /input-group 
                  <p class="margin">Normal</p>
                  <div class="input-group">
                    <div class="input-group-btn">
                      <button type="button" class="btn btn-danger">Action</button>
                    </div> /btn-group 
                    <input type="text" class="form-control">
                  </div> /input-group 
                  <p class="margin">Small <code>.input-group.input-group-sm</code></p>
                  <div class="input-group input-group-sm">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-info btn-flat" type="button">Go!</button>
                    </span>
                  </div> /input-group 
                </div> /.box-body 
              </div> /.box -->

            </div><!--/.col (left) 
            <!-- right column -->
<!--        <div class="col-md-6">
               general form elements disabled 
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title"> Home Content</h3>
                </div> /.box-header 
                <div class="box-body">-->
                <!--<form role="form">-->
<!--                      <div class="form-group">
                      <label>Brief Description</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>-->
<!--                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled/>
                    </div>-->

                   
<!--                    <div class="form-group">
                      <label>Detailed Description</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>-->
<!--                    <div class="form-group">
                      <label>Textarea Disabled</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                    </div>-->

<!--                     input states 
                    <div class="form-group has-success">
                      <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
                      <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group has-warning">
                      <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with warning</label>
                      <input type="text" class="form-control" id="inputWarning" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group has-error">
<!--                     checkbox 
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                      <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with error</label>
                      <input type="text" class="form-control" id="inputError" placeholder="Enter ..."/>
                    </div>-->

<!--                     checkbox 
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"/>
                          Checkbox 1
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox"/>
                          Checkbox 2
                        </label>
                      </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox" disabled/>
                          Checkbox disabled
                        </label>
                      </div>
                    </div>-->

<!--                     radio 
                    <div class="form-group">
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                          Option one is this and that&mdash;be sure to include why it's great
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                          Option two can be something else and selecting it will deselect option one
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled/>
                          Option three is disabled
                        </label>
                      </div>
                    </div>-->

<!--                     select 
                    <div class="form-group">
                      <label>Select</label>
                      <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>-->
<!--                    <div class="form-group">
                      <label>Select Disabled</label>
                      <select class="form-control" disabled>
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>-->

<!--                     Select multiple
                    <div class="form-group">
                      <label>Select Multiple</label>
                      <select multiple class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>-->
<!--                    <div class="form-group">
                      <label>Select Multiple Disabled</label>
                      <select multiple class="form-control" disabled>
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>-->

                  <!--</form>-->
               <!--/.box-body  -->
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
          </div>  <!--  /.row -->
        </section> <!-- /.content -->
      </div>  <!--/.content-wrapper -->
   <!--   <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
      
       Control Sidebar       
      <aside class="control-sidebar control-sidebar-dark">                
         Create the tabs 
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
         Tab panes 
        <div class="tab-content">
           Home tab content 
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
            </ul> /.control-sidebar-menu 

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
            </ul> /.control-sidebar-menu          

          </div> /.tab-pane 
           Stats tab content 
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div> /.tab-pane 
           Settings tab content 
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
              </div> /.form-group 

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked />
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div> /.form-group 

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked />
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div> /.form-group 

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked />
                </label>                
              </div> /.form-group 

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right" />
                </label>                
              </div> /.form-group 

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>                
              </div> /.form-group 
            </form>
          </div>--><!-- /.tab-pane -->
<!--        </div>
      </aside> /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
<!--      <div class='control-sidebar-bg'></div>
    </div> ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <!--<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>-->
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>
