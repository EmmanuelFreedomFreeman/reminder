
    <?php 
        
        include_once "connexionDAO.php";
        $get_connexion = new Connexion();    
        $select_all_reminders = $get_connexion->Select_Data();


        $myJSON = json_encode($select_all_reminders);

        echo $myJSON;

    ?>