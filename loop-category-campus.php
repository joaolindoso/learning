<?php

$i = 0;

if ( have_posts() ) {

     while (have_posts()) : the_post(); ?>

        <!-- Parte do loop que mostra o 1o. post -->

        <div class="row" style="margin-bottom: 4%;">

            <?php if ($i == 0) : ?>

            <div id="destaquecategoria" class="col-md-7 col-sm-7">
                <a href="<?php the_permalink() ?>" rel="bookmark">
                    <?php 
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('destaquecategoria', array( 'class' => 'img-destaquecategoria' )); //retorna o thumbnail para página 
                    } ?>
                </a>

                  </div>

                  <div class="col-md-5 col-sm-5 sempadding" style="background-color: #e3e3e3; height: 335px;">

                      <a href="<?php the_permalink() ?>" rel="bookmark"><h1 style="padding: 0px 20px 10px 20px; color: #000000"><?php the_title() ?></h1></a>

                      <a href="<?php the_permalink() ?>" rel="bookmark"><h4 style="padding: 0px 20px 10px 20px; color: #7c7c7c;"><?php the_excerpt() ?></h4></a>

                  </div>

            <?php endif; ?>

            <!-- Parte do loop que mostra os posts restantes -->

            <?php if ($i != 0) : ?>

                  <div class="col-md-4 col-sm-4 item-noticia">
                    <a href="<?php the_permalink() ?>" rel="bookmark">
                        <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('lista-noticia', array( 'class' => 'img-responsive' ));
                        } ?>
                    </a>

                  </div>

                  <div class="col-md-8 col-sm-8 item-noticia" style="height: 175px; overflow: hidden;">

                      <a href="<?php the_permalink() ?>" rel="bookmark"><h3><?php the_title() ?></h3></a>

                      <span class='tarja-data'>
                        Publicado em <?php the_time('d/m G:i') ?>
                      </span>

                      <?php the_excerpt() ?>

                  </div>

            <?php endif; ?>

        </div>

   <?php $i++;

      endwhile;

  }

wp_reset_query();       

?>

<div class="col-md-12 centratexto" style="margin-bottom: 80px;">
    <?php wp_pagenavi(); ?>
</div>