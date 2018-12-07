<?php
	require_once('initialize.php');
	
	if($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		global $db ;
		$EM = $_POST['userEmail'];
		$PW = $_POST['userPassword'];
		try
		{
			$check = UserLoginVerify($EM, $PW);

			if(count($check) > 0)
			{
				if(count($check) == 1)
				{
					$_SESSION['email'] = $EM;
					header("Location: " . "index.php") ;
				}
				else
				{
					echo '<div class="alert alert-danger" role="alert">Username or Password is incorrect.</div>' ;
				}
			}
			else
			{
				echo '<div class="alert alert-danger" role="alert">The username or password is incorrect.</div>';
			}
		}
		catch(PDOException $e)
		{
			echo "Database Error." ;
		}
	}
?>