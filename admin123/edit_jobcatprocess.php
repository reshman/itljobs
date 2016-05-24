<?php

require_once("db.php");
session_start();
//posted values
//if(isset($_POST['submit'])){
   $id           = trim($_POST['id']);
   $title        = trim($_POST['title']);
   $industry     = $_POST['industry'];
   
   $sql = sprintf("UPDATE `job_categories` SET name='%s' WHERE id='%s' ",$title,$id); 
   $result = Db::query($sql);
   
     //Adding new industry if not already present
        foreach ($industry as $each_industry) {
            if (!is_numeric($each_industry)) {

                $query = sprintf("SELECT * FROM industries WHERE industry_name='%s'", $each_industry);
                $result = Db::query($query);
                if (mysql_num_rows($result) > 0) {
                    $row = mysql_fetch_assoc($result);
                    $industry_id = $row['id'];
                } else {
                    $query = sprintf("INSERT INTO industries SET industry_name='%s'", $each_industry);
                    Db::query($query);
                    $industry_id = mysql_insert_id();
                }
            } else {
                $industry_id = $each_industry;
            }
            //Updating industry_category Table
            $query = sprintf("INSERT INTO industry_category SET industry_id=%d,category_id=%d", $industry_id, $catg_id);
            $resultInd = Db::query($query);
        }
        
    
    if($result)
        {
         $_SESSION['addsucc']=1;
        }
    else 
	{
	$_SESSION['addsucc']=2;
		
	}
//}
 $urlin= "list_jobcategory.php";
echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";
?>