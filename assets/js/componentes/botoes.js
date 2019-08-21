( function($) {
	$( document ).ready( function(){
		$('.js-botao-trailer').on('click', function() {
			/**
			 * Não pode ser via function, por causa do data
			 */
			var trailer = $(this).data('video');
			$('.overlay-trailer').toggleClass('overlay-trailer--ativo');
			$('.overlay-trailer__carrega-video').html('<div class="videoWrapper js-trailer-overlay-wrapper"><iframe width="560" height="315" src="https://www.youtube.com/embed/'+trailer+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>');
		});
		$('.js-fechar-overlay').on('click', function() {
			fecharTrailer();
		});
		function fecharTrailer() {
			$('.overlay-trailer').toggleClass('overlay-trailer--ativo');
			$('.js-trailer-overlay-wrapper').remove();
		}
	} ); //document.ready
} )( jQuery );