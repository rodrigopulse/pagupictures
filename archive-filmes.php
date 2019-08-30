<?php get_header();
echo '<div class="container container--max container--margin-top">';

//titulo('paginas', 'Filmes');

$filtro = $_GET['filtro'];
if (!empty($filtro)) {
    $the_query = new WP_Query( array(
        'post_type'     => 'filmes',
        'post_status'   => 'publish',
        'meta_key'		=> 'selo',
        'meta_value'    => $filtro
    ) );
} else {
    $filtro = '';
    $the_query = new WP_Query( array(
        'post_type'     => 'filmes',
        'post_status'   => 'publish',
    ) );
}

filtros($filtro);
    /**
     * Cards dos filmes
     */
    echo '<div class="container">';

        echo '<div class="row">';
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo '<div class="col-sm-12 col-md-3 container-filmes">';
                    $thumbID    = get_field( 'cartaz', $post->ID );
                    $thumb      = wp_get_attachment_image_url( $thumbID , 'cartaz' );
                    $titulo     = get_the_title();
                    $link       = get_the_permalink();;
                    $selo       = get_field('selo', $post->ID);
                    cardFilmes($thumb, $titulo, $link, $selo);
                echo '</div>';
            }
        echo '</div>' /*.row */;
    echo '</div>'/*.container */;

echo '</div>'/*.container .container--margin-top */;
wp_reset_postdata(); ?>

<?php get_footer(); ?>
