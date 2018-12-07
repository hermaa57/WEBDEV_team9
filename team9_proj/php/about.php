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
		
		<div class="container" id="aboutRow">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<p>A vibrant church centered in Jesus Christ, gathered to worship and sent to serve. 
					Our community grows out of grace, God's unearned love for everyone, and vocation, living into God's call for each of our lives.<br><br> 

					Come as you are! Most of us dress casually and our worship is laid back too. 
					Expect good music, preaching that will challenge you, and people to connect with.<br><br>

					Find out more about All Saints with these links to our Newsletter and Calendar:<br><br></p>
					
					<a href="../pdf/nov_2018_newsletter.pdf">Monthly Newsletter</a><br><br>
					<a href="../pdf/nov_2018_calendar.pdf">Monthly Calendar</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<img id="dates" src="../images/history.jpg" alt="Important ASLC dates">
				</div>
			</div>
		</div>
	
		<?php include_once 'footer.php'; ?>
	</body>
</html>