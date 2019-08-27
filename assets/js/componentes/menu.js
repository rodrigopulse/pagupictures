( function($) {
    $(document).ready(function(){
        var lastScrollTop = 0;
        function menuMovimentacao() {
            var y = $(window).scrollTop();
            if (y > lastScrollTop){
                if ($(".header").hasClass("header-logado")) {
                    $(".header").css({'top': '-30px'});
                } else{
                    $(".header").css({'top': '-60px'});
                }
            } else {
                if ($(".header").hasClass("header-logado")) {
                    $(".header").css({'top': '30px'});
                } else {
                    $(".header").css({'top': '0'});
                }
            }
            lastScrollTop = y;
        }
        menuMovimentacao();

		// Window: Scroll
		$(window).scroll(function () {
			menuMovimentacao();
		});
        $(".js-controla-menu").on('click', function () {
            $('.menu').toggleClass('menu-mobile-ativo');
        });
    });
} )( jQuery );