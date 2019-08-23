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
$trailer        = get_field( 'embed_trailer', $post_hero);
$informacoes    = get_the_permalink( $post_hero);
$video_curto    = get_field( 'video_curto', $post_hero);
if(!empty($video_curto)) {
    if (wp_is_mobile(  )) {
        $tipo           = 'imagem';
        $imagemID       = get_field( 'imagem_de_destaque', $post_hero);
        $imagem         = wp_get_attachment_image_url( $imagemID, 'hero_mobile' );
    } else {
        $tipo   = 'video';
        $imagem = get_field( 'video_curto', $post_hero);
    }
} else {
    $tipo       = 'imagem';
    $imagemID   = get_field( 'imagem_de_destaque', $post_hero);
    if (wp_is_mobile()) {
        $imagem = wp_get_attachment_image_url( $imagemID, 'hero_mobile' );
    } else {
        $imagem = wp_get_attachment_image_url( $imagemID, 'hero_menor' );
    }
}
hero($tipo, $imagem, $selo, $titulo, $subtitulo, $trailer, $informacoes, '');

/**
 * Cards dos filmes
 */
echo '<div class="container container--max">';

    echo '<div class="row">';

    //Quantidade de Filmes que vão para a home
    $i = [1, 2, 3, 4];
    foreach ($i as $key) {
        echo '<div class="col-sm-12 col-md-3">';
            $destaque_.$key = get_field( 'linha_filmes_'.$key, $id_pagina);
            $thumbID    = get_field( 'cartaz', $destaque_.$key );
            $thumb      = wp_get_attachment_image_url( $thumbID , 'cartaz' );
            $titulo     = get_the_title($destaque_.$key);
            $link       = get_the_permalink( $destaque_.$key );;
            $selo       = get_field('selo', $destaque_.$key);
            cardFilmes($thumb, $titulo, $link, $selo);
        echo '</div>';
    }

    //.row
    echo '</div>';

    //.container
echo '</div>';

// Hero 2

$post_hero      = get_field( 'filme_em_destaque_2', $id_pagina);
$selo           = get_field( 'selo', $post_hero);
$titulo         = get_the_title( $post_hero );
$subtitulo      = get_field( 'subtitulo', $post_hero);
$trailer        = get_field( 'link_do_trailer', $post_hero);
$informacoes    = get_the_permalink( $post_hero);
$tipo           = 'imagem';
$imagemID       = get_field( 'imagem_de_destaque', $post_hero);

if(wp_is_mobile()) {
    $imagem = wp_get_attachment_image_url( $imagemID, 'hero_mobile' );
} else {
    $imagem = wp_get_attachment_image_url( $imagemID, 'hero_menor' );
}

$alinhamento    = 'direita';

hero($tipo, $imagem, $selo, $titulo, $subtitulo, $trailer, $informacoes, $alinhamento);

// Distribuicao de Filmes
get_template_part( 'componentes/distribua-filme' );
?>

<?php get_footer(); ?>