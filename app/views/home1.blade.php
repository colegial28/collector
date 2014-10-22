@extends('master2')

@section('content')

<script src="js/vendors/jquery/dist/jquery.min.js"></script>
<script src="js/vendors/jquery-ui/jquery-ui.js"></script>
<script src="//vjs.zencdn.net/4.3/video.js"></script>
<script src="js/vendors/BigVideo/lib/bigvideo.js"></script>
<script>
        window.BV;
	    $('document').ready(function($){
            // initialize BigVideo
            BV = new $.BigVideo();
			BV.init();
			BV.show('media/hangouts.mp4',{ambient:true});

            // Playlist button click starts video
            $('.playlist-btn').on('click', function(e) {
                e.preventDefault();
                BV.show($(this).attr('href'));
            })

            // Video Play/Pause toggle
            $('#video-toggle').on('click', function(e) {
                if (this.checked)   BV.getPlayer().play();
                else                BV.getPlayer().pause();
            })

            // set up navigation
            $('.nav-link').on('click',function(e){
                e.preventDefault();
                scrollToSection($(this).attr('href'));
            })

            function scrollToSection(id) {
                $('body,html').animate({scrollTop: $(id).offset().top - 50}, 400);
            }
	    });
    </script>
@endsection