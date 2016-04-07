<?php
require_once("db.php");
session_start();
$urlin="itljobs-changepassword.php?id=faq";
if(!empty($_SESSION['reclog'])){
    $id = trim($_SESSION['reclog']);
}else if(!empty($_SESSION['log'])){
    $id = trim($_SESSION['log']);
}

$opassword= trim($_POST['opassword']); 
if($opassword == ''){
    $_SESSION['addsucc']=2;
    echo "<script type='text/javascript'>
location.href = '" . $urlin . "';
</script>";
}
//$oldpass=$_POST['txtpass'];
$cpassword = trim($_POST['cpassword']);
$npassword = trim($_POST['npassword']);
$newpass = md5($npassword);

  $q = "SELECT password FROM users where id = '$id'";

$result=Db::query($q);
$row=mysql_fetch_array($result);

if(md5($row['password'])==$opassword)
{
			$query="UPDATE users SET password = '$newpass' WHERE id = '$id' AND role_id = '4'";  
			Db::query($query);
			json_encode(array("result"=>true));
$_SESSION['addsucc']=1;			
}
else 

	{
	$_SESSION['addsucc']=3;
	}
        
echo "<script type='text/javascript'>
location.href = '" . $urlin . "';
</script>";?>