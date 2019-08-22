( function($) {
	$( document ).ready( function(){
		$('div.accordion').on('click', function(){
            $(this).parent().find('div.accordion-filho').slideToggle("slow");
            $(this).parent().find('div.accordion .seta-baixo').toggleClass("seta-baixo--ativo");
        });
	} ); //document.ready
} )( jQuery );