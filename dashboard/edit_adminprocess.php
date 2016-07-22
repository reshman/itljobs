<?php

require('db.php');
// include("logincheck.php");
session_start();
$urlin = "list_admin.php";

//$sResultFileName = "";

//post values
$id            = $_POST['id'];
$name            = $_POST['name'];
$email           = $_POST['email'];
$password        = $_POST['password'];


$sql    = sprintf("UPDATE users SET name = '%s', email = '%s' WHERE id = '%s'", $name, $email, $id); 

$resultedit = Db::query($sql);

if($resultedit)

{
    $_SESSION['addsucc']=1;
}
else
$resultedit = Db::query($sql);

{
    $_SESSION['addsucc']=2;
}
echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";


