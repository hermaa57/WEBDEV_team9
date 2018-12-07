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
		<link href="../css/admin.css" rel="stylesheet">
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
			error_reporting(0);
			include ('mysql-connect.php');
			$sql = "SELECT Email, Name, DOB, ID, Permissions FROM Accounts";
			$result = mysqli_query($dbcon,$sql);
		?> 
		<form method="post" action="deleteUser.php"> 
		<div class="admin1">
			<?php
				echo "<select name='account' class='center'>";
				while ($row = mysqli_fetch_array($result)) {
					echo "<option name = '" . $row['Email'] . "' value='" . $row['Email'] ."'>" . $row['Email'] . ", " . $row['Name'] . 
					", " . $row['DOB'] . ", " . $row['ID'] . ", " . $row['Permissions'] ."</option>";
				}
				echo "</select>";
			?>
			<input type="submit" name="submit" value="Delete User">
			</div>
		</form>
		
		<h3>Suggestion Box</h3>
			<?php
				$count = 1;
				$sql = "SELECT File FROM Suggestions";
				$result = mysqli_query($dbcon,$sql);
				$File = "";

				if(mysqli_num_rows($result)==0){
					echo "Database is empty <br>";
				}
				else{
					?><div class = "admin1"><?php
					$rows = mysqli_num_rows($result);
					while($rows > 0){
						$name = "Suggestion " . $count;
						?><a href ="http://webdev.cs.uwosh.edu/students/team9/WEBDEV_team9/team9_proj/php/admin.php"> <?php $name ?> <br></a><?php
						$count = $count + 1;
						$rows = $rows - 1;
					}
				}
					echo '<br>';
			?></div><?php
		include_once 'footer.php'; ?>
	</body>
</html>