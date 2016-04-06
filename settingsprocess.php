<?php
require_once("db.php");
session_start();
$urlin="itljobs-changepassword.php?id=faq";
$recid = $_SESSION['reclog'];
$opassword= $_POST['opassword']; 
//$oldpass=$_POST['txtpass'];
$cpassword = $_POST['cpassword'];
$npassword = $_POST['npassword'];
$newpass = md5($npassword);

  $q = "SELECT password FROM users where id = '$recid' AND role_id = '4'";

$result=Db::query($q);
$row=mysql_fetch_array($result);

if(md5($row['password'])==$opassword)
{
			$query="UPDATE users SET password = '$newpass' WHERE id = '$recid' AND role_id = '4'";  
			Db::query($query);
			json_encode(array("result"=>true));
$_SESSION[invalid]=1;			
}
else 

	{
	$_SESSION['addsucc']=3;
	}
//	header("location:settings.php");
        if($query)
	{
	$_SESSION['addsucc']=1;
		
	}
	else 
	{
	$_SESSION['addsucc']=2;
		
	}
        
echo "<script type='text/javascript'>
location.href = '" . $urlin . "';
</script>";?>
?>