<?php
require('db.php');
$id = $_POST['id'];
$status = $_POST['status'];
$query= sprintf("UPDATE `employers` SET search_allowed='%s' WHERE user_id='%s'",$status,$id);
$q=Db::query($query);
echo $id.' '.$status;
?>