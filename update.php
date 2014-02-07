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

<html>
    <head><h1>Επιλέξτε ποιά κατηγορία θέλετε να ενημερώσετε:</h1></head>
    <body>
        
        <br>
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
