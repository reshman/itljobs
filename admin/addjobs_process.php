<?php

require_once("db.php");
session_start();
//posted values
//if(isset($_POST['submit'])){
   $title             = trim($_POST['title']);
   $job_description   = trim($_POST['job_description']);
   $experience        = trim($_POST['experience']);
   $location          = trim($_POST['location']);
   $create_date1      = trim($_POST['create_date']);
   $create_date       = date("Y-m-d", strtotime($create_date1));
   $closing_date1     = trim($_POST['closing_date']);
   $closing_date      = date("Y-m-d", strtotime($closing_date1));
   $job_cat           = trim($_POST['job_cat']);
   $user_id           = $_SESSION['id'];
   
   date_default_timezone_set('Asia/Calcutta'); 
   $date         = date("Y-m-d h:i:s"); 
   //echo $user_id; die;

   
   $sql = sprintf("INSERT INTO `jobs`(job_listing,job_description,experience,job_location,created_date,closing_date,job_category_id,user_id,date) VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s')",$title,$job_description,$experience,$location,$create_date,$closing_date,$job_cat,$user_id,$date);
   $result = Db::query($sql);
   
   $inid = mysql_insert_id();
   //insert jon seeker to notification table
       $sqlqry = sprintf("INSERT INTO notification(ref_id,type_id,created_date) VALUES('%s','%s','%s')",$inid,1,$date);
       $resultqry = Db::query($sqlqry);
    
    if($result)
        {
         $_SESSION['addsucc']=1;
        }
    else 
	{
	$_SESSION['addsucc']=2;
		
	}

//}
 $urlin= "add_jobs.php";
echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";
?>