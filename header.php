<?php (!isset($_SESSION))? session_start():null;?>
<header class="clearfix">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="top-line">
					<div class="container">
						<div class="row">
                                                    <div class="col-md-10 col-xs-12 col-sm-6"><span class="navbar-brand"><a href="index.php"><img src="images/logo.png" alt=""></a></span></div>
							<div class="col-md-2 col-xs-12">
                                <div class="itl-top"><img src="images/top-logo.jpg" alt=""></div>
							</div>	
							<!--div class="col-md-2 col-xs-12 col-sm-6">
								<ul class="social-icons">
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
									
								</ul>
							</div-->	
						</div>
					</div>
				</div>
				<?php
                                            $url = $_SERVER['SCRIPT_FILENAME'];
                                            $filename = basename($url);
                                        ?>
                                        
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a  <?php if($filename == 'index.php'){ ?> class="active" <?php } ?> href="index.php">Home</a>
								
							</li>
							<li><a <?php if($filename == 'itl-services.php'){ ?> class="active" <?php } ?> href="itl-services.php">Services</a>
								
							</li>
                                                        <?php if(empty($_SESSION['reclog'])){ ?>
							<li><a <?php if($filename == 'itljobs-upcominginterviews.php'){ ?> class="active" <?php } ?> href="itljobs-upcominginterviews.php">Upcoming Interviews</a>
								
							</li>
							<li><a <?php if($filename == 'itljobs-hotjobs.php'){ ?> class="active" <?php } ?> href="itljobs-hotjobs.php">Hot Jobs</a>
							
							</li>
							<?php if(empty($_SESSION['log'])){ ?><li><a <?php if($filename == 'employer_enquiry.php'){ ?> class="active" <?php } ?> href="employer_enquiry.php">Employer</a></li>
                                                        <?php } } ?>
							<li><a <?php if($filename == 'itljobs-contact.php'){ ?> class="active" <?php } ?> href="itljobs-contact.php">Contact</a></li>
						</ul>
                        <ul class="nav navbar-nav navbar-right">
                            <?php if (isset($_SESSION['log'])){ ?>
                                <li><a href="javascript:void(0)">Logged As: <?php echo $_SESSION['logged_name']?></a></li>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="my-profile.php">My Profile</a></li>
                                            <li><a href="edit-resume.php">Edit My Profile</a></li>
                                            <li><a href="my-jobs.php">My Jobs</a></li>
                                            <li><a href="alerts.php">Alerts</a></li>
                                            <li><a href="myaccount.php">Change Password</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="itljobs-logout.php">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>

                            <?php } elseif (isset($_SESSION['reclog'])){ ?>
                                <li><a href="javascript:void(0)">Logged As: <?php echo $_SESSION['logged_name']?></a></li>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <!--<li><a href="recruiter.php">My Profile</a></li>-->
                                            <li><a href="edit-recruiterprofile.php">Edit My Profile</a></li>
                                            <li><a href="recruiter-postjob.php">Post Jobs</a></li>
                                            <li><a href="recruiter_view_jobs.php">View Jobs</a></li>
                                            <li><a href="search-resume.php">Search Resume</a></li>
                                            <li><a href="itljobs-changepassword.php">Change Password</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="recruiter-logout.php">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            <?php } else { ?>
                            <li><a <?php if($filename == 'itljobs-registration.php'){ ?> class="active" <?php } ?> href="itljobs-registration.php">Register</a></li>
                            <li><a <?php if($filename == 'itljobs-login.php'){ ?> class="active" <?php } ?> href="itljobs-login.php">Login</a></li><?php } ?>
                        </ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav>
		</header>