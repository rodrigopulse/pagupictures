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


hero($tipo, $imagem, '', $titulo, $subtitulo, '', '', '', 'pagina-sobre');
?>

<article class="container container--max conteudo-pagina">
    <?php the_content(); ?>
</article>

<?php $time = get_field_object('time', $id_pagina); ?>

<?php if(!empty($time['value'])) { ?>

    <?php subTitulo('h3', 'Time', 'time', ''); ?>

    <div class="container container--max">
        <div class="row">
            <?php foreach ($time['value'] as $key => $value) { ?>

                <div class="col-sm-12 col-md-3 socios">
                    <a target="_blank" href="<?php echo $value['link']; ?>">
                        <div class="socios__foto">
                            <?php
                            $imagemID   = $value['foto-time'];
                            $imagem     = wp_get_attachment_image_url( $imagemID, 'time' );?>
                            <img src="<?php echo $imagem; ?>" alt="Foto do Time">
                        </div>
                        <div class="row socios__titulo">
                            <h3><?php echo $value['nome-time']; ?></h3>
                        </div>
                        <div class="row  socios__descricao">
                            <p><?php echo $value['area-time']; ?></p>
                        </div>
                    </a>
                </div>

            <?php } ?>

        </div>
    </div>
<?php } ?>
<?php get_footer(); ?>