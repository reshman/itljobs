<?php
require('db.php');

$jc=$_POST['jobcat']; 

// $query="SELECT * FROM jobs where job_category_id=$jc"; 
//$result=Db::query($query); 
// $countrow=mysql_num_rows($result); 
//
//if($countrow>0){
//while ($row=mysql_fetch_array($result)){
?>
<!--<div class="categories-item-header column5">
<div class="category-item-image"><a href="#" style="background-image: url(admin/<?php // echo $row[icon];?>)"></a></div>
<div class="category-item-name"><a href="viewdetails.php?id=<?php // echo $row['id']; ?>" id="<?php // echo $rowfic[id]?>" class="adin" ><?php // echo $row[title];?></a></div>
</div>-->

<?php 
//} }
?>
 <!--<div class="col-md-4">-->
        
            <select name="sub_category">
                <option disabled="" selected="">INDUSTRY</option>
            <?php
            $query = sprintf("SELECT job_listing FROM `jobs` where job_category_id='%s' AND active='%s' AND del_status='%s'",$jc,1,0);
            $result = Db::query($query);
            while ($rows = mysql_fetch_array($result)) {
            ?>
                <option value="<?php echo $rows['job_listing'];?>"><?php echo $rows['job_listing'];?></option>
            <?php
        }
        ?>
        
        </select>     
        <!--</div>-->  
<?php
//else{
//    echo "<h2>No category found</h2>";
//}


?>