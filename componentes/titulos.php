<?php function titulo($tipo, $texto) {
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
function subTitulo($tipo, $texto) { ?>
    <h2 class="subtitulo subtitulo--<?php echo $tipo; ?>">
        <?php echo $texto; ?>
    </h2>
<?php } ?>