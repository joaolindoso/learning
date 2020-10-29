<div class="col-md-12" style="margin-bottom: 4%; width: 250px; margin-left: 20px;">

    <?php

    $i = 0;
    query_posts('category_name=videos&posts_per_page=3');
    if ( have_posts() ) {
        while (have_posts()) : the_post(); ?>
            <!-- Parte do loop que mostra o 1o. post -->
            <div class="row">
                <?php if ($i == 0) : ?>
                    <?php $videoyoutube = get_post_meta($post->ID, 'codigo_youtube', true); ?>

                    <div class="" style="margin-right: 0px;">
                        <iframe width="570" height="320" src="https://www.youtube.com/embed/<?php echo $videoyoutube; ?>?rel=0" frameborder="0" allowfullscreen class="img-responsive" style="width: 100%; max-width: 260px; height: 100%; max-height: 170px;"></iframe>
                    </div>

                    <div style="width: 100%; padding: 5px; color: #ffffff; border-bottom: 1px dotted #f4f4f4;"><?php echo get_the_title(); ?></div>

                <?php endif; ?>

                <!-- Parte do loop que mostra os posts restantes -->

                <?php if ($i != 0) : ?>

                    <div class="">
                        <a href="<?php the_permalink() ?>" rel="bookmark" style="color: white; margin-top: 5px; margin-bottom: 5px; display: block; position: relative; border-bottom: 1px dotted #f4f4f4; padding-bottom: 5px;"><i class="far fa-play-circle"></i> <?php the_title() ?></a>
                    </div>

                <?php endif; ?>
            </div>

    <?php $i++;
        endwhile;
    }
    wp_reset_query(); ?>

</div>