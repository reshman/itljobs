<?php

session_start();
if(empty($_SESSION['reclog'])){

   echo '<script>window.location.href = "employer_enquiry.php"; </script>';
}