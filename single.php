<?php
    $post = $wp_query->post;

        // direcionar posts das noticias
        if (in_category('noticias') or in_category('noticias-acailandia') or in_category('noticias-imperatriz') or in_category('noticias-estreito') ) { 
            include ( TEMPLATEPATH . '/single-noticias.php' );
            return;
        }
        if (in_category('concursos')) {
            include ( TEMPLATEPATH . '/single-concursos.php' ); 
            return;
        }
        if (in_category('cursos')) {
            include ( TEMPLATEPATH . '/single-cursos.php' );
            return;
        }
        if (in_category('eventos')) {
            include ( TEMPLATEPATH . '/single-eventos.php' );
            return;
        }
        if (in_category('mestrados')) {
            include ( TEMPLATEPATH . '/single-mestrados.php' );
            return;
        }
        if (in_category('revistas')) {
            include ( TEMPLATEPATH . '/single-revistas.php' );
            return;
        }
        if (in_category('unidades-academicas')) {
            include ( TEMPLATEPATH . '/single-unidades-academicas.php' );
            return;
        }
        if (in_category('slides')) {
            include ( TEMPLATEPATH . '/single-slides.php' );
            return;
        }
        if (in_category('campus') or in_category('campus-acailandia') or in_category('campus-imperatriz') or in_category('campus-estreito') ) {
            include ( TEMPLATEPATH . '/single-campus.php' );
            return;
        }

        // direcionar posts das Notícias
        else {
            include ( TEMPLATEPATH . '/single-noticias.php' ); 
            return;
    }
