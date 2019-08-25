<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php $url_favicon = get_bloginfo( 'template_url' ).'/assets/imagens/favicon'; ?>
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $url_favicon ?>/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $url_favicon ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $url_favicon ?>/favicon-16x16.png">
	<link rel="manifest" href="<?php echo $url_favicon ?>/site.webmanifest">
	<link rel="mask-icon" href="<?php echo $url_favicon ?>/safari-pinned-tab.svg" color="#545454">
	<meta name="msapplication-TileColor" content="#000000">
	<meta name="theme-color" content="#000000">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="overlay-trailer">
	<button class="fechar-overlay js-fechar-overlay">X</button>
	<div class="loader"></div>
	<div class="overlay-trailer__carrega-video"></div>
</div>
<header class="header">
	<div class="logo">
		<a href="<?php bloginfo('url'); ?>">
			<img src="<?php bloginfo('template_url'); ?>/assets/imagens/logo-pagu.png" alt="Logo Pagu">
		</a>
		<?php //include('assets/imagens/logo-pagu.svg'); ?>
	</div>
	<nav role="navigation" class="js-controla-menu">
		<div id="menuToggle">
			<input type="checkbox" />
			<span></span>
			<span></span>
			<span></span>
		</div>
	</nav>
	<!--<div class="logo-fundo"></div>-->
	<?php get_template_part( '/componentes/menu' ); ?>
</header>