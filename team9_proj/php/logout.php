<?php 
	require_once('initialize.php');
	
	if(isset($_SESSION['email']))
	{ 
		unset($_SESSION['email']);
		session_destroy();
	}
	
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="refresh" content="0;URL=index.php">
	</head>
</html>