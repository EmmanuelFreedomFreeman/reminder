<?php

if(isset($_POST['id'])){
    include_once '../connexionDAO.php';
    $get_connexion = new Connexion();
    $update = $get_connexion->Update_Play_Remind($_POST['id'],'stop');

}

?>