<?php

require('db.php');
// include("logincheck.php");
session_start();
$urlin = "add_interview.php";

//$sResultFileName = "";
$id           = (trim($_POST['id']));
//$name         = (trim($_POST['name']));
$company_name = (trim($_POST['company_name']));
$country      = (trim($_POST['country']));
$salary       = (trim($_POST['salary']));
$time         = (trim($_POST['time']));
$venue        = (trim($_POST['venue']));
$date1        = (trim($_POST['date']));
if($date1 == ''){
$date = '';
} else {
$sdate        = explode('/', $date1);
$date         = array_reverse($sdate);
$date         = implode('-', $date);
}
$description  = (trim($_POST['description']));
$coordinator  = (trim($_POST['coordinator']));
$contact      = (trim($_POST['contact']));
$interview    = (trim($_POST['interview']));
$title        = (trim($_POST['title']));
$job_cat      = (trim($_POST['job_cat']));

   date_default_timezone_set('Asia/Calcutta'); 
   $todaydate         = date("Y-m-d h:i:s"); 

  $sql          = sprintf("INSERT INTO interviews(company_name,country,salary,schedule_date,schedule_time,venue,description,interview,coordinator,contact,user_id,active,del_status,date,job_category_id,industry) VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')", $company_name,$country, $salary, $date, $time, $venue, $description, $interview, $coordinator, $contact, $id,'0','0',$todaydate,$job_cat,$title);
  $resultsql    = Db::query($sql);
  $inid = mysql_insert_id();
   //insert jon seeker to notification table
       $sqlqry = sprintf("INSERT INTO notification(ref_id,type_id,created_date) VALUES('%s','%s','%s')",$inid,2,$todaydate);
       $resultqry = Db::query($sqlqry);
    /*Sending mail*/


if($resultsql)

	{

	$_SESSION['addsucc']=1;

	}

	else 

	{

	$_SESSION['addsucc']=2;

	}	


echo "<script type='text/javascript'>



location.href = '" . $urlin . "';



</script>";



