<?php 
	session_start();
	require_once('initialize.php');
	$login = false;
	
	if(isset($_SESSION['username']))
	{ 
		unset($_SESSION['username']);
		session_destroy();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="refresh" content="0;URL=index.php">
	</head>
</html>