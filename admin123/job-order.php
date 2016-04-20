<?php
//echo "hi"; exit;
require('db.php');


$id = $_REQUEST['id'];
$order = $_REQUEST['order'];

$qry = sprintf("SELECT id FROM jobs WHERE job_order = '%s' AND job_order != '%s' AND del_status = '%s'",$order,0,0);
$res = Db::query($qry);
    if(mysql_num_rows($res) > 0){
        die('ALREADY EXISTED JOB ORDER');
    }else{
        $query= sprintf("UPDATE `jobs` SET job_order='%s' WHERE id='%s'",$order,$id);
        $q=Db::query($query);
        die('SUCCESS');
    }

?>
