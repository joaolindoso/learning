<!DOCTYPE html>
<html lang="pt-BR">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Instituída nos antigos Centros de Ensino Superiores de Imperatriz e de Açailândia, a UEMASUL assumiu a missão de promover o desenvolvimento regional englobando 22 municípios, garantindo um ensino público, gratuito e de qualidade e colaborando com a modernização da gestão pública e uma presença do estado do Maranhão mais significativa no continente. Nos últimos dias de 2016, o governador Flávio Dino anunciou a professora Dra. Elizabeth Nunes Fernandes como reitora pro tempore e no dia 1° de Janeiro de 2017, a UEMASUL passou a existir.">
<meta name="author" content="Secretaria Adjunta de Tecnologia da Informação do Estado do Maranhão - SEATI">
<link rel="icon" href="<?php bloginfo('template_url');?>/images/favicon.ico">

<title>
    <?php if(is_front_page() || is_home()){
        echo get_bloginfo('name');
    } else {
        echo "UEMASUL - " . get_the_title();
    }?>
</title>

<!-- Le styles -->
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
<link href="<?php bloginfo('template_url');?>/css/bootstrap.icon-large.min.css" rel="stylesheet">

<!-- Carregando fontes -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" >

<link href="https://fonts.googleapis.com/css?family=Faustina" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    
<!-- Carregando biblioteca para ícones -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>

</head>

<body>

<!-- Div necessária para carregar VLibras: vw -->
<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
    </div>
</div>

<div class="container-fluid hidden-xs" id="barra-topo">

    <div class="container sempadding">
        <div class="col-md-4 col-sm-4 col-xs-12 sempadding">
            GOVERNO DO <b>MARANHÃO</b>
        </div>

        <div class="col-md-8 col-sm-8 col-xs-12" id="acessorapidotopo">
            <?php dynamic_sidebar('sidebar-iconesatalhostopo'); ?>
        </div>
    </div>

</div>

<div id="topo" class="container sempadding">
    <div class="col-md-7 col-sm-12 col-xs-12" id="topo-logo">
	<div class="row">
           <a href="<?php bloginfo('wpurl');?>">
        	<img src="<?php header_image(); ?>"  alt="<?php bloginfo('name'); ?>" class="img-responsive"/>
           </a>
	</div>
    </div>

    <div class="col-md-5 col-sm-12 col-xs-12" id="quadro-busca">

        <div id="accessibility-nav">
            <?php echo do_shortcode('[wpa_toolbar]'); ?>
        </div>

        <div id="topo-busca" class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                    <form class="align-right" role="form" action="<?php bloginfo('siteurl'); ?>/" id="searchform" method="get" style="float: right;">
                        <div class="form-group">
                            <label for="s" class="assistive-text">Search</label>
                            <input name="s" id="search" type="text" class="form-control" value="<?php the_search_query(); ?>" placeholder="Buscar no Portal" />
                            <input id="botaolupaformpesquisa" type="image" alt="Search" src="http://findicons.com/files/icons/1389/g5_system/32/toolbar_find.png" />
                        </div>
                    </form>



            </div>
        </div>
    </div> <!-- fim quadro-busca -->
</div>
 
<div class="container-fluid" id="linha-menu-topo" >
    <div class="container menu-principal">
            <?php wp_nav_menu( array('theme_location' => 'menu-topo')); ?>
    </div>
</div>