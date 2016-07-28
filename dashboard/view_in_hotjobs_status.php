<?php

//echo "hi"; exit;
require('db.php');


$id = $_REQUEST['id'];
//$active = $_REQUEST['status'];
$query = sprintf("SELECT vih FROM `interviews` WHERE id='%s'", $id);
$result = Db::query($query);
$row = mysql_fetch_assoc($result);
$active = $row['vih'];
if ($active == '0') {
    $query = sprintf("UPDATE `interviews` SET vih='%s' WHERE id='%s'", '1', $id);
    $q = Db::query($query);
} else {
    $query = sprintf("UPDATE `interviews` SET vih='%s' WHERE id='%s'", '0', $id);
    $q = Db::query($query);
}
//echo "<script type='text/javascript'>
//	location.href = '" . $urlin . "';
//	</script>";
?>