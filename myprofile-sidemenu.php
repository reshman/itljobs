<?php
    $url      = $_SERVER['SCRIPT_FILENAME'];
    $link     = basename($url);

?>
<div class="col-md-2">
    <div class="side-navigation">
        <ul class="side-navigation-list">
            <li><a href="edit-resume.php" class="<?php echo ($link == 'edit-resume.php') ? 'active':''?>">EDIT MY PROFILE</a></li>
            <li><a href="my-jobs.php" class="<?php echo ($link == 'my-jobs.php') ? 'active':''?>">MY JOBS</a></li>
            <li><a href="alerts.php" class="<?php echo ($link == 'alerts.php') ? 'active':''?>">ALERTS</a></li>
            <li><a href="myaccount.php" class="<?php echo ($link == 'myaccount.php') ? 'active':''?>">MY ACCOUNT</a></li>

        </ul>
    </div>
</div>