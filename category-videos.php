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

    <div class="col-md-3 sempadding colmenuesquerdo">

        <hr class="tarja-separa-top"/>

        <?php get_template_part( 'sidebar-videos-galerias' ); ?>

    </div>

    <div class="col-md-9" style="overflow: hidden;">
        <?php get_template_part( 'loop-category-videos' ); ?>
    </div>   
</div>

</div>

<?php get_footer(); ?>