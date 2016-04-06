<?php

session_start();
if(empty($_SESSION['logged-in'])){
    
   echo '<script>window.location.href = "redirect.php"; </script>';
}