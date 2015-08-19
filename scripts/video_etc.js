// Button functions

var videotimesec = 0;
var videotimefracs = 0;
var videovisible = 0;
setInterval(function(){ 
    if (videovisible) {
      incrementTimer();
      document.getElementById('recording').innerHTML="&#9724; REC "+videotimesec+"."+videotimefracs; 
    }
}, 0.1*1000 );

function incrementTimer() {
   if (videotimefracs < 9) {
     videotimefracs+=1;
   }
   else {
     videotimesec+=1; 
     videotimefracs=0; 
   }
}
function resetVideoTimer() {
     videotimesec=0; 
     videotimefracs=0;   
     videovisible=1;
}


function playFirstVideoAndStartRecording() {
  videovisible=0;
    video1=document.getElementById('stimulusvideo');
    btn=document.getElementById('playandrec');
    rectext=document.getElementById('recording');
    rectext.style.visibility= "hidden";
    video1.play();
    btn.disabled=true;
    btn.value="kuuntele";
    setTimeout(function(){
      resetVideoTimer();      
      rectext.style.visibility= "visible";
      video1.src="02.webm";
      btn.value="Lopeta nauhoitus";
      btn.disabled=false;
      setTimeout(function(){
        btn.click();
      }, 15*1000);
    },video1.duration*1000);
}

function hasGetUserMedia() {
  return !!(navigator.getUserMedia || navigator.webkitGetUserMedia ||
            navigator.mozGetUserMedia || navigator.msGetUserMedia);
}

if (hasGetUserMedia()) {
  // Good to go!
} else {
  alert('getUserMedia() is not supported in your browser');
}


var videosizeConstraints = {
  video: {
    mandatory: {
      maxWidth: 320,
      maxHeight: 200
    }
  },
   audio:true
};


  var errorCallback = function(e) {
    console.log('Reeeejected!', e);
  };

  // Not showing vendor prefixes.

navigator.getUserMedia  = navigator.getUserMedia ||
                          navigator.webkitGetUserMedia ||
                          navigator.mozGetUserMedia ||
                          navigator.msGetUserMedia;



  navigator.getUserMedia(videosizeConstraints, function(localMediaStream) {
    var uservideo = document.getElementById('uservideo');
    uservideo.src = window.URL.createObjectURL(localMediaStream);

    // Note: onloadedmetadata doesn't fire in Chrome when using it with getUserMedia.
    // See crbug.com/110938.
    uservideo.onloadedmetadata = function(e) {
      // Ready to go. Do some stuff.
    };
  }, errorCallback);


