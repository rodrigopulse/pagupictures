<?php function botao($tipo, $texto, $link, $cor) { ?>
    <?php if ($tipo === 'href') { ?>
        <a class="botao-padrao botao-padrao--<?php echo $cor; ?>" href="<?php echo $link; ?>" class="botao-padrao">
            <?php echo $texto; ?>
        </a>
    <?php } elseif ($tipo === 'trailer') {
        /**
         * o js responsável por abrir o trailer está em assets/js/componentes/botoes.js
         */ ?>
        <button data-video='<?php echo $link; ?>' class="botao-padrao botao-trailer js-botao-trailer botao-padrao--<?php echo $cor; ?>">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
                <path class="st0" d="M206.8,363.4L351.4,255L206.8,146.5V363.4z M255,14C122.4,14,14,122.4,14,255s108.4,241,241,241
                    s241-108.5,241-241S387.5,14,255,14z M255,447.8C149,447.8,62.2,361,62.2,255S149,62.2,255,62.2S447.8,149,447.8,255
                    S361,447.8,255,447.8z"/>
            </svg>
            <?php echo $texto; ?>
        </button>
    <?php } ?>
<?php } ?>