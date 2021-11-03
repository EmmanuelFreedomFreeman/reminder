


<script>

///////////////////   get days between two dates ///////////////////////////

    function calculate_date(today,endDate){
        
        const days = parseInt((endDate - today) / (1000 * 60 * 60 * 24));
        const hours = parseInt(Math.abs(endDate - today) / (1000 * 60 * 60) % 24);
        const minutes = parseInt(Math.abs(endDate.getTime() - today.getTime()) / (1000 * 60) % 60);
        const seconds = parseInt(Math.abs(endDate.getTime() - today.getTime()) / (1000) % 60); 

        return {days: days,hours: hours, minutes: minutes,seconds: seconds}
    }


</script>

<div id='alarm_it_1'>

</div>

<?php 
    include_once "connexionDAO.php";
    $get_connexion = new Connexion();    
    $select_all_reminders = $get_connexion->Select_Data();


    foreach($select_all_reminders as $key=>$value){
        if($value["date_finish"]!=''){
            ?>
            <script>
                var d_now = new Date()
                var date_finish = new Date("<?php echo $value["date_finish"]; ?>")
                if(date_finish<=d_now){
                    console.log('supposer etre fini')
    
                }else{
                    console.log('on y travaille')
    
                    
                    var input = `
                        <div class="card" style="width: 100%;margin-bottom:3%;background-color:white;padding:2%" id="ee<?php echo $key; ?>" >
                            <img class="card-img-top" style="width:95%" src="assets/images/MCB07430.gif" alt="Card image cap">
                            <div class="card-body">
                                <div style="display:flex;justify-content:space-between">
                                    <h5 class="card-title">JC N* : <?php echo $value["jc_num"]; ?></h5>
                                    <h5 class="card-title">Time to finish : <?php echo $value["date_finish"]; ?></h5>
                                </div>
                                <div style="display:flex;justify-content:space-between">
                                    <h5 class="card-title"><?php echo $value["customer"]; ?> tel : <?php echo $value["contact"]; ?></h5>
                                    
                                </div>
                                <h5 class="card-title" id="tt<?php echo $key; ?>"></h5>
                                <p class="card-text"><?php echo $value["job"]; ?></p>
    
                                <div style="display:flex;" >
                                    <button class="btn btn-primary" style="margin-left:2%" id="edit<?php echo $key; ?>">Edit the jobcard</button>
                                    <button class="btn btn-primary" style="margin-left:2%" id="see<?php echo $key; ?>" >See Details</button>
                                </div>
                            </div>
                        </div>
                        `;
    
                        const endDate = new Date("<?php echo $value["date_finish"]; ?>")
                        setInterval(()=>{
                            
                            const today = new Date();
                            // const endDate = new Date('2021/12/25 00:00:00:00');

                            if(today>=endDate){
                                $('#ee<?php echo $key; ?>').html('')
                            }
                            
    
                            var on_it = 'days : '+calculate_date(today,endDate).days+' Hours : '+calculate_date(today,endDate).hours +' Minutes : '+calculate_date(today,endDate).minutes+' Seconds : '+calculate_date(today,endDate).seconds
                            
                            $("#tt<?php echo $key; ?>").html(on_it)
    
                        },1000)
    
                        $('#alarm_it_1').append(input)
    
                        $("#see<?php echo $key; ?>").click(()=>{
                            var detail = "jc n*: <?php echo $value["jc_num"]; ?>\nDate arrive : <?php echo $value["date_arrive"]; ?>\nCustomer:<?php echo $value["customer"]; ?>\nContact:<?php echo $value["contact"]; ?>\nRadiator Model : <?php echo $value["radiator_model"]; ?>\nDate To Finish: <?php echo $value["date_finish"]; ?>\nDate Collected : <?php echo $value["date_collect"]; ?>\nFC: <?php echo $value["fc"]; ?>\nUSD: <?php echo $value["usd"]; ?>"
                            alert(detail)
                        })
                        $("#edit<?php echo $key; ?>").click(()=>{
                            
                            $.post( "modifier_reminder.php", {id:<?php echo $value["id"]; ?>})
                            .done(function( data ) {
                                
                                $("#container-add").html(data);
                            });
                            
                        })
    
                    
                    
                }
            </script>
    
            <?php
        }
        
    }


    ?>
