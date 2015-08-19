<!-- controls -->
   <video autoplay id=uservideo></video>
   <canvas id="analyser"></canvas>
  <canvas id="wavedisplay"></canvas>

   <div id=controls>
       <input type=button id=playandrec onclick='playFirstVideoAndStartRecording()' value="Aloita"></input>
       <a href="#infoScreen" class="button" id="infobutton">?</a> 
   </div>

   <div id=recording class=blink_me>
       &#9724; REC
   </div>

    <script src="scripts/audiodisplay.js"></script>
    <script src="scripts/recorder.js"></script>
    <script src="scripts/main.js"></script>



