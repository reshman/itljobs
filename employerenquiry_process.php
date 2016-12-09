<?php

require('db.php');
// include("logincheck.php");
session_start();
$urlin = "employer_enquiry.php";

function generateRandomString($length = 8)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$key = generateRandomString();

$name = (trim($_POST['name']));
$email = (trim($_POST['email']));
$emailid = $email;
$companyname = (trim($_POST['companyname']));
$designation = (trim($_POST['designation']));
$country = (trim($_POST['country']));
$mobile = '+' . trim($_POST['phoneCode']) . trim($_POST['mobile']);
$enquiry = (trim($_POST['enquiry']));
$password = MD5($key);
$timestamp = date("YmdHis");
$target_dir = "images/logos/";
//  echo $target_file; exit;
$uploadOk = 1;
$imageFileType = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);

$target_file = $target_dir . $timestamp . '.' . $imageFileType;

// echo $_FILES["fileToUpload"]["name"] ; die;

$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg') {

    $uploadOk = 0;
}

if ($uploadOk == 0) {
    $notup = "Sorry, your file was not uploaded.";
    echo "<script type='text/javascript'>
        location.href = '" . $urlin . "';
        </script>";
    die();
    // if everything is ok, try to upload file
} else {

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $sImage = $timestamp;
    } else {
        $_SESSION['regsucc'] = 2;
        echo "<script type='text/javascript'>
        location.href = '" . $urlin . "';
        </script>";
        die();
    }
}

$filename = $timestamp . '.' . $imageFileType;

$countemail = sprintf("SELECT * FROM `users` WHERE email='%s' AND del_status='%s'", $email, '0');
$countresultemail = Db::query($countemail);
$countdtable = mysql_num_rows($countresultemail);
if ($countdtable > 0) {
    // echo "hi"; exit;
    $_SESSION['regsucc'] = 3;
} else {
    date_default_timezone_set('asia/kolkata');
    $reg_date = date("Y-m-d h:i:s");

    $sql = sprintf("INSERT INTO users SET name = '%s', email = '%s', password = '%s', role_id = '%s'", $name, $email, $password, '4');
    $resultsql = Db::query($sql);
    $uid = mysql_insert_id();

    $sql = sprintf("INSERT INTO employers SET company_name = '%s', user_id = '%s', designation = '%s', mobile = '%s', enquiry_requirement = '%s',country='%s',created_date='%s'", $companyname, $uid, $designation, $mobile, $enquiry, $country, $reg_date);
    $resultsql = Db::query($sql);
    $inid = mysql_insert_id();

    $sqlquery = sprintf("INSERT INTO company SET company_name = '%s', logo = '%s'", $companyname, $filename);
    $resultquery = Db::query($sqlquery);

    //insert jon seeker to notification table
    $create_date = date("Y-m-d h:i:sa");
    $sqlqry = sprintf("INSERT INTO notification(ref_id,type_id,created_date) VALUES('%s','%s','%s')", $inid, 3, $create_date);
    $resultqry = Db::query($sqlqry);


    /*Sending mail*/

    $msg = "Your username will be your emailid : " . $emailid;
    $username = "Your username : ";
    $activation = "Your Password : ";
    $txt = "Dear  " . $name . ", <br/>" . $msg . ", <br/>" . $activation;
    $email_template_employer = file_get_contents("email_template_employer.html");
    $email_template_employer = str_replace("{{content}}", $txt, $email_template_employer);
    $email_template_employer = str_replace("{{key}}", $key, $email_template_employer);
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From:itljobs@webadmin.com" . "\r\n";
    $to = $emailid;

    $subject = "ITL JOBS Credentials";
    $email_template_employer;
    mail($to, $subject, $email_template_employer, $headers);


    if ($resultsql) {

        $_SESSION['regsucc'] = 1;

    } else {

        $_SESSION['regsucc'] = 2;


    }

}

echo "<script type='text/javascript'>



location.href = '" . $urlin . "';



</script>";



