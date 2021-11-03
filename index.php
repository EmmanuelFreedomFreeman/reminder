<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery2.0.3.min.js"></script>
    <script src="./dist/jquery.table2excel.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <title>system reminder</title>
</head>
<body style='padding:3%;' >
	

<div id='iframe'>

  
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div style='display:flex;justify-content:space-between' class="navbar-header" onclick='$("#container-add").html( `<img src="assets/images/VPBG81@facebook.gif" alt="" style="width: 100%;">` );' >
      <a class="navbar-brand" href="#">Reminder Jobcard</a>
      <p style='color:white;margin-top: 15px;' id='lang'>lang: en-US</p>
    </div>
    <ul class="nav navbar-nav">
      <li class="active" onclick='$("#container-add").load( "./add_reminder.php" );' ><a href="#">Add Data</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">click here
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li onclick='$("#container-add").load( "./modif_reminder.php" );' ><a href="#">Edit data & looking throught the list</a></li>
          <li onclick='$("#container-add").load( "./alarm.php" );' ><a href="#">looking the list of the alarm</a></li>
          <li onclick='$("#container-add").load( "./working_on.php" );' ><a href="#">radiator that we are working on</a></li>
          <li onclick='$("#container-add").load( "./collected_radiator.php" );' ><a href="#">looking the radiators that has been collected</a></li>
          <li onclick='$("#container-add").load( "./not_collected_radiators.php" );' ><a href="#">radiators that has not been collected yet</a></li>
          <li onclick='$("#container-add").load( "./export_to_radiators.php" );' ><a href="#">export to excel the liste of the radiators</a></li>
          <li id='test_voice' ><a href="#">test voice</a></li>
        </ul>
      </li>
      
    </ul>
  </div>
</nav>

<div id='container'>

   

    <div style='display:flex;justify-content:space-between;'>
    <p style='padding:2%;background-color:black;color:white;border-radius:10px 10px' id='alarm_on'>Alarm : Off</p>
    <p style='padding:2%;background-color:black;color:white;border-radius:10px 10px' id='see_details_alarm' >See Details Alarm</p>
    <p style='padding:2%;background-color:black;color:white;border-radius:10px 10px'  id='stop_it' style='margin-bottom:3%;'>stop speaking</p>
    </div>
    <div id='container-add' class="jumbotron" style='padding:3%;'> 
    <img src='assets\images\VPBG81@facebook.gif' alt='' style='width: 100%;'>
    </div>

    

</div>

</div>
    

<script>

    






///////////////////////////    voice functions  //////////////////////////////////
var lang = 'en-US'
const utterance = new SpeechSynthesisUtterance()
utterance.addEventListener('end', () => {
 // textInput.disabled = false
})
utterance.addEventListener('boundary', e => {
  currentCharacter = e.charIndex
})

function playText(text) {
  if (speechSynthesis.paused && speechSynthesis.speaking) {
    return speechSynthesis.resume()
  }
  if (speechSynthesis.speaking) return
  utterance.text = text
  utterance.rate = 1
  utterance.lang = lang;
  //textInput.disabled = true
  speechSynthesis.speak(utterance)
}

function pauseText() {
  if (speechSynthesis.speaking) speechSynthesis.pause()
}

function stopText() {
  speechSynthesis.resume()
  speechSynthesis.cancel()
}

///////////////////////////    end voice functions  //////////////////////////////////

var id_customer = 0;
$( '#alarm_on' ).click(function() {
    
    $( '#alarm_on' ).html('Alarm : On ')
    
    setInterval(() => {
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
          const myObj = JSON.parse(this.responseText);
          
          $.each(myObj.reverse(), function( index, value ) {
            
              var d = new Date()
              var dd = new Date(value.date_finish)

              if((d>=dd) && (value.play_remind=='') && (value.date_finish!='')){
                id_customer = value.id
                if(lang == 'en-US'){
                  playText(`the radiator of ${value.customer} is supposed to be finished jobcard number ${value.jc_num}`)
                }else{
                  playText(`le radiateur du client ${value.customer} est supposer etre finie bon de travaille numero ${value.jc_num}`)
                } 
                return false
              }
          });
        }
        xmlhttp.open("GET", "data_json.php");
        xmlhttp.send();
  }, 3000);
  

});

$('#see_details_alarm').click(()=>{
  if(id_customer!=0){
    $.post( "./confirm_dao/see_alarm.php", {id:id_customer})
    .done(function( data ) {
      
        $("#container-add").html(data);
    });
  }else{
    alert('there is no alarm')
  }
})


$('#stop_it').click(()=>{

  
  if(id_customer!=0){
    stopText()
    $.post( "./confirm_dao/stop_alarm.php", {id:id_customer})
    .done(function( data ) {
      id_customer = 0;
      alert('the alarm is stopped')
        //$("#container-add").html(data);
    });
  }else{
    alert('there is no alarm')
  }
})


/////////////////////////// detect device  //////////////////////////////////
    

const deviceType = () => {
    const ua = navigator.userAgent;
    if (/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i.test(ua)) {
        return "tablet";
    }
    else if (/Mobile|Android|iP(hone|od)|IEMobile|BlackBerry|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)/.test(ua)) {
        return "mobile";
    }
    return "desktop";
};


if(deviceType()=='desktop'){
  
   // $('#iframe').load('iframe.php') 

}


/////////////////////////// change the language  //////////////////////////////////

$('#lang').click(()=>{
  if(lang == 'fr'){
      lang = 'en-US'
      $('#lang').html('lang : en-US')
    }
    if(lang == 'en-US'){
      lang = 'fr'
      $('#lang').html('lang : fr')
    }

    
    
})

////////////////////////////   test voice /////////////////////////
$('#test_voice').click(()=>{
  playText('yo emmanuel is that you, welcome again')
})

///////////////////////////  end test voice //////////////////////

</script>

</body>
</html>