<?php
require('db.php');

$jc=$_POST['jobcat'];
$sc = isset($_POST['subcat']) ? $_POST['subcat'] : '';
?>
        
            <select name="sub_category">
                <option disabled="" selected="">INDUSTRY</option>
            <?php
            $query = sprintf("SELECT job_listing FROM `jobs` where job_category_id='%s' AND active='%s' AND del_status='%s'",$jc,1,0);
            $result = Db::query($query);
            while ($rows = mysql_fetch_array($result)) {
            ?>
                <option <?php echo ($rows['job_listing'] == $sc)? 'selected == selected' : '';?> value="<?php echo $rows['job_listing'];?>"><?php echo $rows['job_listing'];?></option>
            <?php
        }
        ?>
        
        </select>     
