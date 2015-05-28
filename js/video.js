

    if($('.single-img iframe').length){

        function onPlayerReady(event) {

          // bind events
          var playButton = document.getElementById("video-play");
          playButton.addEventListener("click", function() {
            player.playVideo();
            $('.single-img img, #video-play').animate({'margin-left':'-100%'},200);
          });
        }

        // Inject YouTube API script
        var tag = document.createElement('script');
        tag.src = "//www.youtube.com/player_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;

        function onYouTubePlayerAPIReady() {

            // create the global player from the specific iframe (#video)
            player = new YT.Player('player', {
                events: {
                    // call this function when player is ready to use
                    'onReady': onPlayerReady
                }
            });

        }

    }

