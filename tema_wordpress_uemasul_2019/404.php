<?php
/**
 * Template para a página 404
 */

get_header(); ?>

	<div class="container">
		<main role="main">
			<section class="erro-404">
				<header>
					<h1><?php _e( 'Desculpe! Conteúdo não localizado.' ); ?></h1>
				</header>

				<div class="conteudo">
					<p><?php _e( 'Infelizmente, a página que você procurava não foi encontrada. você gostaria de fazer uma pesquisa?' ); ?></p>

					<?php get_search_form(); ?>

					<p>ou clique <a href="<?php bloginfo('wpurl') ?>">aqui</a> e retorne para a página inicial</p>
				</div>
			</section>

		</main>

	</div>
<?php get_footer(); ?>