<?php 

//session_start();

//include("logincheck.php");

require_once("db.php");

$urlin="list_admin.php";

$delId = isset($_GET['delid']) ? $_GET['delid'] : 0;



if ($delId) {
    $sqlDelCon   = sprintf("UPDATE `users` SET del_status='%s' WHERE id = '%s'", 1,$delId);
    $resultDelCon    = Db::query($sqlDelCon);
}


echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";?>

