<!-- VITRINE DE SEGURADORAS -->
<?php if( have_rows('seguradoras', 'option') ): ?>
	<section class="container-fluid" id="vitrineSeguradoras">
		<article>
			<div class="container">
				<h3 class="col-12">Principais Seguradoras e Operadoras Parceiras</h3>
				<h6>A <span style="font-family:Marcellus,sans-serif;">AGATA MAC</span> é parceira das maiores e melhores operadoras e seguradoras do país</h6>
				<div class="row">
					<?php while( have_rows('seguradoras', 'option') ): the_row(); 
						// vars
						$logoSeguradora = get_sub_field('logo_seguradora');
						$nomeSeguradora = get_sub_field('nome_seguradora');
					?>
						<article class="col-6 col-sm-4 col-md-3 seguradora-card">
							<img class="seguradora-imagem" src="<?php echo $logoSeguradora['url']; ?>" alt="<?php echo $logoSeguradora['alt']; ?>" title="<?php echo $logoSeguradora['alt']; ?>" width="120" height="120" style="width:120px;height:120px;" />
						</article>
					<?php endwhile; ?>
				</div>
			</div>
		</article>
	</section>
<?php endif; ?>

<span class="clearfix"></span>