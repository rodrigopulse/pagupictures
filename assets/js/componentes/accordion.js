( function($) {
	$( document ).ready( function(){
		$('div.accordion').on('click', function(){
            $(this).parent().find('div.accordion-filho').slideToggle("slow");
        });
	} ); //document.ready
} )( jQuery );