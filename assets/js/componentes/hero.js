(function () {
    if($('.video-bg-container__video').length) {
        var videoBg = $('.video-bg-container__video').data('video-fundo');

        var bv = new Bideo();
        bv.init({
        // Video element
        videoEl: document.querySelector('.video-bg-container__video'),
        // Container element
        container: document.querySelector('.video-bg-container'),
        // Resize
        resize: true,
        // autoplay: false,
        isMobile: window.matchMedia('(max-width: 768px)').matches,
        playButton: document.querySelector('#play'),
        pauseButton: document.querySelector('#pause'),
        // Array of objects containing the src and type
        // of different video formats to add
        src: [
            {
            src: videoBg,
            type: 'video/mp4'
            },
            {
            src: 'night.webm',
            type: 'video/webm;codecs="vp8, vorbis"'
            }
        ],
        // What to do once video loads (initial frame)
        onLoad: function () {
            document.querySelector('.video-bg-container__cover').style.display = 'none';
        }
        });
    }
  }());