<html
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
			$option= $_POST["voul_periodos"]; 
			echo"<h3>Επιλέξτε Κυβέρνηση: </h3>";
			echo"<form action='ipourgoi.php' method='post'>";

				echo"<select name='κυβέρνησεις'>";
					$result = mysql_query("SELECT * FROM κυβέρνηση");
					if(!$result){
						die('Invalid query: ' . mysql_error());
					}
					echo"<option selected='selected'> </option>";
					while($row = mysql_fetch_array($result)){
						echo"<option value=".$row['Όνομα_Κυβέρνησης'].">".$row['Όνομα_Κυβέρνησης']."</option>";
					}	
				echo"</select>";

				echo "<input type='submit'>";
			echo"</form>";
		?>
	</body>
</html>
