<?php
			if(isset($_POST['userEmailSubmit'])) {
				include('mysql-connect.php');
				$email = $_POST['userEmail'];
				
				$sql = "INSERT INTO `Newsletter`(`Email`) VALUES ('$email')";
				
				if(!mysqli_query($dbcon, $sql)){
					die('error');
				}
				
				$success = "Added " . $email . " to the Newsletter`list!";
				header('Location:ministries.php');
			}
		?>