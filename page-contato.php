<?php /* Template Name: Contato */ ?>

<?php get_header() ?>

<div class="contato">
    <div class="container container--max container-contato">
        <h1 class="titulo-contato"><?php echo get_the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>