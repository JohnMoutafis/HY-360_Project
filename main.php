<html>
	<title>HY-360 Project</title>
	<head><h1>Test Head</h1></head>
	<!--Connect to a database using php script-->
	<?php
	   include("Connect/connect_to_database.php");
       echo "Συνδεθήκατε επιτυχώς στη βάση δεδομένων: $db_name";
	?>
	
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






