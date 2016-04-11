<?php 

//session_start();

//include("logincheck.php");

require_once("db.php");

$urlin="list_resume.php";

$delId = isset($_GET['delid']) ? $_GET['delid'] : 0;

if ($delId) {
    $sqlDelFile       = sprintf("UPDATE `resume` SET del_status='%s' WHERE user_id = '%s'", 1,$delId);
    $resultDelFile    = Db::query($sqlDelFile);
	
    $sqlDel      = sprintf("UPDATE `users` SET del_status='%s' WHERE id = '%s'", 1,$delId);
    $resultDel   = Db::query($sqlDel);
}


echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";?>

