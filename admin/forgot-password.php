<?php

require_once("db.php");
session_start();
//file_put_contents("request.txt", print_r($_POST, true));
$urlin = "index.php";

$femail = $_POST['femail'];
//echo $femail; 

 $sql = sprintf("SELECT email,name FROM users WHERE email='%s' AND role_id ='%s'",$femail,'2'); 

$result = Db::query($sql);
//while ($row = mysql_fetch_array($result)) {
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
mysql_query("Update users set password='$keymd' where email='$femail' AND role_id='2'");

//send key

    $row = mysql_fetch_assoc($result);
    $pass = $row['password']; 
    $username = $row['name']; 
  //send activation mail
    $msg="Your new password : ";
    $txt = "Dear  " . $username .", <br/>" . $msg;
    $passwd = $pass;
    $email_template_forgot = file_get_contents("email_template_forgot.html");
    $email_template_forgot = str_replace("{{content}}", $txt, $email_template_forgot);
    $email_template_forgot  = str_replace("{{key}}", $key, $email_template_forgot );
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers.= "From:itljobs.com" . "\r\n";
    $to = $femail;
    $subject = "ITL JOBS-Retrieve Password";

    mail($to, $subject, $email_template_forgot, $headers);
     echo 1;exit;
} else {
	 echo 2;exit;
}


/*echo "<script type='text/javascript'>
	location.href = '" . $urlin . "';
	</script>";*/
?>