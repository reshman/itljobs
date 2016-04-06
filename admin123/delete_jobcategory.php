<?php 

//session_start();

//include("logincheck.php");

require_once("db.php");

$urlin="list_jobcategory.php";

$delId = isset($_GET['delid']) ? $_GET['delid'] : 0;

if ($delId) {
    $sqlDelFile       = sprintf("DELETE  FROM `job_categories` WHERE id = '%s'", $delId);
    $resultDelFile    = Db::query($sqlDelFile);
	
}

echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";?>

