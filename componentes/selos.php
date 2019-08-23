<?php function selo( $selo ) {

    if( $selo === 'cartaz' ){
        $corSelo    = 'cartaz';
        $textoSelo  = 'Em Cartaz';
    } else if($selo === 'embreve') {
        $corSelo    = 'embreve';
        $textoSelo  = 'Em Breve';
    } else if($selo === 'catalogo') {
        $corSelo    = 'catalogo';
        $textoSelo  = 'Catálogo';
    } else if($selo === 'emcasa') {
        $corSelo    = 'catalogo';
        $textoSelo  = 'Catálogo';
    } ?>

    <span class="selo selo--<?php echo $corSelo; ?>"><?php echo $textoSelo; ?></span>

<?php } ?>