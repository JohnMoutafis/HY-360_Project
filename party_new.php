<?php
    include("Connect/connect_to_database.php");
    if(isset($_POST['name']) && isset($_POST['percent']) && isset($_POST['congresmen']) && isset($_POST['b_p'])){
        $name = $_POST['name'];
        $percent = $_POST['percent'];
        $con = $_POST['congresmen'];
        $gov_name = $_POST['gov_name'];
        $b_p = $_POST['b_p'];
        
        $q = "INSERT INTO κόμμα VALUES (:name, :percent, :con, :gov_name, :b_p);";
        $query = $db->prepare($q);
        $result = $query->execute(array(
            ":name"      => $name,
            ":percent"   => $percent,
            ":con"       => $con,
            ":gov_name"  => $gov_name,
            ":b_p"       => $b_p
        ));
        
        echo "Το νέο κόμμα προστέθηκε επιτυχώς!";       
    }
?>