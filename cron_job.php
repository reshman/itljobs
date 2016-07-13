<?php

require_once 'db.php';
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d h:i:s A');
$query = sprintf("SELECT id,user_id,job_listing FROM jobs WHERE active=1 AND del_status=0 AND closing_date>'%s' AND informed=0", $date);
$result = Db::query($query);
while ($row = mysql_fetch_assoc($result)) {

    $token = openssl_encrypt($row['id'], "seed", "token");

    $count_query = sprintf("SELECT count(*) as count FROM jobs_applied WHERE job_id=%d", $row['id']);
    $count_result = Db::query($count_query);
    $count_row = mysql_fetch_assoc($count_result);
    $count = $count_row['count'];
    
    if ($count > 0) {
        
        $email_query = sprintf("SELECT email FROM users WHERE id=%d", $row['user_id']);
        $email_result = Db::query($email_query);
        $email_row = mysql_fetch_assoc($email_result);
        $email = $email_row['email'];

        $email_template_applicants = file_get_contents("email_template_applicants.html");
        $email_template_applicants = str_replace("{{count}}", $count, $email_template_applicants);
        $email_template_applicants = str_replace("{{jobname}}", $row['job_listing'], $email_template_applicants);
        $email_template_applicants = str_replace("{{token}}", $token, $email_template_applicants);
        $headers = "MIME-Version: 1.0" . PHP_EOL;
        $headers .= "Content-type:text/html;charset=UTF-8" . PHP_EOL;
        $headers.= "From:itljobs@webadmin.com" . PHP_EOL;
        $to = $email;
        $subject = "Notification - Applicants";
        mail($to, $subject, $email_template_applicants, $headers);
        
        $informed_query = sprintf("UPDATE jobs SET informed=1 WHERE id=%d",$row['id']);
        $informed_result = Db::query($informed_query);
        
    }
}