<?php

require('db.php');
// include("logincheck.php");
session_start();
$urlin = "recruiter_view_jobs.php";

$id = (trim($_POST['id']));
$category_id = trim($_POST['category']);
$experience = TRIM($_POST['experience']);
$companyname = (trim($_POST['companyname']));
$companytitle = (trim($_POST['companytitle']));
$description = (trim($_POST['description']));
$location = (trim($_POST['location']));
$jobtype = (trim($_POST['jobtype']));
$salaryamount = (trim($_POST['salary']));
$salarycategory = (trim($_POST['salarycat']));
$salary = $salaryamount . ' ' . $salarycategory;
date_default_timezone_set('Asia/Calcutta');
$date = date("Y-m-d h:i:s");

$create_date1 = trim($_POST['create_date']);

$create_date1 = explode('/', $create_date1);
$create_date1 = array_reverse($create_date1);
$create_date = implode('-', $create_date1);

$closing_date1 = trim($_POST['closing_date']);

$closing_date1 = explode('/', $closing_date1);
$closing_date1 = array_reverse($closing_date1);
$closing_date = implode('-', $closing_date1);


$sql = sprintf("UPDATE jobs SET company_name = '%s', job_listing = '%s', job_description = '%s', job_location = '%s', job_type = '%s', salary = '%s', created_date = '%s', closing_date = '%s', date = '%s', active = '%s', del_status = '%s', job_category_id='%s',experience='%s' WHERE id=%d", $companyname, $companytitle, $description, $location, $jobtype, $salary, $create_date, $closing_date, $date, '0', '0', $category_id, $experience, $id);
$resultsql = Db::query($sql);


if ($resultsql) {

    $_SESSION['regsucc'] = 1;
} else {

    $_SESSION['regsucc'] = 2;
}



echo "<script type='text/javascript'>



location.href = '" . $urlin . "';



</script>";



