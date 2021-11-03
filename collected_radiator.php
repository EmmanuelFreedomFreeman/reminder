<?php 
    include_once 'connexionDAO.php';
    $get_connexion = new Connexion();    
    $select_all_reminders = $get_connexion->Select_Data();


    foreach($select_all_reminders as $key=>$value){
        if($value['date_collect']!=''){
            ?>

            <div class="card" style="width: 100%;margin-bottom:3%;background-color:white;padding:2%">
            <img class="card-img-top" style='width:95%' src="assets\images\MCB07430.gif" alt="Card image cap">
            <div class="card-body">
                <div style='display:flex;justify-content:space-between'>
                    <h5 class="card-title">JC N* : <?php echo $value['jc_num']; ?></h5>
                    <h5 class="card-title">Collected : <?php echo $value['date_collect']; ?></h5>
                </div>
                <div style='display:flex;'>
                    <h5 class="card-title"><?php echo $value['customer']; ?> tel : </h5>
                    <h5 class="card-title"><?php echo $value['contact']; ?></h5>
                </div>
                <p class="card-text"><?php echo $value['job']; ?></p>

                <div style='display:flex;' >
                    <button class="btn btn-primary" style='margin-left:2%' id='edit<?php echo $key; ?>'>Edit the jobcard</button>
                    <button class="btn btn-primary" style='margin-left:2%' id='see<?php echo $key; ?>' >See Details</button>
                </div>
            </div>
            </div>

            <script>

                $('#see<?php echo $key; ?>').click(()=>{
                    var detail = 'jc n*: <?php echo $value['jc_num']; ?>\nDate arrive : <?php echo $value['date_arrive']; ?>\nCustomer:<?php echo $value['customer']; ?>\nContact:<?php echo $value['contact']; ?>\nRadiator Model : <?php echo $value['radiator_model']; ?>\nDate To Finish: <?php echo $value['date_finish']; ?>\nDate Collected : <?php echo $value['date_collect']; ?>\nFC: <?php echo $value['fc']; ?>\nUSD: <?php echo $value['usd']; ?>'
                    alert(detail)
                })
                $('#edit<?php echo $key; ?>').click(()=>{
                    
                    $.post( "modifier_reminder.php", {id:<?php echo $value['id']; ?>})
                    .done(function( data ) {
                        
                        $("#container-add").html(data);
                    });
                    
                })
            </script>

        <?php
        }else{
            
        }
    }
    
    ?>