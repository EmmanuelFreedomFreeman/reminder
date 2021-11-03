
       <h1 style='text-align:center'>ADD THE JOB CARD </h1>
       <div class="form-group" style='width:50%'>
            <label for="email">N* Job Card :</label>
            <input type="number" class="form-control" id="jc_num">
        </div>
        <div class="form-group">
            <label for="email">CUSTOMER :</label>
            <input type="text" class="form-control" id="customer">
        </div>
        <div class="form-group">
            <label for="email">CONTACT :</label>
            <input type="text" class="form-control" id="contact">
        </div>
        <div class="form-group">
            <label for="email">DATE ARRIVE :</label>
            <input type="datetime-local" class="form-control" id="date_arrive">
        </div>
        <div class="form-group">
            <label for="email">RADIATOR MODEL :</label>
            <input type="text" class="form-control" id="radiator_model">
        </div>
        
        <div class="form-group">
            <label for="comment">JOB TO BE DONE :</label>
            <textarea class="form-control" rows="5" id="job"></textarea>
        </div>
        <div class="form-group">
            <label for="email">DATE TO FINISH :</label>
            <input type="datetime-local" class="form-control" id="date_finish">
        </div>
        <div class="form-group">
            <label for="email">DATE COLLECTED :</label>
            <input type="datetime-local" class="form-control" id="date_collect">
        </div>
        
        <input type="text" name="" id="play_remind" hidden>
        <div class="form-group">
            <label for="email">AMOUNT IN FC :</label>
            <input type="number" class="form-control" id="fc">   
        </div>
        <div class="form-group">
            <label for="email">AMOUNT IN USD :</label>
            <input type="number" class="form-control" id="usd">   
        </div>
        <div class="form-group">
            <label for="comment">TEXT TO BE PLAYED :</label>
            <textarea class="form-control" rows="5" id="text_remind"></textarea>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default" id='submit'>Submit</button>
            </div>
        </div>


        <script>
           // $('#container-add').hide()
           

           $('#submit').click(()=>{

            $('#submit').hide()
            const remind = {
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


            
            $.post( "confirm_dao/add_reminder.php", remind)
                .done(function( data ) {
                    alert(data );
                });

           })
        </script>