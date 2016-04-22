<?php

require('db.php');
// include("logincheck.php");
session_start();
$urlin = "recruiter-postjob.php";

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

$sal = explode('-', $salaryamount);
$minsal = (int)$sal[0];
$maxsal = (int)$sal[1];
if ($minsal > $maxsal) {
    $_SESSION['regsucc'] = 3;
    echo "<script type='text/javascript'> window.location.href = '" . $urlin . "'; </script>";
    die();
}

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

function generateRandomString($length = 8) {
    $characters = 'ITL0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$ref_id = generateRandomString();

$sql = sprintf("INSERT INTO jobs SET company_name = '%s', user_id = '%s', job_listing = '%s', job_description = '%s', job_location = '%s', job_type = '%s', salary = '%s', created_date = '%s', closing_date = '%s', date = '%s', active = '%s', del_status = '%s', job_category_id='%s',experience='%s',ref_id='%s'", $companyname, $id, $companytitle, $description, $location, $jobtype, $salary, $create_date, $closing_date, $date, '0', '0', $category_id, $experience, $ref_id);
$resultsql = Db::query($sql);


if ($resultsql) {

    $_SESSION['regsucc'] = 1;
} else {

    $_SESSION['regsucc'] = 2;
}



echo "<script type='text/javascript'>



window.location.href = '" . $urlin . "';



</script>";



