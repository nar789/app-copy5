

var app = {
    // Application Constructor
    initialize: function() {
        document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);
        document.addEventListener("backbutton", this.onBackKeyDown, false);
    },
     onBackKeyDown:function(){
        navigator.app.exitApp();
    },

    onDeviceReady: function() {
        document.getElementById('iframe').src="http://sos9901.cafe24.com/ref1103/app/index.php?no=1";
        window.onmessage=function(e){
            location.replace(e.data);
        }
    }
};



app.initialize();