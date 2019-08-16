<?php /* Template Name: Página Inicial */ ?>
<?php get_header() ?>

<?php
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
hero($tipo, $imagem, $selo, $titulo, $subtitulo, $trailer, $informacoes); ?>

<?php get_footer(); ?>