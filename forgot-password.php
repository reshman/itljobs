<?php

require_once("db.php");
session_start();
//file_put_contents("request.txt", print_r($_POST, true));
$urlin = "itljobs-login.php";

$femail = $_POST['femail'];
//echo $femail; 

$sql = sprintf("SELECT * FROM `users` WHERE email='%s' AND del_status = '%s' limit 1",$femail,0);
$result = Db::query($sql);
//check email exist or not
if (mysql_num_rows($result) > 0) {

    //generate random key
function generateRandomString($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$key = generateRandomString();
$keymd = md5($key);
//end random key generation
$query =  sprintf("Update `users` set password='%s' where email='%s' AND del_status='%s' limit 1",$keymd,$femail,0);
Db::query($query);
//send key

    $row = mysql_fetch_assoc($result);
    $name = $row['name']; 
  //send activation mail
    $msg="Your password : ";
    $txt = "Dear  " . $name .", <br/>" . $msg;
    $email_template_forgot = file_get_contents("email_template_forgot.html");
    $email_template_forgot = str_replace("{{content}}", $txt, $email_template_forgot);
    $email_template_forgot  = str_replace("{{key}}", $key, $email_template_forgot );
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers.= "From:itljobs.com" . "\r\n";
    $to = $femail;
    $subject = "ITLJobs Retrieve Password";
    //print_r($email_template_forgot);
    mail($to, $subject, $email_template_forgot, $headers);
    $_SESSION['passsucc']=1;
    die('1');
} else {
	$_SESSION['passsucc']=2;
    die('2');
}

?>