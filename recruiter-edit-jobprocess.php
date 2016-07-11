<?php

require('db.php');
 include("logincheck.php");
session_start();
$urlin = "recruiter_view_jobs.php";

$id = (trim($_POST['id']));
$category_id = trim($_POST['category']);
$experience = TRIM($_POST['experience']);
$companyname = (trim($_POST['companyname']));
$companytitle = (trim($_POST['sub_category']));
$description = (trim(html_entity_decode($_POST['job_description'])));
$location = (trim($_POST['location']));
$jobtype = (trim($_POST['jobtype']));
$salaryamount = (trim($_POST['salary']));
$salarycategory = (trim($_POST['salarycat']));
$keys = json_encode($_POST['keys']);
$keys = mysql_real_escape_string($keys);
$salary = $salaryamount . ' ' . $salarycategory;
date_default_timezone_set('Asia/Calcutta');
$date = date("Y-m-d h:i:s");
$ref_id = trim($_POST['ref_id']);
$salaryamount = preg_split("/[a-zA-Z]{3}/",$salaryamount);
$sal = explode('-', $salaryamount[0]);
$minsal = (int)$sal[0];
$maxsal = (int)$sal[1];

if ($minsal > $maxsal) {
    $_SESSION['regsucc'] = 3;
    echo "<script type='text/javascript'> window.location.href = '" . $urlin . "'; </script>";
    die();
}

if ($description == '') {
    if (!file_exists('jobdescriptions/'.$ref_id.'.pdf')) {
        $_SESSION['regsucc'] = 5;
        echo "<script type='text/javascript'> window.location.href = '" . $urlin . "'; </script>";
        die();
    }
}

$create_date1 = trim($_POST['create_date']);

$create_date1 = explode('/', $create_date1);
$create_date1 = array_reverse($create_date1);
$create_date = implode('-', $create_date1);

$closing_date1 = trim($_POST['closing_date']);

$closing_date1 = explode('/', $closing_date1);
$closing_date1 = array_reverse($closing_date1);
$closing_date = implode('-', $closing_date1);

//PHP Upload Script
    if (!is_dir("jobdescriptions")) {
        mkdir("jobdescriptions");
    }

    $max_size = 10000;          // maximum file size, in KiloBytes
    $allowtype = array('pdf');        // allowed extensions

    if (isset($_FILES['fileToUpload']) && strlen($_FILES['fileToUpload']['name']) > 1) {
        
        $description = "PDF Attached";

        $file = $ref_id.'.pdf';

        $sepext = explode('.', strtolower($_FILES['fileToUpload']['name']));
        $type = end($sepext);       // gets extension
        // Checks if the file has allowed type and size
        if (!in_array($type, $allowtype)) {
            $_SESSION['regsucc'] = 4;
            echo '<script> window.location.href = "' . $urlin . '"; </script>';
            die();
        }
        if ($_FILES['fileToUpload']['size'] > $max_size * 1000) {
            $_SESSION['regsucc'] = 4;
            echo '<script> window.location.href="' . $urlin . '"; </script>';
            die();
        }
        $uploadpath = 'jobdescriptions/' . $file;     // gets the file name
        // If no errors, upload the image, else, output the errors
        chmod($uploadpath, 0644);
        unlink($uploadpath);
        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadpath)) {
            
        } else {
            $_SESSION['regsucc'] = 4;
            echo '<script> window.location.href = "' . $urlin . '"; </script>';
            die();
        }
    }


$sql = sprintf("UPDATE jobs SET company_name = '%s', job_listing = '%s', job_description = '%s', job_location = '%s', job_type = '%s', salary = '%s', created_date = '%s', closing_date = '%s', date = '%s', active = '%s', del_status = '%s', job_category_id='%s',experience='%s',key_array='%s' WHERE id=%d", $companyname, $companytitle, $description, $location, $jobtype, $salary, $create_date, $closing_date, $date, '0', '0', $category_id, $experience,$keys,$id);
$resultsql = Db::query($sql);


if ($resultsql) {

    $_SESSION['regsucc'] = 1;
} else {

    $_SESSION['regsucc'] = 2;
}



echo "<script type='text/javascript'>



location.href = '" . $urlin . "';



</script>";



