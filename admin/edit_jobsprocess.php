<?php

require_once("db.php");
session_start();
//posted values
//if(isset($_POST['submit'])){
   $id                = trim($_POST['id']);
   $title             = trim($_POST['title']);
   $company           = trim($_POST['company']);
   $job_description   = trim($_POST['job_description']);
   $job_type          = trim($_POST['job_type']);
   $experience        = trim($_POST['experience']);
   $location          = trim($_POST['location']);
   $create_date       = trim($_POST['create_date']);
   $create_date       = date("Y-m-d", strtotime($create_date));
   $closing_date      = trim($_POST['closing_date']);
   $closing_date      = date("Y-m-d", strtotime($closing_date));
   $job_cat           = trim($_POST['job_cat']);
   $user_id           = $_SESSION['id'];
   
   $sql = sprintf("UPDATE `jobs` SET job_listing='%s',company_name='%s',job_description='%s',experience='%s',job_type='%s',job_location='%s',created_date='%s',closing_date='%s',job_category_id='%s',user_id='%s' WHERE id='%s' ",$title,$company,$job_description,$experience,$job_type,$location,$create_date,$closing_date,$job_cat,$user_id,$id);
   $result = Db::query($sql);
    
    if($result)
        {
         $_SESSION['addsucc']=1;
        }
    else 
	{
	$_SESSION['addsucc']=2;
		
	}
//}
 $urlin= "list_jobs.php";
echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";
?>