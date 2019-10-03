<?php get_header();
/**
 * Tradução
 */
$lancamentoFilme        = get_theme_mod( 'filme_lancamento', 'Lançamento do Filme' );
$tituloOriginal         = get_theme_mod( 'filme_titulo_original', 'Título Original' );
$elencoFilme            = get_theme_mod( 'filme_elenco', 'Elenco' );
$direcaoFilme           = get_theme_mod( 'filme_direcao', 'Direção' );
$classificacaoFilme     = get_theme_mod( 'filme_classificacao', 'Classificação Indicativa' );
$compartilheFilme       = get_theme_mod( 'filme_compartilhe', 'Compartilhe nas suas redes' );
$comprarFilme           = get_theme_mod( 'filme_comprar', 'Comprar' );
$tituloAssistaCasa      = get_theme_mod( 'filme_assista_casa', 'Assista em Casa' );

$id_pagina      = get_the_ID();

/**
 * Hero
 */
$post_hero      = get_field( 'filme_em_destaque', $id_pagina);
$selo           = get_field( 'selo', $post_hero);
$titulo         = get_the_title( $post_hero );
$subtitulo      = get_field( 'subtitulo', $post_hero);
$trailer        = get_field( 'embed_trailer', $post_hero);
$tipo           = 'imagem';
$imagemID       = get_field( 'imagem_de_destaque', $post_hero);
if (wp_is_mobile() ) {
    $imagem = wp_get_attachment_image_url( $imagemID, 'hero_mobile' );
} else {
    $imagem = wp_get_attachment_image_url( $imagemID, 'hero_menor' );
}

hero($tipo, $imagem, $selo, $titulo, $subtitulo, $trailer, '', '', 'pagina-filmes');

$cartazID       = get_field( 'cartaz', $id_pagina );
$cartaz         = wp_get_attachment_image_url( $cartazID , 'cartaz' );

// Informações da primeira linha
$tempo          = get_field( 'tempo', $id_pagina );
$pais           = get_field( 'pais', $id_pagina );
$ano            = get_field( 'ano', $id_pagina );
$formato        = get_field( 'formato', $id_pagina );
$generoObjeto   = get_field_object( 'genero', $id_pagina );
$genero         = $generoObjeto['value']['label'];

$data_de_lancamento     = get_field('data_de_lancamento', $id_pagina);
$titulo_original        = get_field('titulo_original', $id_pagina);
$elenco                 = get_field('elenco', $id_pagina);
$direcao                = get_field('direcao', $id_pagina);
$classificacaoObjeto    = get_field('classificacao', $id_pagina);
$classificacao          = $classificacaoObjeto['label'];
$sinopse                = get_field('sinopse', $id_pagina);
?>
<div class="container container--max">
    <div class="row">
        <div class="col-sm-12 col-md-4 post-filme-cartaz">
            <img src="<?php echo $cartaz; ?>" alt="Cartaz do Filme">
        </div>
        <div class="col-sm-12 col-md-8">
            <p class="descricao-filme">
                <strong><?php echo $tempo.'min / '.$pais.' / '.$ano.' / '.$formato.' / '.$genero; ?></strong>
            </p>

            <?php if(!empty($data_de_lancamento)) { ?>
                <p class="descricao-filme">
                    <strong><?php echo $lancamentoFilme; ?>:</strong><?php echo ' '.$data_de_lancamento; ?>
                </p>
            <?php } ?>

            <?php if(!empty($titulo_original)) { ?>
                <p class="descricao-filme">
                    <strong><?php echo $tituloOriginal; ?>:</strong><?php echo ' '.$titulo_original; ?>
                </p>
            <?php } ?>

            <?php if(!empty($elenco)) { ?>
                <p class="descricao-filme">
                    <strong><?php echo $elencoFilme; ?>:</strong><?php echo ' '.$elenco; ?>
                </p>
            <?php } ?>

            <?php if(!empty($direcao)) { ?>
                <p class="descricao-filme">
                    <strong><?php echo $direcaoFilme; ?>:</strong><?php echo ' '.$direcao; ?>
                </p>
            <?php } ?>

            <?php if(!empty($classificacao)) { ?>
                <p class="descricao-filme">
                    <strong><?php echo $classificacaoFilme; ?>:</strong><?php echo ' '.$classificacao; ?>
                </p>
            <?php } ?>

            <?php if(!empty($sinopse)) { ?>
                <article class="sinopse-do-filme">
                    <?php echo $sinopse; ?>
                </article>
            <?php } ?>

            <div class="compartilhar-filme">
                <span class="compartilhar-filme__titulo"><?php echo $compartilheFilme; ?></span>
                <div class="addthis_inline_share_toolbox"></div>
            </div>
            <?php
            /**
             * Imagens
             */
            $imagensObjeto = get_field_object('imagens-filme', $id_pagina);
            $imagens = $imagensObjeto['value'];
            if(!empty($imagens)) { ?>
                <div class="row container-imagens-filme">
                    <?php foreach ($imagens as $label) { ?>
                        <div class="col-sm-12 col-md-4 container-imagens-filme__cols">
                            <?php
                            $thumb = wp_get_attachment_image_url( $label['imagem-filme'], 'medium' );
                            $linkThumb = get_the_permalink( $label['imagem-filme'] ); ?>
                            <a class="container-imagens-filme__link" target="_blank" href="<?php echo $linkThumb; ?>">
                                <div class="container-imagens-filme__overlay">
                                    <img src="<?php echo get_bloginfo('template_url'); ?>/assets/imagens/lupa-zoom.png" alt="">
                                </div>
                                <img src="<?php echo $thumb; ?>" alt="Imagens do Filme">
                            </a>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php
/**
 * Programação
 */
$programacao = get_field_object('lugares', $id_pagina);
if(!empty($programacao['value'])) { ?>
    <div class="container container--max">
        <div class="container-programacao">
            <?php foreach ($programacao['value'] as $valor => $label) {
                echo '<div class="container-accordion">';
                    echo '<div class="accordion"><span class="accordion__cidade">'.$label['cidade'].'</span><span class="seta-baixo"></span></div>';
                    foreach ($label['lugares'] as $key => $value) { ?>
                        <div class="accordion-filho">
                            <div class="row align-items-center">
                                <div class="accordion-filho__lugar col-sm-12 col-md-8">
                                    <?php echo $value['local']; ?>
                                </div>
                                <?php if(!empty($value['link'])) { ?>
                                    <div class="accordion-filho__link col-sm-12 col-md-4">
                                        <a target="_blank" class="botao-padrao botao-padrao--preto" href="<?php echo $value['link']; ?>"><?php echo $comprarFilme; ?></a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php }
                echo '</div>';
            } ?>
        </div>
    </div>
<?php }
/**
 * Assistir em Casa
 */
$assistir_em_casa = get_field_object('assistir_em_casa', $id_pagina);
if(!empty($assistir_em_casa['value'])) { ?>
    <div class="container container--max">
        <h3><?php echo $tituloAssistaCasa; ?></h3>
        <?php foreach ($assistir_em_casa['value'] as $valor => $label) { ?>
            <a target="_blank" class="link-assista-em-casa" target="_blank" href="<?php echo $label['link']; ?>">
                <?php $imagemID = $label['servico'];
                $thumbServico = wp_get_attachment_image_url( $imagemID, 'full' );?>
                <img src="<?php echo $thumbServico; ?>" alt="Serviço">
            </a>
        <?php } ?>
    </div>
<?php } ?>

<?php get_footer(); ?>