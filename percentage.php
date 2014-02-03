<body>
	<html>
		<title>Ποσόστωση βουλευτών</title>
		<head></head>
		<body>
			<?php
				$db_host = "localhost";
				$db_username = "root";
				$db_pass = "";
				$db_base = "hy360";
				//comment
				//Connect to SQL
				@mysql_connect($db_host, $db_username, $db_pass) or die ("Could not connect to MySQL...");
			    //Connect to specific database
				@mysql_select_db($db_base) or die ("No database");
				@mysql_query('SET NAMES utf8');
				$option= $_POST["komma"];
				$result=mysql_query("SELECT Όνομα FROM βουλευτής WHERE Φύλο");
			?>
		</body>
	</html>
</body>