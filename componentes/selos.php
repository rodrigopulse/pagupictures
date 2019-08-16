<?php function selo( $selo ) {

    if( $selo === 'cartaz' ){
        $corSelo    = 'cartaz';
        $textoSelo  = 'Em Cartaz';
    } ?>

    <span class="selo selo--<?php echo $corSelo; ?>"><?php echo $textoSelo; ?></span>

<?php } ?>