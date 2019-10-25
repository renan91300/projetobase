<?php

if (!defined('URL')){
    header("location: /");
    exit();
}
//echo "<br />View HOME <br />";
//var_dump($this->dados['carousel']);?>
<main role="main">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            $count = count($this->dados['carousel']);
            for ($i = 0; $i < $count; $i++){?>
                <li data-target="#myCarousel" data-slide-to="<?=$i;?>" <?php if ($i == 0)
                    echo "class='active'"; ?>></li><?php
            }
            ?>
        </ol>
          <div class="carousel-inner">
              <?php
              $cont = 0;
                foreach ($this->dados['carousel'] as $carousel) {
                    extract($carousel); ?>
                    <div class="carousel-item <?php if ($cont == 0) echo "active"; ?>">
                        <img class="first-slide" src="<?=URL .'/assets/img/carousel/' .$id .'/' .$imagem; ?>"
                             alt="First slide"/>
                        <div class="container">
                            <div class="carousel-caption <?=$posicao_text; ?>">
                                <h1><?= $titulo; ?></h1>
                                <p><?= $descricao; ?></p>
                                <p><a class="btn btn-lg btn-<?=$cor;?>" href="<?= $link; ?>" role="button">
                                        <?= $titulo_botao; ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                    $cont++;
                }
              ?>
              <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
      </div>

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <?php
            $cont = 0;
            $anima = array('anima_left', 'anima_bottom', 'anima_right');
            foreach ($this->dados['servicos'] as $servico) {
            extract($servico); ?>
            <div class="col-lg-4 <?= $anima[$cont]; ?>">
                <img class="rounded-circle" src="<?=URL .'/assets/img/servico/' .$id .'/' .$imagem; ?>"
                     alt="<?= $nome; ?>" title="<?= $nome; ?>" width="140" height="140">
                <h2><?= $nome; ?></h2>
                <p><?= $descricao; ?></p>
                <p><a class="btn btn-<?= $cor; ?>" href="#" role="button">Mais detalhes &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <?php
                $cont++;
                }
            ?>
        </div><!-- /.row -->

        <hr class="featurette-divider">

        <div class="row">
            <?php
            extract($this->dados['video'][0]); ?>
            <div class="col-md-5 <?= $anima[0]; ?>" >
                <h2><?= $titulo; ?></h2>
                <p class="lead"><?= $descricao; ?></p>
            </div>
            <div class="col-md-7 <?= $anima[2]; ?>">
                <div class="embed-responsive embed-responsive-16by9">
                    <?= $link; ?>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- Example row of columns -->
        <div class="row">
            <?php
            $cont = 0;
            foreach ($this->dados['noticias'] as $noticia) {
                extract($noticia); ?>
                <div class="col-md-4 <?= $anima[$cont]; ?>">
                    <img class="" src="<?= URL . '/assets/img/noticia/' .$id . '/' . $imagem; ?>"
                         alt="<?= $titulo ?>" title="<?= $titulo; ?>" width="300" height="200">
                    <h2><?= $titulo; ?></h2>
                    <p><?= $descricao; ?> </p>
                    <p><a class="btn btn-<?= $cor; ?>" href="<?= URL . 'noticia/' .$slug; ?>"
                          role="button">Ver mais &raquo;</a></p>
                </div>
                <?php
                $cont++;
            }
            ?>
        </div>

        <hr class="featurette-divider">
    </div> <!-- /.container marketing -->
</main>


