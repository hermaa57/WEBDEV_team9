<?php
	require_once('initialize.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>All Saints Lutheran Church</title>
		<meta charset="UTF-8">
		<meta name="robots" content="noindex, nofollow" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="../js/bootstrap.js"></script>
	</head>
	<body>
		<?php 
			include_once 'header.php';
			$login = check_login();
			if($login == true)
				include_once 'navBarLogout.php'; 
			else
				include_once 'navBarLogin.php';
		?>
		
		<h3>Site Map for All Saints Lutheran Church:</h3>
		<ul>
			<li><a href="../php/index.php">Home</a></li>
			<li><a href="../php/pastor.php">Pastor</a></li>
			<li><a href="../php/about.php">About</a></li>
			<li><a href="../php/ministries.php">Ministries</a></li>
			<li><a href="../php/donate.php">Donate</a></li>
			<li><a href="../php/login.php">Login/Signup</a></li>
			<li><a href="../php/profile.php">Your Profile</a></li>
			<li><a href="../php/admin.php">Administrator Panel</a></li>
		</ul>
	
		<?php include_once 'footer.php'; ?>
	</body>
</html>