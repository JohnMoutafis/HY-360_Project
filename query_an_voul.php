<html>
	<title>Αναζητήσεις</title>
	<head>
		<link rel="stylesheet" type="text/css" href="mystyle.css">
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
	?>
	<div id="form" style="position:absolute;top:25%;left:35%;">
		<h3>Ανεξάρτητοι βουλευτές ανά κυβέρνηση</h3>
		<?php
			$result=mysql_query("SELECT Τίτλος FROM βουλευτική_περίοδος");
			echo"<form action='aneksartitoi.php' method='post''>";
			echo "<select name='independant'>
					<option selected='selected'></option>";
			while($row=mysql_fetch_array($result)){
				echo"<option value=".$row['Τίτλος'].">".$row['Τίτλος']."</option>";
			}
			echo"</select>";
			echo "<input type='submit'>";
			echo"</form>";
		?>
	</div>
	</body>
</html>
	