<?php

if ($_POST) {
    require 'db.php';
    $category_id = $_POST['category'];
    $query = sprintf("SELECT sub_category FROM resume WHERE job_category_id='%s' AND del_status='%s' ORDER BY sub_category", $category_id, '0');
    $result = Db::query($query);
    if(mysql_num_rows($result)>0){
    echo '<option value=-1>Select a Sub-Category</option>';
    while ($row = mysql_fetch_array($result)) {
        echo '<option value="' . $row['sub_category'] . '">' . $row['sub_category'] . '</option>';
    }
    }
    else{
        echo '<option value=-1>No Sub-Categories Available</option>';
    }
}

