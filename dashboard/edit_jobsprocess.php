<?php

require_once("db.php");
session_start();
//posted values
//if(isset($_POST['submit'])){
$id = trim($_POST['id']);
$title = trim($_POST['title']);

/* Get industry name */
$isql = sprintf('SELECT industry_name FROM industries WHERE id=%d',$title);
$iresult = Db::query($isql);
$irow = mysql_fetch_assoc($iresult);
$title = $irow['industry_name'];

$company = trim($_POST['company']);
$job_description = trim($_POST['job_description']);
$job_type = trim($_POST['job_type']);
$job_cat = trim($_POST['job_cat']);
$experience = trim($_POST['experience']);
$location = trim($_POST['location']);
$create_date1 = trim($_POST['create_date']);
$create_date = explode('/', $create_date1);
$create_date = array_reverse($create_date);
$create_date = implode('-', $create_date);
$closing_date1 = trim($_POST['closing_date']);
$close_date = explode('/', $closing_date1);
$closing_date = array_reverse($close_date);
$closing_date = implode('-', $closing_date);
$user_id = $_SESSION['id'];
$keys = json_encode($_POST['keys']);
$keys = strtolower($keys);
$keys = mysql_escape_string($keys);

$sql = sprintf("UPDATE `jobs` SET job_listing='%s',company_name='%s',job_description='%s',experience='%s',job_type='%s',job_location='%s',created_date='%s',closing_date='%s',job_category_id='%s',user_id='%s',key_array='%s' WHERE id='%s' ", $title, $company, $job_description, $experience, $job_type, $location, $create_date, $closing_date, $job_cat, $user_id, $keys, $id);
$result = Db::query($sql);

if ($result) {
    $_SESSION['addsucc'] = 1;
} else {
    $_SESSION['addsucc'] = 2;
}
//}
$urlin = "edit_jobs.php?id=$id";
echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";
?>