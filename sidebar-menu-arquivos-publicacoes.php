<div class="barralateral270">

    <button class="btn visible-xs-block btn-raised btn-default btn-block" type="button" data-toggle="collapse" data-target="#mobilkat" aria-expanded="false" aria-controls="mobilkat">
        Menu Publicações
    </button>

    <div class="collapse navbar-collapse" id="mobilkat" style="padding-left: 0px;">
        <?php wp_nav_menu( array( 
            'theme_location' => 'menu-arquivos-publicacoes', 
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
</div>