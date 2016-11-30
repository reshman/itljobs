<?php
session_start();
include_once 'logincheck.php';
include 'db.php';
$id = $_GET['id'];

$query = sprintf("DELETE FROM company WHERE id=%d",$id);
$result = Db::query($query);
if($result){
    $_SESSION['message'] = 'Company deleted succesfully';
    $_SESSION['type'] = 'success';
}else{
    $_SESSION['message'] = 'Company delete failed';
    $_SESSION['type'] = 'danger';
}
header('location:list_company.php');