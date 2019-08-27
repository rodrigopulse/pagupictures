<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php $url_favicon = get_bloginfo( 'template_url' ).'/assets/imagens/favicon'; ?>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $url_favicon ?>/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $url_favicon ?>/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $url_favicon ?>/favicon-16x16.png">
<link rel="manifest" href="<?php echo $url_favicon ?>/site.webmanifest">
<link rel="mask-icon" href="<?php echo $url_favicon ?>/safari-pinned-tab.svg" color="#545454">
<meta name="msapplication-TileColor" content="#000000">
<meta name="theme-color" content="#000000">
<?php if(!is_user_logged_in(  )){ 
    /**
     * Aqui são as tags de analises,
     * que só irão aparecer se o usuário não estiver logado
     **/?>

<?php } ?>