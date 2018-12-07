<!DOCTYPE html>
<html lang="en">
	<head>
		<title>All Saints Lutheran Church</title>
		<meta charset="UTF-8">
		<meta name="robots" content="noindex, nofollow" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">
		<link href="../css/login.css" rel="stylesheet">
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
		
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<h3 class="header-3">Hello there!</h3>
					<p class="p-intro"> If you already have an account with us, please
					login,<br> otherwise create a new account with us for free.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-xs-6">
					<form action="someLoginCheck.js">
						<h1>Login:</h1><br><br>
						Email:<br>
						<input type="text" name="userEmail" value=""><br><br>
						Password:<br>
						<input type="password" name="userPassword" value=""><br><br>
						<input type="submit" value="Login">
					</form>
				</div>
				<div class="col-md-6 col-xs-6">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<h1>Create Account:</h1><br><br>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-xs-3">
								<form action="createAccount.js">
									Email:<br>
									<input type="text" name="userEmailCreate" value=""><br><br>
									Password:<br>
									<input type="password" name="userPasswordCreate" value=""><br><br>
							</div>
							<div class="col-md-3 col-xs-3">
									Name:<br>
									<input type="text" name="userName" value=""><br><br>
									Date of Birth:<br>
									<input type="text" name="userDOB" value=""><br><br>
									Sex:<br>
									<div>
										<input type="radio" name="userSex" id="male" value=""> 
										<label for="male">Male</label>
									</div>
									<div>
										<input type="radio" name="userSex" id="female" value=""> 
										<label for="female">Female</label>
									</div><br>
									<input type="submit" value="Create Account">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<h3 class ="header-3" >Benefits of having an Account:</h3>
					<ul>
						<li class = "li-accBen">Receive our monthly Newsletters!</li>
						<li class = "li-accBen">Message the Pastor directly!</li>
						<li class = "li-accBen">Customize your profile!</li>
						<li class = "li-accBen">Electronically Donate to the church!</li>
						<li class = "li-accBen">Keep up with all things All Saints!</li>
					</ul>
					<img src = "../images/FollowMe.jpg" height="200" width = "400">		
				</div>
			</div>
		</div>
		
		<?php include_once 'footer.php'; ?>
	</body>
</html>