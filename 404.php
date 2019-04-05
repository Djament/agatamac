<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
				</header><!-- .page-header -->
				<div class="page-content">
					<h1 class="page-title" style="margin-top:200px !important;"><?php _e( 'Ops! Não encontramos a página que buscava...', 'twentyseventeen' ); ?></h1>
					<p><?php _e( 'Por favor, utilize a ferramenta de busca. Se preferir, entre em contato conosco!', 'twentyseventeen' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
