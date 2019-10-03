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
add_image_size( 'time', 270, 270, true );

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

/**
 * Customização para traduções
 */
function traducao_do_tema( $wp_customize ) {
    $wp_customize->add_section(
        'traducao',
        array(
            'title' => 'Tradução',
            'description' => 'Tradução do tema',
            'priority' => 35,
        )
    );
    /**
     * Newsletter
     */
    $wp_customize->add_setting(
        'titulo_newsletter',
        array(
            'default' => 'Receba nossas novidades no seu e-mail!',
        )
    );
    $wp_customize->add_control(
        'titulo_newsletter',
        array(
            'label' => 'Título formulário Newsletter',
            'section' => 'traducao',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'placeholder_newsletter',
        array(
            'default' => 'Seu melhor e-mail',
        )
    );
    $wp_customize->add_control(
        'placeholder_newsletter',
        array(
            'label' => 'Texto input e-mail',
            'section' => 'traducao',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'botao_newsletter',
        array(
            'default' => 'Cadastrar',
        )
    );
    $wp_customize->add_control(
        'botao_newsletter',
        array(
            'label' => 'Botão cadastrar newsletter',
            'section' => 'traducao',
            'type' => 'text',
        )
    );
    /**
     * Hero
     */
    $wp_customize->add_setting(
        'botao_trailer',
        array(
            'default' => 'Trailer',
        )
    );
    $wp_customize->add_control(
        'botao_trailer',
        array(
            'label' => 'Botão do trailer',
            'section' => 'traducao',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'botao_informacoes',
        array(
            'default' => 'Mais Informações',
        )
    );
    $wp_customize->add_control(
        'botao_informacoes',
        array(
            'label' => 'Botão Mais Informações',
            'section' => 'traducao',
            'type' => 'text',
        )
    );

    /**
     * Página Inicial
     */
    $wp_customize->add_setting(
        'filmes_home',
        array(
            'default' => 'Filmes',
        )
    );
    $wp_customize->add_control(
        'filmes_home',
        array(
            'label' => 'Título Filmes da Home',
            'section' => 'traducao',
            'type' => 'text',
        )
    );

    /**
     * Página Sobre
     */
    $wp_customize->add_setting(
        'sobre_time',
        array(
            'default' => 'Time',
        )
    );
    $wp_customize->add_control(
        'sobre_time',
        array(
            'label' => 'Título do Time na página sobre',
            'section' => 'traducao',
            'type' => 'text',
        )
    );

    /**
     * Filtros
     */
    $wp_customize->add_setting(
        'titulo_filtros',
        array(
            'default' => 'Filtros',
        )
    );
    $wp_customize->add_control(
        'titulo_filtros',
        array(
            'label' => 'Título dos Filtros',
            'section' => 'traducao',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'filtro_todos',
        array(
            'default' => 'Todos',
        )
    );
    $wp_customize->add_control(
        'filtro_todos',
        array(
            'label' => 'Filtro Todos',
            'section' => 'traducao',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'filtro_cartaz',
        array(
            'default' => 'Em Cartaz',
        )
    );
    $wp_customize->add_control(
        'filtro_cartaz',
        array(
            'label' => 'Filtro Em Cartaz',
            'section' => 'traducao',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'filtro_embreve',
        array(
            'default' => 'Em Breve',
        )
    );
    $wp_customize->add_control(
        'filtro_embreve',
        array(
            'label' => 'Filtro Em Breve',
            'section' => 'traducao',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'filtro_catalogo',
        array(
            'default' => 'Catálogo',
        )
    );
    $wp_customize->add_control(
        'filtro_catalogo',
        array(
            'label' => 'Filtro Catálogo',
            'section' => 'traducao',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'filtro_emcasa',
        array(
            'default' => 'Assistir em Casa',
        )
    );
    $wp_customize->add_control(
        'filtro_emcasa',
        array(
            'label' => 'Filtro Assistir em Casa',
            'section' => 'traducao',
            'type' => 'text',
        )
    );
    /**
     * Página do filme
     */
    $wp_customize->add_setting(
        'filme_lancamento',
        array(
            'default' => 'Lançamento do Filme',
        )
    );
    $wp_customize->add_control(
        'filme_lancamento',
        array(
            'label' => 'Lançamento do Filme',
            'section' => 'traducao',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'filme_titulo_original',
        array(
            'default' => 'Título Original',
        )
    );
    $wp_customize->add_control(
        'filme_titulo_original',
        array(
            'label' => 'Título Original',
            'section' => 'traducao',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'filme_elenco',
        array(
            'default' => 'Elenco',
        )
    );
    $wp_customize->add_control(
        'filme_elenco',
        array(
            'label' => 'Elenco',
            'section' => 'traducao',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'filme_direcao',
        array(
            'default' => 'Direção',
        )
    );
    $wp_customize->add_control(
        'filme_direcao',
        array(
            'label' => 'Direção',
            'section' => 'traducao',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'filme_classificacao',
        array(
            'default' => 'Classificação Indicativa',
        )
    );
    $wp_customize->add_control(
        'filme_classificacao',
        array(
            'label' => 'Classificação Indicativa',
            'section' => 'traducao',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'filme_compartilhe',
        array(
            'default' => 'Compartilhe nas suas redes',
        )
    );
    $wp_customize->add_control(
        'filme_compartilhe',
        array(
            'label' => 'Compartilhe nas suas redes - Filme',
            'section' => 'traducao',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'filme_comprar',
        array(
            'default' => 'Comprar',
        )
    );
    $wp_customize->add_control(
        'filme_comprar',
        array(
            'label' => 'Botão Comprar na programação',
            'section' => 'traducao',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'filme_assista_casa',
        array(
            'default' => 'Assista em Casa',
        )
    );
    $wp_customize->add_control(
        'filme_assista_casa',
        array(
            'label' => 'Título assista em casa na página do filme',
            'section' => 'traducao',
            'type' => 'text',
        )
    );
}
add_action( 'customize_register', 'traducao_do_tema' );