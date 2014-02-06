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
            echo "Πληροφορίες Βουλευτών";
        }
        elseif($case_value=="Gov"){
            echo "Κυβέρνηση";
        }
        elseif ($case_value=="Per_Info") {
            echo "Πληροφορίες Ατόμων";
        }
    }
    
?>

<html>
    <head></head>
    <body>
        <form action="update.php" method="post">
            <select name="cases" >
                <option value="def" >Επιλέξτε</option>
                <option value="B_P" >Βουλευτική Περίοδος</option>
                <option value="Party" >Κόμμα</option>
                <option value="Con_Info" >Πληροφορίες Βουλευτών</option>
                <option value="Gov" >Κυβέρνηση</option>
                <option value="Per_Info" >Πληροφορίες Ατόμων</option>
            </select> 
            <input type="submit" name="case_submit" value="Submit" />           
        </form>    
    </body>    
</html>
