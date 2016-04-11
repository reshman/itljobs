<?php
require_once("db.php");
session_start();
$urlin="myaccount.php";
$opassword = $_POST['opassword'];
$old = md5($opassword);
$npassword = $_POST['npassword']; 
$newpass=  md5($npassword);
$cpassword = $_POST['cpassword']; 

$q = sprintf("SELECT * from users  WHERE password='%s' AND role_id='%s'",$old,'3');  

$result=Db::query($q);
$row=mysql_fetch_array($result);
$id = $row['id'];
if(mysql_num_rows($result)==1)
{
		        $query=sprintf("UPDATE  users SET password = '$newpass' WHERE id = '%s'",$id); 
			Db::query($query);
                        $_SESSION[invalid]=1;			
}
else 
	{
		
		$_SESSION[invalid]=2;
	}

        
echo "<script type='text/javascript'>
location.href = '" . $urlin . "';
</script>";?>
?>