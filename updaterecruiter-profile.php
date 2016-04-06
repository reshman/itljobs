<?php

require('db.php');
// include("logincheck.php");
session_start();
$urlin = "edit-recruiterprofile.php";

//$sResultFileName = "";

//post values
$id                  = trim($_POST['id']);
$name                = trim($_POST['name']);
$email               = trim($_POST['email']);
$companyname         = trim($_POST['companyname']);
$designation         = trim($_POST['designation']);
$country             = trim($_POST['country']);
$mobile              = trim($_POST['mobile']);
$enquiry             = trim($_POST['enquiry']);


$countemail= sprintf("SELECT * FROM `users` WHERE email='%s'",$email);
$countresultemail = Db::query($countemail);
$countdtable=mysql_num_rows($countresultemail); 
if($countdtable==1){
        // echo "hi"; exit;
     $_SESSION['editsucc']=3;
 }
else
    {

  $sql    = sprintf("UPDATE employers SET company_name = '%s', designation = '%s', mobile = '%s', enquiry_requirement = '%s' WHERE user_id = '%s'", $companyname, $designation, $mobile,$enquiry,$id); 

$resultedit = Db::query($sql);

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


