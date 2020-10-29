<?php get_header(); ?>

<div class="col-md-12 linhabreadcrumbs">
   <div class="container">
        <?php custom_breadcrumbs(); ?>
    </div>
</div>

<div class="container"> <!-- linha master -->

    <div class="row barratitulonoticias fundobarratitulos">
        <h2 class="titulosembarras"><?php printf( __( '%s'), single_cat_title( '', false ) ); ?></h2>
    </div>

    <div class="row">

        <div class="col-md-3 sempadding colmenuesquerdo">

            <hr class="tarja-separa-top"/>

            <?php get_template_part('sidebar-menu-lateral-padrao') ?>

            <hr class="tarja-separa-bottom"/>

            <?php get_template_part('sidebar-videos-noticias') ?>

        </div>

        <div class="col-md-9" style="overflow: hidden;">
            
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
                                                the_post_thumbnail('destaquecategoria', array( 'class' => 'img-destaquecategoria' ));
                                        } ?>
                                    </a>
                                </div>

                                <div class="col-md-5 col-sm-5 sempadding caixadestaquecategoria">
                                    <div>
                                        <?php /* Incluindo o campo Chapéu */
                                        $campo_chapeu = get_post_meta($post->ID, '_chapeu', true);              
                                        ?>

                                        <?php echo '<span class="chapeu">'.$campo_chapeu.'</span>'; ?>

                                        <a href="<?php the_permalink() ?>" rel="bookmark"><h1 style="padding: 0px 0px 10px 0px; color: #000000; font-size: 28px !important; margin-top: 0px;"><?php the_title() ?></h1></a>

                                        <a href="<?php the_permalink() ?>" rel="bookmark"><h4 style="padding: 0px 0px 10px 0px; color: #7c7c7c; font-size: 14px !important;"><?php the_excerpt() ?></h4></a>
                                    </div>
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
                                    <?php /* Incluindo o campo Chapéu */
                                        $campo_chapeu = get_post_meta($post->ID, '_chapeu', true);              
                                    ?>

                                    <?php echo '<span class="chapeu">'.$campo_chapeu.'</span>'; ?>

                                    <a href="<?php the_permalink() ?>" rel="bookmark"><h3  style="margin-top: 0px !important;"><?php the_title() ?></h3></a>

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

        </div> 

    </div> <!-- fim row -->

</div> <!-- fim container -->

<?php get_footer() ?>