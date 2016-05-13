<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/admin.jpg" class="img-circle" alt="Admin Image" />
            </div>
            <div class="pull-left info">
                <p>ITL JOBS</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
<!--        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>-->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?php
            $url = $_SERVER['SCRIPT_FILENAME'];
            $filename = basename($url);
        ?>
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li <?php if($filename == 'home.php'){ ?> class="active" <?php } ?>><a href="home.php"><i class="fa fa-circle-o"></i> Dashboard </a></li>
                </ul>
            </li>
          
                            
<!--             <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Gallery Photos </span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="list_gallery.php"><i class="fa fa-circle-o"></i>Photos</a></li>  
                     <li><a href="gallery.php"><i class="fa fa-circle-o"></i>Add Photos</a></li> 
                         <li><a href="list_eventimages.php"><i class="fa fa-circle-o"></i>Event Images</a></li>  
                      <li><a href="addevent_images.php"><i class="fa fa-circle-o"></i>Add Event Images</a></li> 
                   
                </ul>
            </li>-->
            
<!--            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Contact us messages </span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="list_contactus.php"><i class="fa fa-circle-o"></i>List Messages</a></li>  
                     <li><a href="courses.php"><i class="fa fa-circle-o"></i>Add Courses</a></li> 
                      <li><a href="list_courseimages.php"><i class="fa fa-circle-o"></i>Course Images</a></li>  
                      <li><a href="addcourse_images.php"><i class="fa fa-circle-o"></i>Add Course Images</a></li> 
                   
                </ul>
            </li>-->
            
            
             <li <?php if($filename == 'list_jobs.php' || $filename == 'add_jobs.php'){ ?> class="active" <?php }else{ ?> class="treeview"<?php } ?>>
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Jobs </span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="list_jobs.php"><i class="fa fa-circle-o"></i>List Jobs</a></li>  
                    <li><a href="add_jobs.php"><i class="fa fa-circle-o"></i>Add Jobs</a></li> 
                </ul>
            </li>
           <li <?php if($filename == 'add_interview.php' || $filename == 'list_interviews.php'){ ?> class="active" <?php }else{ ?> class="treeview"<?php } ?>>
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Interviews </span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="add_interview.php"><i class="fa fa-circle-o"></i>Add Interview</a></li>  
                    <li><a href="list_interviews.php"><i class="fa fa-circle-o"></i>List Interviews</a></li>  
 
                </ul>
            </li>
            
	<li <?php if($filename == 'list_appliedjobs.php' || $filename == 'list_appliedinterviews.php'){ ?> class="active" <?php }else{ ?> class="treeview"<?php } ?>>
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Jobs/Interviews Applied </span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="list_appliedjobs.php"><i class="fa fa-circle-o"></i>List of Applied Job</a></li>  
                </ul>
            <ul class="treeview-menu">
                    <li><a href="list_appliedinterviews.php"><i class="fa fa-circle-o"></i>List of Applied Interviews</a></li>  
                </ul>
            </li>

            <!--<li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>-->
            <li class="header">SETTINGS</li>
            
            <li><a href="settings.php"><i class="fa fa-circle-o text-yellow"></i> <span>Change Password</span></a></li>
            <!--<li><a href="logout.php"><i class="fa fa-circle-o text-red"></i> <span>Logout</span></a></li>-->
            <!--<li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>