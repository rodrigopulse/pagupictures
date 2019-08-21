<?php function botao($tipo, $texto, $link, $cor) { ?>
    <?php if ($tipo === 'href') { ?>
        <a class="botao-padrao botao-padrao--<?php echo $cor; ?>" href="<?php echo $link; ?>" class="botao-padrao">
            <?php echo $texto; ?>
        </a>
    <?php } elseif ($tipo === 'trailer') {
        /**
         * o js responsável por abrir o trailer está em assets/js/componentes/botoes.js
         */ ?>
        <button data-video='<?php echo $link; ?>' class="botao-padrao js-botao-trailer botao-padrao--<?php echo $cor; ?>">
            <?php echo $texto; ?>
        </button>
    <?php } ?>
<?php } ?>