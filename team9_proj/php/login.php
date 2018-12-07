<?php
	session_start();
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
		<link href="../css/login.css" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="../js/bootstrap.js"></script>
	</head>
	<body>
		<?php 
			include_once 'header.php';
			if($login == null)
				include_once 'navBarLogin.php'; 
			else
				include_once 'navBarLogout.php';
		?>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<h3 class="header-3">Hello there!</h3>
					<p class="p-intro"> If you already have an account with us, please
					login, otherwise create a new account with us for free.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-xs-6">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<h1>Login:</h1><br>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-xs-4">
								<form method="post" action="loginDB.php">
									<input type="text" class="form-control" placeholder="Email: " name="userEmail" value=""><br><br>
									<input type="password" class="form-control" placeholder="Password: " name="userPassword" value=""><br><br>
									<input type="submit" class="btn btn-primary center-block" value="Login">
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-6">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-xs-6">
								<h1>Create Account:</h1><br>
							</div>
						</div>
						<form method="post" action="createAccountDB.php">
							<div class="row">
								<div class="col-md-3 col-xs-3">
									<input type="text" class="form-control" placeholder="Email:" name="userEmailCreate" value=""><br><br>
								</div>
								<div class="col-md-3 col-xs-3">
									<input type="password" class="form-control" placeholder="Password:" name="userPasswordCreate" value=""><br><br>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 col-xs-3">
										<input type="text" class="form-control" placeholder="Name: " name="userName" value=""><br><br>
								</div>
								<div class="col-md-3 col-xs-3">
										<input type="text" class="form-control" placeholder="Date of Birth: " name="userDOB" value=""><br><br>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3 col-xs-3">
									<div class="input-group">
										<span class="input-group-addon">
											<input type="radio" name="userSex" id="male" value=""> 
										</span>
										<label class="form-control" for="male">Male</label>
									</div>
								</div>
								<div class="col-md-3 col-xs-3">
									<div class="input-group">
										<span class="input-group-addon">
											<input type="radio" name="userSex" id="female" value=""> 
										</span>
										<label class= "form-control" for="female">Female</label>
									</div><br>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-xs-6">
										<input type="submit" class="btn btn-primary center-block" value="Create Account">
								</div>
							</div>
						</form>
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
				</div>
			</div>
		</div>
		
		<?php include_once 'footer.php'; ?>
	</body>
</html>