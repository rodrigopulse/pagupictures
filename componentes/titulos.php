<?php function titulo($tipo, $texto) { ?>

    <h1 class="titulo titulo--<?php echo $tipo ?>">
        <?php echo $texto; ?>
    </h1>

<?php }
function subTitulo($tipo, $texto) { ?>
    <h2 class="subtitulo subtitulo--<?php echo $tipo; ?>">
        <?php echo $texto; ?>
    </h2>
<?php } ?>