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
			$option= $_POST["voul_sel"]; 
			echo"<form action='vouleutes.php' method='post'>";
			if(strcmp($option,"περιφέρεια")==0){
				
				echo"<select name='περιφέρειες'>";
				$result = mysql_query("SELECT * FROM βουλευτής");
				if(!$result){
					die('Invalid query: ' . mysql_error());
				}
				echo"<option selected='selected'> </option>";
				while($row = mysql_fetch_array($result)){
					echo"<option value=".$row['Εκλογική_περιφέρεια'].">".$row['Εκλογική_περιφέρεια']."</option>";
				}	
				echo"</select>";
			}
			if(strcmp($option,"φύλο")==0){
				echo"<select name='περιφέρειες'>";
				echo"<option selected='selected'> </option>
					<option value='Α'>A</option>
					<option value='Γ'>Γ</option>";
				echo"</select>";
			}
				echo "<input type='submit'>";
				echo"</form>";
		?>
	</body>

</html>
