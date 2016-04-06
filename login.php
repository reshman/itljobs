<?php

session_start();
// Create connection
require_once("db.php");
// Check connection
$email = $_POST['email'];
$password = md5($_POST['password']);
$jobid = $_POST['jid'];

$query = sprintf("SELECT * FROM `users` WHERE email='%s' AND password='%s' AND role_id='%s' ",$email,$password,3);
$result = Db::query($query);
$name   = "";
while ($row = mysql_fetch_array($result)) {
    $id   = $row['id'];
    $pass = $row['password'];
    $name = $row['name'];
    $val=  strcmp($pass, $password);
}
if($val==0){
$countrow = mysql_num_rows($result);
}
$urlinlogin="/";
$urlinnotlogin="itljobs-login.php";
if ($countrow >0){
$_SESSION['logged-in'] = $name;
$_SESSION['log'] = $id;
$_SESSION['logged_name'] = ucwords($name);
$userid = $_SESSION['log'];
date_default_timezone_set('Asia/Kolkata');
$today_date = date('Y-m-d');
if(!empty($jobid)){
     
     $qry = sprintf("INSERT INTO `jobs_applied` (user_id,job_id,created_date) VALUES('%s','%s','%s')",$userid,$jobid,$today_date);
     $res = Db::query($qry);
}
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