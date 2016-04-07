<?php

require('db.php');
// include("logincheck.php");
session_start();


//$sResultFileName = "";

//post values
$id              = $_POST['id'];
$name            = $_POST['name'];
$company_name = (trim($_POST['company_name']));
$time         = (trim($_POST['time']));
$venue        = (trim($_POST['venue']));
$title           = $_POST['title'];
$date            = $_POST['date'];
$description     = $_POST['description'];
$contact      = (trim($_POST['contact']));
$interview    = (trim($_POST['interview']));
echo $converteddate = date("Y-m-d", strtotime($date));

   date_default_timezone_set('Asia/Calcutta'); 
   $todaydate         = date("Y-m-d h:i:s"); 
   
   $urlin = "edit_interview.php?id=$id";
   
   if($converteddate<$todaydate){
      $_SESSION['addsucc']=3;
  }
 else {
 $sql    = sprintf("UPDATE interviews SET name = '%s',company_name = '%s',schedule_time = '%s', venue='%s', title = '%s', schedule_date = '%s', description = '%s', contact = '%s', interview = '%s' WHERE id = '%s'", $name, $company_name, $time,$venue, $title, $converteddate, $description,$contact,$interview,$id); 

$resultedit = Db::query($sql);

if($resultedit)

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


