<?php
    if(isset($_POST['cases'])) {
        $case_value = $_POST['cases'];
        if($case_value=="B_P"){
            include("b_p_update.html");
        }
        elseif($case_value=="Party"){
            include("party_update.html");
        }
        elseif($case_value=="Con_Info"){
            include("con_info.html");
        }
        elseif($case_value=="Gov"){
            include("gov_info.html");
        }
        elseif ($case_value=="Per_Info") {
            include("person_info.html");
        }
    }
    
?>