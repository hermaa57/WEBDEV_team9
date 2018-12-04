<?php
			DEFINE ('DB_USER', 'team9');
			DEFINE ('DB_PSWD', 'j412');
			DEFINE ('DB_HOST', 'localhost');
			DEFINE ('DB_NAME', 'team9');
			
			$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);
			
			if(!$dbcon){
				die('error connecting to database');
			}
		?>