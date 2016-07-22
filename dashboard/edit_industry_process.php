<?php
session_start();
include 'db.php';
$cat_id = $_POST['job_category'];
$ind_id = $_POST['id'];
$ind_name = $_POST['industry'];

$query = sprintf("UPDATE industry_category SET category_id=%d WHERE industry_id=%d",$cat_id,$ind_id);
$result = Db::query($query);
if(!$result){
    $_SESSION['editsucc'] = false;
    echo '<script>window.location.href="list_industry.php?id='.$cat_id.'"; </script>';
    die();
}

$query = sprintf("UPDATE industries SET industry_name='%s' WHERE id=%d",$ind_name,$ind_id);
$result = Db::query($query);
if(!$result){
    $_SESSION['editsucc'] = false;
    echo '<script>window.location.href="list_industry.php?id='.$cat_id.'"; </script>';
    die();
}

$_SESSION['editsucc'] = true;
echo '<script>window.location.href="list_industry.php?id='.$cat_id.'"; </script>';