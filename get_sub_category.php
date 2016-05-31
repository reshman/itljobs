<?php

if ($_POST) {
    require 'db.php';
    $category_id = $_POST['category'];
//    $query = sprintf("SELECT job_listing FROM `jobs` WHERE job_category_id='%s' AND active='%s' AND del_status='%s' ORDER BY job_listing",$category_id,1,0);
    $query = sprintf("SELECT ind.industry_name FROM industries ind JOIN industry_category ic ON ind.id = ic.industry_id WHERE ic.category_id = '%s' ORDER BY industry_name",$category_id);
    $result = Db::query($query);
    if(mysql_num_rows($result)>0){
    echo '<option value=-1>Select Industry</option>';
    while ($row = mysql_fetch_array($result)) {
        echo '<option value="' . $row['industry_name'] . '">' . $row['industry_name'] . '</option>';
    }
    }
    else{
        echo '<option value=-1>No Industry Available</option>';
    }
}

