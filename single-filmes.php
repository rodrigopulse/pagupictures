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
$imagem         = wp_get_attachment_image_url( $imagemID, 'hero' );

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
            <article>
                <?php echo $sinopse; ?>
            </article>
        </div>
    </div>
</div>

<?php get_footer(); ?>