<footer class="footer">
    <h3 class="titulo-footer"><?php echo get_theme_mod( 'titulo_newsletter', 'Receba nossas novidades no seu e-mail!' ); ?></h3>
    <div class="footer__newsletter">
        <?php get_template_part('componentes/newsletter'); ?>
    </div>
    <div class="footer__sociais">
        <a target="_blank" class="socicon-facebook" href="https://www.facebook.com/pagupictures"></a>
        <a target="_blank" class="socicon-instagram" href="https://www.instagram.com/pagupictures"></a>
        <a target="_blank" class="socicon-youtube" href="https://www.youtube.com/channel/UC9IVxyHG4JmykxCQacZUxdw"></a>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>