<?php

require_once("db.php");
session_start();
//posted values
//if(isset($_POST['submit'])){
   $title        = trim($_POST['title']);
   
   $sql = sprintf("INSERT INTO `job_categories`(name) VALUES('%s')",$title);
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
 $urlin= "add_jobcategory.php";
echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";
?>