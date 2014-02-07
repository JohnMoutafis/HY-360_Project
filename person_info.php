<html>
	<head>
		<link rel="stylesheet" type="text/css" href="mystyle.css">
	</head>
<?php
    include("Connect/connect_to_database.php");
    if(!empty($_POST['name'])){
        $name = $_POST['name'];
        
        $q = "INSERT INTO άτομα VALUES (:name);";
        $query = $db->prepare($q);
        $result = $query->execute(array(
            ":name"      => $name
        ));
        
        echo "Το νέο άτομο προστέθηκε επιτυχώς!";       
    }
    else{
        echo "Δεν έχετε δώσει επαρκή στοιχεία για αυτή την ενημέρωση, πατήστε OK για να προσπαθήσετε ξανά";
        echo '<form action="person_info.html">';
        echo '<input type="submit" name="case_submit" value="OK">';
        echo '</form>';
    }
?>
</html>