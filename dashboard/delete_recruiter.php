<?php

//session_start();
//include("logincheck.php");

require_once("db.php");

$urlin = "list_employers.php";

$delId = isset($_GET['delid']) ? $_GET['delid'] : 0;

if ($delId) {
    $sqlDelFile = sprintf("UPDATE `users` SET del_status='%s' WHERE id = '%s'", 1, $delId);
    $result = Db::query($sqlDelFile);

    //delete jobs that posted by this admin
    $sqlJobs = sprintf("UPDATE `jobs` SET del_status='%s' WHERE user_id='%s'", 1, $delId);
    $result = Db::query($sqlJobs);

    //delete interviews that scheluded by this admin
    $sqlInt = sprintf("UPDATE `interviews` SET del_status='%s' WHERE user_id='%s'", 1, $delId);
    $result = Db::query($sqlInt);
}

if ($result) {
    $_SESSION['delsucc'] = TRUE;
} else {
    $_SESSION['delsucc'] = FALSE;
}

echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";
?>

