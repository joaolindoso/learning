<?php get_header(); ?>

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
    <div class="col-md-3 sempaddimg colmenuesquerdo">

        <img src="<?php bloginfo('template_url');?>/images/barra-detalhe-270.jpg" style="margin-bottom: 5px;">

        <?php get_template_part( 'sidebar-videos-noticias' ); ?>

        <div style="font-size: 15pt; text-align: center; border-bottom: 2px solid gray;">GALERIA DE <span style="font-weight: bolder;">FOTOS</span></div>

        <div class="row">

            <?php get_template_part( 'loop-category-ultimas-galerias-sidebar' ); ?>

        </div>
    </div>

    <div class="col-md-9" style="overflow: hidden;">

        <h2 style="margin-top: -55px; margin-bottom: 45px; text-align: center; text-transform: uppercase; color: #ffffff; font-family: 'open sans';"><?php printf( __( '%s'), single_cat_title( '', false ) ); ?></h2>

        <?php get_template_part( 'loop-category-noticias' ); ?>

    </div>   

</div>

</div>

<?php get_footer(); ?>