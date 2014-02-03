<html>
	<title>Αναζητήσεις</title>
	<head>Αναζητήσεις</head>
	
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
		<h3>Αναζήτηση βουλευτών ανα: </h3>
		<form action="search.php" method="post">
			<select name="voul_sel">
				<option selected="selected">  </option>
				<option value="περιφέρεια">Περιφέρεια</option>
				<option value="φύλο">Φύλο</option>
				<option value="επάγγελμα">Επάγγελμα </option>
			</select>
			<input type="submit">
		</form>
		<h3>Αναζήτηση υπουργών κατά Βουλευτική Περίοδο: </h3>
		<?php
				echo"<form action='gov_sel.php' method='post'>";

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
		<h3>Αναζήτηση υπουργών κατά Κυβέρνηση: </h3>
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
			<h3>Περιφέρειες υπουργών κυβέρνησης: </h3>
				<?php
				echo"<form action='per_ip.php' method='post'>";

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
		<h3>Ποσόστωση</h3>
		<form action="sel_for_percent.php" method="post">
			<select name= 'posostosi'>
				<option selected='selected'></option>
				<option value="ΑΚ">Άντρών ανα κόμμα</option>
				<option value="ΑΠ">Άντρών ανα περιφέρεια</option>
				<option value="ΓΚ">Γυναικών ανα κόμμα</option>
				<option value="ΓΠ">Γυναικών ανα περιφέρεια</option>
			</select>
			<input type='submit'>
		</form>
		
		<h3>Υπουργοί με εππάγγελμα και χαρτοφυλάκιο στην ίδια κατηγορία</h3>
		<form action="ip_kat.php" method="post">

			<input type='submit'>
		</form>
	</body>
</html>
	