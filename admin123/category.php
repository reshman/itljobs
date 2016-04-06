<?php
require('db.php');

$jc = $_POST['jbid']; 
$type = $_POST['rtype'];
//            $query1 = sprintf("SELECT id,created_date FROM notification WHERE created_date>='%s' AND type_id='%s' AND status='%s'",$log1,4,0);
             $query = sprintf("UPDATE notification SET status='%s' WHERE created_date>='%s' AND type_id='%s'",1,$js,$type);
            $result = Db::query($query);
            $countrow = mysql_num_rows($result);
            ?>
               <!--<span class="label label-primary pull-right"><?php //echo $countrow;?></span>-->
            <?php

        ?>
