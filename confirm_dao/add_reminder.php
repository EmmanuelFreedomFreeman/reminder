<?php 

if(isset($_POST)){
    
    include_once '../connexionDAO.php';
    $get_connexion = new Connexion();                                                                                                                       		
    $insert_data = $get_connexion->Insert_Data($_POST['jc_num'],$_POST['date_arrive'],$_POST['customer'],$_POST['contact'],$_POST['radiator_model'],$_POST['job'],$_POST['date_finish'],$_POST['date_collect'],$_POST['play_remind'],$_POST['text_remind'],$_POST['fc'],$_POST['usd']);

    if($insert_data){
        echo 'the data has been inserted';
    }else{
        echo 'the insertion has failed';
    }

}

?>