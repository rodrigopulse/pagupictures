<?php function filtros($filtro) {
    if( !empty( $filtro ) ) {
        if ($filtro === 'cartaz') {
            $nome_filtro    = 'Em Cartaz';
            $classeCartaz   = ' botao-padrao--ativo';
            $classeEmbreve  = ' botao-padrao--desabilitado';
            $classeCatalogo = ' botao-padrao--desabilitado';
            $classeEmCasa   = ' botao-padrao--desabilitado';
            $classeTodos    = ' botao-padrao--desabilitado';
        } elseif ($filtro === 'embreve') {
            $nome_filtro    = 'Em Breve';
            $classeCartaz   = ' botao-padrao--desabilitado';
            $classeEmbreve  = ' botao-padrao--ativo';
            $classeCatalogo = ' botao-padrao--desabilitado';
            $classeEmCasa   = ' botao-padrao--desabilitado';
            $classeTodos    = ' botao-padrao--desabilitado';
        } elseif ($filtro === 'catalogo') {
            $nome_filtro    = 'Catálogo';
            $classeCartaz   = ' botao-padrao--desabilitado';
            $classeEmbreve  = ' botao-padrao--desabilitado';
            $classeCatalogo = ' botao-padrao--ativo';
            $classeEmCasa   = ' botao-padrao--desabilitado';
            $classeTodos    = ' botao-padrao--desabilitado';
        } elseif ($filtro === 'emcasa') {
            $nome_filtro    = 'Assistir em Casa';
            $classeCartaz   = ' botao-padrao--desabilitado';
            $classeEmbreve  = ' botao-padrao--desabilitado';
            $classeCatalogo = ' botao-padrao--desabilitado';
            $classeEmCasa   = ' botao-padrao--ativo';
            $classeTodos    = ' botao-padrao--desabilitado';
        }
    } else {
        $nome_filtro    = 'Filtros';
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
                    <a class="botao-padrao <?php echo "$classeTodos"; ?>" href="/filmes">Todos</a>
                </div>
                <div class="row">
                    <div class="accordion-filho__lugar col-sm-12">
                        <a class="botao-padrao <?php echo "$classeCartaz"; ?>" href="/filmes?filtro=cartaz">Em Cartaz</a>
                    </div>
                </div>
                <div class="row">
                    <div class="accordion-filho__lugar col-sm-12">
                        <a class="botao-padrao <?php echo "$classeEmbreve"; ?>" href="/filmes?filtro=embreve">Em Breve</a>
                    </div>
                </div>
                <div class="row">
                    <div class="accordion-filho__lugar col-sm-12">
                        <a class="botao-padrao <?php echo "$classeCatalogo"; ?>" href="/filmes?filtro=catalogo">Catálogo</a>
                    </div>
                </div>
                <div class="row">
                    <div class="accordion-filho__lugar col-sm-12">
                        <a class="botao-padrao <?php echo "$classeEmCasa"; ?>" href="/filmes?filtro=emcasa">Assistir em Casa</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="filtros container--max">
            <span class="filtros__titulo">Filtros:</span>
            <a class="botao-padrao <?php echo "$classeTodos"; ?>" href="/filmes">Todos</a>
            <a class="botao-padrao <?php echo "$classeCartaz"; ?>" href="/filmes?filtro=cartaz">Em Cartaz</a>
            <a class="botao-padrao <?php echo "$classeEmbreve"; ?>" href="/filmes?filtro=embreve">Em Breve</a>
            <a class="botao-padrao <?php echo "$classeCatalogo"; ?>" href="/filmes?filtro=catalogo">Catálogo</a>
            <a class="botao-padrao <?php echo "$classeEmCasa"; ?>" href="/filmes?filtro=emcasa">Assistir em Casa</a>
        </div>
    <?php } ?>
<?php } ?>