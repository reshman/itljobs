<?php

session_start();
include 'db.php';
// if the user is logged in, unset the session


if (isset($_SESSION['logged-in'])) {

date_default_timezone_set('Asia/Calcutta'); 
$date         = date("Y-m-d h:i:s"); 
$role_id      = $_SESSION['role']; 
$user_id      = $_SESSION['id'];

$sql          = sprintf("INSERT INTO log SET role_id = '%s', user_id = '%s', datetime = '%s'",$role_id, $user_id, $date); 
$resultsql    = Db::query($sql);
unset($_SESSION['logged-in']);

}
session_destroy();
// now that the user is logged out,

// go to login page
if($role_id==1){
    header('location: ../itlsadmin/index.php');
}else{
    header('location: ../itladmin/index.php');
}

?>