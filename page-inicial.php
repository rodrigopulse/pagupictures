<?php /* Template Name: Página Inicial */ ?>
<?php get_header() ?>

<?php
$id_pagina      = get_the_ID();

/**
 * Hero
 */
$post_hero      = get_field( 'filme_em_destaque', $id_pagina);
$selo           = get_field( 'selo', $post_hero);
$titulo         = get_the_title( $post_hero );
$subtitulo      = get_field( 'subtitulo', $post_hero);
$trailer        = get_field( 'link_do_trailer', $post_hero);
$informacoes    = get_the_permalink( $post_hero->ID );
echo '<pre>';var_dump($post_hero);echo '</pre>';

if (wp_is_mobile(  )) {
    $tipo = 'imagem';
    $imagem = get_field( 'imagem_de_destaque', $post_hero);
} else {
    $tipo   = 'video';
    $imagem = get_field( 'video_curto', $post_hero);
}
hero($tipo, $imagem, $selo, $titulo, $subtitulo, $trailer, $informacoes, '');

/**
 * Cards dos filmes
 */
echo '<div class="container container--max">';

    echo '<div class="row">';

        echo '<div class="col-sm-12 col-md-3">';
            $destaque_1 = get_field( 'linha_filmes_1', $id_pagina);
            $thumb      = get_bloginfo( 'template_url' ) .'/assets/imagens/cartaz-filmes.jpg';
            $titulo     = 'Lorem ipsum dolor';
            $link       = '#';
            $selo       = 'cartaz';
            cardFilmes($thumb, $titulo, $link, $selo);
        echo '</div>';

        echo '<div class="col-sm-12 col-md-3">';
            $thumb      = get_bloginfo( 'template_url' ) .'/assets/imagens/cartaz-filmes.jpg';
            $titulo     = 'Lorem ipsum dolor';
            $link       = '#';
            $selo       = 'cartaz';
            cardFilmes($thumb, $titulo, $link, $selo);
        echo '</div>';

        echo '<div class="col-sm-12 col-md-3">';
            $thumb      = get_bloginfo( 'template_url' ) .'/assets/imagens/cartaz-filmes.jpg';
            $titulo     = 'Lorem ipsum dolor';
            $link       = '#';
            $selo       = 'cartaz';
            cardFilmes($thumb, $titulo, $link, $selo);
        echo '</div>';

        echo '<div class="col-sm-12 col-md-3">';
            $thumb      = get_bloginfo( 'template_url' ) .'/assets/imagens/cartaz-filmes.jpg';
            $titulo     = 'Lorem ipsum dolor';
            $link       = '#';
            $selo       = 'cartaz';
            cardFilmes($thumb, $titulo, $link, $selo);
        echo '</div>';

    //.row
    echo '</div>';

    //.container
echo '</div>';

// Distribuicao de Filmes
get_template_part( 'componentes/distribua-filme' );

// Hero 2
$imagem         = get_bloginfo( 'template_url' ).'/assets/imagens/caravaggio-roubado.jpg';
$selo           = 'cartaz';
$titulo         = 'O Caravaggio Roubado';
$subtitulo      = 'Um filme de Roberto  Andò';
$trailer        = 'https://youtube.com';
$informacoes    = 'https://youtube.com';
$alinhamento    = 'direita';
$tipo           = 'imagem';
hero($tipo, $imagem, $selo, $titulo, $subtitulo, $trailer, $informacoes, $alinhamento);

?>

<?php get_footer(); ?>