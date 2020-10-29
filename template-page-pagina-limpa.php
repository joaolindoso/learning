<?php
/*
Template Name: Página Limpa
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

    <div class="row">

        <article class="col-md-12" style="overflow: hidden;">
                
                <div class="clearfix"></div>

                <section class="conteudopaglimpa" style="margin-top: 50px; margin-bottom: 50px;">

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