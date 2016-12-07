<?php
require_once("db.php");
session_start();
$id = $_POST['id'];
$company = strtoupper($_POST['company']);
$result = FALSE;
$tsql = sprintf("SELECT * FROM company WHERE id='%s'", $id);
$tresult = Db::query($tsql);
if (mysql_num_rows($tresult) <= 0) {
    header('location:itl-access-denied.php');
    die();
} else {
    if($_FILES['logo']['name']!='') {
        $logo = $_FILES['logo'];
        $logo_type = pathinfo($logo['name'], PATHINFO_EXTENSION);
        if ($logo_type != 'jpg' && $logo_type != 'png' && $logo_type != 'jpeg') {
            $_SESSION['message'] = 'Logo not jpg,png or jpeg';
            $_SESSION['type'] = 'danger';
        } else {
            $logo_name = date('YmdHis') . '.' . $logo_type;
            if (move_uploaded_file($logo['tmp_name'], '../images/logos/' . $logo_name)) {

                $sql = sprintf('SELECT company_name from company where id=%d',$id);
                $result = Db::query($sql);
                $row = mysql_fetch_assoc($result);
                $old_name = $row['company_name'];

                $sql = sprintf("UPDATE jobs SET company_name='%s' WHERE company_name='%s'",$company,$old_name);
                $result = Db::query($sql);

                $sql = sprintf("UPDATE interviews SET company_name='%s' WHERE company_name='%s'",$company,$old_name);
                $result = Db::query($sql);

                $sql = sprintf("UPDATE company SET company_name='%s',logo='%s' WHERE id=%d", $company, $logo_name,$id);
                $result = Db::query($sql);
                $_SESSION['message'] = 'Company Edited succesfully';
                $_SESSION['type'] = 'success';

            } else {
                $_SESSION['message'] = 'Editing company failed';
                $_SESSION['type'] = 'danger';
            }
        }
    }else{
        $sql = sprintf('SELECT company_name from company where id=%d',$id);
        $result = Db::query($sql);
        $row = mysql_fetch_assoc($result);
        $old_name = $row['company_name'];

        $sql = sprintf("UPDATE jobs SET company_name='%s' WHERE company_name='%s'",$company,$old_name);
        $result = Db::query($sql);

        $sql = sprintf("UPDATE interviews SET company_name='%s' WHERE company_name='%s'",$company,$old_name);
        $result = Db::query($sql);

        $sql = sprintf("UPDATE company SET company_name='%s' WHERE id=%d", $company,$id);
        $result = Db::query($sql);
        $_SESSION['message'] = 'Company Edited succesfully';
        $_SESSION['type'] = 'success';
    }
}
//}
$urlin = "list_company.php";
echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";
?>