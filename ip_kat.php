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
			$result = mysql_query("SELECT υπουργός.Όνομα,χαρτοφυλάκιο.Κατηγορία,επάγγελμα_ατόμων.Επάγγελμα
									FROM υπουργός,χαρτοφυλάκιο,επάγγελμα_ατόμων,επάγγελμα
										WHERE υπουργός.Όνομα=χαρτοφυλάκιο.Όνομα_Υπουργού 
										and χαρτοφυλάκιο.Όνομα_Υπουργού=επάγγελμα_ατόμων.Όνομα_Ατόμου 
										and επάγγελμα_ατόμων.Επάγγελμα=επάγγελμα.Όνομα 
										and επάγγελμα.Θεματική_κατηγορία=χαρτοφυλάκιο.Κατηγορία
										group by υπουργός.Όνομα") or die('Invalid query: ' . mysql_error());
			echo "<table border='1'>
				<tr><th>Όνομα Υπουργού</th><th>Επάγγελμα</th><th>Χαρτοφυλάκιο</th></tr>";
				while($row = mysql_fetch_array($result)){
					echo "<tr><td>".$row['Όνομα']."</td>";
					echo "<td>".$row['Κατηγορία']."</td></tr>";
				}
			echo "</table>";	
		?>
		</div>
	</body>
</html>