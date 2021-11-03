<?php 

if(isset($_POST)){
     
    include_once 'connexionDAO.php';
    $get_connexion = new Connexion();   

    $get_data = $get_connexion->Select_DataById($_POST['id']);

    if(count($get_data)>0){
        ?>
    <h1 style='text-align:center'>EDIT THE JOB CARD </h1>
        <div class="form-group" style='width:50%'>
        
                <label for="email">N* Job Card :</label>
                <input type="number" class="form-control" id="jc_num" value='<?php echo $get_data[0]['jc_num']?>'>
            </div>
            <div class="form-group">
                <label for="email">CUSTOMER :</label>
                <input type="text" class="form-control" id="customer" value='<?php echo $get_data[0]['customer']?>'>
            </div>
            <div class="form-group">
                <label for="email">CONTACT :</label>
                <input type="text" class="form-control" id="contact" value='<?php echo $get_data[0]['contact']?>' >
            </div>
            <div class="form-group">
                <label for="email">DATE ARRIVE :</label>
                <input type="datetime-local" class="form-control" id="date_arrive" value='<?php echo $get_data[0]['date_arrive']?>'>
            </div>
            <div class="form-group">
                <label for="email">RADIATOR MODEL :</label>
                <input type="text" class="form-control" id="radiator_model" value='<?php echo $get_data[0]['radiator_model']?>'>
            </div>
            
            <div class="form-group">
                <label for="comment">JOB TO BE DONE :</label>
                <textarea class="form-control" rows="5" id="job"><?php echo $get_data[0]['job']?></textarea>
            </div>
            <div class="form-group">
                <label for="email">DATE TO FINISH :</label>
                <input type="datetime-local" class="form-control" id="date_finish" value='<?php echo $get_data[0]['date_finish']?>'>
            </div>
            <div class="form-group">
                <label for="email">DATE COLLECTED :</label>
                <input type="datetime-local" class="form-control" id="date_collect" value='<?php echo $get_data[0]['date_collect']?>'>
            </div>
            
            <div class="form-group">
                <label for="email">AMOUNT IN FC :</label>
                <input type="number" class="form-control" id="fc" value='<?php echo $get_data[0]['fc']?>'>   
            </div>
            <div class="form-group">
                <label for="email">AMOUNT IN USD :</label>
                <input type="number" class="form-control" id="usd" value='<?php echo $get_data[0]['usd']?>'>   
            </div>
            
            <div class="form-group">
                <label for="email">PLAY REMINDER :</label>
                <input type="text" class="form-control" name="" id="play_remind" value='<?php echo $get_data[0]['play_remind']?>' >  
            </div>
            <div class="form-group">
                <label for="comment">TEXT TO BE PLAYED :</label>
                <textarea class="form-control" rows="5" id="text_remind"><?php echo $get_data[0]['text_remind']?></textarea>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default" id='submit_edit'>Submit</button>
                </div>
            </div>



        <?php
    }



}

?>




<script>
           // $('#container-add').hide()
           

           $('#submit_edit').click(()=>{

            const remind = {
                id: <?php echo $_POST['id']; ?>,
                jc_num:$('#jc_num').val(),	
                date_arrive:$('#date_arrive').val()	,
                customer:$('#customer').val(),	
                contact:$('#contact').val()	,
                radiator_model:$('#radiator_model').val(),	
                job:$('#job').val()	,
                date_finish:$('#date_finish').val()	,
                date_collect:$('#date_collect').val(),	
                play_remind:$('#play_remind').val()	,
                text_remind:$('#text_remind').val()	,
                fc:$('#fc').val(),
                usd:$('#usd').val(),
           }


            
            $.post( "confirm_dao/modif_reminder.php", remind)
                .done(function( data ) {
                    alert(data );
                    //if(data == 'the data has been updated'){    
                        $("#container-add").load( "./modif_reminder.php" );
                   // }
                });

           })
        </script>