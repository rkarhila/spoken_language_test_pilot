<!-- controls -->
   <video autoplay id=uservideo></video>
   <audio id='recordedObject'></audio>      
   <div id="viz">
      <canvas id="wavedisplay"></canvas>
      <canvas id="analyser"></canvas>
      <div id="listen">
         <input type="button" onClick='toggle_play();' oncanplay='canaudioplay=1' id="listenButton" value="Kuuntele" name="listen" disabled>
      </div>
   </div>

   <div id=controls>
   
   <!--  For video tasks:   
   <input type=button id=playandrec onclick='playFirstVideoAndStartRecording()' value="Aloita"></input>
   -->

   <input type=button id="record"  onclick="overrideToggleRecording(this)" value="Aloita äänitys">
   <input type=button id="nextButton" onclick='nextTask()' value="Seuraava tehtävä" disabled>


   <a href="#infoScreen" class="button" id="infobutton">?</a> 
   </div>


   <div id="recording" class="blink_me">
       &#9724; REC
   </div>
       


        <script type="text/javascript">
             var currenttask = 1;
             var taskcount = 5;
             var speaker = 'krozz';
             var maxrectime = 180;
       </script>
        
      <form action="upload.php" method="post" id="upload" enctype="multipart/form-data">
        <input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="63856800" />
        <input type="hidden" id="filename" name="filename" value="krozz-fi0" />
        <input hidden=hidden type="text" name="name" value="krozz">
        <input hidden=hidden type="text" name="task" value="fi0">
      </form>      </div>
      <div id="messages"></div>
      <div id="progress"></div>

    <script src="scripts/audiodisplay.js"></script>
    <script src="scripts/recorder.js"></script>
    <script src="scripts/main.js"></script>
    <script src="scripts/uploadfile.js"></script>
    <script src="scripts/timer.js"></script>
    <script src="scripts/play_sample.js"></script>

    <script type="text/javascript">
	      
messages['Listen']="Kuuntele";
messages['Stop']="Pysäytä";



    </script>
