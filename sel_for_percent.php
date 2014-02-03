<html>
	<title>Επιλογή ποσόστωσης</title>
	<head>
	</head>
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
			$option= $_POST["posostosi"];
			if(strcmp($option,"ΑΚ")==0 || strcmp($option,"ΓΚ")==0){
				echo "<form action='peracentage.php' method='post'>
						<select name='komma'>
							<option selected=selected></option>";
							
				$result=mysql_query("SELECT Ονομασία FROM κόμμα");
				while($row = mysql_fetch_array($result)){
					echo "<option value=".$row['Ονομασία'].">".$row['Ονομασία']. "</option>";
				}
				echo"	</select>
					<input type='submit'>
					</form>";
					
			}
		 
		?>
	</body>
</html>