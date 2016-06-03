<?php
$url = $_SERVER['SCRIPT_FILENAME'];
$link = basename($url);

if (isset($_SESSION['log'])) {
    ?>
    <div class="col-md-2">
        <div class="side-navigation">
            <ul class="side-navigation-list">
                <li><a href="edit-resume.php" class="<?php echo ($link == 'edit-resume.php') ? 'active' : '' ?>">EDIT MY PROFILE</a></li>
                <li><a href="my-jobs.php" class="<?php echo ($link == 'my-jobs.php') ? 'active' : '' ?>">MY JOBS</a></li>
                <li><a href="alerts.php" class="<?php echo ($link == 'alerts.php') ? 'active' : '' ?>">ALERTS</a></li>
                <li><a href="myaccount.php" class="<?php echo ($link == 'myaccount.php') ? 'active' : '' ?>">CHANGE PASSWORD</a></li>

            </ul>
        </div>
    </div>
    <?php
} else if (isset($_SESSION['reclog'])) {
    ?>
    <div class="col-md-2">
        <div class="side-navigation">
            <ul class="side-navigation-list">
                <li><a href="edit-recruiterprofile.php" class="<?php echo ($link == 'edit-recruiterprofile.php') ? 'active' : '' ?>">EDIT MY PROFILE</a></li>
                <li><a href="recruiter-postjob.php" class="<?php echo ($link == 'recruiter-postjob.php') ? 'active' : '' ?>">POST JOBS</a></li>
                <li><a href="recruiter_view_jobs.php" class="<?php echo ($link == 'recruiter_view_jobs.php') ? 'active' : '' ?>">VIEW JOBS</a></li>
                <li><a href="search-resume.php" class="<?php echo ($link == 'search-resume.php') ? 'active' : '' ?>">SEARCH RESUME</a></li>
                <li><a href="itljobs-changepassword.php" class="<?php echo ($link == 'itljobs-changepassword.php') ? 'active' : '' ?>">Change Password</a></li>

            </ul>
        </div>
    </div>
    <?php
}