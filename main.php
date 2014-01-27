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
	
		echo "����� ������������ �� ��� ���� ���������: $db_base";
	?>
	<!--end-->
	
	<body>
		<p>
		    ��� �� ������� �� ���� ���� ����!!<br><br>
			�� �� ������ �� ������;
		</p>
	</body>	
	<form action="auxiliary_main_option_handler.php" method="post">
	    <input type="submit" value="���������" name="update"/>
	    <input type="submit" value="���������" name="query" />
	</form>
</html>






