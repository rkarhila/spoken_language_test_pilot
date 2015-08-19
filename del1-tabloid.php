<?php

require 'php/header.php';

?>
 
   <h2>Tehtävä 0: Koenauhoitus</h2>
   <p>
   Tervetuloa kokeilemaan varhaista kehitysprototyyppiä puhutun viraan kielen ylioppilaskoejärjestelmästä! Ensin tarkistamme, että tekniikka toimii.
   <p>
   Selaimesi on: 
   <?php 
   require 'get_browser_info.php';
$ua=get_browser_info();

echo "<b>" . $ua['name'] . "</b> " . $ua['version'] . " (" .$ua['platform'] . "). "; // reports: <br >" . $ua['userAgent'] ;

if ($ua['name'] == "Google Chrome") {
?>
Tämä on hyvä.
  <?php }
else {
?>
<span class=warning>  Tästä tulee vielä sanomista! Nauhoitus ja/tai videoiden näyttäminen voi tuottaa ongelmia. Google Chrome (versio 30 tai uudempi) olisi parempi.</span>
    <?php } ?>
   <p>
   Ohjeet:
   <ul>
   <li> Oikeassa alakulmassa näet videokuvan ja äänen tasomonitorin.

   <li>Kun puhut mikrofoniin, monitorin pitäisi aaltoilla puheesi mukaan. Monitorin sivussa näkyvä palkki ilmoittaa sopivasta äänenpainetasosta.

  <li>Jos et näe monitorissa mitään liikettä on mikrofonissasi ongelma. Annoitko luvan mikrofonin käyttöön? Jos et, voit ladata sivun uudestaan ja tarkistaa, että olet valinnut oikean mikrofonin. Onko mikrofoni päällä? Jos ei, sen voi laittaa päälle järjestelmäsi ääniasetuksista.

  <li>Jos monitori näyttää usein punaista, on mikrofonin äänenvoimakkuus liian kovalla. Voit säätää sitä järjestelmäsi ääniasetuksista tai asettamalla mikrofoni hieman sivuun.

  <li>Jos et näe videokuvaa, etsi selaimen yläpalkista kameraa esittävä nappula ja kliksuttele sitä kautta kameralle toimilupa.

  <li>Jos ei ota toimiakseen, niin pyydä henkilökunta avuksi.

  <li>Kun mikrofoni ja kamera toimivat, paina "Seuraava tehtävä"-nappia. 

<!--
   <li>Kuuntele kysymys ja vastaa siihen.
   <ul>
   <li>Sinulla on 15 sekuntia aikaa vastata. 
   <li>Nauhoitus alkaa heti kysymyksen jälkeen ja loppuu automaattisesti.
   <li>Jos vastaat kysymykseen nopeammin, voit siirtyä seuraavaan kysymykseen "lopeta nauhoittaminen"-napilla.
   <li>Uusi kysymys alkaa heti kun olet vastannut edelliseen.
   </ul>
   <li>Toista kunnes kyllästyt.
   <li>Jos haluat tauon, pidä se nyt tai kysymyssarjan jälkeen.
-->
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

<?php
  require 'php/controls.php'
?>

</div>

 


</body>
</html>

