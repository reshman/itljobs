<?php
//echo "hi"; exit;
require('db.php');

$urlin = "list_admin.php";
$id = $_REQUEST['id'];
//$active = $_REQUEST['status'];
 $query= sprintf("SELECT active FROM `users` WHERE id='%s'",$id); 
                $result = Db::query($query);
                $row = mysql_fetch_assoc($result);
                $active=$row['active'];
               if($active=='0'){
                    $query= sprintf("UPDATE `users` SET active='%s' WHERE id='%s'",'1',$id);
                    $q=Db::query($query);  
                  }
               else
                    {
                  $query= sprintf("UPDATE `users` SET active='%s' WHERE id='%s'",'0',$id);
                  $q=Db::query($query);

                    }
//echo "<script type='text/javascript'>
//	location.href = '" . $urlin . "';
//	</script>";
?>
