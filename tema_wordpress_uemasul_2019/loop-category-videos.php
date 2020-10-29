<div>
  <h1 class="titulopages">Vídeos</h1>
  <hr>
</div>

<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>

  <div class="row" style="margin-bottom: 20px; padding: 20px 15px; background-color: #ffffff;">

    <div class="col-md-4 col-sm-4 item-noticia">
      <a href="<?php the_permalink() ?>" rel="bookmark">
          <?php
              if (has_post_thumbnail()) {
                  the_post_thumbnail('thumbvideos', array( 'class' => 'img-responsive' ));
          } ?>
      </a>
    </div>

    <div style="col-md-8 col-sm-8">

        <?php /* Incluindo o campo Chapéu */
            $campo_chapeu = get_post_meta($post->ID, '_chapeu', true);              
        ?>

        <?php echo '<span class="chapeu">'.$campo_chapeu.'</span>'; ?>

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