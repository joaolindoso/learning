<div class="clearfix"></div>
<h4 style="margin-bottom: 30px;">ACONTECE NA <b>UEMASUL</b></h4>

<?php
    $acontecehome = new WP_Query( array('post_type'=>'post', 'category_name' => 'eventos',  'orderby' => 'meta_value', 'meta_key' => '_data_evento', 'order' => 'DESC', 'posts_per_page'=>4 ) );
    if ($acontecehome->have_posts()) {
        while ($acontecehome->have_posts()) : $acontecehome->the_post(); ?>
            <div id="quadroacontece" class="col-md-12 col-sm-6 col-xs-12">
                    <div style="position: relative; background-color: #f4f4f4; height: 110px;">
                        <div class="col-md-3 col-xs-2 sempadding" style="border-right: 2px solid #d5d5d5; margin-top: 10px;"> 

                            <?php 
                               $datadoevento = get_post_meta($post->ID, '_data_evento', true); 
                               $partes = explode("-", $datadoevento);
                               $diaevento = $partes[2];
                               $mes_num = $partes[1];
                               $anoevento = $partes[0];

                                if($mes_num == '01'){
                                    $mes_nome = "Jan";
                                    }elseif($mes_num == '02'){
                                    $mes_nome = "Fev";
                                    }elseif($mes_num == '03'){
                                    $mes_nome = "Mar";
                                    }elseif($mes_num == '04'){
                                    $mes_nome = "Abr";
                                    }elseif($mes_num == '05'){
                                    $mes_nome = "Mai";
                                    }elseif($mes_num == '06'){
                                    $mes_nome = "Jun";
                                    }elseif($mes_num == '07'){
                                    $mes_nome = "Jul";
                                    }elseif($mes_num == '08'){
                                    $mes_nome = "Ago";
                                    }elseif($mes_num == '09'){
                                    $mes_nome = "Set";
                                    }elseif($mes_num == '10'){
                                    $mes_nome = "Out";
                                    }elseif($mes_num == '11'){
                                    $mes_nome = "Nov";
                                    }elseif($mes_num == '12'){
                                    $mes_nome = "Dez";
                                    }
                             ?>

                            <span id="diaevento"><?php echo $diaevento; ?></span><br>

                            <span id="mesevento"><?php echo strtoupper($mes_nome); ?></span>
                        </div>

                        <div class="col-md-9 col-xs-10 sempadding" style="margin-top: 10px; text-align: left; padding-left: 10px;">
                            <h5><b><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></b></h5>

                            <a class="botao-saiba-mais-acontece" href="<?php the_permalink() ?>" rel="bookmark" title="">
                                SAIBA MAIS <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
            </div>
        <?php endwhile;
    }
    wp_reset_query();
?>

<div class="col-md-12 mobile-saiba-mais" style="margin-top: 20px;">
    <a class="botao-saiba-mais" href="secao/eventos" rel="bookmark">
        VER TODOS <i class="fas fa-angle-right"></i>
    </a>
</div>