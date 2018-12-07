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
					echo '<div class="alert alert-danger" role="alert"><p>Username or Password is incorrect.</p></div>' ;
				}
			}
			else
			{
				echo '<div class="alert alert-danger" role="alert"><p>The username or password is incorrect.</p></div>';
			}
		}
		catch(PDOException $e)
		{
			echo "Database Error." ;
		}
	}
?>