<?php

//echo "hi"; exit;
require('db.php');


$id = $_REQUEST['id'];
$order = $_REQUEST['order'];

date_default_timezone_set('Asia/Kolkata');
$today_date = date('Y-m-d');
$query = sprintf("UPDATE `jobs` SET job_order='%s' WHERE id='%s'", $order, $id);
$q = Db::query($query);
if ($q) {
    die('SUCCESS');
} else {
    die('FAILED');
}
?>
