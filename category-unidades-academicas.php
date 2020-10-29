<?php get_header(); ?>

<div class="col-md-12 linhabreadcrumbs">
   <div class="container">
        <?php custom_breadcrumbs(); ?>
    </div>
</div>

<div class="container">

<?php

if ( have_posts() ) {
     
     while (have_posts()) : the_post(); ?>

        <!-- Parte do loop que mostra o 1o. post -->

        <div class="row" style="margin-bottom: 4%;">

                  <div class="col-md-5 col-sm-5 item-noticia">
                        <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('lista-noticia', array( 'class' => 'img-responsive' ));
                        } ?>
                  </div>

                  <div class="col-md-7 col-sm-7 item-noticia" style="height: 175px; overflow: hidden;">
                      <a href="<?php the_permalink() ?>" rel="bookmark"><h3><?php the_title() ?></h3></a>
                      <?php the_excerpt() ?>
                  </div>

        </div>

   <?php endwhile;
    
    }
    
    wp_reset_query();       
?>

<div class="col-md-12">
    <?php wp_pagenavi(); ?>
</div>

</div>

<?php get_footer(); ?>