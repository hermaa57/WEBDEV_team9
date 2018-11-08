<!DOCTYPE html>
<html>
	<head>
		<title>All Saints Lutheran Church</title>
		<meta charset="UTF-8">
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
    <div class="div-login">
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
    <div class="div-createAcc">
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
       
       <div class ="login-intro-div">
       <h3 class="header-3">Hello there!</h3>
       <p class="p-intro"> If you already have an account with us, please
       login,<br> otherwise create a new account with us for free.</p>
       </div> 
    
		<div class ="login-intro-div2">
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
		
		
		
		
	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="../js/bootstrap.js"></script>
	</body>
</html>