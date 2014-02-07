<html>
	<title>Επιλογή ποσόστωσης</title>
	<head>
	</head>
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
			$option= $_POST["posostosi"];
			if($option){
				echo "<form action='percentage.php' method='post'>
						<select name='percent'>
							<option selected=selected></option>";
				if(strcmp($option,"ΑΚ")==0 || strcmp($option,"ΓΚ")==0){
										
					$result=mysql_query("SELECT Ονομασία FROM κόμμα");
					while($row = mysql_fetch_array($result)){
						echo "<option value=".$option.$row['Ονομασία'].">".$row['Ονομασία']. "</option>";
					}			
				}
				else if(strcmp($option,"ΑΠ")==0 || strcmp($option,"ΓΠ")==0){
					$result=mysql_query("SELECT DISTINCT Εκλογική_περιφέρεια FROM βουλευτής ORDER BY Εκλογική_περιφέρεια");
					while($row = mysql_fetch_array($result)){
						echo "<option value=".$option.$row['Εκλογική_περιφέρεια'].">".$row['Εκλογική_περιφέρεια']. "</option>";
					}
				}
				
				echo"	</select>
						<input type='submit'>
						</form>";	
			}
			else{
				echo " DOES NOT EXIST ";
			}
		 
		?>
		</div>
	</body>
</html>