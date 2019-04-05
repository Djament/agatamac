
<?php
/*
 * Template Name: Seguro PF
 * Template Post Type: page, post
 */

get_header(); ?>

<!-- <div id="primary" class="content-area">
	<main id="main" class="site-main" role="main"> -->

		<?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'seguro-pf' );
			endwhile;
		else :
			get_template_part( 'template-parts/post/content', 'none' );
		endif; ?>

	<!-- </main> #main 
</div> #primary -->

<?php get_footer();
