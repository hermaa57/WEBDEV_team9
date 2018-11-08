<!DOCTYPE html>
<html>
	<head>
		<title>All Saints Lutheran Church</title>
		<meta charset="UTF-8">
		<meta name="robots" content="noindex, nofollow" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">
	</head>
	<body>
		<!--Header container-->
		<div class="header">
			<div class="row" id="row1">
				<div class="col-md-12">
					<img class="img-responsive" src="../images/cross_header.jpg" id="headImg">
					<h1 id="headTitle">All Saints Lutheran Church</h1>
				</div>
			</div>
		</div>
		<!--Navbar container-->
		<div class="navbar navbar-inverse navbar-static-top" id="navbar">
			<div class="container" id="navbar">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="../php/index.php">Home</a></li>
						<li><a href="../php/pastor.php">Pastor</a></li>
						<li><a href="../php/about.php">About</a></li>
						<li><a href="../php/ministries.php">Ministries</a></li>
						<li><a href="../php/donate.php">Donate</a></li>
						<li><a href="../php/siteMap.php">Site Map</a></li>
						<?php
							$login = false;
							if(!$login){ 
						?>
								<li><a href="../php/login.php">Login/Sign-up</a></li>
						<?php
							}
							if($login){
						?>
								<li class="active"><a  href="../php/profile.php">Your Profile</a></li>
								<li><a id="logout" href="../php/index.php">Logout</a></li>
						<?php
							}
						?>
					</ul>
				</div>	
			</div>
		</div>
	
		<!--Footer container-->
		<div class="footer navbar-static-bottom">
			<div class="container">
				<div class="row" id="socRow">
					<div class="col-md-12 col-xs-12">
						<ul class="list-unstyled list-inline">
							<li class="list-inline-item">
								<a href="https://www.facebook.com/AllSaintsOshkosh"><img id="socialImg" src="../images/facebook.png"></a>
							</li>
							<li class="list-inline-item">
								<a href="https://www.elca.org"><img id="socialImg" src="../images/elcaLogo.jpg"></a>
							</li>
							<li class="list-inline-item">
								<a href="http://womenoftheelca.org"><img id="socialImgSmall" src="../images/elcaWomen.png"></a>
							</li>
							<li class="list-inline-item">
								<a href="http://lirs.org"><img id="socialImg" src="../images/lirs.jpg"></a>
							</li>
							<li class="list-inline-item">
								<a href="http://lwr.org"><img id="socialImgSmall" src="../images/lwrLogo.GIF"></a>
							</li>
							<li class="list-inline-item">
								<a href="http://www.loppw.org"><img id="socialImg" src="../images/lopp.png"></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<p>Disclaimer: This site is under development by UW-Oshkosh students as a prototype for the organization All Saints Lutheran Church. Nothing on the site should
						be constructed in any way as being officially connected with or representative of All Saints Lutheran Church.</p>
					</div>
				</div>
			</div>
		</div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="../js/bootstrap.js"></script>
	</body>
</html>