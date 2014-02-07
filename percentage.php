
	<html>
		<title>Ποσόστωση βουλευτών</title>
		<head>
			<link rel="stylesheet" type="text/css" href="mystyle.css">
		</head>
		<div id="form" style="position:absolute;top:25%;left:35%;">
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
				$option= $_POST['percent'];
				if($option){
					
					$gender=substr($option,0, 2);
					$kind=substr($option,2,2);
					$subject=substr($option, 4);
				
					if(strcmp($kind,"Κ")==0){
						$joinresult=mysql_query("SELECT	count(*)
											FROM βουλευτής
											INNER JOIN κόμμα
											ON	βουλευτής.Φύλο='".$gender."'"." AND κόμμα.Ονομασία='".$subject."'"." 
											AND βουλευτής.Κόμμα='".$subject."'") or die('Invalid query: ' . mysql_error());
						$result=mysql_query("SELECT Αρ_Βουλευτών FROM κόμμα WHERE Ονομασία='".$subject."'") or die('Invalid query: ' . mysql_error());
						
						$joinrow = mysql_fetch_array($joinresult);
						$row=mysql_fetch_array($result);
						
						if($row['Αρ_Βουλευτών']==0){
							$percentage=0;
						}
						else{
							$percentage =$joinrow['count(*)']/$row['Αρ_Βουλευτών'];
						}
						echo "<p>Το ποσοστο ".$gender." στο κόμμα ".$subject." ειναι :".$percentage."%!</p><br>";
					}
					else if(strcmp($kind,"Π")==0){
						$result=mysql_query("SELECT	count(*) FROM βουλευτής WHERE Φύλο='".$gender."'"
												."AND Εκλογική_περιφέρεια='".$subject."'") or die('Invalid query: ' . mysql_error());
						$general_result=mysql_query("SELECT count(*) FROM βουλευτής WHERE Εκλογική_περιφέρεια='".$subject."'") or die('Invalid query: ' . mysql_error());
						
						$row=mysql_fetch_array($result);
						$genrow = mysql_fetch_array($general_result);
						if($genrow['count(*)']==0){
							$percentage=0;
						}
						else{
							$percentage =$row['count(*)']/$genrow['count(*)'];
						}
						echo "<p>Το ποσοστο ".$gender." στην εκλογική περιφέρεια ".$subject." ειναι :".$percentage."%!</p><br>";
					}	
				}
				else{
					echo " DOES NOT EXIST ";
				}
			
			?>
		</body>
		</div>
	</html>