<?php
	function CreateUser($email, $password, $username, $dob)
	{
        global $db;
        try
		{
			//INSERT INTO Accounts VALUES (email, pwd, name, dob)
            $sql = "CALL CreateUser(?,?,?,?,?)";
            $q = $db->prepare($sql);
            $q->execute([$email, $password, $username, $dob, 1]);
            return true;
        } 
		catch (PDOException $e)
		{
            db_disconnect();
            exit("Aborting: There was a database error when inserting user.");
        }
    }
	
	function UserLoginVerify($email, $password)
	{
		global $db;
		try
		{
			//SELECT * FROM Accounts WHERE Email = email and Password = password
			$sql = "CALL UserLoginVerify(?,?)";
			$q = $db->prepare($sql);
			$q->execute([$email, $password]);
			return $q->fetchAll(PDO::FETCH_ASSOC);
		}
		catch (PDOException $e)
		{
			db_disconnect();
			echo "There was an error.";
		}
	}
	
	function GetUserByUsername($username)
	{
		global $db;
		try
		{
			//SELECT * FROM Accounts WHERE Name = name
			$sql = "CALL GetUserByUsername(?)";
			$q = $db->prepare($sql);
			$q->execute([$username]);
			return $q->fetchAll(PDO::FETCH_ASSOC);
		}
		catch (PDOException $e)
		{
			db_disconnect();
			echo "There was an error.";
		}
	}
	
	function GetUserByEmail($email)
	{
		global $db;
		try
		{
			//SELECT * FROM Accounts WHERE Email = email
			$sql = "CALL GetUserByEmail(?)";
			$q = $db->prepare($sql);
			$q->execute([$email]);
			return $q->fetchAll(PDO::FETCH_ASSOC);
		}
		catch (PDOException $e)
		{
			db_disconnect();
			echo "There was an error.";
		}
	}
?>