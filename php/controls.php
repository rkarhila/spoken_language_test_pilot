<!-- controls -->
   <video autoplay id=uservideo></video>
  <audio id='recordedObject'></audio>      <div id="viz">
   <canvas id="analyser"></canvas>
  <!--<canvas id="wavedisplay"></canvas>-->
   </div>
   <div id=controls>
       <input type=button id=playandrec onclick='playFirstVideoAndStartRecording()' value="Aloita"></input>
       <a href="#infoScreen" class="button" id="infobutton">?</a> 
   </div>

   <div id=recording class=blink_me>
       &#9724; REC
   </div>

        <script type="text/javascript">

             var currenttask = 1;
             var taskcount = 5;
             var speaker = 'krozz';
             var maxrectime = 180;
       </script>

    <script src="scripts/audiodisplay.js"></script>
    <script src="scripts/recorder.js"></script>
    <script src="scripts/main.js"></script>
    <script src="scripts/uploadfile.js"></script>
    <script src="scripts/timer.js"></script>
    <script src="scripts/play_sample.js"></script>


