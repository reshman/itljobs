<?php
//echo "hi"; exit;
require('db.php');


$id = $_REQUEST['id'];
$order = $_REQUEST['order'];
// $query= sprintf("SELECT active FROM `jobs` WHERE id='%s'",$id); 
//                $result = Db::query($query);
//                $row = mysql_fetch_assoc($result);
//                $active=$row['active'];
//               if($active=='0'){
//                    $query= sprintf("UPDATE `jobs` SET active='%s' WHERE id='%s'",'1',$id);
//                    $q=Db::query($query);  
//                }
//      else{
        $query= sprintf("UPDATE `jobs` SET job_order='%s' WHERE id='%s'",$order,$id);
        $q=Db::query($query);
     
//      }
?>
