<?php

require_once("db.php");
session_start();
//posted values
//if(isset($_POST['submit'])){
   $title             = trim($_POST['title']);
   $company           = trim($_POST['company']);
   $job_description   = trim($_POST['job_description']);
   $job_type          = trim($_POST['job_type']);
   $experience        = trim($_POST['experience']);
   $location          = trim($_POST['location']);
   $create_date1      = trim($_POST['create_date']);
   $create_date       = explode('/', $create_date1);
   $create_date       = array_reverse($create_date);
   $create_date       = implode('-',$create_date);
   $closing_date1     = trim($_POST['closing_date']);
   $close_date        = explode('/', $closing_date1);
   $closing_date      = array_reverse($close_date);
   $closing_date      = implode('-', $closing_date);

   $job_cat           = trim($_POST['job_cat']);
   $user_id           = $_SESSION['id'];
   
   date_default_timezone_set('Asia/Calcutta'); 
   $date         = date("Y-m-d h:i:s");
   
   function generateRandomString($length = 8) {
    $characters = 'ITL0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
    }
    $ref_id = generateRandomString();

   $sql = sprintf("INSERT INTO `jobs`(job_listing,job_description,experience,job_location,created_date,closing_date,company_name,job_type,job_category_id,user_id,date,ref_id) VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",$title,$job_description,$experience,$location,$create_date,$closing_date,$company,$job_type,$job_cat,$user_id,$date,$ref_id);
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


 $urlin= "add_jobs.php";
echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";
?>