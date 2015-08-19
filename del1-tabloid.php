<?php

require 'php/header.php';

?>
 
   <h2>Tehtävä 1: Lue lehtiotsikot</h2>
   <p>
   Ohjeet:
   <ul>
   <li> Tarkastele lehtiotsikkoa: Voit harjoitella ensin sen lukemista itseksesi.
   <li> Kun olet valmis, paina "Aloita äänitys"-nappia.
  <li> Sinulla on 10 sekuntia aikaa lukea otsikko. Jos olet nopeampi, voit pysäyttää nauhoituksen ennen kuin aika täyttyy.
  <li> Voit kuunnella nauhoituksesi varmistuaksesi sen onnistumisesta.
  <li> Jos nauhoitus epäonnistui, voit tehdä sen uudestaa.
  <li> Kun olet tyytyväinen, paina "seuraava tehtävä" -nappia, jolloin saat seuraavan otsikon luettavaksesi.
   </ul>

   Arvosteluperusteet:
  <ul>
  <li>Ääntämisen selkeys
  <li>Vaadittujen yritysten määärä.
  </ul>
  

   <a href="#main" class="allClear">Tämä selvä!</a>
   
</div>


   
<div id="main">


<!-- Main tasks -->
   <!-- <video src=01.webm id=stimulusvideo></video>-->
<div id="prompts">  

<?php
  require 'php/hebrew_fill1.php';
?>
<h2 id=headline>
Vi köper begagnade kläder i gott skick
</h2>
<?php
  require 'php/hebrew_fill2.php';
?>

<p id=clearfills> </p>




</div>

<script type=text/javascript>


  var allowRerecording = true;                                                                                  
  var currentTask=0;

tasks=['Vi köper begagnade kläder i gott skick', 
       'Allt fler högskolestudenter pluggar på distans i Sverige',
       'Mörka regnmoln skymmer stora delar av Östersjön ',
       'Mikrovågsugn säljs för 17 kronor på köksprylsmarknaden',
       'Bananer med droger i smugglades i tunnelbanan'];


function nextTask() {
  currentTask++;
  if (currentTask<5) 
    {
      document.getElementById("headline").innerHTML=tasks[currentTask];
      document.getElementById("listenButton").disabled=true;
      document.getElementById("nextButton").disabled=true;
    }		   
  else {
    window.location.href = "del2-fragor.php";
  }
}


  function overrideToggleRecording(thing) {
    
    toggleRecording(thing)
  }


</script>


<?php
  require 'php/controls.php'
?>

</div>

 


</body>
</html>

