<html>
	<title>HY-360 Project</title>
	<head><h1>Test Head</h1></head>
	
	<!--Data Base connection via php-->
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
	
		echo "Είστε συνδεδεμένος στην βάση δεδομένων: $db_base";
	?>
	<!--end-->
	
	<body>
		<p>
		     Εδώ θα βάλουμε το μπλά μπλά!!<br><br>
			 Τι θέλετε να κάνετε;
		</p>
	</body>	
	<form action="auxiliary_main_option_handler.php" method="post">
	    <input type="submit" value="Ενημέρωση" name="update"/>
	    <input type="submit" value="Αναζήτηση" name="query" />
	</form>
</html>






