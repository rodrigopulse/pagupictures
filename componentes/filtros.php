<?php function filtros($filtro) {
    /**
     * Traduções
     */
    $tituloFiltros  = get_theme_mod( 'titulo_filtros', 'Filtros' );
    $filtroTodos    = get_theme_mod( 'filtro_todos', 'Todos' );
    $filtroCartaz   = get_theme_mod( 'filtro_cartaz', 'Em Cartaz' );
    $filtroEmBreve  = get_theme_mod( 'filtro_embreve', 'Em Breve' );
    $filtroCatalogo = get_theme_mod( 'filtro_catalogo', 'Catálogo' );
    $filtroEmCasa   = get_theme_mod( 'filtro_emcasa', 'Assistir em Casa' );

    if( !empty( $filtro ) ) {
        if ($filtro === 'cartaz') {
            // $nome_filtro é para o dropdown mobile
            $nome_filtro    = $tituloFiltros;
            $classeCartaz   = ' botao-padrao--ativo';
            $classeEmbreve  = ' botao-padrao--desabilitado';
            $classeCatalogo = ' botao-padrao--desabilitado';
            $classeEmCasa   = ' botao-padrao--desabilitado';
            $classeTodos    = ' botao-padrao--desabilitado';
        } elseif ($filtro === 'embreve') {
            // $nome_filtro é para o dropdown mobile
            $nome_filtro    = $filtroEmBreve;
            $classeCartaz   = ' botao-padrao--desabilitado';
            $classeEmbreve  = ' botao-padrao--ativo';
            $classeCatalogo = ' botao-padrao--desabilitado';
            $classeEmCasa   = ' botao-padrao--desabilitado';
            $classeTodos    = ' botao-padrao--desabilitado';
        } elseif ($filtro === 'catalogo') {
            // $nome_filtro é para o dropdown mobile
            $nome_filtro    = $filtroCatalogo;
            $classeCartaz   = ' botao-padrao--desabilitado';
            $classeEmbreve  = ' botao-padrao--desabilitado';
            $classeCatalogo = ' botao-padrao--ativo';
            $classeEmCasa   = ' botao-padrao--desabilitado';
            $classeTodos    = ' botao-padrao--desabilitado';
        } elseif ($filtro === 'emcasa') {
            // $nome_filtro é para o dropdown mobile
            $nome_filtro    = $filtroEmCasa;
            $classeCartaz   = ' botao-padrao--desabilitado';
            $classeEmbreve  = ' botao-padrao--desabilitado';
            $classeCatalogo = ' botao-padrao--desabilitado';
            $classeEmCasa   = ' botao-padrao--ativo';
            $classeTodos    = ' botao-padrao--desabilitado';
        }
    } else {
        // $nome_filtro é para o dropdown mobile
        $nome_filtro    = $tituloFiltros;
        $classeCartaz   = ' botao-padrao--desabilitado';
        $classeEmbreve  = ' botao-padrao--desabilitado';
        $classeCatalogo = ' botao-padrao--desabilitado';
        $classeEmCasa   = ' botao-padrao--desabilitado';
        $classeTodos    = ' botao-padrao--ativo';
    } ?>

    <?php if(wp_is_mobile()) { ?>
        <div class="container-accordion accordion-filtros">
            <div class="accordion">
                <span class="accordion__cidade"><?php echo $nome_filtro; ?></span><span class="seta-baixo"></span>
            </div>
            <div class="accordion-filho">
                <div class="row">
                    <a class="botao-padrao <?php echo "$classeTodos"; ?>" href="/filmes"><?php echo $filtroTodos; ?></a>
                </div>
                <div class="row">
                    <div class="accordion-filho__lugar col-sm-12">
                        <a class="botao-padrao <?php echo "$classeCartaz"; ?>" href="/filmes?filtro=cartaz"><?php echo $filtroCartaz; ?></a>
                    </div>
                </div>
                <div class="row">
                    <div class="accordion-filho__lugar col-sm-12">
                        <a class="botao-padrao <?php echo "$classeEmbreve"; ?>" href="/filmes?filtro=embreve"><?php echo $filtroEmBreve; ?></a>
                    </div>
                </div>
                <div class="row">
                    <div class="accordion-filho__lugar col-sm-12">
                        <a class="botao-padrao <?php echo "$classeEmCasa"; ?>" href="/filmes?filtro=emcasa"><?php echo $filtroEmCasa; ?></a>
                    </div>
                </div>
                <div class="row">
                    <div class="accordion-filho__lugar col-sm-12">
                        <a class="botao-padrao <?php echo "$classeCatalogo"; ?>" href="/filmes?filtro=catalogo"><?php echo $filtroCatalogo; ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="filtros container--max">
            <span class="filtros__titulo"><?php echo $tituloFiltros; ?>:</span>
            <a class="botao-padrao <?php echo "$classeTodos"; ?>" href="/filmes"><?php echo $filtroTodos; ?></a>
            <a class="botao-padrao <?php echo "$classeCartaz"; ?>" href="/filmes?filtro=cartaz"><?php echo $filtroCartaz; ?></a>
            <a class="botao-padrao <?php echo "$classeEmbreve"; ?>" href="/filmes?filtro=embreve"><?php echo $filtroEmBreve; ?></a>
            <a class="botao-padrao <?php echo "$classeEmCasa"; ?>" href="/filmes?filtro=emcasa"><?php echo $filtroEmCasa; ?></a>
            <a class="botao-padrao <?php echo "$classeCatalogo"; ?>" href="/filmes?filtro=catalogo"><?php echo $filtroCatalogo; ?></a>
        </div>
    <?php } ?>
<?php } ?>