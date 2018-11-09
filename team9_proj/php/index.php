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
		<div class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a  href="../php/index.php">Home</a></li>
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
								<li><a href="../php/profile.php">Your Profile</a></li>
								<li><a id="logout" href="../php/index.php">Logout</a></li>
						<?php
							}
						?>
					</ul>
				</div>	
			</div>
		</div>
		
		<p class="p-intro"><img src = "../images/header.jpg"></p>
		<h3 class="header-3">Welcome to All Saints</h3>
		<p class="p-intro">We are a Lutheran church focused on placing Christ into people's hearts.</p>
		<p class="p-intro">We are also a member of ELCA (Evangelical Lutheran Church in America)</p>
		<p class="p-intro">We are what God has made us – people whom God has created by grace to live in union with Jesus Christ and has prepared to live faithful, </p>
		<p class="p-intro">fruitful lives by the power of the Holy Spirit (Ephesians 2:8-10). In Jesus Christ, God has reconciled us to God and to each other.</p>
		<p class="p-intro">As we gather around word and sacraments, this life in Christ is what defines, shapes and guides us as a community of faith, the church.</p>
		<p class="p-intro">By God’s grace we can and do live confidently and generously in this community of faith and in service of others, amid the mysteries and paradoxes of this life in Christ</p>
		<p class="p-intro">including our human limitations and failings, and the ambiguities, uncertainties and suffering that we experience.</p>
		<div class = "div-worship">
		<h3 class="header-3">Worship Times</h3>
		<p class="p-intro">Sunday: 8:00 am & 10:15 am</p>
		<p class="p-intro">Sunday School: 9:10 am - 10:10 am</p>
		<p class="p-intro">Bible Study: 9:00 am - 11:00 am Thursday</p>
		<p class="p-intro">Women's Bible Study: 6:30 pm Tuesday</p>
		<p class="p-intro">Craft and Chat: 5:00 pm Thursday</p>
		<p class="p-intro">Backpacks for Kids: 12:30 pm Thursday</p>
		</div>
		
		<div class="div-directions">
		<h3 class="header-3">Click the link below to get directions to All Saints</h3>
		<p class="p-intro"><a href = "https://www.google.com/maps/dir/44.0320038,-88.741205/1072+Honey+Creek+Rd,+Oshkosh,+WI+54904/@44.0268872,-88.7450924,12z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x8803e8c26c0d5943:0x9d6a9adb52235c0a!2m2!1d-88.6079229!2d44.0296859">Directions</a></p>
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
						