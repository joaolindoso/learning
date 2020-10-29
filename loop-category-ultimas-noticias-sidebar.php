<?php
    $listgaleria = new WP_Query( array('category_name'=>'noticias', 'order'=>'DESC', 'orderby'=>'id', 'posts_per_page'=>4 ) );

    if ($listgaleria->have_posts()) {
        while ($listgaleria->have_posts()) : $listgaleria->the_post(); ?>

            <div id="" class="col-md-12 col-sm-6 col-xs-12">
                    <div style="">
                        <div class="col-md-12 col-xs-12 sempadding" style="margin-top: 0px; text-align: left; padding-left: 0px;">
                        
                        <?php /* Incluindo o campo Chapéu */
                            $campo_chapeu = get_post_meta($post->ID, '_chapeu', true);              
                        ?>

                        <?php echo '<span class="chapeu centratexto">'.$campo_chapeu.'</span>'; ?>

                            <h5 style="border-bottom: 1px dotted #d4d4d4; padding-bottom: 10px;">
                                <a href="<?php the_permalink() ?>" rel="bookmark" style="color: #444444;"><?php the_title(); ?></a>
                            </h5>
                        </div>
                    </div>
            </div>
        <?php endwhile;
    }
    wp_reset_query();