<?php

session_start();
include 'db.php';
// if the user is logged in, unset the session




if (isset($_SESSION['logged-in'])) {

date_default_timezone_set('Asia/Calcutta'); 
$date         = date("Y-m-d h:i:s"); 
      
$sql         = sprintf("INSERT INTO log SET role_id = '%s', user_id = '%s', datetime = '%s'",'1', '2', $date); 
$resultsql    = Db::query($sql);
unset($_SESSION['logged-in']);

}
session_destroy();
// now that the user is logged out,

// go to login page

header('location: index.php');

?>