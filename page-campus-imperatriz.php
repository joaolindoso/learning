<?php get_header(); ?>

<!-- PAGINA CAMPUS IMPERATRIZ -->

<div class="col-md-12 linhabreadcrumbs">
   <div class="container">
        <?php custom_breadcrumbs(); ?>
    </div>
</div>

<div class="container"> <!-- linha master -->

<div class="row barratitulocampus fundobarratitulos">
    <h2 class="titulosembarras"><B>CAMPUS IMPERATRIZ</B></h2>
</div>

<div class="row">

    <div class="col-md-3 sempadding colmenuesquerdo">

        <img src="<?php bloginfo('template_url');?>/images/barra-detalhe-270.jpg" style="margin-bottom: 5px;">

        <?php get_template_part('sidebar-videos-noticias') ?>

    </div>  

    <div class="col-md-9" style="overflow: hidden;"> <!-- conteudo da página -->

        <h2 style="margin-top: -55px; margin-bottom: 45px; text-align: center; color: #ffffff; font-family: 'open sans'; font-weight: bold; text-transform: uppercase;">
            <?php the_title(); ?>
        </h2>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	

            <section style="margin-top: 5px; margin-bottom: 50px;">

                <?php the_content(); ?>

            </section>

        <?php

            endwhile;

        else : ?>

            <h1>Desculpe. Esta página não existe! Entre em contato com o suporte técnico.</h1>
        <?php endif; ?>	

        <div class="col-md-12" style="background-color: #f2f2f2; color: #444444; padding: 20px;">

           <h2>CURSOS DISPONÍVEIS PARA ESTE CAMPUS</h2>

            <?php

            global $post;
            $argmts = array( 'numberposts' => -1, 'category_name'=>'campus-imperatriz');
            $posts = get_posts($argmts);
            foreach( $posts as $post ) : setup_postdata($post); ?>

                <a href="<?php the_permalink() ?>" style="font-size: 13pt; color: #898989;">
                    <p><i class="fas fa-arrow-alt-circle-right"></i> <?php the_title(); ?></p>
                </a>

            <?php endforeach; 

            wp_reset_query(); ?>

        </div>

    </div>   
</div>

</div>

<?php get_footer(); ?>