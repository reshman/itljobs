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
          
                            
              <li <?php if($filename == 'addadmin.php' || $filename == 'list_admin.php'){ ?> class="active" <?php }else{ ?> class="treeview"<?php } ?>>
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Admins</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="addadmin.php"><i class="fa fa-circle-o"></i>Create Admin</a></li>  
                    <li><a href="list_admin.php"><i class="fa fa-circle-o"></i>Manage Admin</a></li> 
          
                </ul>
            </li>
            <li <?php if($filename == 'list_jobcategory.php' || $filename == 'add_jobcategory.php'){ ?> class="active" <?php }else{ ?> class="treeview"<?php } ?>>
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Job Category </span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="list_jobcategory.php"><i class="fa fa-circle-o"></i>List Job Category</a></li>  
                    <li><a href="add_jobcategory.php"><i class="fa fa-circle-o"></i>Add Job Category</a></li>
                </ul>
            </li>
              <li <?php if($filename == 'list_jobs.php'){ ?> class="active" <?php }else{ ?>class="treeview"<?php } ?>>
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Jobs </span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="list_jobs.php"><i class="fa fa-circle-o"></i>List Jobs</a></li> 
                </ul>
            </li>
             <li <?php if($filename == 'list_interviews.php'){ ?> class="active" <?php }else{ ?>class="treeview"<?php } ?>>
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Interviews </span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="list_interviews.php"><i class="fa fa-circle-o"></i>List Interviews</a></li>  
 
                </ul>
            </li>
               <li <?php if($filename == 'list_resume.php'){ ?> class="active" <?php }else{ ?>class="treeview"<?php } ?>>
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Resumes</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu"> 
                    <li><a href="list_resume.php"><i class="fa fa-circle-o"></i>List Resume</a></li> 
          
                </ul>
            </li>
            
            <li <?php if($filename == 'list_employers.php' || $filename == 'list_recruiterjobs.php'){ ?> class="active" <?php }else{ ?> class="treeview"<?php } ?>>
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Recruiters</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu"> 
                    <li><a href="list_employers.php"><i class="fa fa-circle-o"></i>List Recruiters</a></li> 
                     <li><a href="list_recruiterjobs.php"><i class="fa fa-circle-o"></i>List Recruiter Jobs</a></li>
          
                </ul>
            </li>
            
          <li <?php if($filename == 'job_notifications.php' || $filename == 'interview_notifications.php' || $filename == 'recruiter_notifications.php' || $filename == 'jobseeker_notifications.php'){ ?> class="active" <?php }else{ ?> class="treeview"<?php } ?>>
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Notifications</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <?php
                            include_once 'db.php';
                            $querydate = sprintf("SELECT datetime,id FROM log ORDER BY id DESC LIMIT 1"); 
                            $resultdate = Db::query($querydate);
                            $datetime=mysql_fetch_assoc($resultdate);
                            $log= $datetime['datetime'];
                           
                                            
                            $qury = sprintf("SELECT id,created_date FROM notification WHERE created_date>='%s' AND type_id='%s' AND status='%s'",$log,1,0);
                            $rest = Db::query($qury);
                            $cntrw=mysql_num_rows($rest);
                    ?>
                    <input type="hidden" name="jobdate" id="jobdate" value="<?php echo $log;?>" />
                    <li><a href="job_notifications.php" id="notific"><i class="fa fa-circle-o"></i>Jobs Notification<span class="label label-primary pull-right" id="notification"><?php echo $cntrw;?></span></a></li>
                    
                    <?php
                                            
                            $qry = sprintf("SELECT id,created_date FROM notification WHERE created_date>='%s' AND type_id='%s' AND status='%s'",$log,2,0);
                            $res = Db::query($qry);
                            $cntrow=mysql_num_rows($res);
                    ?>
                    <input type="hidden" name="intdate" id="jobdate" value="<?php echo $log;?>" />
                    <li><a href="interview_notifications.php" id="notif"><i class="fa fa-circle-o"></i>Interview Notification<span class="label label-primary pull-right" id="notification"><?php echo $cntrow;?></span></a></li> 
                   
                    <?php
                                            
                            $query = sprintf("SELECT id,created_date FROM notification WHERE created_date>='%s' AND type_id='%s' AND status='%s'",$log,3,0);
                            $result = Db::query($query);
                            $countrow=mysql_num_rows($result);
                    ?>
                     <input type="hidden" name="jsdate" id="jsdate" value="<?php echo $log;?>" />
                    <li><a href="recruiter_notifications.php" id='notificat'><i class="fa fa-circle-o"></i>Recruiter Notification<span class="label label-primary pull-right" id="notification"><?php echo $countrow;?></span></a></li> 
                    
                    <?php
                                            
                            $query1 = sprintf("SELECT id,created_date FROM notification WHERE created_date>='%s' AND type_id='%s' AND status='%s'",$log,4,0);
                            $result1 = Db::query($query1);
                            $countrow1=mysql_num_rows($result1);
                    ?>
                    <input type="hidden" name="jsid" id="jsid" value="<?php echo $log;?>" />
                    <li><a href="jobseeker_notifications.php" id="noti"><i class="fa fa-circle-o"></i>Job Seeker Notification<span id="newspannot"></span><span id="spannot" class="label label pull-right bg-red"><?php echo $countrow1;?></span></a></li>
                  
                </ul>
            </li>
  	    <li <?php if($filename == 'list_appliedjobs.php'){ ?> class="active" <?php }else{ ?> class="treeview"<?php } ?>>
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Jobs Applied</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu"> 
                    <li><a href="list_appliedjobs.php"><i class="fa fa-circle-o"></i>List of applied jobs</a></li> 
                </ul>
            </li>
            <li class="header">SETTINGS</li>
            
            <li><a href="settings.php"><i class="fa fa-circle-o text-yellow"></i> <span>Change Password</span></a></li>
            <!--<li><a href="logout.php"><i class="fa fa-circle-o text-red"></i> <span>Logout</span></a></li>-->
            <!--<li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->
        </ul>
    </section>
    <!-- /.sidebar -->
    
     <script src="//code.jquery.com/jquery-1.9.1.js"></script> 
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  -->
<script>
 $(function(){
      $('#noti').on('click', function () {
                                var jobid = $('#jsid').val();
                                var rtype = '4';
//                                 alert(jobid);
                            
                                $.ajax({
                                    url: 'category.php',
                                    type: 'POST',
                                    data: {jbid: jobid,rtype: rtype}
                                }).done(function(data){
                               // $("#newspannot").html(data);
                                //$("#spannot").hide();
                            });
            });
            });
</script>
<script>
 $(function(){
      $('#notificat').on('click', function () {
                                var jobid = $('#jsdate').val();
                                var rtype = '3';
//                                 alert(jobid);
                            
                                $.ajax({
                                    url: 'category.php',
                                    type: 'POST',
                                    data: {jbid: jobid,rtype: rtype}
                                }).done(function(data){
                                //$("#newspannot").html(data);
                                //$("#spannot").hide();
                            });
            });
            });
</script>
</aside>
<script>
 $(function(){
      $('#notif').on('click', function () {
                                var jobid = $('#intdate').val();
                                var rtype = '2';
//                                 alert(jobid);
                            
                                $.ajax({
                                    url: 'category.php',
                                    type: 'POST',
                                    data: {jbid: jobid,rtype: rtype}
                                }).done(function(data){
                               // $("#newspannot").html(data);
                                //$("#spannot").hide();
                            });
            });
            });
</script>
<script>
 $(function(){
      $('#notific').on('click', function () {
                                var jobid = $('#jobdate').val();
                                var rtype = '1';
//                                 alert(jobid);
                            
                                $.ajax({
                                    url: 'category.php',
                                    type: 'POST',
                                    data: {jbid: jobid,rtype: rtype}
                                }).done(function(data){
                                //$("#newspannot").html(data);
                                //$("#spannot").hide();
                            });
            });
         
            });
</script>