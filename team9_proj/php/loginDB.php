<?php
	require_once('initialize.php');
	
	if($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		global $db ;
		$EM = $_POST['userEmail'] ;
		$PW = $_POST['userPassword'] ;
		try
		{
			$check = UserLoginVerify($EM, $PW);

			if(count($check) > 0)
			{
				if(count($check) == 1)
				{
					$_SESSION['username'] = $check['Name'][0];
					$login = true;
					header("Location: " . "index.php") ;
				}
				else
				{
					echo "<p>Username or Password is incorrect.</p><br>" ;
				}
			}
			else
			{
				echo "<p>The username or password is incorrect.</p>";
			}
		}
		catch(PDOException $e)
		{
			echo "Database Error." ;
		}
	}
?>