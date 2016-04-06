 <?php
   session_start();
   $urlin="index.php";
   if (empty($_SESSION['logged-in'])){
   echo "<script type='text/javascript'>
	location.href = '" . $urlin . "';
	</script>";
   }
   ?>