<div class="barralateral270 sidebarnoticias">

    <button class="btn visible-xs-block btn-raised btn-default btn-block" type="button" data-toggle="collapse" data-target="#mobilkat" aria-expanded="false" aria-controls="mobilkat">
        Menu
    </button>

    <div class="collapse navbar-collapse" id="mobilkat" style="padding-left: 0px;">
        <?php wp_nav_menu( array( 
            'theme_location' => 'menu-sala-de-imprensa', 
            'container' => 'ul', 
            'container_class' => 'dropdown-menu', 
            'menu_class'=> 'nav navbar-nav navbar-dikey', 
            'echo' => true, 
            'items_wrap' => '<ul class="%2$s">%3$s</ul>', 
            'depth' => 2,
            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback', 
            'walker' => new WP_Bootstrap_Navwalker(), ) ); 
        ?>
    </div>

    <hr class="tarja-separa-bottom"/>

    <div style="font-size: 15pt; text-align: center;">UEMASUL <span style="font-weight: bolder;">TV</span></div>

    <div class="row hidden-xs" style="background-color: gray; color: #ffffff; padding: 5px; margin-left: 1px; width: 270px;">
        <div class="row">
            <?php get_template_part( 'loop-category-ultimos-videos-sidebar' ); ?>
        </div>
    </div>

    <div class="row hidden-xs" style="background-color: #a7a7a7; padding: 5px; margin-left: 1px; text-align: center; margin-bottom: 25px; width: 270px;">
        <a href="<?php bloginfo('wpurl') ?>/secao/videos/" style="color: #ffffff;"><i class="fas fa-plus-circle"></i> VER MAIS VÍDEOS</a>
    </div>

</div>