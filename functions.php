<?php
/**
 * Componentes
 */
include dirname( __FILE__ ) . '/componentes/hero.php';
include dirname( __FILE__ ) . '/componentes/selos.php';
include dirname( __FILE__ ) . '/componentes/titulos.php';
include dirname( __FILE__ ) . '/componentes/botoes.php';
include dirname( __FILE__ ) . '/componentes/card-filme.php';
include dirname( __FILE__ ) . '/componentes/filtros.php';

/*
 * Remove &nbsp dos posts;
*/
function remove_empty_lines( $content ){
    $content = preg_replace("/&nbsp;/", "", $content);
    return $content;
}
add_action('content_save_pre', 'remove_empty_lines');

/**
 * Thumbnails no wordpress
 */
add_theme_support( 'post-thumbnails' );
/**
 * Tamanhos das imagens para thumbs
 */
add_image_size( 'hero_menor', 1280, 556, true );
add_image_size( 'hero_mobile', 375, 600, true );
add_image_size( 'cartaz', 345, 543, true );

/**
 * Habilita o Title no wordpress
 */
add_theme_support( 'title-tag' );
/**
 * Remove scripts e estilos nativos do wordpress
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/**
 * Adiciona os estilos e scripts do tema
 */
function add_estilos_e_scripts() {
    // Estilos
    wp_enqueue_style( 'mailchimp', '//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css');
	wp_enqueue_style( 'css', get_template_directory_uri() . '/style.css');

	// Fontes
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Montserrat:500|Open+Sans:400,700&display=swap');
    wp_enqueue_style( 'social', 'https://s3.amazonaws.com/icomoon.io/114779/Socicon/style.css?u8vidh');

	// Scripts
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'addthis', '//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d5ae7883a3a4505', array(), '', true );
	wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', true );
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/scripts.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'add_estilos_e_scripts' );

/**
 * Adiciona div responsiva para oEmbeds
 */
function responsive_embed_html( $html, $url ) {
    if ( preg_match( '/youtube.com/', $url ) || preg_match( '/vimeo.com/', $url ) ) {
        return '<div class="videoWrapper">' . $html . '</div>';
    } else {
        return $html;
    }
}

add_filter( 'embed_oembed_html', 'responsive_embed_html', 10, 3 );
add_filter( 'video_embed_html', 'responsive_embed_html' );

/**
 * Remove o meta generator do Wordpress
 */
remove_action('wp_head', 'wp_generator');

/**
 * Posições de Menu
 */

function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

/**
 * Ajustes do admin bar
 */
add_action('wp_footer', 'preferencias_admin_bar');
function preferencias_admin_bar() {
    $op = '
    <style type="text/css">
        html {margin-top: 0px !important;}
        @media (max-width: 400px) {
            html {margin-top: 0 !important;}
            #wpadminbar {top: 0}
        }
    </style> ';
    echo $op;
}

/**
 * Tela de login
 */
function login_template() { ?>
<style type="text/css">
    body.login div#login h1 a {
        background-image: url('<?php echo get_bloginfo('template_url'); ?>/assets/imagens/logo-pagu.png');
        padding-bottom: 42px;
    }
    body.login {
        background: #333333;
    }
</style>
<?php }
add_action( 'login_enqueue_scripts', 'login_template' );

/**
 * Remove o Arquivo: Categoria: e etc
 */
add_filter( 'get_the_archive_title', 'my_theme_archive_title' );
function my_theme_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }
    return $title;
}

?>

