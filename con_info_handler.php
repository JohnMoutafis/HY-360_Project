<?php
    if(isset($_POST["new"])){
        include("con_info_new.html");
    }
    elseif (isset($_POST["update"])) {
        include("con_info_update.html");
    }
?>