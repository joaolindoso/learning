<?php get_header(); ?>

<!-- PAGINA DA SALA DE IMPRENSA -->

<div class="col-md-12 linhabreadcrumbs">
   <div class="container">
        <?php custom_breadcrumbs(); ?>
    </div>
</div>

<div class="container"> <!-- linha master --> 

    <div class="row barratitulonoticias fundobarratitulos">
        <h2 class="titulosembarras">SALA DE <B>IMPRENSA</B></h2>
    </div>

    <div class="row">

        <div class="col-md-3 sempadding colmenuesquerdo" style="display: none;">

            <hr class="tarja-separa-top"/>

            <?php get_template_part('sidebar-menu-lateral-padrao') ?>

            <hr class="tarja-separa-bottom"/>

            <?php get_template_part('sidebar-videos-noticias') ?>

        </div>

        <article class="col-md-12" style="overflow: hidden;">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	

                <section id="conteudo-titulodamateria">

                    <h1 class="titulonoticias"><?php the_title(); ?></h1>

                    <h2 class="subtitulonoticias">
                        <?php the_excerpt(); ?>
                    </h2>

                </section>

                <hr>

                <section> 

                    <div class="col-md-6"> <!-- começo da linha do cabecalho da noticia -->
                        <div style="font-size: 13px;">
                            <i class="far fa-file-alt"></i> <b><?php the_author(); ?></b> <span style="color: #888888;"><time datetime="<?php the_time( 'c' ); ?>"><?php the_time('j M Y'); ?></time></span>
                        </div>
                    </div>

                    <div class="col-md-6 botoescompartilhamentomateria">
                        <div>
                            <?php echo do_shortcode('[addtoany]'); ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                     <!-- fim da linha do cabecalho da noticia -->

                <hr>

                <div class="clearfix" style="display: none;"></div>

                <section class="conteudo">
                
                    <?php the_content(); ?><br>

                    <section class="related_tags">
                        <div style="float: left; width: 120px; display: block; height: 50px; margin-top: 5px;">
                          <b>Palavras-chave:</b>
                        </div>
                        <div style="float: left; display: contents;">
                            <?php the_tags( '', ' ', '<br />' ); ?> 
                        </div>
                    </section>

                    <section>
                        <?php if ( function_exists( "noticias_relacionadas_tags" ) ) { noticias_relacionadas_tags(); } ?>
                    </section>
                </section> 

            <?php
                endwhile;
            else:

            ?>		
                <h1>Desculpe. Esta página não existe! Entre em contato com o suporte técnico.</h1>

            <?php endif; ?>	

            </section>  
    </article>

    </div>
    
</div>

<?php get_footer(); ?>