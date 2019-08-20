( function($) {
	$( document ).ready( function(){
		$('.js-botao-trailer').on('click', function() {
			var trailer = $(this).data('video');
			$('.overlay-trailer').toggleClass('overlay-trailer--ativo');
			$('.overlay-trailer__carrega-video').html('<div class="videoWrapper"><iframe width="560" height="315" src="https://www.youtube.com/embed/'+trailer+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>');
		});
	} ); //document.ready
} )( jQuery );