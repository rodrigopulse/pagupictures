<?php function hero($tipo, $imagem, $selo, $titulo, $subtitulo, $trailer, $informacoes, $alinhamento) { ?>
    <div class="hero <?php if(!empty($alinhamento)){ echo 'hero--'.$alinhamento; } ?> <?php if($tipo === 'imagem'){ echo 'hero--'.$tipo; } ?>">
        <div class="hero__conteudo">
            <?php
            if(!empty($selo)) {
                selo('cartaz');
            }
            titulo('hero', $titulo);
            if(!empty($subtitulo)) {
                subtitulo('hero', $subtitulo);
            }
            if(!empty($trailer)) {
                botao('trailer', 'Trailer', $trailer, 'branco');
            }
            if(!empty($informacoes)) {
                botao('href', 'Mais Informações', $informacoes, 'branco');
            } ?>
        </div>
        <?php if ($tipo === 'video') { ?>
            <div class="video-bg-container">
                <div class="video-bg-container__escurece"></div>
                <video class="video-bg-container__video" data-video-fundo="<?php echo $imagem; ?>" loop muted></video>
                <div class="video-bg-container__cover"></div>
            </div>
        <?php } else { ?>
            <div class="imagem-bg-container">
                <div class="imagem-bg-container__escurece"></div>
                <div class="imagem-bg-container__imagem">
                    <img src="<?php echo $imagem; ?>" alt="<?php echo $titulo; ?>">
                </div>
            </div>
        <?php } ?>
    </div>
<?php } ?>