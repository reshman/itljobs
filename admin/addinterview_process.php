<?php

require('db.php');
// include("logincheck.php");
session_start();
$urlin = "add_interview.php";

//$sResultFileName = "";
$id           = (trim($_POST['id']));
$name         = (trim($_POST['name']));
$title        = (trim($_POST['title']));
$date         = (trim($_POST['date']));
$description  = (trim($_POST['description']));

$converteddate = date("Y-m-d", strtotime($date));

   date_default_timezone_set('Asia/Calcutta'); 
   $todaydate         = date("Y-m-d h:i:s"); 
   if($converteddate<$todaydate){
      $_SESSION['addsucc']=3;
  }
 else {
   
$sql          = sprintf("INSERT INTO interviews SET name = '%s', title = '%s', schedule_date = '%s', description = '%s', user_id = '%s', active = '%s', del_status = '%s', date = '%s'", $name, $title, $converteddate, $description, $id,'0','0',$todaydate); 
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

	}



echo "<script type='text/javascript'>



location.href = '" . $urlin . "';



</script>";



