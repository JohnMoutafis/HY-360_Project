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
			$search1= $_POST["κυβέρνησεις"];	
			if( $search1 != NULL ){
				$result = mysql_query("SELECT * FROM υπουργός WHERE Όνομα_κυβέρνησης='".$search1."'") or die('Invalid query: ' . mysql_error());
				echo "<table border='1'>
					<tr><th>Όνομα Υπουργού</th><th>Κόμμα</th></tr>";
					while($row = mysql_fetch_array($result)){
						echo "<tr><td>".$row['Όνομα']."</td>";
						if( $row['Κόμμα'] != NULL ){
							echo "<td>".$row['Κόμμα']."</td></tr>";
						}
						else{
							echo "<td>ΝΑ</td></tr>";
						}
					}
				echo "</table>";
			}
			else{
				echo "DOESNOT EXIST";
			}		
		?>
	</body>
</html>