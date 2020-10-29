<div class="barralateral270 sidebarvideosnoticias">

    <!-- Sessão desativada a pedido da ASCOM em 31/10/2019
        
    <div style="font-size: 15pt; text-align: center;">UEMASUL <span style="font-weight: bolder;">TV</span></div>

    <div class="row" style="background-color: gray; color: #ffffff; padding: 5px; margin-left: 1px; width: 270px;">
        <div class="row">
            <?php //get_template_part( 'loop-category-ultimos-videos-sidebar' ); ?>
        </div>
    </div> -->

    <!--
    <div class="row" style="background-color: #a7a7a7; padding: 5px; margin-left: 1px; text-align: center; margin-bottom: 25px; width: 270px;">
    
        <a href="<?php //bloginfo('wpurl') ?>/secao/videos/" style="color: #ffffff;"><i class="fas fa-plus-circle"></i> VER MAIS VÍDEOS</a>
    </div>
    -->

    <div style="font-size: 15pt; text-align: center; border-bottom: 2px solid gray;">ÚLTIMAS <span style="font-weight: bolder;">NOTÍCIAS</span></div>

    <div class="row">
        <?php get_template_part( 'loop-category-ultimas-noticias-sidebar' ); ?>
    </div>

    <div class="row" style="background-color: #e8e8e8; padding: 5px; margin-left: 1px; text-align: center; margin-bottom: 25px; width: 270px;">
        <a href="<?php bloginfo('wpurl') ?>/secao/noticias/" class="vermaisnoticias"><i class="fas fa-plus-circle"></i> VER MAIS NOTÍCIAS</a>
    </div>

</div>