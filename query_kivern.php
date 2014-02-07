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
		<h3 style="text-align: center">Επιλέξτε Κυβέρνηση: </h3>
		<?php
				echo"<form action='kiv_sel.php' method='post'>";

				echo"<select name='kivernisi'>";
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
		</div>
	</body>
</html>
	