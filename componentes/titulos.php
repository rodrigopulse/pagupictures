<?php function titulo($tipo, $texto, $link) {
    $contagem_titulo = strlen($texto);
    if ($tipo === 'hero') {
        if ($contagem_titulo > 24) {
            $classe_titulo = 'hero_menor';
        } else {
            $classe_titulo = 'hero';
        }
    } elseif ($tipo === 'pagina') {
        $classe_titulo = 'pagina';
    }
    ?>
    <h1 class="titulo titulo--<?php echo $classe_titulo; ?>">
        <?php echo $texto; ?>
    </h1>

<?php }
function subTitulo($tipo, $texto, $classe, $link) {
    if ($tipo == 'h2') { ?>
        <h2 class="subtitulo subtitulo--<?php echo $classe; ?>">
            <?php echo $texto; ?>
        </h2>
    <?php } else { ?>
        <?php if(!empty($link)) { ?>
            <a class="botao-padrao botao-padrao--preto" href="<?php echo $link; ?>"> 
        <?php } ?>
            <h3 class="subtitulo subtitulo--<?php echo $classe; ?>">
                <?php echo $texto; ?>
            </h3>
        <?php if(!empty($link)) { ?>
            </a>
        <?php } ?>
<?php }
} ?>