<?php

require('db.php');
// include("logincheck.php");
session_start();
$urlin = "addadmin.php";

//$sResultFileName = "";

$name      = $_POST['name'];
$email     = $_POST['email'];

$countemail= sprintf("SELECT * FROM `users` WHERE email='%s' AND del_status='%s'",$email,'0');
$countresultemail = Db::query($countemail);
$countdtable=mysql_num_rows($countresultemail); 
if($countdtable==1){
        // echo "hi"; exit;
     $_SESSION['addsucc']=3;
 }
 else {

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

$enckey= MD5($key);

$sql          = sprintf("INSERT INTO users SET name = '%s', email = '%s', password = '%s', role_id = '%s'", $name, $email, $enckey, '2'); 
$resultsql    = Db::query($sql);
    
    /*Sending mail*/
     
    $msg="Your password : ";
    $txt = "Dear  " . $name .", <br/>" . $msg;
    $email_template_admin = file_get_contents("email_template_admin.html");
    $email_template_admin = str_replace("{{content}}", $txt, $email_template_admin);
    $email_template_admin  = str_replace("{{key}}", $key, $email_template_admin);
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers.= "From:itljobs.com" . "\r\n";
    $to = $email;
    $subject = "ITL JOBS Credentials";

    mail($to, $subject, $email_template_admin, $headers);

if($resultsql)

	{

	$_SESSION['addsucc']=1;

		

	}

	else 

	{

	$_SESSION['addsucc']=2;

		

	}
     }



echo "<script type='text/javascript'>



location.href = '" . $urlin . "';



</script>";



