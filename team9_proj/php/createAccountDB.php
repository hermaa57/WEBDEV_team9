<?php
	require_once('initialize.php');
	
	if($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		global $db ;
		$UN = $_POST['userName'] ;
		$PWD = $_POST['userPasswordCreate'] ;
		$EM = $_POST['userEmailCreate'];
		$DOB = $_POST['userDOB'];

		try
		{
			$checkEmail = GetUserByEmail($EM);
			$checkUsername = GetUserByUsername($UN);
			
			if(count($checkEmail) > 0)
			{
				echo '<p>The email already exists. Please choose a different email.<p>';
			}
			else if(count($checkUsername) > 0)
			{
				echo '<p>The user name already exists. Please choose a different username.<p>';
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
					echo "There was an error creating your account.
						Please try again.";
				}
			}

		}
		catch(PDOException $e)
		{
			echo "Database Error." ;
		}
	}
	?>