<?php
			if(isset($_POST['submit'])) {
				include('mysql-connect.php');
				$Email = $_POST['account'];
				
				$sql = "DELETE FROM `Accounts` WHERE `Email`='$Email'";
				
				if(!mysqli_query($dbcon, $sql)){
					die(mysqli_error($dbcon));
				}
				header('Location:admin.php');
			}
		?>