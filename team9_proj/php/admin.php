<?php
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
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="../js/bootstrap.js"></script>
	</head>
	<body>
		<?php 
			include_once 'header.php';
			$login = check_login();
			if($login == true)
				include_once 'navBarLogout.php'; 
			else
				include_once 'navBarLogin.php';
		?>
	
		<h2>Administrator Panel</h2>
		
		<h3>List of Church Members</h3>
		<p><strong> Email	Name	DOB		ID		Permissions</strong></p>
		<?php
			include('mysql-connect.php');
			$sql = "SELECT Email, Name, DOB, ID, Permissions FROM Accounts";
			$result = mysqli_query($dbcon,$sql);
		?> 
		<form method="post" action="deleteUser.php"> 
			<?php
				echo "<select name='account'>";
				while ($row = mysqli_fetch_array($result)) {
					echo "<option name = '" . $row['Email'] . "' value='" . $row['Email'] ."'>" . $row['Email'] . ", " . 
					$row['Name'] . ", " . $row['DOB'] . ", " . $row['ID'] . ", " . $row['Permissions'] ."</option>";
				}
				echo "</select>";
			?>
			<input type="submit" name="submit" value="Delete User">
		</form>
		
		<?php include_once 'footer.php'; ?>
	</body>
</html>