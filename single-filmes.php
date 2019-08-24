<?php get_header();

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

hero($tipo, $imagem, $selo, $titulo, $subtitulo, $trailer, '', '');

$cartazID       = get_field( 'cartaz', $id_pagina );
$cartaz         = wp_get_attachment_image_url( $cartazID , 'cartaz' );

// Informações da primeira linha
$tempo          = get_field( 'tempo', $id_pagina );
$pais           = get_field( 'pais', $id_pagina );
$ano            = get_field( 'ano', $id_pagina );
$formato        = get_field( 'formato', $id_pagina );
$genero         = get_field( 'genero', $id_pagina );

$data_de_lancamento = get_field('data_de_lancamento', $id_pagina);
$titulo_original    = get_field('titulo_original', $id_pagina);
$elenco             = get_field('elenco', $id_pagina);
$direcao            = get_field('direcao', $id_pagina);
$classificacao      = get_field('classificacao', $id_pagina);
$sinopse            = get_field('sinopse', $id_pagina);
?>
<div class="container container--max">
    <h3 class="titulo-informacoes">Informações do Filme</h3>
    <div class="row">
        <div class="col-sm-12 col-md-4 post-filme-cartaz">
            <img src="<?php echo $cartaz; ?>" alt="Cartaz do Filme">
        </div>
        <div class="col-sm-12 col-md-8">
            <p class="descricao-filme">
                <strong><?php echo $tempo.'` / '.$pais.' / '.$ano.' / '.$formato.' / '.$genero; ?></strong>
            </p>
            <p class="descricao-filme">
                <strong>Lançamento do Filme:</strong><?php echo ' '.$data_de_lancamento; ?>
            </p>
            <p class="descricao-filme">
                <strong>Título Original:</strong><?php echo ' '.$titulo_original; ?>
            </p>
            <p class="descricao-filme">
                <strong>Elenco:</strong><?php echo ' '.$elenco; ?>
            </p>
            <p class="descricao-filme">
                <strong>Direção:</strong><?php echo ' '.$direcao; ?>
            </p>
            <p class="descricao-filme">
                <strong>Classificação:</strong><?php echo ' '.$classificacao; ?>
            </p>
            <article class="sinopse-do-filme">
                <?php echo $sinopse; ?>
            </article>
            <div class="row compartilhar-filme">
                <span class="compartilhar-filme__titulo">Compartilhe nas suas redes</span>
                <div class="addthis_inline_share_toolbox"></div>
            </div>
        </div>
    </div>
</div>

<div class="container container--max">
<?php
    $programacao = get_field_object('lugares', $id_pagina);
    if(!empty($programacao)) {

        foreach ($programacao['value'] as $valor => $label) {
            echo '<div class="container-accordion">';
                echo '<div class="accordion"><span class="accordion__cidade">'.$label['cidade'].'</span><span class="seta-baixo"></span></div>';
                foreach ($label['lugares'] as $key => $value) { ?>
                    <div class="accordion-filho">
                        <div class="row">
                            <div class="accordion-filho__lugar col-sm-12 col-md-8">
                                <?php echo $value['local']; ?>
                            </div>
                            <div class="accordion-filho__link col-sm-12 col-md-4">
                                <a class="botao-padrao botao-padrao--preto" href="<?php echo $value['link']; ?>">Acessar</a>
                            </div>
                        </div>
                    </div>
                <?php }
            echo '</div>';
        }

    } ?>
</div>
<?php get_footer(); ?>