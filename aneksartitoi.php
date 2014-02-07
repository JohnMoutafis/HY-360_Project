<html>
	<title>Ανεξάρτητοι βουλευτές</title>
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
			if(isset($_POST['independant'])){
				$option=$_POST['independant'];
				$q="SELECT  βουλευτής.Όνομα ,βουλευτής.Ημερ_ανεξαρτητοποίησης FROM βουλευτής 
						INNER JOIN βουλευτική_περίοδος
						ON βουλευτής.Κόμμα='ΑΝΕΞΑΡΕΤΗΤΟΙ' OR  βουλευτής.Κόμμα='ΑΝΕΞΑΡΤΗΤΟΙ_ΔΗΜΟΚΡΑΤΙΚΟΙ_ΒΟΥΛΕΥΤΕΣ'
						AND βουλευτική_περίοδος.Τίτλος='".$option."''"." AND βουλευτική_περίοδος.Ημ_Έναρξης = βουλευτής.Ημερ_ανεξαρτητοποίησης
						AND βουλευτική_περίοδος.Ημ_Λήξης = βουλευτής.Ημερ_ανεξαρτητοποίησης";
				$result=mysql_query($q) or die('Invalid query: ' . mysql_error());
				echo "<table border='1'>
							<tr><th>Όνομα βουλευτή</th><th>Ημερομηνία ανεξαρτητοποίησης</th></tr>";
				while($row=mysql_fetch_array($result)){
					echo"<tr> <td>".$row['Όνομα']." </td> <td>".$row['Ημερ_ανεξαρτητοποίησης']. "</td> </tr>";
				}
				
				
			}
		?>
		</div>
	</body>
</html>