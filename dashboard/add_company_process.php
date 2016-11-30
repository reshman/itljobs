<?php
require_once("db.php");
session_start();
$company = strtoupper($_POST['company']);
if (empty($_FILES['logo'])) {
    $_SESSION['message'] = 'No logo selected';
    $_SESSION['type'] = 'danger';
    $urlin = "add_company.php";
    echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";
    die();
}
$logo = $_FILES['logo'];
$result = FALSE;
$tsql = sprintf("SELECT * FROM company WHERE company_name='%s'", $company);
$tresult = Db::query($tsql);
if (mysql_num_rows($tresult) > 0) {
    $_SESSION['message'] = 'Company name already exists';
    $_SESSION['type'] = 'danger';
} else {
    $logo_type = pathinfo($logo['name'], PATHINFO_EXTENSION);
    if ($logo_type != 'jpg' && $logo_type != 'png' && $logo_type != 'jpeg') {
        $_SESSION['message'] = 'Logo not jpg,png or jpeg';
        $_SESSION['type'] = 'danger';
    } else {
        $logo_name = date('YmdHis') . '.' . $logo_type;
        if (move_uploaded_file($logo['tmp_name'], '../images/logos/' . $logo_name)) {
            $sql = sprintf("INSERT INTO company SET company_name='%s',logo='%s'", $company, $logo_name);
            $result = Db::query($sql);
            $_SESSION['message'] = 'Company added succesfully';
            $_SESSION['type'] = 'success';

        } else {
            $_SESSION['message'] = 'Adding company failed';
            $_SESSION['type'] = 'danger';
        }
    }
}
if ($result) {
    $_SESSION['addsucc'] = 1;
} else {
    $_SESSION['addsucc'] = 2;
}
//}
$urlin = "add_company.php";
echo "<script type='text/javascript'>

location.href = '" . $urlin . "';

</script>";
?>