<?php function filtros($filtro) {
    if( !empty( $filtro ) ) {
        if ($filtro === 'cartaz') {
            $classeCartaz   = ' botao-padrao--ativo';
            $classeEmbreve  = ' botao-padrao--desabilitado';
            $classeCatalogo = ' botao-padrao--desabilitado';
        } elseif ($filtro === 'em-breve') {
            $classeCartaz   = ' botao-padrao--desabilitado';
            $classeEmbreve  = ' botao-padrao--ativo';
            $classeCatalogo = ' botao-padrao--desabilitado';
        } elseif ($filtro === 'catalogo') {
            $classeCartaz   = ' botao-padrao--desabilitado';
            $classeEmbreve  = ' botao-padrao--desabilitado';
            $classeCatalogo = ' botao-padrao--ativo';
        }
    } else {
        $classeCartaz   = ' botao-padrao--desabilitado';
        $classeEmbreve  = ' botao-padrao--desabilitado';
        $classeCatalogo = ' botao-padrao--desabilitado';
    }
?>
    <div class="filtros container--max">
        <span class="filtros__titulo">Filtros:</span>
        <a class="botao-padrao <?php echo "$classeCartaz"; ?>" href="/filmes?filtro=cartaz">Em Cartaz</a>
        <a class="botao-padrao <?php echo "$classeEmbreve"; ?>" href="/filmes?filtro=em-breve">Em Breve</a>
        <a class="botao-padrao <?php echo "$classeCatalogo"; ?>" href="/filmes?filtro=catalogo">Catálogo</a>
        <?php if(!empty($filtro)) { ?>
            <a class="botao-padrao botao-padrao--preto" href="/filmes">Limpar Filtros</a>
        <?php } ?>
    </div>
<?php } ?>