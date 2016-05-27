<?php 

session_start();

//include("logincheck.php");

require_once("db.php");

$urlin="list_jobcategory.php";

$delId = isset($_GET['delid']) ? $_GET['delid'] : 0;

if ($delId) {
    $sqlDelFile       = sprintf("DELETE  FROM `job_categories` WHERE id = '%s'", $delId);
    $resultDelFile    = Db::query($sqlDelFile);
    
    //Deleting existing records of job_category from industry_category table
    $query = sprintf("DELETE FROM industry_category WHERE category_id=%d", $delId);
    $res = Db::query($query);
}

if($res){
     $_SESSION['delsucc']=1;
}else{
     $_SESSION['delsucc']=2;
}

echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";?>

