<?php

if ($_GET) {
    include 'db.php';
    $id = $_GET['id'];

    $sql = sprintf("DELETE FROM alerts WHERE id=%d", $id);
    $resultsql = Db::query($sql);

    if ($resultsql) {
        echo '<script> window.location.href="alerts.php?status=0"; </script>';
    } else {
        echo '<script> window.location.href="alerts.php?status=1"; </script>';
    }
}
