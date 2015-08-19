<?php

require 'php/header.php';

?>
 
   <h2>Tehtävä 2: Reagoi!</h2>
   <p>
Mitä sanot ruotsiksi seuraavissa tilanteissa?
Reagoi, kun kuulet tilanteen numeron. Sinulla on  20 sekuntia aikaa sanoa vastauksesi.
  </p>
   Ohjeet:
   <ul>
   <li> Kun olet valmis, paina "Aloita äänitys"-nappia.
  <li> Äänitys alkaa ja ruudulle tulee lyhyt kuvaus tilanteesta, esimerkiksi: "Pyydä ruokalistaa ravintolassa."
  <li> Sinulla on 20 sekuntia aikaa keksiä sanottavaa ja sanoa se.
  <li> Voit lopettaa nauhoituksen jos olet sanonut asiasi ennen kuin nauhoitus loppuu.
  <li> Kun olet valmis, paina "seuraava tehtävä" -nappia, jolloin saat seuraavan kuvauksen luettavaksesi ja äänitys alkaa taas.
   </ul>

   Arvosteluperusteet:
  <ul>
  <li>Reaktion järkevyys
  <li>Ääntämisen selkeys ja sujuvuus
  </ul>
  

   <a href="#main" class="allClear">Tämä selvä!</a>
   
</div>


   
<div id="main">


<!-- Main tasks -->
   <!-- <video src=01.webm id=stimulusvideo></video>-->
<div id="prompts">  

  <h3> Miten sanot ruotsiksi, kun...</h3>

<h2 id=headline>

</h2>


<p id=clearfills> </p>




</div>

<script type=text/javascript>

  var currentTask=0;
var maxRecLenth=10;

tasks=['Toivotat onnea syntymäpäiväsankarille',
       'Kiität opettajaa hyvästä tunnista',
       'Haluat tietää yhden hengen hotellihuoneen hinnan',
       'Pahoittelet ettet voi tulla, koska olet sairastunut']


function nextTask() {
  currentTask++;
  if (currentTask<4) 
    {
      document.getElementById("headline").innerHTML="";
      /*document.getElementById("listenButton").disabled=true;
      document.getElementById("nextButton").disabled=true;*/
    }		   
  else {
    window.location.href = "del3-videoconf.php";
  }
}

  function overrideToggleRecording(thing) {
    document.getElementById("headline").innerHTML=tasks[currentTask];
    toggleRecording(thing)
  }



</script>


<?php
  require 'php/controls.php'
?>

</div>

 


</body>
</html>

