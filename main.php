<html>
	<title>HY-360 Project</title>
	<head><h1>Test Head</h1></head>
	
	<!--Data Base connection via php and PDO function-->
	<?php
    	$db_host = "localhost";
		$db_username = "root";
		$db_pass = "";
		$db_name = "hy360";
		
		//Connect to SQL
	   try{
	       $db = new PDO('mysql:host='.$db_host.';dbname'.$db_name,$db_username,$db_pass);
           echo "Συνδεθήκατε επιτυχώς στη βάση δεδομένων: $db_name";
		}catch(PDOException $e){
		   echo "Could not connect to server or database. Server respond: " .$e->getMessage();
           die;  
		}
		
		$db->query('SET NAMES utf8');	
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






