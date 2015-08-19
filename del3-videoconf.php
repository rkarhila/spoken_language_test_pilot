<?php

require 'php/header.php';

?>
 
   <h2>Tehtävä 3.1: Videopuhelu</h2>
   <p>

Keskustelet Skypen välityksellä ruotsinkielisen ystävyyskoulun oppilaan kanssa. 

Vastaa hänen kysymyksiinsä. Sinulla on 10 sekuntia vastausaikaa kunkin kysymyksen jälkeen.
  </p>
   Ohjeet:
   <ul>
   <li> Kun olet valmis, paina "Aloita"-nappia.
   <li> Kaverisi esittää sinulle kysymyksen.
  <li> Äänitys alkaa ja sinulla on 10 sekuntia aikaa vastata.
  <li> Voit lopettaa nauhoituksen jos olet sanonut asiasi ennen kuin nauhoitus loppuu.
  <li> Kaverisi esittää heti perään uuden kysymyksen.
   </ul>

   Arvosteluperusteet:
  <ul>
  <li>Vastauksen järkevyys
  <li>Ääntämisen selkeys ja sujuvuus
  </ul>
  

   <a href="#main" class="allClear">Tämä selvä!</a>
   
</div>


   
<div id="main">


<!-- Main tasks -->

<div id="prompts">  

    <video src=01.webm id=stimulusvideo></video>


<p id=clearfills> </p>




</div>
<?php
  require 'php/controls.php'
?>

                        
<script type=text/javascript>
var allowRerecording = false;                                                                                  
var currentVideo=1;
var videoCount=5;
var currentTask=0;
var maxRecLenth=10;

tasks=['Toivotat onnea syntymäpäiväsankarille',
       'Kiität opettajaa hyvästä tunnista',
       'Haluat tietää yhden hengen hotellihuoneen hinnan',
       'Pahoittelet ettet voi tulla, koska olet sairastunut']


function nextTask() {
    window.location.href = "del4-par.php";
}

  function overrideToggleRecording(thing) {
      playFirstVideoAndStartRecording();
      //document.getElementById("headline").innerHTML=tasks[currentTask];
      //toggleRecording(thing)
  }



</script>




</div>

 


</body>
</html>

