<?php
session_start();
require("db.php");
$email    = $_GET['email'];
$password = md5($_GET['password']);

$query    = sprintf("SELECT * FROM `users` WHERE email='%s' AND password='%s' AND role_id='%s'",$email,$password,3);
$result   = Db::query($query);

if (mysql_num_rows($result) > 0) {
    $userRow = mysql_fetch_array($result);
    $_SESSION['logged-in']   = true;
    $_SESSION['log']         = $userRow['id'];
    $_SESSION['logged_name'] = ucwords($userRow['name']);
    die('SUCCESS');
} else {
    die("Email or Password is Incorrect");
}
