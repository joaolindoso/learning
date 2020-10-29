<?php

    $quadrosubdestaque = new WP_Query( array('category_name'=>'subdestaque', 'order'=>'DESC', 'orderby'=>'id', 'posts_per_page'=>1 ) );

    if ($quadrosubdestaque->have_posts()) {

        while ($quadrosubdestaque->have_posts()) : $quadrosubdestaque->the_post(); ?>

            <div id="lista-noticias-home" class="col-md-12 col-sm-6 col-xs-12">         

                <div><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail('subdestaquehome', array('class'=>'img-responsive img-fluid')); ?></a></div>

                <?php /* Incluindo o campo Chapéu */
                    $campo_chapeu = get_post_meta($post->ID, '_chapeu', true);              
                ?>

                <?php echo '<span class="chapeu">'.$campo_chapeu.'</span>'; ?>

                <a href="<?php the_permalink() ?>" rel="bookmark">
                    <div id="noticiashometituloprincipal">
                        <?php the_title(); ?>
                    </div>
                </a>
            </div>

        <?php endwhile;
        }
    wp_reset_query(); 
    ?>

    <div class="col-md-12" style="width: 385px; padding-right: 0px;">
        <hr style="border-top: 2px solid #f2f2f2;">
    </div>  
    <?php
    /* Loop para demais notícias */

    $quadrodestaque = new WP_Query( array('category_name'=>'noticias', 'category__not_in'=>array(21,31), 'order'=>'DESC', 'orderby'=>'id', 'posts_per_page'=>3 ) );
    if ($quadrodestaque->have_posts()) {
      while ($quadrodestaque->have_posts()) : $quadrodestaque->the_post(); ?>

        <div id="lista-noticias-home-mais" class="col-md-12 col-sm-6 col-xs-12">
            <a href="<?php the_permalink() ?>" rel="bookmark">
                <div style="position: relative; height: auto; color: #444444;">
                    <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                    <?php the_title(); ?>
                </div>
            </a>
        </div>
       <?php endwhile;
      }
    wp_reset_query(); ?>

<div class="col-md-12">
    <hr class="tarja-separa-home hidden-xs">
</div>
<div class="clearfix"></div>

<div class="col-md-12 mobile-saiba-mais">
    <a class="botao-saiba-mais" href="secao/noticias" rel="bookmark">
        VER MAIS <i class="fas fa-angle-right"></i>
    </a>
</div>