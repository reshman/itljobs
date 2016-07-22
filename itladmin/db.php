<?php
		
	//Load the configuration file.
	require_once("config.php");
	error_reporting(0);
	class Db
	{
		static function query($queryString)
		{
			$connection = mysql_connect(DB_HOST, DB_USER, DB_PASS);
			if(!$connection)
				die(mysql_error());
				
			$db_selected = mysql_select_db(DB_NAME, $connection);
			if(!$db_selected)
				die(mysql_error());
				
			$result = mysql_query($queryString);
//$qry="delete from student_reg where dob='0000-00-00'";
        //mysql_query($qry);
			return $result;
		}

		
	}



?>