<?php
    $undacadhome = new WP_Query( array('category_name'=>'unidades-academicas', 'order'=>'DESC', 'orderby'=>'id', 'posts_per_page'=>4 ) );

    if ($undacadhome->have_posts()) {
        while ($undacadhome->have_posts()) : $undacadhome->the_post(); ?>
            <div style="padding: 0px 10px;" class="col-md-12 col-sm-6 col-xs-12">
                <div>
                    <div class="col-md-12 sempadding" style="margin-top: 10px; text-align: left; padding-left: 10px; border-left: 5px solid #d5d5d5;">

                        <a style="color: #444444;" href="<?php the_permalink() ?>">

                            <b><?php the_title(); ?><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></b>

                            <?php the_excerpt(); ?>
                        </a>
                    </div>
                </div>
            </div>
        <?php endwhile;
    }
    wp_reset_query(); ?>

<div class="col-md-12">
    <a class="botao-saiba-mais" href="secao/unidades-academicas" rel="bookmark">
        VER TODOS <i class="fas fa-angle-right"></i>
    </a>
</div>

<ul>
<?php wp_list_pages( array(
    'include'  => array( 3194 ) ) ); ?>
</ul>