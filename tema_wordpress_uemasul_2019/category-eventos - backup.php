<?php get_header(); ?>

<div class="col-md-12 linhabreadcrumbs">
   <div class="container">
        <?php custom_breadcrumbs(); ?>
    </div>
</div>

<div class="container"> <!-- linha master -->

<div class="row barratitulonoticias fundobarratitulos">
    <h2 class="titulosembarras"><B>PUBLICAÇÕES</B></h2>
</div>

<div class="row">

    <div class="col-md-3 sempadding colmenuesquerdo">

        <?php get_template_part( 'sidebar-videos-noticias' ); ?>

        <div style="font-size: 15pt; text-align: center; border-bottom: 2px solid gray;">GALERIA DE <span style="font-weight: bolder;">FOTOS</span></div>

        <div class="row">
        
            <?php get_template_part( 'loop-category-ultimas-galerias-sidebar' ); ?>
            
        </div>

    </div>

    <div class="col-md-9" style="overflow: hidden;">

        <div class="wrap">

	        <div class=""><h1>Eventos</h1></div>
            <hr>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <?php $i=1; ?>
                <?php query_posts('post_type=post&category_name=eventos&posts_per_page=10'); ?>

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                <?php

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
                    ?>

                <div class="panel panel-default" style="margin-bottom: 30px;">
                    <div class="panel-heading" role="tab" id="headingOne" style="height: 80px;">

                    <h4 class="panel-title">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne">
                            <span style="border-right: 2px solid #cbcbcb; padding-right: 10px; color: #950000; height: 60px; display: table-cell; vertical-align: middle;">
                            
                                <strong><?php echo $diaevento . "/" . $mes_nome; ?></strong> 
                                <!-- Data em que ocorrerá o evento -->
                            </span>

                            <span style="display: table-cell; vertical-align: middle; padding-left: 10px; max-width: 650px;">
                                <strong><?php the_title(); ?></strong>
                            </span>
                        </a>
                    </h4>
                    </div>
                    <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="background-color: #f0f0f0;">
                    <!-- para virem todos abertos, alterar para: class="panel-collapse collapse in" -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-5">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                            <div class="col-md-7">
                                <?php the_content(); ?>
                            </div>
                        </div>

                    </div>
                    </div>
                </div>

                <?php $i++; endwhile; else: ?>

                    <p>Erro.</p>

                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                
                <div class="col-md-12">
                    <?php wp_pagenavi(); ?>
                </div>

            </div><!--end of the accordion wrap-->
        </div><!-- wrapper-->

    </div>   

</div>

</div>

<?php get_footer(); ?>