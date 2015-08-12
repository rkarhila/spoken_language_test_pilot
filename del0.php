<html>
<header>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="styles/pilot.css">


</header>
<body>
<script src="scripts/video_etc.js"></script>


<div id="cover" > 
   
</div> 

<div id="infoScreen">
 
   <h2>Tehtävä 3</h2>
   <p>Enosi golf-kaveri Börje soittelee taas. Yrität pitää häneen hyvät välit, jotta saisitte taas ensi kesänä lainata hänen venettään. Börjen kanssa jutteleminen on kuin kohtaaminen espanjan inkvisition kanssa: Kysymys toisensa perään, hyvä kun ehdit edelliseen vastata niin uutta tulee ja aihekin vaihtuu useasti ja loogisesti kuin yksipyöräisellä ajava karhu.
   <p>
   Ohjeet:
   <ul>
   <li>Paina "Aloita"-nappia
   <li>Kuuntele kysymys ja vastaa siihen.
   <ul>
   <li>Sinulla on 15 sekuntia aikaa vastata. 
   <li>Nauhoitus alkaa heti kysymyksen jälkeen ja loppuu automaattisesti.
   <li>Jos vastaat kysymykseen nopeammin, voit siirtyä seuraavaan kysymykseen "lopeta nauhoittaminen"-napilla.
   <li>Uusi kysymys alkaa heti kun olet vastannut edelliseen.
   </ul>
   <li>Toista kunnes kyllästyt.
   <li>Jos haluat tauon, pidä se nyt tai kysymyssarjan jälkeen.
   </ul>
   <a href="#main" class="allClear">Tämä selvä!</a>
   
</div>



   
<div id="main">
   
   <video src=01.webm id=stimulusvideo></video>

   <video autoplay id=uservideo></video>

   <div id=controls>
       <input type=button id=playandrec onclick='playFirstVideoAndStartRecording()' value="Aloita"></input>
       <a href="#infoScreen" class="button" id="infobutton">?</a> 
   </div>

   <div id=recording class=blink_me>
       &#9724; REC
   </div>


</div>

 


</body>
</html>

