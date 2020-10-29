<?php get_header(); ?>

<!-- PAGINA Container de Licitações -->

<div class="col-md-12 linhabreadcrumbs">
   <div class="container">
        <?php custom_breadcrumbs(); ?>
    </div>
</div>

<div class="container"> <!-- linha master -->

<div class="row barratitulocampus fundobarratitulos"> <!-- amarelo -->
    <h2 class="titulosembarras"><B>PUBLICAÇÕES</B></h2>
</div>

<div class="row">

    <div class="col-md-3 sempadding colmenuesquerdo">

        <hr class="tarja-separa-top"/>

        <?php get_template_part('sidebar-menu-arquivos-publicacoes') ?>

        <hr class="tarja-separa-bottom"/>

    </div>


    <div class="col-md-9" style="overflow: hidden;"> <!-- conteudo da página -->

            <section class="conteudo" style="margin-top: 0px; margin-bottom: 50px;">

                <?php the_content(); ?>

                <?php require_once ('page-publicacoes-online.php'); ?>

            </section>

    </div> 
    
</div>

</div>

<?php get_footer(); ?>