<?php function hero($tipo, $imagem, $selo, $titulo, $subtitulo, $trailer, $informacoes) { ?>
    <div class="hero">
        <div class="hero__conteudo">
            <?php
            selo('cartaz');
            titulo('hero', $titulo);
            subtitulo('hero', $subtitulo);
            if(!empty($trailer)) {
                botao('button', 'Trailer', $trailer, 'branco');
            }
            if(!empty($informacoes)) {
                //botao('href', 'Mais Informações', $informacoes, 'branco');
            } ?>
        </div>
        <?php if ($tipo == 'video') { ?>
            <div class="video-bg-container">
                <div class="video-bg-container__escurece"></div>
                <video class="video-bg-container__video" data-video-fundo="<?php echo $imagem; ?>" loop muted></video>
                <div class="video-bg-container__cover"></div>
            </div>
        <?php } else { ?>
        <?php } ?>
    </div>
<?php } ?>