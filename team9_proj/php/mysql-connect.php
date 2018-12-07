<?php
			include('DB/db_credentials.php');
			$dbcon = mysqli_connect(DB_SERVER, DB_USER, DB_PWD, DB_NAME);
			
			if(!$dbcon){
				die('error connecting to database');
			}
		?>