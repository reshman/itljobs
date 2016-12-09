<?php
session_start();
require('db.php');
$urlin = "add_industry.php";

$name = $_POST['name'];

$sql = sprintf("SELECT industry_name FROM industries WHERE industry_name='%s'", $name);
$result = Db::query($sql);

if (mysql_num_rows($result) <= 0) {
    $iasql = sprintf("INSERT INTO industries SET industry_name='%s'", $name);
    $iaresult = Db::query($iasql);
    if (!$iaresult) {
        $_SESSION['message'] = "Failed to add industry";
        $_SESSION['type'] = "danger";
        echo "<script type='text/javascript'>
            location.href = '" . $urlin . "';
            </script>";
        die();
    }
    $industry_id = mysql_insert_id();
} else {
    $row = mysql_fetch_assoc($result);
    $industry_id = $row['id'];
}

$sql = sprintf("SELECT name FROM job_categories WHERE name='%s'", $name);
$result = Db::query($sql);

if (mysql_num_rows($result) <= 0) {
    $casql = sprintf("INSERT INTO job_categories SET name='%s'", $name);
    $caresult = Db::query($casql);
    if (!$caresult) {
        $_SESSION['message'] = "Failed to add Industry";
        $_SESSION['type'] = "danger";
        echo "<script type='text/javascript'>
            location.href = '" . $urlin . "';
            </script>";
        die();
    }
    $category_id = mysql_insert_id();
} else {
    $row = mysql_fetch_assoc($result);
    $category_id = $row['id'];
}

$sql = sprintf("SELECT * FROM industry_category WHERE industry_id='%s',category_id='%s'", $industry_id, $category_id);
$result = Db::query($sql);

if (mysql_num_rows($result) <= 0) {
    $masql = sprintf("INSERT INTO industry_category(industry_id, category_id) VALUES (%d,%d)",$industry_id,$category_id);
    $maresult = Db::query($masql);
    if (!$iaresult) {
        $_SESSION['message'] = "Failed to Map industry and Category";
        $_SESSION['type'] = "danger";
        echo "<script type='text/javascript'>
            location.href = '" . $urlin . "';
            </script>";
        die();
    }
}

$_SESSION['message'] = "Added Industry Succesfully";
$_SESSION['type'] = "success";
echo "<script type='text/javascript'>
            location.href = '" . $urlin . "';
            </script>";
die();



