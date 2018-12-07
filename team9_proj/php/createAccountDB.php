<?php
	require_once('initialize.php');
	
	if($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		global $db ;
		$EM = $_POST['email'];
		$PWD = $_POST['password'];
		$UN = $_POST['username'];
		$DOB = $_POST['dob'];

		try
		{
			$checkEmail = GetUserByEmail($EM);
			
			if($checkEmail['Email'] == $EM)
			{
				echo '<div class="alert alert-danger" role="alert">That email already exists. Please choose a different email.</div>';
			}
			else
			{
				$createUser = CreateUser($EM, $PWD, $UN, $DOB);
				if($createUser == true)
				{
					$_SESSION['email'] = $EM ;
					header("Location:" . "index.php");
				}
				else
				{
					echo '<div class="alert alert-danger" role="alert">There was an error creating your account.
						Please try again.</div>';
				}
			}

		}
		catch(PDOException $e)
		{
			echo "Database Error." ;
		}
	}
	?>