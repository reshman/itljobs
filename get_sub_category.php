<?php

if ($_POST) {
    require 'db.php';
    $category_id = $_POST['category'];
    $query = sprintf("SELECT job_listing FROM `jobs` WHERE job_category_id='%s' AND active='%s' AND del_status='%s' ORDER BY job_listing",$category_id,1,0);
    $result = Db::query($query);
    if(mysql_num_rows($result)>0){
    echo '<option value=-1>Select a Sub-Category</option>';
    while ($row = mysql_fetch_array($result)) {
        echo '<option value="' . $row['job_listing'] . '">' . $row['job_listing'] . '</option>';
    }
    }
    else{
        echo '<option value=-1>No Sub-Categories Available</option>';
    }
}

