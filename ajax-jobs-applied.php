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

Db::query($sqlAlreadyApplied);

die('SUCCESS');