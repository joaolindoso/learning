<?php get_header(); ?>
<!-- PAGINA DA SALA DE IMPRENSA -->

<div class="col-md-12 linhabreadcrumbs">
   <div class="container">
        <?php custom_breadcrumbs(); ?>
    </div>
</div>

<div class="container"> <!-- linha master singl-event --> 

<div class="row barratitulonoticias fundobarratitulos">
    <h2 class="titulosembarras">SALA DE <B>IMPRENSA</B></h2>
</div>

<div class="row">

    <div class="col-md-3 sempadding colmenuesquerdo">

        <hr class="tarja-separa-top"/>

        <?php get_template_part('sidebar-menu-lateral-padrao') ?>

        <hr class="tarja-separa-bottom"/>

        <?php get_template_part('sidebar-videos-noticias') ?>

    </div>  

    <div class="col-md-9" style="overflow: hidden;">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	

        <?php /* Incluindo o campo Chapéu */
            //$campo_chapeu = get_post_meta($post->ID, '_chapeu', true);

             
                $datadoevento = get_post_meta($post->ID, '_data_evento', true); 
                $partes = explode("-", $datadoevento);
                $diaevento = $partes[2];
                $mes_num = $partes[1];
                $anoevento = $partes[0];

                if($mes_num == 01){
                    $mes_nome = "Jan";
                    }elseif($mes_num == 02){
                    $mes_nome = "Fev";
                    }elseif($mes_num == 03){
                    $mes_nome = "Mar";
                    }elseif($mes_num == 04){
                    $mes_nome = "Abr";
                    }elseif($mes_num == 05){
                    $mes_nome = "Mai";
                    }elseif($mes_num == 06){
                    $mes_nome = "Jun";
                    }elseif($mes_num == 07){
                    $mes_nome = "Jul";
                    }elseif($mes_num == 08){
                    $mes_nome = "Ago";
                    }elseif($mes_num == 09){
                    $mes_nome = "Set";
                    }elseif($mes_num == 10){
                    $mes_nome = "Out";
                    }elseif($mes_num == 11){
                    $mes_nome = "Nov";
                    }else{
                    $mes_nome = "Dez";
                    }
                             

            $campo_data_evento = $diaevento."/".$mes_num."/".$anoevento;
        ?>

        <?php echo '<h6 class="chapeu centratexto">'.$campo_data_evento.'</h6>'; ?>

        <h1 class="titulonoticias"><?php the_title(); ?></h1> 

            <h3 class="subtitulonoticias">
                <?php the_excerpt(); ?>
            </h3>

            <hr>

            <div class="row"> <!-- começo da linha do cabecalho da noticia -->

                <div class="col-md-6">
                    <div style="font-size: 13px;">
                        <i class="far fa-file-alt"></i> <b><?php the_author(); ?></b> <span style="color: #888888;"><time datetime="<?php the_time( 'c' ); ?>"><?php the_time('j M Y'); ?></time></span>
                    </div>
                </div>

                <div class="col-md-6 botoescompartilhamentomateria">
                    <div>
                        <?php echo do_shortcode('[addtoany]'); ?>
                    </div>
                </div>
            </div><div class="clearfix"></div> <!-- fim da linha do cabecalho da noticia -->

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

        </div>  
</div>

</div>

<?php get_footer(); ?>