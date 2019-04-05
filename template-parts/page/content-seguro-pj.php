<?php
/**
 * Displays content for page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<section class="container-fluid banner-container">
	<article class="row" id="bannerTopo">
		<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail[2] / $thumbnail[1] * 100;
		?>
		<!-- BANNER DO TOPO DA PÁGINA -->
		<div class="col-12">
			<div class="col-12 offset-md-2 col-md-6">
				<a href="seguro-para-empresa/" title="Ver Seguros Empresariais" alt="Ver Seguros Empresariais" rel="next" target="_self"><h1><?php the_field('titulo') ?></h1></a>
				<a href="seguro-para-empresa/" title="Ver Seguros Empresariais" alt="Ver Seguros Empresariais" rel="next" target="_self"><h2><?php the_field('subtitulo') ?></h2></a>
				<div class="contatos-dir">
					<a href="https://wa.me/+5511942880299?text=Gostaria%20de%20maiores%20informa%C3%A7%C3%B5es%20sobre%20os%20servi%C3%A7os%20da%20Agata%20Mac"  rel="noopener" target="_blank" title="Entrar em contato por Whatsapp - (11) 94288 0299" alt="Entrar em contato por Whatsapp - (11) 94288 0299"><i class="fab fa-whatsapp contatos-topo"></i></a>
					<a href="tel:+551143026044" rel="noopener" target="_blank" title="Entrar em contato por Telefone - (11) 4302 6044" alt="Entrar em contato por Telefone - (11) 4302 6044"><i class="fa fa-phone contatos-topo"></i></a>
					<a href="mailto:contato@agatamacsaude.com.br?Subject=Agata%20Mac%20-%20Contato%20via%20site" rel="noopener" target="_blank" title="Entrar em contato por email - contato@agatamacsaude.com.br" alt="Entrar em contato por email - contato@agatamacsaude.com.br"><i class="fa fa-envelope contatos-topo"></i></a>
				</div>
			</div>
			<img class="banner-topo-img col-12 col-md-5" src="<?php echo esc_url( $thumbnail[0] ); ?>" alt="<?php the_field('titulo'); ?>" height="640" width="262">
		</div><!-- .banner-topo -->
		<?php endif; ?>
	</article>
</section>

	<span class="clearfix"></span>

<!-- CONTEÚDO PRINCIPAL -->
<section class="container">
	<article class="row" id="conteudoPrincipal">
		<?php the_content(); ?>
	</article>
</section>

<span class="clearfix"></span>

<?php
	// INCLUSÃO DA VITRINE DE SEGURADORAS
	get_template_part( 'inc/inc', 'seguradoras' );
?>

<?php
	// INCLUSÃO DA VITRINE DE SEGUROS PJ
	get_template_part( 'inc/inc', 'seguros-pj' );
?>

<?php
	// INCLUSÃO DA VITRINE DE SEGUROS PF
	get_template_part( 'inc/inc', 'seguros-pf' );
?>

<!-- BLOG - ARTIGOS, DICAS E NOTÍCIAS -->
<section class="container-fluid" id="postsRecentes">
	<h3 class="col-12">Mais sobre Benefícios e Seguros</h3>
	<div class="row">
		
		
    <?php 
		$postsRecentes = wp_get_recent_posts(array(
        'numberposts' => 4, // Number of recent posts thumbnails to display
        'post_status' => 'publish' // Show only the published posts
    ));
		foreach ($postsRecentes as $recent) {
			echo '
				<article class="col-12 col-sm-6 col-md-4 col-lg-3">
				<div>
					<a class="imagemArtigo" href="'. get_permalink($recent['ID']).'">
						'.get_the_post_thumbnail($recent['ID'], 'full').'
					</a>
					<div class="card-solucao-meta">
					    <a class="tituloArtigo" href="'.get_permalink($recent['ID']).'">
							<h4>'.$recent['post_title'].'</h4>
						</a>
						<a class="chamadaArtigo" href="'.get_permalink($recent['ID']).'">
					    	<caption>'.$recent['post_excerpt'].' </caption>
						</a>
						<a class="recent" href="'.get_permalink($recent['ID']).'">
							<button>
								saiba mais
							</button>
						</a>
					</div>
				</div>
			</article>
			';
		}; ?>

	</div>

</section>