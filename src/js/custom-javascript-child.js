jQuery( document ).ready(function($) {
    "use strict";


    if(jQuery().vimeo_player) {
        var myPlayer;
        $(function () {
        myPlayer = $("#bgVideo").vimeo_player({
            mobileFallbackImage:"https://i.vimeocdn.com/video/736040370.jpg",
            onReady: function(player){}
        });
        myPlayer.on("VPStart VPFallback", function(e){
            $("#loader").fadeOut(1000);
        }).on("VPReady", function(e){
            //$('.entry-header').addClass('header-background-video');
            if(!e.opt.autoPlay)
            $("#loader").hide();
        });
        });
    }
  
    /* Final Event Function */
    var waitForFinalEvent = (function () {
      var timers = {};
      return function (callback, ms, uniqueId) {
        if (!uniqueId) {
          uniqueId = "Don't call this twice without a uniqueId";
        }
        if (timers[uniqueId]) {
          clearTimeout (timers[uniqueId]);
        }
        timers[uniqueId] = setTimeout(callback, ms);
      };
    })();
  
    if(jQuery().TimeCircles) {
        $(".countdown-timer").TimeCircles({
            circle_bg_color: "#fff",
            time: {
            Days: { color: "#ffffff" }, //AF1319
            Hours: { color: "#ffffff" },
            Minutes: { color: "#ffffff" }/*,
            Seconds: { show: false }*/
            },
            use_background: false,
            bg_width: 0,
            fg_width: 0.02,
            count_past_zero: false,
        });

            // fire on resize
            $(window).resize(function () {
            waitForFinalEvent(function(){
                // code to fire after resize is done
                $(".countdown-timer").TimeCircles().rebuild();
            }, 250, "mobile");
            });
    }

    $('[data-toggle="tooltip"]').tooltip()
    

});