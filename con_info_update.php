<?php
    include("Connect/connect_to_database.php");
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = strtoupper($_POST['name']);
        if(isset($_POST['age'])){
            $age = $_POST['age'];
            
            $q = "UPDATE βουλευτής SET Ηλικία=? WHERE Όνομα=?;";
            $query = $db->prepare($q);
            $result = $query->execute(array($age, $name));
        }
        if(isset($_POST['gender']) && !empty($_POST['gender'])){
            $gender = $_POST['gender'];
            
            $q = "UPDATE βουλευτής SET Φύλο=? WHERE Όνομα=?;";
            $query = $db->prepare($q);
            $result = $query->execute(array($gender, $name));
        }
        if(isset($_POST['party']) && !empty($_POST['party'])){
            $party = $_POST['party'];
            
            $q = "UPDATE βουλευτής SET Κόμμα=? WHERE Όνομα=?;";
            $query = $db->prepare($q);
            $result = $query->execute(array($party, $name));
        }
        if(isset($_POST['district']) && !empty($_POST['district'])){
            $district = $_POST['district'];
            
            $q = "UPDATE βουλευτής SET Εκλογική_περιφέρεια=? WHERE Όνομα=?;";
            $query = $db->prepare($q);
            $result = $query->execute(array($district, $name));
        }
        
        echo "Η ενημέρωση έγινε επιτυχώς!";
    } 
?>