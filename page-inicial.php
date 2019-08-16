<?php /* Template Name: Página Inicial */ ?>
<?php get_header() ?>

<?php
$imagem     = 'http://pagu.localhost/wp-content/themes/pagupictures/assets/imagens/bg-hero-home.mp4';
$selo       = 'cartaz';
$titulo     = 'Não Mexa Com Ela';
$subtitulo  = 'Um filme de Michel Aviad';
if (wp_is_mobile(  )) {
    $tipo = 'video';
} else {
    $tipo = 'imagem';
}
hero($tipo, $imagem, $selo, $titulo, $subtitulo); ?>

<?php get_footer(); ?>