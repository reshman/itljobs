<?php

session_start();
if(empty($_SESSION['log'])){
    
   echo '<script>window.location.href = "employer_enquiry.php"; </script>';
}