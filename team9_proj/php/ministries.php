<?php
	session_start();
	require_once("initialize.php");
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
		<link href="../css/ministries.css" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="../js/bootstrap.js"></script>
	</head>
	<body>
		<?php 
			include_once 'header.php';
			$login = false;
			if(!$login)
				include_once 'navBarLogin.php'; 
			else
				include_once 'navBarLogout.php';
		?>
		
		<?php $success = ""?>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<p>God’s work. Our hands…Your life at work. As Christians, God calls us to care for all of God’s creation. 
					God calls us to help our friends and neighbors – around the corner, across the country, and on the other
					side of the world. Join us as we serve God together.</p>
				</div>
			</div>
			<div class="row" id="carRow">
				<div class="col-md-12 col-xs-12" id="carContain">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
							<li data-target="#myCarousel" data-slide-to="4"></li>
							<li data-target="#myCarousel" data-slide-to="5"></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img src="../images/one.jpg" alt="Salvation Army">
							</div>
							<div class="item">
								<img src="../images/two.jpg" alt="Granola Bars">
							</div>
							<div class="item">
								<img src="../images/three.jpg" alt="Christmas Program">
							</div>
							<div class="item">
								<img src="../images/four.jpg" alt="Bible Study">
							</div>
							<div class="item">
								<img src="../images/five.jpg" alt="Craft">
							</div>
							<div class="item">
								<img src="../images/six.jpg" alt="Recycle">
							</div>
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">
								<span class="glyphicon glyphicon-menu-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next">
								<span class="glyphicon glyphicon-menu-right"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div id = "center">
				<h3>Sign up for our Newsletter!</h3>
				<form method="post" action="newsletter.php">
				<input type="hidden" name = "userEmailSubmit" value="true">
					<label>Email Address: <input type="text" name="userEmail" value=""></label><br>
					<input type="submit" value="Sign Up">
				</form>
				<p><?php $success ?></p>
			</div>
		</div>
		
		<?php include_once 'footer.php'; ?>
	</body>
</html>