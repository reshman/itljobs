<?php 

session_start();

//include("logincheck.php");

require_once("db.php");

$urlin="list_appliedinterviews.php";

$delId = isset($_GET['delid']) ? $_GET['delid'] : 0;

if ($delId) {
    $sqlDelFile       = sprintf("DELETE FROM interviews_applied WHERE id = '%s'",$delId);
    $resultDelFile    = Db::query($sqlDelFile);
	
}

if($resultDelFile){
    $_SESSION['delsucc'] = 1;
}else{
    $_SESSION['delsucc'] = 2;
}

echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";?>

