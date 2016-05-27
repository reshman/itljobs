<?php

session_start();

//include("logincheck.php");

require_once("db.php");

$urlin = "list_jobs.php";

$delId = isset($_GET['delid']) ? $_GET['delid'] : 0;

if ($delId) {
    $sqlDelFile = sprintf("UPDATE `jobs` SET del_status='%s' WHERE id = '%s'", 1, $delId);
    $resultDelFile = Db::query($sqlDelFile);
}

if ($sqlDelFile) {
    $_SESSION['delsucc'] = 1;
} else {
    $_SESSION['delsucc'] = 2;
}

echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";
?>

