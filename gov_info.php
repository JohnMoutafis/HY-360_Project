<?php
    include("Connect/connect_to_database.php");
    if(!empty($_POST['name']) && !empty($_POST['b_p']) && !empty($_POST['president'])){
        $name = $_POST['name'];
        $b_p = $_POST['b_p'];
        $president = $_POST['president'];
        
        $q = "INSERT INTO κυβέρνηση VALUES (:name, :b_p, :president);";
        $query = $db->prepare($q);
        $result = $query->execute(array(
            ":name"      => $name,
            ":b_p"       => $b_p,
            ":president" => $president
        ));
        
        echo "Η νέα κυβέρνηση προστέθηκε επιτυχώς!";       
    }
    else {
        echo "Δεν έχετε δώσει επαρκή στοιχεία για αυτή την ενημέρωση, πατήστε OK για να προσπαθήσετε ξανά";
        echo '<form action="gov_info.html">';
        echo '<input type="submit" name="case_submit" value="OK">';
        echo '</form>';
    }
?>