<?php
require_once 'db.php';
(!isset($_SESSION))? session_start():null;
date_default_timezone_set('Asia/Kolkata');

$date   = date('Y-m-d h:i:s');
$userId = $_SESSION['log'];
$jobId  = isset($_GET['jobid'])? $_GET['jobid'] : 0;

$sqlAlreadyApplied = sprintf("SELECT id FROM jobs_applied WHERE
    user_id = '%s' AND job_id = '%s' AND del_status = '%s'", $userId, $jobId, 0);

$resultAlreadyApplied = Db::query($sqlAlreadyApplied);

if (mysql_num_rows($resultAlreadyApplied) > 0)
    die('ALREADY APPLIED');

$sqlApply = sprintf("INSERT INTO jobs_applied SET
    user_id = '%s',
    job_id  = '%s',
    created_date = '%s',
    del_status   = '%s'
    ", $userId, $jobId, $date, 0);

Db::query($sqlApply);
//send mail 
    $query = sprintf("SELECT job.ref_id,user.name FROM jobs as job JOIN users as user ON user.id=job.user_id WHERE job.id='%s'",$jobId);
    $result = Db::query($query);
    $row = mysql_fetch_assoc($result);
    $ref_id = $row['ref_id'];
    $adminname = $row['name'];
    
    $qryuser = sprintf("SELECT name FROM users WHERE id = '%s'",$userId);
    $resuser = Db::query($qryuser);
    $user = mysql_fetch_assoc($resuser);
    $username = $user['name'];
    
       $txt = "$username has applied for a job with reference id $ref_id that posted by $adminname";
//       $txt = "Dear  " .$name. ", <br/>" . $msg;
       $email_template_apply = file_get_contents("email_template_apply.html");
       $email_template_apply = str_replace("{{content}}", $txt, $email_template_apply);
       $headers = "MIME-Version: 1.0" . "\r\n";
       $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
       $headers.= "From:itljobs@webadmin.com" . "\r\n";
       $to = 'recruitement@itljobs.com';
       $subject = "Notification - Job Applied";
       mail($to, $subject, $email_template_apply, $headers); 

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


