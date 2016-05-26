<?php
session_start();
include 'db.php';
$id= $_GET['id'];

$query = sprintf("SELECT category_id FROM industry_category WHERE industry_id=%d",$id);
$result = Db::query($query);
$row = mysql_fetch_assoc($result);
$cat_id = $row['category_id'];

$query = sprintf("DELETE FROM industries WHERE id=%d",$id);
$result = Db::query($query);
if(!$result){
    $_SESSION['delsucc'] = false;
    echo '<script>window.location.href="list_industry.php?id='.$cat_id.'"; </script>';
    die();
}

$query = sprintf("DELETE FROM industry_category WHERE industry_id=%d",$id);
$result = Db::query($query);
if(!$result){
    $_SESSION['delsucc'] = false;
    echo '<script>window.location.href="list_industry.php?id='.$cat_id.'"; </script>';
    die();
}

$_SESSION['delsucc'] = true;
echo '<script>window.location.href="list_industry.php?id='.$cat_id.'"; </script>';