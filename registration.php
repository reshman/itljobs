<?php

require('db.php');
// include("logincheck.php");
session_start();
$urlin = "itljobs-registration.php";
//echo 'dsgdfg';die;
$flag = 0;
/** Validate captcha */
if (!empty($_REQUEST['captcha'])) {
//    if (empty($_SESSION['captcha']) || trim(strtolower($_REQUEST['captcha'])) != $_SESSION['captcha']) {
    $captcha = $_REQUEST['captcha'];
    if (md5($captcha) . 'a4xn' == $_COOKIE['tntcon']) {
        $flag = 1;
        //$_SESSION['captcha_message'] = "Valid captcha";
        $style = "background-color: #FF606C";
    } else {
        // $_SESSION['captcha_message'] = "Invalid captcha";

        $style = "background-color: #CCFF99";
    }
    setcookie('tntcon', '');
    // $request_captcha = htmlspecialchars($_REQUEST['captcha']);

    unset($_SESSION['captcha']);
}

if ($flag == 1) {
//posted form values
    $title = trim($_POST['title']);
    $fullname = trim($_POST['name']);
    $name = "$title.$fullname";
    $email = trim($_POST['email']);
    $specification = trim($_POST['specification']);
    $qualification = trim($_POST['qualification']);
    $mobile = '+' . trim($_POST['phoneCode']) . trim($_POST['mobile']);
    $current_location = trim($_POST['current_location']);
    $date_of_birth = trim($_POST['dob']);
    $date_of_birth = explode('/', $date_of_birth);
    $date_of_birth = array_reverse($date_of_birth);
    $date_of_birth = implode('-', $date_of_birth);
    $job_category_id = trim($_POST['job_category_id']);
    $sub_category = trim($_POST['sub_category']);
    date_default_timezone_set('asia/kolkata');
    $create_date = date("Y-m-d h:i:sa");
    $india_exp = trim($_POST['india']);
    $abr_exp = trim($_POST['abroad']);
    $experience = $india_exp + $abr_exp;

    $timestamp = date("YmdHis");
    $target_dir = "uploads/";
    //  echo $target_file; exit;
    $uploadOk = 1;
    $imageFileType = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
    
    $target_file = $target_dir . $timestamp.$imageFileType;
    
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if ($imageFileType != "docx" || $imageFileType != "doc") {
        $_SESSION['regsucc'] = 4;
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
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $filename = $sImage;

    $countemail = sprintf("SELECT * FROM `users` WHERE email='%s' AND del_status='%s'", $email, '0');
    $countresultemail = Db::query($countemail);
    $countdtable = mysql_num_rows($countresultemail);
    if ($countdtable == 1) {
        // echo "hi"; exit;
        $_SESSION['regsucc'] = 3;
    } else if ($countdtable != 1 AND $filename != NULL) {

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

        //insert job seeker to users table
        $query = sprintf("INSERT INTO `users` (name,email,password,role_id) VALUES ('%s','%s','%s','%s')", $name, $email, $keymd, '3');
        $res = Db::query($query);
        $inid = mysql_insert_id();

        //insert job seeker to resume table

        $sql = sprintf("INSERT INTO resume(user_id, experience, specification, abroad_experience, india_experience, current_location, mobile, qualification, date_of_birth, job_category_id, sub_category, file_name,created_date) VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')", $inid, $experience, $specification, $abr_exp, $india_exp, $current_location, $mobile, $qualification, $date_of_birth, $job_category_id, $sub_category, $filename, $create_date);
        $resultsql = Db::query($sql);
        $uid = mysql_insert_id();
        //insert jon seeker to notification table
        $sqlqry = sprintf("INSERT INTO notification(ref_id,type_id,created_date) VALUES('%s','%s','%s')", $uid, 4, $create_date);
        $resultqry = Db::query($sqlqry);

        /* Sending mail */

        $msg = "Thanks for registering with ITL JOBS.You can log in to your account in conjunction with your email address";
        $txt = "Dear  " . $name . ", <br/>" . $msg;
        $email_template_register = file_get_contents("email_template_register.html");
        $email_template_register = str_replace("{{content}}", $txt, $email_template_register);
        $email_template_register = str_replace("{{email}}", $email, $email_template_register);
        $email_template_register = str_replace("{{pwd}}", $key, $email_template_register);
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers.= "From:itljobs@webadmin.com" . "\r\n";
        $to = $email;
        $subject = "Welcome to ITL JOBS";
        mail($to, $subject, $email_template_register, $headers);

        $_SESSION['regsucc'] = 1;
    } else if ($filename == NULL) {

        $_SESSION['regsucc'] = 4;
    } else {
        $_SESSION['regsucc'] = 2;
    }
} else {

    $_SESSION['regsucc'] = 5;
}
echo "<script type='text/javascript'>



location.href = '" . $urlin . "';



</script>";



