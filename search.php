<?php
/*
 * Template para apresentar resultados da pesquisa no site.
 */
get_header();
?> 

<div class="col-md-12 linhabreadcrumbs">
   <div class="container">
        <?php custom_breadcrumbs(); ?>
    </div>
</div>

<div class="container"> <!-- linha master -->

    <div class="row barratitulonoticias fundobarratitulos" style="margin-top: 40px;">
        <h2 class="titulosembarras">Resultado da <b>Pesquisa</b></h2>
    </div>

    <div class="row">
        <div class="col-md-3 sempadding colmenuesquerdo">
            <hr class="tarja-separa-top"/>
            <?php get_template_part( 'sidebar-videos-galerias' ); ?>
        </div>

        <div class="col-md-9" style="overflow: hidden;">
            
            <main id="main" class="site-main" role="main">
                <?php if (have_posts()) { ?> 
                    <header class="">
                        <h2 class=""><?php printf(__('Resultados da pesquisa para: %s'), '<span><b>' . get_search_query() . '</b></span>'); 
                ?></h2>
                    </header>

                <?php 
                while (have_posts()) {
                    the_post(); ?>

                    <div class="row" style="margin-bottom: 20px; padding: 20px 15px; background-color: #ffffff;">

                        <div class="col-md-4 col-sm-4 item-noticia">
                            <a href="<?php the_permalink() ?>" rel="bookmark">
                                <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('thumbvideos', array( 'class' => 'img-responsive' ));
                                } ?>
                            </a>
                        </div>

                        <div style="col-md-8 col-sm-8">

                            <?php /* Incluindo o campo Chapéu */
                                $campo_chapeu = get_post_meta($post->ID, '_chapeu', true);              
                            ?>

                            <?php echo '<span class="chapeu">'.$campo_chapeu.'</span>'; ?>

                            <a href="<?php the_permalink() ?>" rel="bookmark">
                            <h3  style="margin-top: 0px !important;"><?php the_title() ?></h3>
                            </a>

                            <?php the_excerpt() ?>
                        </div>
                    </div>
                    <hr>

                <?php }// end while ?>

                    <div class="col-md-12">
                        <?php wp_pagenavi(); ?>
                    </div> 

                <?php } else { ?> 
                <?php echo "<h3 style='font-size: 16px;'>Infelizmente, não foram encontrados resultados para sua pesquisa.<br><br>Talvez um refinamento possa ajudar. Utilize outras palavras relacionadas na busca.<br><br>Caso queira, clique <a href='https://uemasul.edu.br/portal'><u>aqui</u></a>, e retorne à página inicial do site.</h3>"; ?>
                <?php } // endif; ?> 
            </main>

        </div> 

    </div> <!-- fim row -->

</div> <!-- fim container -->

<?php get_footer(); ?> 