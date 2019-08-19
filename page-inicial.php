<?php /* Template Name: Página Inicial */ ?>
<?php get_header() ?>

<?php
/**
 * Hero
 */
$imagem         = 'http://pagu.localhost/wp-content/themes/pagupictures/assets/imagens/bg-hero-home.mp4';
$selo           = 'cartaz';
$titulo         = 'Não Mexa Com Ela';
$subtitulo      = 'Um filme de Michel Aviad';
$trailer        = 'https://youtube.com';
$informacoes    = 'https://youtube.com';
if (wp_is_mobile(  )) {
    $tipo = 'imagem';
} else {
    $tipo = 'video';
}
hero($tipo, $imagem, $selo, $titulo, $subtitulo, $trailer, $informacoes, '');

/**
 * Cards dos filmes
 */
echo '<div class="container container--max">';

    echo '<div class="row">';

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