<html>
	<title>Αναζητήσεις</title>
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
	?>
		<h3 style="text-align: center">Αναζήτηση Υπουργών.</h3>
		<h3 style="text-align: center">Επιλέξτε Βουλευτική Περίοδο </h3>
		<?php
				echo"<form action='gov_sel.php' method='post' style='text-align:center;'>";

				echo"<select name='voul_periodos'>";
					$result = mysql_query("SELECT * FROM βουλευτική_περίοδος");
					if(!$result){
						die('Invalid query: ' . mysql_error());
					}
					echo"<option selected='selected'> </option>";
					while($row = mysql_fetch_array($result)){
						echo"<option value=".$row['Τίτλος'].">".$row['Τίτλος']."</option>";
					}	
				echo"</select>";

				echo "<input type='submit'>";
			echo"</form>";
		
		?>
		</div>
	</body>
</html>
	