<?php

require_once("db.php");
session_start();
//posted values
//if(isset($_POST['submit'])){
   $title        = strtoupper(trim($_POST['title']));
   $industry     = $_POST['industry'];
   
      $tsql = sprintf("SELECT * FROM job_categories WHERE name='%s'",$title);
      $tresult = Db::query($tsql);
      if (mysql_num_rows($tresult) > 0) {
            $trow = mysql_fetch_assoc($tresult);
            $catg_id = $trow['id'];
      } else {
            $sql = sprintf("INSERT INTO `job_categories`(name) VALUES('%s')",$title);
            $result = Db::query($sql);
            $catg_id = mysql_insert_id();
      }   
           //Adding new industry if not already present
        foreach ($industry as $each_industry) {
            
                $each_industry = strtoupper($each_industry);

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
 $urlin= "add_jobcategory.php";
echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";
?>