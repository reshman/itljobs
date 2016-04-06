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
//                        mysql_query("set names 'utf8'",$connection);
//                        mysql_set_charset('utf8');
			if(!$db_selected)
				die(mysql_error());
				
			$result = mysql_query($queryString);
                        
			return $result;
		}
		
	}

?>