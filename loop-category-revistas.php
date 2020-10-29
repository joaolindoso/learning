<div>
  <h1 class="titulopages">Revistas e Publicações</h1>
  <hr>
  <?php dynamic_sidebar('sidebar-intrd-revistas'); ?>
</div>

<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>

  <div class="row" style="margin-bottom: 20px; padding: 20px 15px; background-color: #ffffff;">
    <div style="float: left; margin-right: 20px;">
      <a href="<?php the_permalink() ?>" rel="bookmark">
          <?php
              if (has_post_thumbnail()) {
                  the_post_thumbnail('caparevistapdf', array('class'=>'caparevistapdfcss'));
          } ?>
      </a>
    </div>

    <div>
      <a href="<?php the_permalink() ?>" rel="bookmark">
        <h4 class="titulorevistas">
          <?php the_title(); ?>
        </h4>
        <div style="font-size: 13px; color: #888888; margin-bottom: 30px;">
          <time datetime="<?php the_time( 'c' ); ?>"><?php the_time('j M Y'); ?></time>
        </div>
      </a>
      <div>
        <?php the_excerpt(); ?>
      </div>
    </div>
  </div>
  <hr>

  <?php endwhile; else: ?>
      <p>Infelizmente não há resultados para esta listagem</p>
    <?php endif; ?>

<div class="col-md-12 centratexto" style="margin-bottom: 80px;">
    <?php wp_pagenavi(); ?>
</div>