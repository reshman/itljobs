<?php
session_start();
// Create connection
require_once("db.php");

// Check connection
$email = trim($_POST['loginemail']);
$password = md5(trim($_POST['loginpassword']));

$query = sprintf("SELECT * FROM `users` WHERE email='%s' AND password='%s' AND role_id='%s' AND active='%s' AND del_status='%s'",$email,$password,4,1,0);
$result = Db::query($query);

while ($row = mysql_fetch_array($result)) {
    $id=$row['id'];
    $pass=$row['password'];
    $val=  strcmp($pass, $password);
    $name = $row['name'];
}
if($val==0){
$countrow = mysql_num_rows($result);
}
$urlinlogin="recruiter.php";
$urlinnotlogin="employer_enquiry.php#log";
if ($countrow >0){
$_SESSION['logged-in'] = true;
$_SESSION['reclog'] = $id;
$_SESSION['logged_name']= $name;
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

