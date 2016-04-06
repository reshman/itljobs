<?php

require('db.php');
// include("logincheck.php");
session_start();
$urlin = "register.php";


$name         = (trim($_POST['name']));
$email        = (trim($_POST['email']));
$password     = (trim($_POST['password']));
$encpassword  = MD5($password);

$countemail= sprintf("SELECT * FROM `users` WHERE email='%s'",$email);
$countresultemail = Db::query($countemail);
$countdtable=mysql_num_rows($countresultemail); 
if($countdtable==1){
        // echo "hi"; exit;
     $_SESSION['regsucc']=3;
 }
else
    {


$sql          = sprintf("INSERT INTO users SET name = '%s', email = '%s', password = '%s', role_id = '%s'", $name, $email, $encpassword, '2'); 
$resultsql    = Db::query($sql);

   $uid = mysql_insert_id();
   $encrypedKey = md5('ABCDEFG1234567!@#'.$uid);
 
   $sqlupdateEncrypted = sprintf("UPDATE `users` SET encrypted_key='%s' WHERE id='%s'", $encrypedKey, $uid);
   $result1 = Db::query($sqlupdateEncrypted);
    
    /*Sending mail*/
     
 
       $msg="Thanks for registering with ITL JOBS.
       To verify your email address, please follow this link:";
       $txt = "Dear  " .$name. ", <br/>" . $msg;
       $lnk = $encrypedKey;
       $email_template_active = file_get_contents("email_template_active.html");
       $email_template_active = str_replace("{{content}}", $txt, $email_template_active);
       $email_template_active = str_replace("{{link}}", $lnk, $email_template_active);
       $headers = "MIME-Version: 1.0" . "\r\n";
       $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
       $headers.= "From:itljobs@webadmin.com" . "\r\n";
       $to = $email;
       $subject = "Welcome to ITL JOBS";
       mail($to, $subject, $email_template_active, $headers);   

if($resultsql)

	{

	$_SESSION['regsucc']=1;

	}

	else 

	{

	$_SESSION['regsucc']=2;

		

	}

    }

echo "<script type='text/javascript'>



location.href = '" . $urlin . "';



</script>";



