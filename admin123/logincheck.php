 <?php
   session_start();
   $urlin="index.php";
   if (empty($_SESSION['logged-in-super'])){
   echo "<script type='text/javascript'>
	location.href = '" . $urlin . "';
	</script>";
   }
   ?>