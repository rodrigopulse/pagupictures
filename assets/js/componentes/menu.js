( function($) {
    $(document).ready(function(){
        $(".js-controla-menu").on('click', function () {
            $('.menu').toggleClass('menu-mobile-ativo');
        });
    });
} )( jQuery );