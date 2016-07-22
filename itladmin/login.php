<?php
//echo md5('superadmin');
session_start();
// Create connection
require_once("db.php");
// Check connection
$email    = (trim($_POST['email']));
$pass     =(trim($_POST['password']));
$password = MD5($pass);

$query = sprintf("SELECT * FROM `users` WHERE email='%s' AND password='%s' AND role_id='%s'AND active='%s' AND del_status='%s'",$email,$password,2,1,0);
$result = Db::query($query);

    $row = mysql_fetch_assoc($result);
    $pass=$row['password'];
    $id=$row['id'];
    $role = $row['role_id'];
    $val=  strcmp($pass, $password);

if($val==0){
$countrow = mysql_num_rows($result);
}
$urlinlogin="../dashboard/home.php";
$urlinnotlogin="index.php";
if ($countrow >0){
$_SESSION['id']=$id; 
$_SESSION['role'] = $role;
$_SESSION['logged-in'] = true;
echo "<script type='text/javascript'>
location.href = '" . $urlinlogin . "';
</script>";
}
else{
$_SESSION['in']=1;
echo "<script type='text/javascript'>
location.href = '" . $urlinnotlogin . "';
</script>";
}

?>



