<?php

if ($_GET) {
    include 'db.php';
    $id = $_GET['id'];
    session_start();
    
    $sql = sprintf("DELETE FROM alerts WHERE id=%d", $id);
    $resultsql = Db::query($sql);

    if ($resultsql) {
        $_SESSION['delsucc'] = TRUE;
        echo '<script> window.location.href="alerts.php"; </script>';
    } else {
        $_SESSION['delsucc'] = FALSE;
        echo '<script> window.location.href="alerts.php"; </script>';
    }
}
