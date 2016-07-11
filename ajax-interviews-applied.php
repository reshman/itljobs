<?php

require_once 'db.php';
(!isset($_SESSION)) ? session_start() : null;
date_default_timezone_set('Asia/Kolkata');

$date = date('Y-m-d h:i:s A');
$userId = $_SESSION['log'];
$jobId = isset($_GET['intid']) ? $_GET['intid'] : 0;

$sqlAlreadyApplied = sprintf("SELECT id FROM interviews_applied WHERE
    user_id = '%s' AND interview_id = '%s' AND del_status = '%s'", $userId, $jobId, 0);

$resultAlreadyApplied = Db::query($sqlAlreadyApplied);

if (mysql_num_rows($resultAlreadyApplied) > 0) {
    die('ALREADY APPLIED');
}

$sqlApply = sprintf("INSERT INTO interviews_applied SET
    user_id = '%s',
    interview_id  = '%s',
    created_date = '%s',
    del_status   = '%s'
    ", $userId, $jobId, $date, 0);

Db::query($sqlApply);

$query = sprintf("SELECT user.name FROM interviews as i JOIN users as user ON user.id=i.user_id WHERE i.id='%s'", $jobId);
$result = Db::query($query);
$row = mysql_fetch_assoc($result);
$adminname = $row['name'];

$qryuser = sprintf("SELECT name FROM users WHERE id = '%s'", $userId);
$resuser = Db::query($qryuser);
$user = mysql_fetch_assoc($resuser);
$username = $user['name'];

$txt = "$username has applied for an Interview thats posted by $adminname";
$email_template_apply = file_get_contents("email_template_apply.html");
$email_template_apply = str_replace("{{content}}", $txt, $email_template_apply);
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers.= "From:itljobs@webadmin.com" . "\r\n";
$to = 'recruitement@itljobs.com';
$subject = "Notification - Interview Applied";
mail($to, $subject, $email_template_apply, $headers);


die('SUCCESS');
