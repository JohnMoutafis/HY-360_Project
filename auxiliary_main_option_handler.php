<?php
    if(isset($_POST["update"])){
        include "update.php";
    }
    elseif(isset($_POST["query"])){
        include "newquery.php";
    }
?>