<?php
    include("Connect/connect_to_database.php");
    if (!empty($_POST['name'])) {
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
        if(!empty($_POST['ind_date'])){
            $ind_date = $_POST['ind_date'];
          
            $q = "UPDATE βουλευτής SET Ημερ_ανεξαρτητοποίησης=? WHERE Όνομα=?;";
            $query = $db->prepare($q);
            $result = $query->execute(array($ind_date, $name));
        }
        
        echo "Η ενημέρωση έγινε επιτυχώς!";
    }
    else {
	    echo "Δεν έχετε δώσει σωστό όνομα, ή το όνομα δεν υπάρχει.<br>Πατήστε OK για να προσπαθήσετε ξανά";
        echo '<form action="con_info_update.html">';
        echo '<input type="submit" name="case_submit" value="OK">';
        echo '</form>';
    }
?>