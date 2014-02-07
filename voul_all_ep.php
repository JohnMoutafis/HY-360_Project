<html>
	<title>Αναζήτηση βουλευτών</title>
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
			$r1=mysql_query("SELECT επερώτηση.Όνομα_βουλευτή,επερώτηση.κατηγορία as table 
							FROM επερώτηση 			
							WHERE επερώτηση.κατηγορία IN ANY(SELECT Όνομα_Κατηγορίας FROM θεματική_κατηγορία) ") or die('Invalid query: ' . mysql_error());
			$r=mysql_query("SELECT επερώτηση.Όνομα_βουλευτή FROM επερώτηση , θεματική_κατηγορία 
							WHERE θεματική_κατηγορία.Όνομα_Κατηγορίας= table 
							
							(SELECT table FROM
							(SELECT επερώτηση.Όνομα_βουλευτή,επερώτηση.κατηγορία as table 
							FROM επερώτηση group by Όνομα_βουλευτή 
							WHERE επερώτηση.κατηγορία =ANY(SELECT Όνομα_Κατηγορίας FROM θεματική_κατηγορία)y)x)") or die('Invalid query: ' . mysql_error());
			
		?>
	</body>
</html>