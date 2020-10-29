<?php
    query_posts('category_name=destaques&posts_per_page=1&meta_key=_thumbnail_id');
    if (have_posts()):
    $ativo = "active";
    $number = 0;
?>
    <div class="carousel slide carousel-fade" data-interval="5000" data-ride="carousel" >
        <!-- escondendo indicadores -->
        <ol style="display: none;" class="carousel-indicators">
            <?php while(have_posts()): the_post(); ?>
                <li data-target="#slide-noticias" data-slide-to="<?php echo $number++; ?>"></li>
            <?php endwhile; ?>
        </ol>

        <div class="carousel-inner">
            <?php while(have_posts()): the_post();?>
                <div class="item <?php echo $ativo; ?>">
                    <div class="">
                        <div class="">
                            <a href="<?php the_permalink()?>">
                                <?php echo "<a href='" . get_the_permalink() . "' rel='bookmark'>" . the_post_thumbnail('slide-noticia-home', array('class'=>"img-responsive")) . "</a>"; ?>
                            </a>
                        </div>
                        <div id="chamada-destaque">
                            <?php /* Incluindo o campo Chapéu */
                                $campo_chapeu = get_post_meta($post->ID, '_chapeu', true);
                            ?>

                            <?php echo '<span class="chapeu">'.$campo_chapeu.'</span>'; ?>

                            <div id="titulonoticiachamadadestaque">
                                <a href="<?php the_permalink()?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            <?php $ativo = ""; ?>
            <?php endwhile; ?>

        </div>

      <?php endif; wp_reset_query(); ?>

    </div>