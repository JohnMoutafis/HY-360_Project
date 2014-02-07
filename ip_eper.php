<html>
	<head></head>
	<body>
		<div id="form" style="position:absolute;top:25%;left:35%;">
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
			$result = mysql_query("SELECT επερώτηση.Όνομα_βουλευτή,βουλευτής.Κόμμα,count(Όνομα_βουλευτή) as os
									FROM  επερώτηση,βουλευτής
									WHERE βουλευτής.Όνομα=επερώτηση.Όνομα_βουλευτή
			 						group by Όνομα_βουλευτή
			 						having count(Όνομα_βουλευτή) =
									(SELECT max(cnt)
									FROM
									(SELECT επερώτηση.Όνομα_βουλευτή,count(Όνομα_βουλευτή) as cnt
									FROM  επερώτηση
			 						group by Όνομα_βουλευτή)x)
			 							") or die('Invalid query: ' . mysql_error());
			echo "<table border='1'>
				<tr><th>Όνομα Υπουργού</th><th>Κόμμα</th><th>Αριθμός Επερωτήσεων</th></tr>";
				while($row = mysql_fetch_array($result)){
					echo "<tr><td>".$row['Όνομα_βουλευτή']."</td>";
					echo "<td>".$row['Κόμμα']."</td>";
					echo "<td>".$row['os']."</td></tr>";
				}
			echo "</table>";	
		?>
		</div>
	</body>
</html>