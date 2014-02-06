<html>
	<title>Αναζήτηση επερωτήσεων</title>
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
			$result=mysql_query("SELECT count(*) FROM επερώτηση") or die('Invalid query: ' . mysql_error());
			$nameresult=mysql_query("SELECT περιγραφή FROM επερώτηση ORDER BY ημερομηνία") or die('Invalid query: ' . mysql_error());
			$row=mysql_fetch_array($result);
			echo $row['count(*)']."επερωτήσεις έχουν γίνει στην βουλή";
			echo "<ol>";
			while($namerow=mysql_fetch_array($nameresult)){
						echo"<li>".$namerow['περιγραφή']."</li>";
				
			}
			echo"</ol>";	
		?>
	</body>
</html>