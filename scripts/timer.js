var timercounter=maxrectime+1;
setInterval(function () {
    if ( timercounter < maxrectime) {
	$id("recording").innerHTML= "&#9724; REC " + ++timercounter;
    }
    if (timercounter==maxrectime) {
        $id("record").click();
    }
}, 1000);

