<?php get_header(); ?>

<!-- slide principal home -->

<div id="slide-destaque" class="row hidden-print"> 
    <?php //get_template_part( 'loop-slide-principal-home' ); ?>
    <?php if(function_exists( 'masterslider' ))
        masterslider('1'); ?>
</div>

<div class="container sempadding" id="uemasulnoticias">
    <header class="titulos-line-header">
        <h1>
            <span>UEMASUL <strong>NOTÍCIAS</strong></span>
        </h1>
    </header>

    <div class="clearfix"></div>

    <div class="container sempadding blocodenoticiashome">

        <!-- coluna do slide de destaque -->
        <div id="slide-noticias-home" class="col-md-8 sempadding"> 
            <?php get_template_part( 'loop-slide-noticias-home' ); ?>
        </div> 
        <!-- fim da coluna do slide -->

        <!-- Quadros ao lado do slide de destaque -->
        <div class="col-md-4 sempadding-mobile"> 
            <?php get_template_part( 'loop-lista-noticias-home' ); ?>
        </div>
    </div>
</div>

<div class="container sempadding">
    <hr class="hr-home">
</div>

<div class="container sempadding">

    <div id="secao3" class="row">

        <div class="col-md-4 blocounidadesacademicas centratexto">

            <h4>UNIDADES <b>ACADÊMICAS</b></h4>

            <div id="fotosecaoundacademicas">
                <?php dynamic_sidebar('sidebar-fotosecaoundacademicas'); ?>
            </div>

            <?php dynamic_sidebar('sidebar-listaundacademicas'); ?>
            
            <div class="col-md-12 sempadding mobile-saiba-mais" style="margin-top: 20px;">
                <a class="botao-saiba-mais" href="centros-e-cursos/" rel="bookmark">
                    VER TODOS <i class="fas fa-angle-right"></i>
                </a>
            </div>
            <?php //get_template_part( 'loop-unidades-academicas-home' ); ?>
        </div>

        <div class="col-md-4 blocoultimaspublicacoeshome sempadding">
            <?php get_template_part( 'loop-ultimas-publicacoes-home' ); ?>
        </div>

        <div class="col-md-4 blocoultimoseventoshome sempadding centratexto">
            <?php get_template_part( 'loop-eventos-home' ); ?>
        </div>
    </div>

</div>

<div class="container sempadding">
    <hr class="hr-home">
</div>

<div class="container sempadding">
    <div class="col-md-6 blocouemasultvhome centratexto">
        <?php get_template_part( 'loop-tv-uemasul-home' ); ?>
    </div>

    <div class="col-md-6 blocoacessorapidohome centratexto">
        <h4 style="margin-bottom: 20px;">ACESSO <b>RÁPIDO</b></h4>
        <div class="row" id="widget-acessorapido">

            <div class="col-md-6" style="border-right: 1px dotted #e2e2e2;">
                <div class="acessorapido"><?php dynamic_sidebar('sidebar-acessorapido1'); ?></div>
                <div class="acessorapido"><?php dynamic_sidebar('sidebar-acessorapido2'); ?></div>
                <div class="acessorapido"><?php dynamic_sidebar('sidebar-acessorapido3'); ?></div>
                <div class="acessorapido"><?php dynamic_sidebar('sidebar-acessorapido4'); ?></div>
                <div class="acessorapido"><?php dynamic_sidebar('sidebar-acessorapido5'); ?></div>
            </div>

            <div class="col-md-6">
                <div class="acessorapido"><?php dynamic_sidebar('sidebar-acessorapido6'); ?></div>
                <div class="acessorapido"><?php dynamic_sidebar('sidebar-acessorapido7'); ?></div>
                <div class="acessorapido"><?php dynamic_sidebar('sidebar-acessorapido8'); ?></div>
                <div class="acessorapido"><?php dynamic_sidebar('sidebar-acessorapido9'); ?></div>
                <div class="acessorapido"><?php dynamic_sidebar('sidebar-acessorapido10'); ?></div>
            </div>
            
        </div>
    </div>
</div>

<div class="container sempadding"></div>

<?php get_footer(); ?>