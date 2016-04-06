<?php

require('db.php');
//echo 'sdfsd';die;
$urlin = "message.php";
$id = $_GET['param'];
if ($id) {

    $query1= sprintf("SELECT * FROM `users` WHERE encrypted_key='%s'", $id);
    $q1=Db::query($query1);

//  $row = mysql_fetch_assoc($q1);
 
    
   // echo $fullname;die;
$query= sprintf("UPDATE `users` SET active='%s' WHERE encrypted_key='%s'", '1',$id);
$q=Db::query($query);
  
//send activation mail

////$message = "Customer Details";
//$active_date = date("Y-m-d");
//$email_template_support = file_get_contents("email_template_support.html");
//$email_template_support = str_replace("{{fullname}}", $fullname, $email_template_support);
//$email_template_support = str_replace("{{country}}", $country, $email_template_support);
//$email_template_support = str_replace("{{city}}", $city, $email_template_support);
//$email_template_support = str_replace("{{gender}}", $gender, $email_template_support);
//$email_template_support = str_replace("{{age}}", $age, $email_template_support);
//$email_template_support = str_replace("{{title}}", $title, $email_template_support);
//$email_template_support = str_replace("{{industry}}", $industry, $email_template_support);
//$email_template_support = str_replace("{{email}}", $email, $email_template_support);
//$email_template_support = str_replace("{{username}}", $username, $email_template_support);
//$email_template_support = str_replace("{{registered_date}}", $registered_date, $email_template_support);
//$email_template_support = str_replace("{{active_date}}", $active_date, $email_template_support);
//
////// Always set content-type when sending HTML email
//$headers = "MIME-Version: 1.0" . "\r\n";
//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//
////$to = "shahriar@ezeliving.com";
//$to = "juby.imrokraft@gmail.com";
////$to = "jaya@imrokraft.com";
//$subject = "Customer Details";
//
//mail($to,$subject,$email_template_support,$headers);
//end activation mail

echo "<script type='text/javascript'>
	location.href = '" . $urlin . "';
	</script>";

}