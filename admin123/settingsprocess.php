<?php
require_once("db.php");
session_start();
$urlin="settings.php";
$current = trim($_POST['txtpass']);
$newpass = trim($_POST['txtpass1']);
$encnewpass = MD5($newpass);
$confirmpass = trim($_POST['txtpass2']);

if(strlen($current)==''){
    $_SESSION['invalid']=5;
}
else if(strlen($newpass)<5){
    $_SESSION['invalid']=3;
}
else if ($newpass != $confirmpass){
    $_SESSION['invalid']=4;
}
else{

    $q = "SELECT password as pass FROM users where role_id='1'";
    $result=Db::query($q);
    $row=mysql_fetch_array($result);

    if($row['pass']==MD5($current))
    {
       $query=sprintf("UPDATE  users SET password = '%s' WHERE role_id = '1'",$encnewpass);
       Db::query($query);
       $_SESSION['invalid']=1;			
    }
    else 
    {
        $_SESSION['invalid']=2;                
    }
}        
echo "<script type='text/javascript'>
location.href = '" . $urlin . "';
</script>";?>
?>