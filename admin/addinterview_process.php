<?php

require('db.php');
// include("logincheck.php");
session_start();
$urlin = "add_interview.php";

//$sResultFileName = "";
$id           = (trim($_POST['id']));
$name         = (trim($_POST['name']));
$company_name = (trim($_POST['company_name']));
$time         = (trim($_POST['time']));
$venue        = (trim($_POST['venue']));
$title        = (trim($_POST['title']));
$date1         = (trim($_POST['date']));
$sdate        = explode('/', $date1);
$date         = $sdate[2].'-'.$sdate[1].'-'.$sdate[0];
$description  = (trim($_POST['description']));
$contact      = (trim($_POST['contact']));
$interview    = (trim($_POST['interview']));


   date_default_timezone_set('Asia/Calcutta'); 
   $todaydate         = date("Y-m-d h:i:s"); 

  $sql          = sprintf("INSERT INTO interviews(name,title,company_name,schedule_date,schedule_time,venue,description,interview,contact,user_id,active,del_status,date) VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')", $name, $title, $company_name, $date, $time, $venue, $description, $interview, $contact, $id,'0','0',$todaydate); 
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



