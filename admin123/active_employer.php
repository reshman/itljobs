<?php
require('db.php');
$id = $_POST['id'];
$status = $_POST['status'];
$query= sprintf("UPDATE `users` SET active='%s' WHERE id='%s'",$status,$id);
$q=Db::query($query);
echo $id.' '.$status;
?>
