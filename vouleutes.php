<html>
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
			$search= $_POST["choice"];	
			echo $search;
			echo strlen($search);
			if(strcmp($search,"Α")==0 || strcmp($search,"Γ")==0){
				$result = mysql_query("SELECT * FROM βουλευτής WHERE φύλο='".$search."'") or die('Invalid query: ' . mysql_error());
				echo "<table border='1'>
						<tr><th>Όνομα βουλευτή</th></tr>";
				while($row = mysql_fetch_array($result)){
					echo "<tr><td>".$row['Όνομα']."</td></tr>";
				}
				echo "</table>";
			}			
			else if(strcmp(substr($search, 2),"Π")==0){
				$search=str_replace("Π", "", $search);	
				echo $search;
				$result = mysql_query("SELECT * FROM βουλευτής WHERE Εκλογική_περιφέρεια='".$search."'") or die('Invalid query: ' . mysql_error());
				echo "<table border='1'>
						<tr><th>Όνομα βουλευτή</th></tr>";
				while($row = mysql_fetch_array($result)){
					echo "<tr><td>".$row['Όνομα']."</td></tr>";
				}
				echo "</table>";
			}
			else if(strcmp(substr($search, 0),"Ε")==0){
				str_replace("Ε", "", $search);	
				$result = mysql_query("SELECT Όνομα_Ατόμου FROM επάγγελμα_ατόμων WHERE Επάγγελμα='".$search."'") or die('Invalid query: ' . mysql_error());
				echo "<table border='1'>
						<tr><th>Όνομα βουλευτή</th></tr>";
				while($row = mysql_fetch_array($result)){
					echo "<tr><td>".$row['Όνομα']."</td></tr>";
				}
				echo "</table>";
			}
				
		?>
	</body>
</html>