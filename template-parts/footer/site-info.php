<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	Agata Mac Saúde &copy; <?php echo date('Y'); ?>
	<a href="https://djament.com.br" target="_blank" rel="external" class="imprint" title="Desenvolvido por Djament Comunicação, clique e acesse o site da Djament" alt="Desenvolvido por Djament Comunicação, clique e acesse o site da Djament">
		Desenvolvido por Djament Comunicação
	</a>
</div><!-- .site-info -->
