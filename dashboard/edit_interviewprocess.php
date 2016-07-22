<?php

require('db.php');
// include("logincheck.php");
session_start();


//$sResultFileName = "";

//post values
$id              = $_POST['id'];
$name            = $_POST['name'];
$company_name    = (trim($_POST['company_name']));
$country         = (trim($_POST['country']));
$salary          = (trim($_POST['salary']));
$time            = (trim($_POST['time']));
$venue           = (trim($_POST['venue']));
$date1           = trim($_POST['date']);
$sdate           = explode('/', $date1);
$date            = $sdate[2].'-'.$sdate[1].'-'.$sdate[0]; 
$description     = $_POST['description'];
$coordinator     = (trim($_POST['coordinator']));
$contact         = (trim($_POST['contact']));
$interview       = (trim($_POST['interview']));
$title           = (trim($_POST['title']));
$job_cat         = (trim($_POST['job_cat']));

   date_default_timezone_set('Asia/Calcutta'); 
   $todaydate         = date("Y-m-d h:i:s"); 

  $sql    = sprintf("UPDATE interviews SET name = '%s',company_name = '%s',country = '%s',salary = '%s',schedule_time = '%s', venue='%s', schedule_date = '%s', description = '%s', coordinator = '%s', contact = '%s', interview = '%s',job_category_id = %d, industry = '%s' WHERE id = '%s'", $name, $company_name,$country, $salary, $time, $venue, $date, $description,$coordinator,$contact,$interview,$job_cat,$title,$id); 

$resultedit = Db::query($sql);
$urlin = "edit_interview.php?id=$id";
if($resultedit)

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


