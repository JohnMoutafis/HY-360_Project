<html>
	<head>
		<link rel="stylesheet" type="text/css" href="mystyle.css">
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
			$option= $_POST['choice'];
			if($option){
				if(strcmp($option,"Α")==0 || strcmp($option,"Γ")==0){
						
					$result = mysql_query("SELECT Όνομα FROM βουλευτής WHERE φύλο='".$option."'") or die('Invalid query: ' . mysql_error());
					
					echo "<table border='1'>
							<tr><th>Όνομα βουλευτή</th></tr>";
					while($row = mysql_fetch_array($result)){
						echo "<tr><td>".$row['Όνομα']."</td></tr>";
					}
					echo "</table>";
				}
				
				$kind=substr($option,0,2);
				$subject=substr($option,2);			
				if(strcmp($kind,"Π")==0){
	
					$result = mysql_query("SELECT Όνομα FROM βουλευτής WHERE Εκλογική_περιφέρεια='".$subject."'") or die('Invalid query: ' . mysql_error());
					echo "<table border='1'>
							<tr><th>Όνομα βουλευτή</th></tr>";
					while($row = mysql_fetch_array($result)){
						echo "<tr><td>".$row['Όνομα']."</td></tr>";
					}
					echo "</table>";
				}
				else if(strcmp($kind,"Ε")==0){
					$result = mysql_query("SELECT Όνομα_Ατόμου FROM επάγγελμα_ατόμων WHERE Επάγγελμα='".$subject."'") or die('Invalid query: ' . mysql_error());
					echo "<table border='1'>
							<tr><th>Όνομα βουλευτή</th></tr>";
					while($row = mysql_fetch_array($result)){
						echo "<tr><td>".$row['Όνομα_Ατόμου']."</td></tr>";
					}
					echo "</table>";
				}
			}
			else{
				echo " DOES NOT EXIST ";
			}
		?>
		</div>
	</body>
</html>