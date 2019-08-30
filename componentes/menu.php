<nav class="menu">
    <?php
    /**
     * Estilo do menu dentro dos componentes/menu
     */
    wp_nav_menu( array(
        'theme_location' 	=> 'header-menu',
        'container'			=> 'ul',
        'menu_id'			=> 'menu',
        'menu_class'		=> 'snip1135',
        'container_class'	=> 'overlay-menu'
    ) );
    //if(get_locale() == 'pt_BR') { ?>
        <!--<a class="selecionar-lingua" href="">
            English
        </a>-->
    <?php //} ?>
</nav>