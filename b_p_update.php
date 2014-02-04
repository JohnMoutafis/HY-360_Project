<?php
    include("Connect/connect_to_database.php");
    if(isset($_POST['title']) && isset($_POST['start_date']) && isset($_POST['end_date'])){
        $title = $_POST['title'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];

        $db->exec('USE hy360;');
        $q = "INSERT INTO βουλευτική_περίοδος VALUES (:title, :start_date, :end_date);";
        $query = $db->prepare($q);
        $result = $query->execute(array(
            ":title"      => $title,
            ":start_date" => $start_date,
            ":end_date"   => $end_date
        ));        
    }
?>