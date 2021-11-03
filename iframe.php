<div style='width:30%;display:block;margin:0% auto;height: 20%;'>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header" onclick='$("#container-add").html( `<img src="assets/images/VPBG81@facebook.gif" alt="" style="width: 100%;">` );' >
      <a class="navbar-brand" href="#">Reminder Jobcard</a>
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
        </ul>
      </li>
      
    </ul>
  </div>
</nav>

<div id='container'>

   

    <div style='display:flex;justify-content:space-between;'>
    <p id='alarm_on'>Alarm : Off</p>
    <button id='stop_it' style='margin-bottom:3%;'>stop speaking</button>
    </div>
    <div id='container-add' class="jumbotron" style='padding:3%;'> 
    <img src='assets\images\VPBG81@facebook.gif' alt='' style='width: 100%;'>
    </div>

    

</div>

</div>