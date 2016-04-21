<?php
//echo "hi"; exit;
require('db.php');


$id = $_REQUEST['id'];
$order = $_REQUEST['order'];

date_default_timezone_set('Asia/Kolkata');
$today_date = date('Y-m-d');

$qry = sprintf("SELECT id FROM jobs WHERE job_order = '%s' AND job_order != '%s' AND del_status = '%s' AND closing_date>='%s'",$order,0,0,$today_date);
$res = Db::query($qry);
    if(mysql_num_rows($res) > 0){
        die('ALREADY EXISTED JOB ORDER');
    }else{
        $query= sprintf("UPDATE `jobs` SET job_order='%s' WHERE id='%s'",$order,$id);
        $q=Db::query($query);
        die('SUCCESS');
    }

?>
