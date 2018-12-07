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
			$login = false;
			if(!$login)
				include_once 'navBarLogin.php'; 
			else
				include_once 'navBarLogout.php';
		?>
		
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
	
		<?php include_once 'footer.php'; ?>
	</body>
</html>