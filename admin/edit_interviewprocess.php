<?php

require('db.php');
// include("logincheck.php");
session_start();


//$sResultFileName = "";

//post values
$id              = $_POST['id'];
$name            = $_POST['name'];
$title           = $_POST['title'];
$date            = $_POST['date'];
$converteddate = date("Y-m-d", strtotime($date));
$description     = $_POST['description'];
$converteddate = date("Y-m-d", strtotime($date));

   date_default_timezone_set('Asia/Calcutta'); 
   $todaydate         = date("Y-m-d h:i:s"); 
   
   $urlin = "edit_interview.php?id=$id";
   
   if($converteddate<$todaydate){
      $_SESSION['addsucc']=3;
  }
 else {

$sql    = sprintf("UPDATE interviews SET name = '%s', title = '%s', schedule_date = '%s', description = '%s' WHERE id = '%s'", $name, $title, $converteddate, $description,$id); 

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


