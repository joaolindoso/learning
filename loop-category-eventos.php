<div>
  <h1 class="titulopages">Eventos</h1>
  <hr>
</div>

<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>

  <div class="row" style="margin-bottom: 20px; padding: 20px 15px; background-color: #ffffff;">

    <div class="col-md-4 col-sm-4 item-noticia sempadding-mobile">
      <a href="<?php the_permalink() ?>" rel="bookmark">
        <?php
          if (has_post_thumbnail()) {
            the_post_thumbnail('220x220', array( 'class' => 'img-responsive img-mobile-100' ));
        } ?>
      </a>
    </div>

    <div style="col-md-8 col-sm-8">
          <?php
              $datadoevento = get_post_meta($post->ID, '_data_evento', true); 
              $partes = explode("-", $datadoevento);
              $diaevento = $partes[2];
              $mes_num = $partes[1];
              $anoevento = $partes[0];

              if($mes_num == '01'){
                $mes_nome = "Jan";
                }elseif($mes_num == '02'){
                $mes_nome = "Fev";
                }elseif($mes_num == '03'){
                $mes_nome = "Mar";
                }elseif($mes_num == '04'){
                $mes_nome = "Abr";
                }elseif($mes_num == '05'){
                $mes_nome = "Mai";
                }elseif($mes_num == '06'){
                $mes_nome = "Jun";
                }elseif($mes_num == '07'){
                $mes_nome = "Jul";
                }elseif($mes_num == '08'){
                $mes_nome = "Ago";
                }elseif($mes_num == '09'){
                $mes_nome = "Set";
                }elseif($mes_num == '10'){
                $mes_nome = "Out";
                }elseif($mes_num == '11'){
                $mes_nome = "Nov";
                }elseif($mes_num == '12'){
                $mes_nome = "Dez";
                }

            $campo_data_evento = $diaevento."/".$mes_num."/".$anoevento;
        ?>

        <?php echo '<h6 class="chapeu">'.$campo_data_evento.'</h6>'; ?>

        <a href="<?php the_permalink() ?>" rel="bookmark">
          <h3  style="margin-top: 0px !important;"><?php the_title() ?></h3>
        </a>

        <?php the_excerpt() ?>
    </div>
  </div>
  <hr>

  <?php endwhile; else: ?>
      <p>Infelizmente não há resultados para esta listagem</p>
    <?php endif; ?>

<div class="col-md-12 centratexto" style="margin-bottom: 80px;">
    <?php wp_pagenavi(); ?>
</div>