<!-- VITRINE DE SOLUÇÕES PJ -->
<section class="container-fluid" id="vitrineSolucoes">
		
	<?php if( have_rows('solucoes', 'option') ): ?>

		<div class="container">

			<?php  if( is_page_template( 'template-seguro-pf.php' ) || is_page_template( 'template-seguros-pf.php' ) ){  ?>
				<h3 class="col-12">Confira também nossas Soluções para Empresas</h3>
			 	<span>Planos disponíveis a partir de 2 vidas - entre em contato para conhecer as vantagens e benefícios</span>
			<?php } else { ?>
				<h3 class="col-12">Soluções Completas em Seguros e Benefícios para sua Empresa</h3>
			<?php }; ?>

			<div class="row">
				<?php while( have_rows('solucoes', 'option') ): the_row(); 

					// vars
					$imagemSolucao = get_sub_field('imagem_solucao');
					$tituloSolucao = get_sub_field('titulo_solucao');
					$chamadaSolucao = get_sub_field('chamada_solucao');
					$linkSolucao = get_sub_field('link_solucao');
					$linkSolucaoInfo = get_sub_field('link_solucao_info');
					//if ($linkSolucao['target'] == '_blank'){ $linkRel = 'external'; } else { $linkRel = 'next'; };
					//if ($linkSolucaoInfo['target'] == '_blank'){ $linkRelInfo = 'external'; } else { $linkRelInfo = 'next'; };
					?>

					<article class="col-12 col-sm-6 col-md-4 col-lg-3">
						<?php if($imagemSolucao) :; ?>
						<a class="imagemSolucao" rel="next" href="<?php echo $linkSolucao['url']; ?>" title="<?php echo $imagemSolucao['title']; ?>" target="<?php echo $linkSolucao['target']; ?>">
							<img src="<?php echo $imagemSolucao['url']; ?>" alt="<?php echo $imagemSolucao['alt']; ?>" width="150" height="150" style="width:150px;height:150px;" />
						</a>
						<?php endif; ?>
						<div class="card-solucao-meta">
							<?php if($tituloSolucao) :; ?>
							<a class="tituloSolucao" rel="next" href="<?php echo $linkSolucao['url']; ?>" title="<?php echo $imagemSolucao['title']; ?>" target="<?php echo $linkSolucao['target']; ?>">
								<h2><?php echo $tituloSolucao; ?></h2>
							</a>
							<?php endif; ?>
							<?php if($chamadaSolucao) :; ?>
							<a class="chamadaSolucao" rel="next" href="<?php echo $linkSolucao['url']; ?>" title="<?php echo $imagemSolucao['title']; ?>" target="<?php echo $linkSolucao['target']; ?>">
						    	<p><?php echo $chamadaSolucao ?> </p>
							</a>
							<?php endif; ?>
							<?php if($linkSolucaoInfo) :; ?>
							<a class="linkSolucaoInfo" rel="next" href="<?php echo $linkSolucaoInfo['url']; ?>" title="<?php echo $linkSolucaoInfo['title']; ?>" target="<?php echo $linkSolucaoInfo['target']; ?>">
								<button>
									<?php echo $linkSolucaoInfo['title']; ?>
								</button>
							</a>
							<?php endif; ?>
							<?php if($linkSolucao) :; ?>
							<a class="linkSolucao" rel="next" href="<?php echo $linkSolucao['url']; ?>" title="<?php echo $linkSolucao['title']; ?>" target="<?php echo $linkSolucao['target']; ?>">
								<button>
									<?php echo $linkSolucao['title']; ?>
								</button>
							</a>
							<?php endif; ?>
						</div>
					</article>

				<?php endwhile; ?>
			</div>
		</div>

	<?php endif; ?>

	</article>
</section>

<span class="clearfix"></span>