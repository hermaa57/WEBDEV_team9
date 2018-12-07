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
		
		<h3 class = "header-3">Thank you for Considering a Donation!</h3>
		<div class = "container church-financials-div"> 
			<p class = "p-intro"><img src = "../images/churchFinancial.png"></p>
		</div>
		<p class = "p-intro">All Saints Lutheran Church needs your help to pay off our current building loan now more than ever, please consider donating today.</p>
		<br>
		<p class = "p-intro">Please click the link below to electronically donate, or you can always donate in-person during any of our operating hours.</p>
		<p class = "p-intro"><a href = "https://www.eservicepayments.com/cgi-bin/Vanco_ver3.vps?appver3=x1a8uAgje-8dTfwGAicT4j74T5AT8zVhJw92C-amEpsa7JU70luovykzbXYpM05FuVr0KUTEeGCDikFQ3OSSZ09s4vB8YqSUWa2bJD0FtSu_ad_sOXJrcw_2aMkXamSbiG7daFCFWnNNwT9G-kfIHA==&ver=3">Donate</a></p>
		<p class = "p-intro">Also don’t forget to select All Saints for you Amazon Smile charity!</p>
		<p class = "p-intro"><a href = "http://smile.amazon.com/ch/39-1599552"> Amazon </a></p>
		<p class = "p-intro">All Saints appreciates any donation and thanks you!</p>
		
		<?php include_once 'footer.php'; ?>
	</body>
</html>