
<?php

//echo md5('superadmin');
session_start();
// Create connection
require_once("db.php");
// Check connection
$email = $_POST['email'];
$password = md5($_POST['password']);

$query = sprintf("SELECT * FROM `users` WHERE email='%s' AND password='%s' AND role_id='%s'", $email, $password, 1);
$result = Db::query($query);

while ($row = mysql_fetch_array($result)) {
    $id = $row['id'];
    $pass = $row['password'];
    $role = $row['role_id'];
    $val = strcmp($pass, $password);
}
if ($val == 0) {
    $countrow = mysql_num_rows($result);
}
$urlinlogin = "../dashboard/home.php";
$urlinnotlogin = "index.php";
if ($countrow > 0) {
    $_SESSION['logged-in'] = true;
    $_SESSION['id'] = $id;
    $_SESSION['role'] = $role;
    echo "<script type='text/javascript'>
location.href = '" . $urlinlogin . "';
</script>";
} else {
    $_SESSION['in'] = 1;
    echo "<script type='text/javascript'>
location.href = '" . $urlinnotlogin . "';
</script>";
}



