<?php
    include("Connect/connect_to_database.php");
    if (isset($_POST['name'])) {
        $name = strtoupper($_POST['name']);
        if(isset($_POST['percent'])){
            $percent = $_POST['percent'];
            
            $q = "UPDATE κόμμα SET Εκλογικό ποσοστό=? WHERE Ονομασία=?;";
            $query = $db->prepare($q);
            $result = $query->execute(array($percent, $name));
        }
        if(isset($_POST['con'])){
            $con = $_POST['con'];
            
            $q = "UPDATE κόμμα SET Αρ_Βουλευτών=? WHERE Ονομασία=?;";
            $query = $db->prepare($q);
            $result = $query->execute(array($con, $name));
        }
        if(isset($_POST['gov_name'])){
            $gov_name = $_POST['gov_name'];
            
            $q = "UPDATE κόμμα SET Όνομα_Κυβέρνησης=? WHERE Ονομασία=?;";
            $query = $db->prepare($q);
            $result = $query->execute(array($gov_name, $name));
        }
        if(isset($_POST['b_p'])){
            $b_p = $_POST['b_p'];
            
            $q = "UPDATE κόμμα SET Όνομα_Κυβέρνησης=? WHERE Ονομασία=?;";
            $query = $db->prepare($q);
            $result = $query->execute(array($b_p, $name));
        }
        
        echo "Η ενημέρωση έγινε επιτυχώς!";
    } 
?>