<?php function botaoPadrao($tipo, $texto, $link, $cor) { ?>
    <?php if ($tipo === 'href') { ?>
        <a class="botao-padrao botao-padrao--<?php echo $cor; ?>" href="<?php echo $link; ?>" class="botao-padrao">
            <?php echo $texto; ?>
        </a>
    <?php } else { ?>
        <button class="botao-padrao botao-padrao--<?php echo $cor; ?>">
            <?php echo $texto; ?>
        </button>
    <?php } ?>
<?php } ?>