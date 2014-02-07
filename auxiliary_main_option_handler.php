<?php
    if(isset($_POST["update"])){
        include "update.html";
    }
    elseif(isset($_POST["query"])){
        include "newquery.php";
    }
?>