<?php
if ($_POST) {
    include 'db.php';
    $id = $_POST['id'];
//    $id = 162;
    $response = array();
    $keys = array();
    $object_keys = array();
    $query = sprintf("SELECT key_array FROM jobs WHERE id=%d",$id);
    $result = Db::query($query);
    $row = mysql_fetch_assoc($result);
    $keys = json_decode($row['key_array']);
    foreach($keys as $each_key){
        array_push($object_keys,(object) ["id" => $each_key, "text" => $each_key]);
    }
    $response[0]=$object_keys;    
    $response[1] = $keys;
    echo json_encode($response);
}