<html>
	<title>Αναζητήσεις</title>
	<head>
		<link rel="stylesheet" type="text/css" href="mystyle.css">
	</head>
	
	<body>
		<div id="form" style="position:absolute;top:25%;left:35%;">
		<h3 style="text-align: center">Αναζήτηση Ποσόστωσης </h3>
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
		</div>
	</body>
</html>
	