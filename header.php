<?php (!isset($_SESSION))? session_start():null;?>
<header class="clearfix">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="top-line">
					<div class="container">
						<div class="row">
                            <div class="col-md-10 col-xs-12 col-sm-6"><span class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></span></div>
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
							<li><a <?php if($filename == 'itljobs-upcominginterviews.php'){ ?> class="active" <?php } ?> href="itljobs-upcominginterviews.php">Upcoming Interviews</a>
								
							</li>
							<li><a <?php if($filename == 'itljobs-hotjobs.php'){ ?> class="active" <?php } ?> href="itljobs-hotjobs.php">Hot Jobs</a>
							
							</li>
							<li><a <?php if($filename == 'employer_enquiry.php'){ ?> class="active" <?php } ?> href="employer_enquiry.php">Employer Enquiry</a>
								
							</li>

							<li><a <?php if($filename == 'itljobs-contact.php'){ ?> class="active" <?php } ?> href="itljobs-contact.php">Contact</a></li>
						</ul>

                                            
                        <?php //For getting name to displayable
                        include 'db.php';
                        if (isset($_SESSION['log'])){
                            $id = $_SESSION['log'];
                        }
                        elseif (isset($_SESSION['reclog'])){
                            $id = $_SESSION['reclog'];
                        }
                        $query = sprintf("SELECT name FROM users WHERE id = '%s'",$id);
                        $result_name = Db::query($query);
                        $row_name = mysql_fetch_array($result_name);
                        $_SESSION['log-name'] = $row_name['name'];
                        ?>
                                            
                        <ul class="nav navbar-nav navbar-right">
                            <?php if (isset($_SESSION['log'])) :?>
                                <li><a href="javascript:void(0)">Logged As: <?php echo $_SESSION['log-name']?></a></li>
                                <li><a href="itljobs-logout.php">Logout</a></li>
                            <?php elseif (isset($_SESSION['reclog'])) :?>
                                <li><a href="javascript:void(0)">Logged As: <?php echo $_SESSION['log-name']?></a></li>
                                <li><a href="recruiter-logout.php">Logout</a></li>
                            <?php else: ?>
                            <?php if(empty($_SESSION['logged-in'])){ ?><li><a <?php if($filename == 'itljobs-registration.php'){ ?> class="active" <?php } ?> href="itljobs-registration.php">Register</a></li><?php } ?>
                            <?php if(!empty($_SESSION['logged-in'])){ ?><li><a <?php if($filename == 'itljobs-login.php'){ ?> class="active" <?php } ?> href="itljobs-login.php">Login</a></li><?php } ?>
                            <?php endif;?>
                        </ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav>
		</header>