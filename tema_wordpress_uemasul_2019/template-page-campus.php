<?php
/*
Template Name: Campus
*/
?>

<?php get_header(); ?>

<div class="col-md-12 linhabreadcrumbs">
   <div class="container">
        <?php custom_breadcrumbs(); ?>
    </div>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	

<div class="container"> <!-- linha master --> 

    <div class="row barratitulocursos fundobarratitulos">
        <h2 class="titulosembarras"><?php the_title(); ?></h2>
    </div>

    <div class="row">

        <div class="col-md-3 sempadding colmenuesquerdo">

            <hr class="tarja-separa-top"/>

            <?php get_template_part('sidebar-videos-noticias') ?>

        </div>

        <article class="col-md-9" style="overflow: hidden;">

                <section class="conteudo" style="margin-top: 0px; margin-bottom: 50px;">

                    <h1 class="titulopages"><?php the_title(); ?></h1>

                    <hr style="border-top: 1px solid #d4d4d4;">

                    <?php the_content(); ?><br>

                </section> 

            <?php
                endwhile;
            else:

            ?>		
                <h1>Desculpe. Esta página não existe! Entre em contato com o suporte técnico.</h1>

            <?php endif; ?>	

        </article>

    </div>
</div>

<?php get_footer(); ?>