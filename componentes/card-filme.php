<?php function cardFilmes($thumb, $titulo, $link, $selo) { ?>
    <a class="card-filme" href="<?php echo $link; ?>">
        <div class="card-filme__container">
            <div class="card-filme__thumb">
                <img src="<?php echo $thumb; ?>" alt="<?php echo $titulo; ?>">
            </div>
            <?php selo($selo); ?>
            <div class="card-filme__conteudo">
                <h3 class="card-filme__titulo">
                    <?php echo $titulo; ?>
                </h3>
            </div>
        </div>
    </a>
<?php } ?>