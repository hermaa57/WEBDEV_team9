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
			$checkUsername = GetUserByUsername($UN);
			
			if(count($checkEmail) > 0)
			{
				echo '<div class="alert alert-danger" role="alert"><p>The email already exists. Please choose a different email.<p></div>';
			}
			else if(count($checkUsername) > 0)
			{
				echo '<div class="alert alert-danger" role="alert"><p>The user name already exists. Please choose a different username.<p></div>';
			}
			else
			{
				$createUser = CreateUser($EM, $PWD, $UN, $DOB);
				if($createUser)
				{
					$_SESSION['username'] = $UN ;
					header("Location: index.php");
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