<?php
    include("Connect/connect_to_database.php");
    if(!empty($_POST['name']) && !empty($_POST['party']) && !empty($_POST['district'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $party = $_POST['party'];
        $district = $_POST['district'];
        $ind_date = $_POST['ind_date'];
        
        $q = "INSERT INTO βουλευτής VALUES (:name, :age, :gender, :party, :district, :ind_date);";
        $query = $db->prepare($q);
        $result = $query->execute(array(
            ":name"      => $name,
            ":age"       => $age,
            ":gender"    => $gender,
            ":party"     => $party,
            ":district"  => $district,
            ":ind_date"  => $ind_date
        ));
        
        echo "Ο νέος βουλευτής προστέθηκε επιτυχώς!";       
    }
    else{
        echo "Δεν έχετε δώσει επαρκή στοιχεία για αυτή την ενημέρωση.<br>Πατήστε OK για να προσπαθήσετε ξανά";
        echo '<form action="con_info_new.html">';
        echo '<input type="submit" name="case_submit" value="OK">';
        echo '</form>';
    }
?>