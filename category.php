<?php
require('db.php');

$jc = $_POST['jobcat'];
$sc = isset($_POST['subcat']) ? $_POST['subcat'] : '';
?>

<select name="sub_category" id="sub_category" class="select2">
    <option disabled="" selected="">INDUSTRY</option>
    <?php
//            $query = sprintf("SELECT job_listing FROM `jobs` where job_category_id='%s' AND active='%s' AND del_status='%s'",$jc,1,0);
    $query = sprintf("SELECT ind.industry_name as industry_name FROM industries ind JOIN industry_category ic ON ind.id = ic.industry_id WHERE ic.category_id = '$jc'");
    $result = Db::query($query);
    while ($rows = mysql_fetch_array($result)) {
        ?>
        <option <?php echo ($rows['industry_name'] == $sc) ? 'selected == selected' : ''; ?> value="<?php echo $rows['industry_name']; ?>"><?php echo $rows['industry_name']; ?></option>
        <?php
    }
    ?>

</select>     
