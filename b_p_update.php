<?php
    include("Connect/connect_to_database.php");
    if(!empty($_POST['title'])){
        $title = $_POST['title'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];

        $q = "INSERT INTO βουλευτική_περίοδος VALUES (:title, :start_date, :end_date);";
        $query = $db->prepare($q);
        $result = $query->execute(array(
            ":title"      => $title,
            ":start_date" => $start_date,
            ":end_date"   => $end_date
        ));        
    }
    else{
        echo "Δεν έχετε δώσει επαρκή στοιχεία για αυτή την ενημέρωση, πατήστε OK για να προσπαθήσετε ξανά";
        echo '<form action="b_p_update.html">';
        echo '<input type="submit" name="case_submit" value="OK">';
        echo '</form>';
    }
?>