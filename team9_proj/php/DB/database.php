<?php
	require_once("db_credentials.php");
	
	function db_connect() 
	{
		try 
		{
			$db = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_SERVER, DB_USER, DB_PWD);
		}
		catch (PDOException $e) 
		{
			echo "Could not connect to database.";
		}
		return $db;
	}
	
	function db_disconnect() 
	{
		global $db;
		$db = null;
	}
?>