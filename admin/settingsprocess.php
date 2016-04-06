<?php
require_once("db.php");
session_start();
$urlin="settings.php";
$current = $_POST['txtpass']; 
$id= $_SESSION['id'];
//$oldpass=$_POST['txtpass'];
$newpass = $_POST['txtpass1'];
$encnewpass = MD5($newpass);
$confirmpass = $_POST['txtpass2'];

$q = "SELECT password as pass FROM users where id='$id' AND role_id='2'"; 

$result=Db::query($q);
$row=mysql_fetch_array($result);

if($row['pass']==MD5($current))
{
       $query="UPDATE  users SET password = '$encnewpass' where id='$id' AND role_id='2'";
       Db::query($query);
       json_encode(array("result"=>true));
       $_SESSION[invalid]=1;			
}
else 
	{
		
		$_SESSION[invalid]=2;
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