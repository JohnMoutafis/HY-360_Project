<?php
    include("Connect/connect_to_database.php");
    if(isset($_POST['name']) && isset($_POST['party'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $party = $_POST['party'];
        $district = $_POST['district'];
        
        $q = "INSERT INTO βουλευτής VALUES (:name, :age, :gender, :party, :district);";
        $query = $db->prepare($q);
        $result = $query->execute(array(
            ":name"      => $name,
            ":age"   => $age,
            ":gender"       => $gender,
            ":party"  => $party,
            ":district"       => $district
        ));
        
        echo "Ο νέος βουλευτής προστέθηκε επιτυχώς!";       
    }
?>