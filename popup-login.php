<?php
session_start();
require_once("db.php");
$email    = $_GET['email'];
$password = md5($_GET['password']);

$query    = sprintf("SELECT * FROM `users` WHERE email='%s' AND password='%s' AND role_id='%s' ",$email,$password,3);
$result   = Db::query($query);

if (mysql_num_rows($result) > 0) {
    $userRow = mysql_fetch_assoc($result);
    $_SESSION['logged-in']   = $userRow['name'];
    $_SESSION['log']         = $userRow['id'];
    $_SESSION['logged_name'] = ucwords($userRow['name']);
    die('SUCCESS');
} else {
    die('Username or Password is incorrect!');
}
