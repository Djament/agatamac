<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

			</div><!-- #content -->
		</main>

		<!-- DESTAQUES DE COTAÇÕES -->
		<div class="destaque-cotacoes row">
			<?php if( have_rows('seguro_cotacao_pf', 'option') || have_rows('seguro_cotacao_pj', 'option') ): ?>
				<div class="escondido" id="listaCotacoes" class="col-12">
					<div class="col-6" style="display:inline-block;">
						<h4 style="color:#fff !important;">Pessoa Física</h4>
					    <?php while( have_rows('seguro_cotacao_pf', 'option') ): the_row(); ?>
					       	<?php
					       		$cotacaoPf = get_sub_field('link_seguro_cotacao');
					       		if( $cotacaoPf['url'] ){ $cotacaoPfUrl = $cotacaoPf['url']; } else { $cotacaoPfUrl = 'https://agatamacsaude.com.br'; };
					       		if( $cotacaoPf['target'] ){ $cotacaoPfTarget = $cotacaoPf['target']; } else { $cotacaoPfTarget = '_blank'; };
					       		if( $cotacaoPf['title'] ){ $cotacaoPfTitle = $cotacaoPf['title']; } else { $cotacaoPfTitle = 'Confira!'; };
					       	?>
							   	<a target="_blank" class="cotacao-online-seguro" rel="external" href="<?php echo $cotacaoPfUrl; ?>" title="<?php echo $cotacaoPfTitle; ?>" target="<?php echo $cotacaoPfTarget; ?>">
						   			<?php echo $cotacaoPfTitle . '<i class="fas fa-external-link"></i>'; ?>
						   		</a>
						<?php endwhile; ?>
					</div>
					<div class="col-6" style="display:inline-block;">
						<h4 style="color:#fff !important;">Empresa</h4>
					    <?php while( have_rows('seguro_cotacao_pj', 'option') ): the_row(); ?>
					       	<?php
					       		$cotacaoPj = get_sub_field('link_seguro_cotacao');
					       		if( $cotacaoPj['url'] ){ $cotacaoPjUrl = $cotacaoPj['url']; } else { $cotacaoPjUrl = 'https://agatamacsaude.com.br'; };
					       		if( $cotacaoPj['target'] ){ $cotacaoPjTarget = $cotacaoPj['target']; } else { $cotacaoPjTarget = '_blank'; };
					       		if( $cotacaoPj['title'] ){ $cotacaoPjTitle = $cotacaoPj['title']; } else { $cotacaoPjTitle = 'Confira!'; };
					       	?>
							   	<a target="_blank" class="cotacao-online-seguro" rel="next" href="<?php echo $cotacaoPjUrl; ?>" title="<?php echo $cotacaoPjTitle; ?>" target="<?php echo $cotacaoPjTarget; ?>">
						   			<?php echo $cotacaoPjTitle . '<i class="fas fa-external-link"></i>'; ?>
						   		</a>
						<?php endwhile; ?>
					</div>
				</div>
				<div id="maisCotacoes">COTAÇÃO ONLINE <i class="fa fa-caret-up" id="setaMaisCotacoes"></i></div>
			<?php endif; ?>
		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) :
				?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'social',
									'menu_class'     => 'social-links-menu',
									'depth'          => 1,
									'link_before'    => '<span class="screen-reader-text">',
									'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
								)
							);
						?>
					</nav><!-- .social-navigation -->
				<?php
				endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
			<script defer async src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script defer async src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<!-- <script defer async src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
		</footer><!-- #colophon -->
		
		
		
		<script>
			const linkCotacoes = document.querySelector('#maisCotacoes');
			const setaCotacoes = document.querySelector('#setaMaisCotacoes');
			const listaCotacoes = document.querySelector('#listaCotacoes');
			linkCotacoes.onclick = function mostrarOpcoes() {
				if (listaCotacoes.classList.contains('escondido')){
					listaCotacoes.classList.remove('escondido');
					linkCotacoes.style.width = '720px !important;';
					// linkCotacoes.style.height = '60px !important;';
					listaCotacoes.style.width = '720px !important;';
					listaCotacoes.style = 'display:flex !important;';
					setaCotacoes.style.transform = 'rotate(180deg)';
					setaCotacoes.style.transform = 'opacity: 1';
					listaCotacoes.style.height = 'auto';
				} else {
					listaCotacoes.classList.add('escondido');
					listaCotacoes.style.height = '0px !important';
					linkCotacoes.style.width = '175px !important;';
					listaCotacoes.style = 'display:none !important;';
					listaCotacoes.style.width = '175px !important;';
					setaCotacoes.style.transform = 'rotate(0deg)';
					setaCotacoes.style.transform = 'opacity: 0';
				};
			};
		</script>



	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script>
	
			const menu = document.querySelector('.navigation-top');
			window.onscroll = function() {menuRolagem()};

			function menuRolagem() {
			    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
			        menu.style = 'background-color: rgba(3,169,244,0.92) !important;';
			    } else {
			        menu.style = 'background-color: rgba(3,169,244,1) !important;';
			    }
			}

		
</script>

<script>
grecaptcha.ready(function() {
grecaptcha.execute('6Lfm4oAUAAAAAH7BNk-0GPWKUMumcYgM9Pi7kfC_', {action: 'action_name'})
.then(function(token) {
// Verify the token on the server.
});
});

let blocosMidiaTexto = document.querySelectorAll('.wp-block-media-text');
function resize(){
	for (let i = 0; i < blocosMidiaTexto.length; i++){
	    if( window.innerWidth <= 600 && blocosMidiaTexto[i].hasAttribute('class', 'has-media-on-the-right') ){
	    	blocosMidiaTexto[i].setAttribute('class', 'wp-block-media-text alignwide is-stacked-on-mobile col-12 has-media-on-the-left');
	    };
	};
};
window.onresize = resize;

</script>

</body>
</html>
