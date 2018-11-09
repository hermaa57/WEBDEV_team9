<!DOCTYPE html>
<html lang="en">
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
					<img class="img-responsive" alt="cross" src="../images/cross_header.jpg" id="headImg">
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
						<li class="active"><a href="../php/pastor.php">Pastor</a></li>
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
								<li><a href="../php/profile.php">Your Profile</a></li>
								<li><a id="logout" href="../php/index.php">Logout</a></li>
						<?php
							}
						?>
					</ul>
				</div>	
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-xs-8">
					<h1>Greetings from the Interim Pastor!</h1>
				</div>
				<div class="col-md-4 col-xs-4">
					<img src="../images/Desilet.jpg" alt="Pastor Dean" class="img-responsive img-circle" id="pastorPic">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<p>Dear Friends in Christ,<br><br>
					With a grateful heart, I’m joining you as your new interim pastor. My role is to assist the congregation not only with the day to day ministry needs but also to review current ministry challenges and opportunities. 
					The interim process allows your new pastor to enter the family of All Saints with a clean slate so to speak, and allows the congregation to affirm and reassess ministry in the place.<br><br>
					
					I bring 27 years of experience to the process serving in parish ministry, chaplaincy and specialized ministry as a nursing home administrator. 
					I also have been educated in the intentional interim process at Luther Seminary. Most recently I served as the interim CEO of Lutheran Homes and Health Services of Fond du Lac.<br><br>
					
					I’m blessed with a wonderful wife Renee who is a registered nurse at Evergreen and two grown children, Luke who is a 3rd year medical student in Iowa, and Emily a 2nd year grad student in Minnesota.<br><br>
					
					I look forward to having intentional conversation with you and will initially focus my time in getting to know the congregation as quickly as possible. 
					I along with the synod will assist the congregation as you prepare to search and eventually call your new pastor.<br><br>
					
					My regular office hours will be Monday-Thursday 9:00-4:00 or by appointment. I also plan on being involved with worship and community life in the evenings and weekends.<br><br>
					
					With a grateful heart,<br>
					Pastor Dean Desilet<br><br>

					pastordean@allsaintsoshkosh.net</p>
				</div>
			</div>
		</div>
	
		<!--Footer container-->
		<div class="footer navbar-static-bottom">
			<div class="container">
				<div class="row" id="socRow">
					<div class="col-md-12 col-xs-12">
						<p>ANCHORED IN GOD'S WORD, LOVE AND GRACE, WE ARE DISCIPLES CALLED TO SHARE THE GOOD NEWS!</p><br><br>
						<ul class="list-unstyled list-inline">
							<li class="list-inline-item">
								<a href="https://www.facebook.com/AllSaintsOshkosh"><img id="socialImg" alt="facebook" src="../images/facebook.png"></a>
							</li>
							<li class="list-inline-item">
								<a href="https://www.elca.org"><img id="socialImg" alt="ELCA" src="../images/elcaLogo.jpg"></a>
							</li>
							<li class="list-inline-item">
								<a href="http://womenoftheelca.org"><img id="socialImgSmall" alt="Women of the ELCA" src="../images/elcaWomen.png"></a>
							</li>
							<li class="list-inline-item">
								<a href="http://lirs.org"><img id="socialImg" alt="LIRS" src="../images/lirs.jpg"></a>
							</li>
							<li class="list-inline-item">
								<a href="http://lwr.org"><img id="socialImgSmall" alt="LWR" src="../images/lwrLogo.GIF"></a>
							</li>
							<li class="list-inline-item">
								<a href="http://www.loppw.org"><img id="socialImg" alt="LOPPW" src="../images/lopp.png"></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<p>Disclaimer: This site is under development by UW-Oshkosh students as a prototype for the organization All Saints Lutheran Church. Nothing on the site should
						be constructed in any way as being officially connected with or representative of All Saints Lutheran Church.</p><br>
						<p><a href="http://validator.w3.org/check/referer">Validate Me</a>
					</div>
				</div>
			</div>
		</div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="../js/bootstrap.js"></script>
	</body>
</html>