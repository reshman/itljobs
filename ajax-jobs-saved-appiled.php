<?php
include_once 'db.php';
if (!isset($_SESSION))
    session_start();

date_default_timezone_set('Asia/Kolkata');

$date   = date('Y-m-d h:i:s');

$userId = $_SESSION['log'];
$jobId  = isset($_GET['jobid']) ? $_GET['jobid'] : 0;


$sqlSavedJobsDel = sprintf("UPDATE jobs_saved SET del_status = '%s' WHERE user_id = '%s' AND job_id = '%s'", 1, $userId, $jobId);

if(Db::query($sqlSavedJobsDel)) {
    $sqlAppliedJobsDel = sprintf("INSERT INTO jobs_applied SET
        user_id = '%s',
        job_id = '%s',
        created_date = '%s',
        del_status = '%s'", $userId, $jobId, $date, 0
    );
    Db::query($sqlAppliedJobsDel);

    ?>

    <?php
    $qry = sprintf("SELECT j.id, j.job_description, j.experience, j.closing_date, j.job_listing FROM jobs j JOIN `jobs_applied` ja ON j.id = ja.job_id WHERE ja.user_id = '%s' AND j.id = '%s' AND  ja.del_status = '%s'", $userId,$jobId, 0);
    $res = Db::query($qry);
    if (mysql_num_rows($res) > 0) {
        while ($rw = mysql_fetch_array($res)) {
            ?>
            <div class="accord-content" style="display: none;">
                <h4><?php echo $rw['job_listing'];?></h4>
                <p><?php echo $rw['job_description'];?></p>
                <p><span style="color:#6495ED">Experience : </span><?php echo $rw['experience'];?> years,
                    <span style="color:#6495ED">Location : </span><?php echo $rw['job_location'];?>,
                    <span style="color:#6495ED">Closing date : </span><?php echo $rw['closing_date'];?></p>
                <input type="hidden" name="jbid" id="jbid" value="<?php echo $rw['jobid'];?>"/>

            </div>
        <?php
        } }?>

<?php



}


