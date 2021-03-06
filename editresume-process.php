<?php

require('db.php');
// include("logincheck.php");
session_start();
$urlin = "edit-resume.php";

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
//post values
    $id = trim($_POST['id']);
    $title = trim($_POST['title']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $india_exp = trim($_POST['india']);
    $abr_exp = trim($_POST['abroad']);

    $specification = trim($_POST['specification']);
    $mobile = "+" . trim($_POST['phoneCode']) . trim($_POST['mobile']);
    $qualification = trim($_POST['qualification']);
//$abroad_experience   = trim($_POST['abroad_experience']);
    $current_location = trim($_POST['current_location']);
    $date_of_birth = $_POST['dob'];
    $date_of_birth = explode('/', $date_of_birth);
    $date_of_birth = array_reverse($date_of_birth);
    $date_of_birth = implode('-', $date_of_birth);

    $ab_exp = filter_var($abr_exp, FILTER_SANITIZE_NUMBER_INT);
    $ind_exp = filter_var($india_exp, FILTER_SANITIZE_NUMBER_INT);
    $experience = $ab_exp + $ind_exp;

    $job_category_id = trim($_POST['job_category_id']);
    $sub_category = trim($_POST['sub_category']);

    $titlename = "$title.$name";

    $abrexp_year = "$abr_exp year(s)";
    $indexp_year = "$india_exp year(s)";
    
    //Check to see if a new category is entered
//If category is new add it to database 
    if (!is_numeric($job_category_id)) {
        $job_category_id = strtoupper($job_category_id);
        $sql = sprintf("SELECT * FROM job_categories WHERE name='%s' LIMIT 1", $job_category_id);
        $resultsql = Db::query($sql);
        if (mysql_num_rows($resultsql) > 0) {
            $row = mysql_fetch_assoc($resultsql);
            $job_category_id = $row['id'];
        } else {
            $sql = sprintf("INSERT INTO job_categories SET name='%s'", $job_category_id);
            $resultsql = Db::query($sql);
            if ($resultsql) {
                $job_category_id = mysql_insert_id();
            } else {
                $_SESSION['regsucc'] = 2;
                echo "<script type='text/javascript'>
        window.location.href = '" . $urlin . "';
        </script>";
                die();
            }
        }
    }
    

//Check to see if a new Industry is entered
    $sub_category = strtoupper($sub_category);
    $sql = sprintf("SELECT * FROM industries WHERE industry_name='%s'", $sub_category);
    $result = DB::query($sql);
    if (mysql_num_rows($result) <= 0) {
        $sql = sprintf("INSERT INTO industries SET industry_name='%s'", $sub_category);
        $result = DB::query($sql);
        if (!$result) {
            $_SESSION['regsucc'] = 2;
            echo "<script type='text/javascript'>
        window.location.href = '" . $urlin . "';
        </script>";
            die();
        } else {
            $industry_id = mysql_insert_id();            
            $sql = sprintf("INSERT INTO industry_category SET industry_id=%d,category_id=%d", $industry_id, $job_category_id);
            $result = DB::query($sql);
            if (!$result) {
                $_SESSION['regsucc'] = 2;
                echo "<script type='text/javascript'>
        window.location.href = '" . $urlin . "';
        </script>";
                die();
            }
        }
    }

    //Check to see if a new Qualification is entered
    $qualification = strtoupper($qualification);
    $sql = sprintf("SELECT * FROM qualification WHERE qualification='%s'", $qualification);
    $result = DB::query($sql);
    if (mysql_num_rows($result) <= 0) {
        $sql = sprintf("INSERT INTO qualification SET qualification='%s'", $qualification);
        $result = DB::query($sql);
    }

    if (isset($_FILES['fileToUpload']) && strlen($_FILES['fileToUpload']['name']) > 1) {
        $target_dir = "uploads/";
        $timestamp = date("YmdHis");
        $test_file = basename($_FILES["fileToUpload"]["name"]);

        $uploadOk = 1;
        $imageFileType = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);

        $target_file = $target_dir . $timestamp . '.' . $imageFileType;

        if ($imageFileType != 'docx' && $imageFileType != 'doc' && $imageFileType != 'pdf' && $imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'bmp' && $imageFileType != 'gif') {
            $_SESSION['editsucc'] = 4;
            echo "<script type='text/javascript'>

            location.href = '" . $urlin . "';

            </script>";
            die();
        }

        if ($uploadOk == 0) {
            $notup = "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            chmod($target_file, 0644);
            unlink($target_file);
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $sImage = $_FILES["fileToUpload"]["name"];
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        $filename = $timestamp . '.' . $imageFileType;
    }

    if ($filename != NULL) {

        $sql = sprintf("UPDATE resume SET experience = '%s', specification = '%s', abroad_experience = '%s',india_experience = '%s', mobile = '%s', date_of_birth = '%s', qualification = '%s' ,file_name = '%s',job_category_id = '%s', sub_category = '%s',current_location = '%s' WHERE user_id = '%s'", $experience, $specification, $abrexp_year, $indexp_year, '[ '.$mobile.' ]', $date_of_birth, $qualification, $filename, $job_category_id, $sub_category, $current_location, $id);

        $resultedit = Db::query($sql);
    } else {
        $sql = sprintf("UPDATE resume SET experience = '%s', specification = '%s', abroad_experience = '%s',india_experience = '%s', mobile = '%s', date_of_birth = '%s', qualification = '%s' ,job_category_id = '%s', sub_category = '%s',current_location = '%s' WHERE user_id = '%s'", $experience, $specification, $abrexp_year, $indexp_year, '[ '.$mobile.' ]', $date_of_birth, $qualification, $job_category_id, $sub_category, $current_location, $id);

        $resultedit = Db::query($sql);
    }

    $sqluser = sprintf("UPDATE users SET name = '%s',email = '%s' WHERE id = '%s'", $titlename, $email, $id);

    $resultedit1 = Db::query($sqluser);

    if ($resultedit) {
        $_SESSION['editsucc'] = 1;
    } else {
        $_SESSION['editsucc'] = 2;
    }
} else {

    $_SESSION['editsucc'] = 3;
}
echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";


