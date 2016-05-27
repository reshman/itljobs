<?php

session_start();

//include("logincheck.php");

require_once("db.php");

$urlin = "list_appliedjobs.php";

$delId = isset($_GET['delid']) ? $_GET['delid'] : 0;

if ($delId) {
    $sqlDelFile = sprintf("DELETE FROM jobs_applied WHERE id = '%s'", $delId);
    $resultDelFile = Db::query($sqlDelFile);
}

if ($resultDelFile) {
    $_SESSION['delsucc'] = TRUE;
} else {
    $_SESSION['delsucc'] = FALSE;
}

echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";
?>

