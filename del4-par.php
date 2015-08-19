<?php

require 'php/header.php';

?>
 
   <h2>Tehtävä 4: Neuvottelu kesätyöpaikasta </h2>
   <p>

Tämä on parikeskustelu, joka tallennetaan webkameralla. 

<p>
Ystävystyitte ruotsalaisnuoren kanssa niin hyvin, että haluatte lukion päätyttyä hakea samaan kesätyöpaikkaan. Olette molemmat tahollanne löytäneet kiinnostavan ilmoituksen. Keskustelkaa vaihtoehdoista ja päättäkää, haetteko kalanperkaajiksi Norjaan vai puistotyöntekijöiksi Ruotsiin?

  </p>
   Ohjeet:
   <ul>
  <li> Etsi itsellesi pari.
  <li> Sijoittukaa niin, että joko 
a) olette molemmat saman kameran kuvassa tai 
b) niin, että kumpikin kuvaa itseään oman koneensa kameralla.
										    
    <li> Kirjoittakaa sama koodi id-kenttään.
    <li> Odottakaa, että koneet synkronoituvat, ja lukekaa sitten lisäohjeita.
   </ul>

   Arvosteluperusteet:
  <ul>
  <li>Keskustelun sujuvuus
  <li>Ääntämisen selkeys ja sujuvuus
  </ul>
  

   <a href="#main" class="allClear">Tämä selvä!</a>
   
</div>


   
<div id="main">


<!-- Main tasks -->

<div id="prompts">  
    <p>
    Etsi itsellesi pari.
    <p>
    Sinun koodisi on: TGK221A
    <p>
    Kirjoita parisi koodi allaolevaan kenttään. Parisi kirjoittaa sinun koodisi omaan kenttäänsä.
    <p>
    Odottakaa, että koneet synkronoituvat.

    <p>
    <input type=textfield>
    <input type=submit value=submit>



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

