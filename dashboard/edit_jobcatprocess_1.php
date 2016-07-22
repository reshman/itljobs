<?php

require_once("db.php");
session_start();
//posted values
//if(isset($_POST['submit'])){
   $id           = trim($_POST['id']);
   $title        = trim($_POST['title']);
   
   $sql = sprintf("UPDATE `job_categories` SET name='%s' WHERE id='%s' ",$title,$id); 
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
 $urlin= "list_jobcategory.php";
echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";
?>