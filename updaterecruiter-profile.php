<?php require 'check_session_rec.php'; 
require('db.php');
$urlin = "edit-recruiterprofile.php";

//$sResultFileName = "";

//post values
$id                  = trim($_POST['id']);
$name                = trim($_POST['name']);
$email               = trim($_POST['email']);
$companyname         = trim($_POST['companyname']);
$designation         = trim($_POST['designation']);
$country             = trim($_POST['country']);
$mobile              = '+'.trim($_POST['phoneCode']).trim($_POST['mobile']);
$enquiry             = trim($_POST['enquiry']);
if(!empty($_FILES["fileToUpload"]["name"])){
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
}
$countemail= sprintf("SELECT * FROM `users` WHERE email='%s' AND del_status='%s'",$email,'0');
$countresultemail = Db::query($countemail);
$countdtable=mysql_num_rows($countresultemail); 
if($countdtable==1){

 $sql    = sprintf("UPDATE employers SET company_name = '%s', designation = '%s', mobile = '%s', enquiry_requirement = '%s',country='%s' WHERE user_id = '%s'", $companyname, $designation, $mobile,$enquiry,$country,$id); 
$resultedit = Db::query($sql);

if(isset($filename)){
$sqlquery = sprintf("UPDATE company SET logo = '%s' WHERE company_name = '%s'", $filename, $companyname);
$resultquery = Db::query($sqlquery);
}

$sql    = sprintf("UPDATE users SET name = '%s',email = '%s' WHERE id = '%s'", $name, $email,$id);
$resultedit1 = Db::query($sql);
if($resultedit)

{
    $_SESSION['editsucc']=1;
}
else

{
    $_SESSION['editsucc']=2;
}
    }
echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";


