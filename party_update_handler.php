<?php
    if(isset($_POST["new"])){
        include("party_new.html");
    }
    elseif (isset($_POST["update"])) {
        include("party_exist_update.html");
    }
?>