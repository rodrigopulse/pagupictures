<?php /* Template Name: Página Sobre */ ?>

<?php get_header() ?>

<?php

$id_pagina = get_the_ID();

/**
 * Hero
 */

$post_hero      = get_field( 'filme_em_destaque', $id_pagina);

$titulo         = get_the_title( $post_hero );
$subtitulo      = get_field( 'subtitulo', $post_hero);
$trailer        = get_field( 'embed_trailer', $post_hero);
$informacoes    = get_the_permalink( $post_hero);
$tipo           = 'imagem';
if(wp_is_mobile()) {
    $imagem = get_the_post_thumbnail_url(get_the_ID(), 'hero_mobile');
} else {
    $imagem = get_the_post_thumbnail_url(get_the_ID(), 'hero_menor');
}


hero($tipo, $imagem, '', $titulo, $subtitulo, '', '', '');
?>

<article class="container container--max conteudo-pagina">
    <?php the_content(); ?>
</article>

<h3 class="titulo-socios text-centro">Sócios</h3>

<?php $socios = get_field_object('socios', $id_pagina); ?>
<div class="container container--max">
    <div class="row">
        <div class="col-sm-12 col-md-4 socios">
            <div class="row socios__foto">
                <?php
                $imagemID   = $socios['value'][0]['foto-socio'];
                $imagem     = wp_get_attachment_image_url( $imagemID, 'full' );?>
                <img src="<?php echo $imagem; ?>" alt="Foto dos Sócios">
            </div>
            <div class="row socios__titulo">
                <h3><?php echo $socios['value'][0]['nome-socio']; ?></h3>
            </div>
            <div class="row  socios__descricao">
                <p><?php echo $socios['value'][0]['descricao']; ?></p>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 socios">
            <div class="row socios__foto">
                <?php
                $imagemID   = $socios['value'][1]['foto-socio'];
                $imagem     = wp_get_attachment_image_url( $imagemID, 'full' );?>
                <img src="<?php echo $imagem; ?>" alt="Foto dos Sócios">
            </div>
            <div class="row socios__titulo">
                <h3><?php echo $socios['value'][1]['nome-socio']; ?></h3>
            </div>
            <div class="row  socios__descricao">
                <p><?php echo $socios['value'][1]['descricao']; ?></p>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 socios">
            <div class="row socios__foto">
                <?php
                $imagemID   = $socios['value'][2]['foto-socio'];
                $imagem     = wp_get_attachment_image_url( $imagemID, 'full' );?>
                <img src="<?php echo $imagem; ?>" alt="Foto dos Sócios">
            </div>
            <div class="row socios__titulo">
                <h3><?php echo $socios['value'][2]['nome-socio']; ?></h3>
            </div>
            <div class="row  socios__descricao">
                <p><?php echo $socios['value'][2]['descricao']; ?></p>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>