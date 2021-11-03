<?php

	class Connexion {
		function getConnexion() {
			try {
				$host = 'mysql:host=localhost;dbname=dorime';
				$user = 'root';
				$pwd = '';
				$bdd = new PDO($host, $user, $pwd,
				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			
			} catch(Exception $e) {
				die('Erreur : '.$e->getMessage());
			}
			
			return $bdd;
		}
        						
        function Insert_Data($jc_num,$date_arrive,$customer,$contact,$radiator_model,$job,$date_finish,$date_collect,$play_remind,$text_remind,$fc,$usd){
            $req=$this->getConnexion()->prepare('insert into jobcard(jc_num,date_arrive,customer,contact,radiator_model,job,date_finish,date_collect,play_remind,text_remind,fc,usd)VALUES(:jc_num,:date_arrive,:customer,:contact,:radiator_model,:job,:date_finish,:date_collect,:play_remind,:text_remind,:fc,:usd)');
            $r=$req->execute(array(
                'jc_num'=>$jc_num,'date_arrive'=>$date_arrive,'customer'=>$customer,'contact'=>$contact,'radiator_model'=>$radiator_model,'job'=>$job,'date_finish'=>$date_finish,'date_collect'=>$date_collect,'play_remind'=>$play_remind,'text_remind'=>$text_remind,'fc'=>$fc,'usd'=>$usd
            ));
            if ($r==true){
                return true;
            }else{
                return false;
            }
        }
        function Select_Data(){
            $req=$this->getConnexion()->prepare('select * from jobcard');
            $req->execute(array(
               
            ));
            return $req->fetchAll();
        }

        function Select_Data_By_Id($id){
            $req=$this->getConnexion()->prepare('select * from jobcard where id=:id');
            $req->execute(array(
               'id'=>$id
            ));
            return $req->fetchAll();
        }

        function Select_DataById($id){
            $req=$this->getConnexion()->prepare('select * from jobcard where id=:id');
            $req->execute(array(
               'id'=>$id
            ));
            return $req->fetchAll();
        }
        
        function Update_Data($id,$jc_num,$date_arrive,$customer,$contact,$radiator_model,$job,$date_finish,$date_collect,$play_remind,$text_remind,$fc,$usd){
            $req=$this->getConnexion()->prepare('update jobcard set jc_num=:jc_num,date_arrive=:date_arrive,customer=:customer,contact=:contact,radiator_model=:radiator_model,job=:job,date_finish=:date_finish,date_collect=:date_collect,play_remind=:play_remind,text_remind=:text_remind,fc=:fc,usd=:usd WHERE id=:id');
            $r=$req->execute(array(
                'id'=>$id,'jc_num'=>$jc_num,'date_arrive'=>$date_arrive,'customer'=>$customer,'contact'=>$contact,'radiator_model'=>$radiator_model,'job'=>$job,'date_finish'=>$date_finish,'date_collect'=>$date_collect,'play_remind'=>$play_remind,'text_remind'=>$text_remind,'fc'=>$fc,'usd'=>$usd
            ));
            if ($r==true){
                return true;
            }else{
                return false;
            }
        }

        function Update_Play_Remind($id,$play_remind){
            $req=$this->getConnexion()->prepare('update jobcard set play_remind=:play_remind WHERE id=:id');
            $r=$req->execute(array(
                'id'=>$id,'play_remind'=>$play_remind
            ));
            if ($r==true){
                return true;
            }else{
                return false;
            }
        }
    





}

?>

