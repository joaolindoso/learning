<?php

    $listgaleria = new WP_Query( array('category_name'=>'noticias-imperatriz', 'order'=>'DESC', 'orderby'=>'id', 'posts_per_page'=>4 ) );

    if ($listgaleria->have_posts()) {
        while ($listgaleria->have_posts()) : $listgaleria->the_post(); ?>
            <div id="" class="col-md-12 col-sm-6 col-xs-12">
                    <div style="">
                        <div class="col-md-12 col-xs-12 sempadding" style="margin-top: 10px; text-align: left; padding-left: 10px;">
                            <h5 style="border-bottom: 1px dotted #d4d4d4; padding-bottom: 20px;">
                                <a href="<?php the_permalink() ?>" rel="bookmark" style="color: #444444;"><?php the_title(); ?></a>
                            </h5>
                        </div>
                    </div>
            </div>

        <?php endwhile;
    }
    wp_reset_query();