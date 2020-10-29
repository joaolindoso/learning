<h4 style="margin-bottom: 20px;">UEMASUL <b>TV</b></h4>

<div id="looptvuemasul" class="row sempadding">
    <?php 
        $videoshome = new WP_Query(array('posts_per_page'=>1,'category_name'=>'videos','order'=>'DESC'));
        while($videoshome->have_posts()) : $videoshome->the_post();
            $videoyoutube = get_post_meta($post->ID, 'codigo_youtube', true);
    ?>

    <div class="" style="margin-right: 0px;">
        <iframe width="570" height="320" src="https://www.youtube.com/embed/<?php echo $videoyoutube; ?>?rel=0" frameborder="0" allowfullscreen class="img-responsive" style="width: 100%; max-width: 570px; height: 320px; max-height: 320px;"></iframe>
    </div>

    <div class="titlevideo"><?php echo get_the_title(); ?></div>
    <?php endwhile; ?>
    <div class="col-md-12 mobile-saiba-mais" style="margin-top: 10px; padding-left: 0px;">
        <a class="botao-saiba-mais" href="secao/videos/" rel="bookmark">
            VER TODOS <i class="fas fa-angle-right"></i>
        </a>
    </div>
</div>