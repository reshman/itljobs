<?php
session_start();
require_once("db.php");

$jobid        = $_POST['jobid'];
$user         = $_SESSION['id'];
date_default_timezone_set('asia/kolkata');
$create_date  = date("Y-m-d h:i:sa");

//insert or update jobs_applied table
$query = sprintf("SELECT id,job_id,user_id FROM `jobs_applied` WHERE user_id = '%s' AND job_id = '%s'",$user,$jobid);
$result = Db::query($query);
if(mysql_num_rows($result) == 0){
    $qry = sprintf("INSERT INTO `jobs_applied` (user_id,job_id,created_date) VALUES ('%s','%s','%s')",$user,$jobid,$create_date);
    $res = Db::query($qry);
}else{
    //update del_status
    $qy1 = sprintf("UPDATE `jobs_saved` SET del_status = '%s' WHERE user_id = '%s' AND job_id = '%s'",1,$user,$jobid);
    $rs1 = Db::query($qy1);
    
    $qy2 = sprintf("UPDATE `jobs_applied` SET del_status = '%s' WHERE user_id = '%s' AND job_id = '%s'",0,$user,$jobid);
    $rs2 = Db::query($qy2);   
}

exit;

			?>