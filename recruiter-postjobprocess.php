<?php

require('db.php');
// include("logincheck.php");
session_start();
$urlin = "recruiter-postjob.php";

$id                  = (trim($_POST['id']));
$companyname         = (trim($_POST['companyname']));
$companytitle        = (trim($_POST['companytitle']));
$description         = (trim($_POST['description']));
$location            = (trim($_POST['location']));
$jobtype             = (trim($_POST['jobtype']));
$salaryamount        = (trim($_POST['salary']));
$salarycaegory       = (trim($_POST['salarycat'])); 
$salary              =$salaryamount.$salarycaegory;
date_default_timezone_set('Asia/Calcutta'); 
$date                = date("Y-m-d h:i:s"); 

$create_date1  = trim($_POST['create_date']);
$create_date  = date("Y-m-d", strtotime($create_date1));
$closing_date1 = trim($_POST['closing_date']);
$closing_date = date("Y-m-d", strtotime($closing_date1));


$sql           = sprintf("INSERT INTO jobs SET company_name = '%s', user_id = '%s', job_listing = '%s', job_description = '%s', job_location = '%s', job_type = '%s', salary = '%s', created_date = '%s', closing_date = '%s', date = '%s', active = '%s', del_status = '%s'", $companyname, $id, $companytitle, $description, $location, $jobtype,$salary,$create_date, $closing_date, $date,'0','0'); 
$resultsql     = Db::query($sql);


if($resultsql)

	{

	$_SESSION['regsucc']=1;

	}

	else 

	{

	$_SESSION['regsucc']=2;

		

	}

  

echo "<script type='text/javascript'>



location.href = '" . $urlin . "';



</script>";



