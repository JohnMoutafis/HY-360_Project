<html
	<head>
		<link rel="stylesheet" type="text/css" href="mystyle.css">
	</head>
	<body>
		<div id="form" style="position:absolute;top:25%;left:35%;">
			<h3 style='text-align: center'>Επιλέξτε</h3>
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
			if($option){
				echo"<form action='vouleutes.php' method='post'>
						<select name='choice'>
							<option selected='selected'> </option>";
				if(strcmp($option,"περιφέρεια")==0){					
					$result = mysql_query("SELECT DISTINCT Εκλογική_περιφέρεια FROM βουλευτής ORDER BY  Εκλογική_περιφέρεια") or die('Invalid query: ' . mysql_error());
				
					while($row = mysql_fetch_array($result)){
						echo"<option value="."Π".$row['Εκλογική_περιφέρεια'].">".$row['Εκλογική_περιφέρεια']."</option>";
					}	
				}
				else if(strcmp($option,"φύλο")==0){
						echo"<option value='Α'>A</option>
							<option value='Γ'>Γ</option>";
				}
				else if (strcmp($option,"επάγγελμα")==0){
					$result=mysql_query("SELECT Όνομα FROM επάγγελμα") or die('Invalid query: ' . mysql_error());
					while($row=mysql_fetch_array($result)){
						echo"<option value="."Ε".$row['Όνομα'].">".$row['Όνομα']."</option>";
					}
				}
				echo"</select>
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
