<?php get_header(); ?>

<div class="col-md-12 linhabreadcrumbs">
   <div class="container">
        <?php custom_breadcrumbs(); ?>
    </div>
</div>

<div class="container"> <!-- linha master -->

<div class="row barratitulocursos fundobarratitulos">
    <h2 class="titulosembarras"><B>MESTRADO</B></h2>
</div>

<div class="row">

    <div class="col-md-3 sempadding colmenuesquerdo">

        <img src="<?php bloginfo('template_url');?>/images/barra-detalhe-270.jpg" style="margin-bottom: 5px;">

        <?php get_template_part( 'sidebar-videos-noticias-mestrados' ); ?>

        <div style="font-size: 15pt; text-align: center; border-bottom: 2px solid gray;">GALERIA DE <span style="font-weight: bolder;">FOTOS</span></div>

        <div class="row">

            <?php get_template_part( 'loop-category-ultimas-galerias-sidebar' ); ?>

        </div>
    </div>

    <div class="col-md-9" style="overflow: hidden;">

        <?php get_template_part( 'loop-category-mestrados' ); ?>

    </div>   
</div>

</div>

<?php get_footer(); ?>