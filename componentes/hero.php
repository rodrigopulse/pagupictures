<?php function hero($tipo, $imagem, $selo, $titulo, $subtitulo, $trailer, $informacoes, $alinhamento, $classe) { ?>
    <div class="hero
        <?php if(!empty($alinhamento)){ echo 'hero--'.$alinhamento; } ?>
        <?php if($tipo === 'imagem'){ echo 'hero--'.$tipo; } ?>
        <?php
        /**
         * Essas classses estão dentro de componentes/hero.scss
         * Apesar de ser customização de layout, dessa maneira ficam todas as classes
         * de hero em um único lugar
         */
        if( !empty( $classe ) ){ echo 'hero--'.$classe; } ?> ">
        <div class="hero__conteudo">
            <?php
            if(!empty($selo)) {
                selo($selo);
            }

            titulo('hero', $titulo, '');

            if(!empty($subtitulo)) {
                subtitulo('h2', $subtitulo, 'hero', '');
            } ?>
            <div class="hero__botoes">
                <?php
                if(!empty($trailer)) {
                    $textoTrailer = get_theme_mod( 'botao_trailer', 'Trailer' );
                    botao('trailer', 'Trailer', $trailer, 'branco');
                }
                if(!empty($informacoes)) {
                    $textoInformacoes = get_theme_mod( 'botao_informacoes', 'Mais Informações' );
                    botao('href', $textoInformacoes, $informacoes, 'branco');
                } ?>
            </div>
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