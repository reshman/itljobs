<?php
if($_GET){
    session_start();
    include 'db.php';
    $id = $_GET['id'];
    $user_id = $_SESSION['reclog'];
    
    $csql = sprintf("SELECT * FROM jobs WHERE id=%d AND user_id=%d",$id,$user_id);
    $cr = Db::query($csql);
    if(mysql_num_rows($cr)!=1){
        $SESSION['illegal'] = true;
        echo '<script> window.location.href="recruiter_view_jobs.php";</script>';
        die();
    }else{
        $sql = sprintf("UPDATE jobs SET del_status=1 WHERE id=%d",$id);
        $cr = Db::query($sql);
        
        if($cr){
            $_SESSION['regsucc'] = "0";
        }
        else{
            $_SESSION['regsucc'] = "3";
        }
        echo '<script> window.location.href="recruiter_view_jobs.php";</script>';
    }
}

