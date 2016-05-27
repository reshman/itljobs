<?php

session_start();

//include("logincheck.php");

require_once("db.php");

$urlin = "list_interviews.php";

$delId = isset($_GET['delid']) ? $_GET['delid'] : 0;

if ($delId) {
    $sqlDelFile = sprintf("UPDATE `interviews` SET del_status='%s' WHERE id = '%s'", 1, $delId);
    $resultDelFile = Db::query($sqlDelFile);
}

if ($sqlDelFile) {
    $_SESSION['delsucc'] = TRUE;
} else {
    $_SESSION['delsucc'] = FALSE;
}

echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";
?>

