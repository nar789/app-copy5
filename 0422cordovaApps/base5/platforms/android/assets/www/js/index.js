

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
        document.getElementById('iframe').src="http://srs1102.cafe24.com/ref0422/app/index.php?no=5";
        window.onmessage=function(e){
            document.getElementById('iframe').src=e.data;
        }
    }
};



app.initialize();