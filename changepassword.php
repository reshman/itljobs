<?php
require_once("db.php");
session_start();
$urlin="myaccount.php";
$email = $_POST['email']; 
//$oldpass=$_POST['txtpass'];
$password = $_POST['password']; 
$newpass=  MD5($password);
$cpassword = $_POST['cpassword']; 

$q = sprintf("SELECT email from users  WHERE email='%s' AND role_id='%s'",$email,'3');  

$result=Db::query($q);
$row=mysql_fetch_array($result);

if($row['email']==$email)
{
		        $query="UPDATE  users SET password = '$newpass' WHERE email = '$email'"; 
			Db::query($query);
			json_encode(array("result"=>true));
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