<?php
    query_posts('category_name=slides&posts_per_page=5&meta_key=_thumbnail_id');
    if (have_posts()):
    $ativo = "active";
    $number = 0;
?>
    <div id="slide-destaque" class="carousel slide carousel-fade" data-interval="5000" data-ride="carousel" >

        <ol class="carousel-indicators">
            <?php while(have_posts()): the_post(); ?>
                <li data-target="#slide-destaque" data-slide-to="<?php echo $number++; ?>"></li>
            <?php endwhile; ?>
        </ol>

        <div class="carousel-inner">
            <?php while(have_posts()): the_post();?>
                <div class="item <?php echo $ativo; ?>">
                    <div class="container sempadding">

                        <div>
                            <a href="<?php the_permalink()?>">
                                <?php echo "<a href='" . get_the_permalink() . "' rel='bookmark'>" . the_post_thumbnail('slide', array('class'=>"img-destaque attachment-thumbnail img-responsive")) . "</a>"; ?>
                            </a>
                        </div>

                    </div>
                </div>

            <?php $ativo = ""; ?>
            <?php endwhile; ?>

        </div>

      <?php endif; wp_reset_query(); ?>

    </div>