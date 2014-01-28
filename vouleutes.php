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
			$search1= $_POST["περιφέρειες"];	
			if(strcmp($search1,"Α")==0 || strcmp($search1,"Γ")==0){
				$result = mysql_query("SELECT * FROM βουλευτής WHERE φύλο='".$search1."'") or die('Invalid query: ' . mysql_error());
				echo "<table border='1'>
						<tr><th>Όνομα βουλευτή</th></tr>";
				while($row = mysql_fetch_array($result)){
					echo "<tr><td>".$row['Όνομα']."</td></tr>";
				}
				echo "</table>";
			}			
			else{	
				$result = mysql_query("SELECT * FROM βουλευτής WHERE Εκλογική_περιφέρεια='".$search1."'") or die('Invalid query: ' . mysql_error());
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