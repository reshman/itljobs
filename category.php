<?php
require('db.php');
?>

<select name="sub_category" id="sub_category" class="select2 companyname4">
    <option disabled="" selected="">JOB APPLYING FOR</option>
    <?php
//            $query = sprintf("SELECT job_listing FROM `jobs` where job_category_id='%s' AND active='%s' AND del_status='%s'",$jc,1,0);
    $query = sprintf("SELECT ind.industry_name as industry_name FROM industries ind");
    $result = Db::query($query);
    while ($rows = mysql_fetch_array($result)) {
        if($rows['industry_name']!=''){
        ?>
        <option <?php echo ($rows['industry_name'] === $sc) ? 'selected = selected' : ''; ?> value="<?php echo $rows['industry_name']; ?>"><?php echo $rows['industry_name']; ?></option>
        <?php
    }}
    ?>

</select>     
