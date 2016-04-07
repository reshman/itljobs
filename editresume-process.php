<?php

require('db.php');
// include("logincheck.php");
session_start();
$urlin = "edit-resume.php";

//$sResultFileName = "";

//post values
$id                  = trim($_POST['id']);
$title               = trim($_POST['title']);
$name                = trim($_POST['name']);
$email               = trim($_POST['email']);
$india_exp           = trim($_POST['india']);
$abr_exp             = trim($_POST['abroad']);

$specification       = trim($_POST['specification']);
$mobile              = trim($_POST['mobile']);
$qualification       = trim($_POST['qualification']);
//$abroad_experience   = trim($_POST['abroad_experience']);
$current_location    = trim($_POST['current_location']);
$date_of_birth       = $_POST['dob'];
$dob                 = date("Y-m-d", strtotime($date_of_birth));

$ab_exp              = filter_var($abr_exp, FILTER_SANITIZE_NUMBER_INT);
$ind_exp             = filter_var($india_exp, FILTER_SANITIZE_NUMBER_INT);
$experience          = $ab_exp + $ind_exp;

$job_category_id     = trim($_POST['job_category_id']);
$sub_category        = trim($_POST['sub_category']);

$titlename= "$title.$name";

$abrexp_year = "$abr_exp year(s)";
$indexp_year = "$india_exp year(s)";


$target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      //  echo $target_file; exit;
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

        if($imageFileType != "pdf") {
           $onlypdf = "Sorry, only pdf files are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            $notup = "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                basename( $_FILES["fileToUpload"]["name"]);
                $sImage=$_FILES["fileToUpload"]["name"];

            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

       $filename = $sImage;


 if($filename != NULL)   {

 $sql    = sprintf("UPDATE resume SET experience = '%s', specification = '%s', abroad_experience = '%s',india_experience = '%s', mobile = '%s', date_of_birth = '%s', qualification = '%s' ,file_name = '%s',job_category_id = '%s', sub_category = '%s',current_location = '%s' WHERE user_id = '%s'", $experience, $specification, $abrexp_year, $indexp_year, $mobile,$dob,$qualification,$filename,$job_category_id,$sub_category,$current_location,$id); 

$resultedit = Db::query($sql);

 }
 else{
    $sql    = sprintf("UPDATE resume SET experience = '%s', specification = '%s', abroad_experience = '%s',india_experience = '%s', mobile = '%s', date_of_birth = '%s', qualification = '%s' ,job_category_id = '%s', sub_category = '%s',current_location = '%s' WHERE user_id = '%s'", $experience, $specification, $abrexp_year, $indexp_year, $mobile,$dob,$qualification,$job_category_id,$sub_category,$current_location,$id); 

     $resultedit = Db::query($sql); 
 }

$sqluser    = sprintf("UPDATE users SET name = '%s',email = '%s' WHERE id = '%s'", $titlename, $email,$id);

$resultedit1 = Db::query($sqluser);

if($resultedit)

{
    $_SESSION['editsucc']=1;
}
else

{
    $_SESSION['editsucc']=2;
}
echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";


