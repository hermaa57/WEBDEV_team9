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
						<li><a href="../php/pastor.php">Pastor</a></li>
						<li><a href="../php/about.php">About</a></li>
						<li><a href="../php/ministries.php">Ministries</a></li>
						<li><a href="../php/donate.php">Donate</a></li>
						<li><a href="../php/siteMap.php">Site Map</a></li>
						<?php
							$login = false;
							if(!$login){ 
						?>
								<li class="active"><a  href="../php/login.php">Login/Sign-up</a></li>
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
		
		<form action="someLoginCheck.js">
    <div class ="container div-login">
		<h1>Login:</h1>
		<br>
		<br>
        Email:<br>
        <input type="text" name="userEmail" value="">
        <br>
        <br>
        Password:<br>
        <input type="password" name="userPassword" value="">
        <br>
        <br>
        <input type="submit" value="Login">
	</div>
	</form>
	
	
	<form action="createAccount.js">
    <div class="container div-createAcc">
		<h1>Create Account:</h1>
		<br>
		<br>
        Email:<br>
        <input type="text" name="userEmailCreate" value="">
        <br>
        <br>
        Password:<br>
        <input type="password" name="userPasswordCreate" value="">
        <br>
        <br>
        Name:<br>
        <input type="text" name="userName" value="">
        <br>
        <br>
        Date of Birth:<br>
        <input type="text" name="userDOB" value="">
        <br>
        <br>
        Sex:<br>
        <div>
            <input type="radio" name="userSex" id="male" value=""> <label for="male">Male</label>
        </div>
        <div>
            <input type="radio" name="userSex" id="female" value=""> <label for="female">Female</label>
        </div>
    <br>
        <input type="submit" value="Create Account">
		</div>
</form>
       
       <div class ="container login-intro-div">
       <h3 class="header-3">Hello there!</h3>
       <p class="p-intro"> If you already have an account with us, please
       login,<br> otherwise create a new account with us for free.</p>
       </div> 
    
		<div class ="container login-intro-div2">
       <h3 class ="header-3" >Benefits of having an Account:</h3>
       <ul>
       	<li class = "li-accBen">Receive our monthly Newsletters!</li>
       	<li class = "li-accBen">Message the Pastor directly!</li>
       	<li class = "li-accBen">Customize your profile!</li>
       	<li class = "li-accBen">Electronically Donate to the church!</li>
       	<li class = "li-accBen">Keep up with all things All Saints!</li>
       </ul>
       </div> 
		
		<div class="church-img-div">
			<img src = "../images/FollowMe.jpg" height="200" width = "400">		
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