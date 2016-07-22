<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ITL JOBS </title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.4 -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

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
                $("#login").validate({
                    // Specify the validation rules
                    rules: {
                        email: {required: true, email: true},
                        password: {
                            required: true,
                            minlength: 5
                        },
                    },
                    // Specify the validation error messages
                    messages: {
                        email: {required: "Please enter email", email: "Please enter valid email"},
                        password: {
                            required: "Please enter your password",
                            minlength: "Your password must be at least 5 characters long"
                        },
                    },
                    submitHandler: function (form) {
                        form.submit();
                    }
                });

            });

        </script>

        <style type="text/css">
            a:link {
                color: #CB2430;
                text-decoration:none;
            }

            /* visited link */
            a:visited {
                color: #CB2430;
                text-decoration:none;
            }

            /* mouse over link */
            a:hover {
                color: #CB2430;
                text-decoration:underline;
            }

            /* selected link */
            a:active {
                color: #CB2430;
                text-decoration:none;
            }

            .forgot{
                color :#367FA9 !important;
                text-decoration: none !important;
            }

        </style>
    </head>
    <body class="login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="index.php"><b>Admin-</b>ITL JOBS</a>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Sign In</p>
                <form id="login" action="login.php" method="post">
                    <?php
                    error_reporting(0);
                    session_start();
                    if ($_SESSION['in'] == 1) {
                        echo "<span style='color:#CB2430'/><b>Invalid username or password</b></span>";
                    }
                    unset($_SESSION['in']);
                    ?>
                    
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email" name="email"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="password"/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">    
                            <div class="checkbox icheck">
                                <label>
                                    <a class="forgot" data-toggle="modal" data-target="#myModal" href="javascript:void(0)">Forgot Password?</a>     
                                </label>
                            </div>                        
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div><!-- /.col -->
                    </div>
                </form>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Forgot Password</h4>
                            </div>
                            <div class="modal-body">
                                <div class="input-group add-on">    
                                    <input type="email" class="form-control" required name="forgotemail" id="field-forgotemail" value="" placeholder="ENTER YOUR EMAIL ID" />
                                </div>

                                <div class="row">
                                    <div id="error" style="display:none; color:#C80000; margin-left: 20px; font-size:16px;"><b>Invalid Email</b></div>
                                </div>
                                <div class="bg-success text-center" id="success-message" style="padding: 10px; margin: 10px;"></div>
                            </div>

                            <div class="modal-footer">
                                <button onclick="forgot()" type="button" class="btn btn-primary btn-lg" >Submit</button>
                            </div>

                        </div>

                    </div>
                </div>

                <!--        <div class="social-auth-links text-center">
                          <p>- OR -</p>
                          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
                          <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
                        </div> /.social-auth-links -->

                <!--        <a id="link1" href="#">I forgot my password</a><br>-->
                <!--<a href="register.html" class="text-center">Register a new membership</a>-->

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.4 -->
        <!--<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>-->
        <!-- Bootstrap 3.3.2 JS -->
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <script>
                          $(function () {
                              $('input').iCheck({
                                  checkboxClass: 'icheckbox_square-blue',
                                  radioClass: 'iradio_square-blue',
                                  increaseArea: '20%' // optional
                              });
                          });
        </script>
        <script>
            $('#success-message').hide();
            function forgot() {
                //alert("test");
                var femail = document.getElementById("field-forgotemail").value;

                $.ajax({
                    method: "POST",
                    url: 'forgot-password.php',
                    data: {femail: femail},
                    success: function (data) {
                        if (data == 1) {
                            
                     $('#success-message').fadeIn(1000).html("Check your mail for new password!");
                            $('#success-message').fadeOut(5000);
                            setTimeout(function(){// wait for 5 secs(2)
                            location.reload(); // then reload the page.(3)
                            }, 5000);
                            return true;
                        } else {
                            $('#error').show();
                            //alert("Invalid email")
                            return false;
                        }
                    }
                });

            }
        </script>
    </body>
</html>