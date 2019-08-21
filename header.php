<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#222222">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="overlay-trailer">
	<button class="fechar-overlay js-fechar-overlay">X</button>
	<div class="overlay-trailer__carrega-video"></div>
</div>
<header class="header">
	<div class="logo">
		<img src="<?php bloginfo('template_url'); ?>/assets/imagens/logo-pagu.png" alt="Logo Pagu">
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