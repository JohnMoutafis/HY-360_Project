<?php
    //Database info
    $db_host = "localhost";
    $db_username = "root";
    $db_pass = "";
    $db_name = "hy360";
            
    try{
        $db = new PDO('mysql:host='.$db_host.';dbname'.$db_name,$db_username,$db_pass);
    }catch(PDOException $e){
        echo "Could not connect to server or database. Server respond: " .$e->getMessage();
        die;  
    }
        
    $db->query('SET NAMES utf8');
    $db->exec('USE ' . $db_name . ';');
?>