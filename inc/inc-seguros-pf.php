<!-- VITRINE DE SEGUROS PF -->
<section class="container-fluid" id="vitrineSolucoesPF">
		
	<?php if( have_rows('solucoes_pf', 'option') ): ?>

		<div class="container">
			<?php  if( is_page_template( 'template-seguro-pj.php' ) || is_page_template( 'template-seguros-pj.php' ) ){  ?>
				<h3 class="col-12">Confira também nossas Soluções para Pessoa Física</h3>
				<span>Condições exclusivas para funcionários e colaboradores do seu negócio e seus familiares</span>
			<?php } else { ?>
				<h3 class="col-12">Soluções Completas em Seguros para Você e sua Família</h3>
			<?php }; ?>
			<div class="row">
				<?php while( have_rows('solucoes_pf', 'option') ): the_row(); 

					// vars
					$imagemSolucaoPf = get_sub_field('imagem_solucao_pf');
					$tituloSolucaoPf = get_sub_field('titulo_solucao_pf');
					$chamadaSolucaoPf = get_sub_field('chamada_solucao_pf');
					$linkSolucaoPf = get_sub_field('link_solucao_pf');
					//if ($linkSolucaoPf['target'] == '_blank'){ $linkRelPf = 'external'; } else { $linkRelPf = 'next'; };
					$linkSolucaoPfInfo = get_sub_field('link_solucao_pf_info');
					//if ($linkSolucaoPfInfo['target'] == '_blank'){ $linkRelPfInfo = 'external'; } else { $linkRelPfInfo = 'next'; };
					?>

					<article class="col-12 col-sm-6 col-md-4 col-lg-3">
						<?php if($imagemSolucaoPf) :; ?>
						<a class="imagemSolucao" rel="external" href="<?php echo $linkSolucaoPf['url']; ?>" title="<?php echo $imagemSolucaoPf['title']; ?>" target="<?php echo $linkSolucaoPf['target']; ?>">
							<img src="<?php echo $imagemSolucaoPf['url']; ?>" alt="<?php echo $imagemSolucaoPf['alt']; ?>" width="150" height="150" style="width:150px;height:150px;" />
						</a>
						<?php endif; ?>
						<div class="card-solucao-meta">
							<?php if($tituloSolucaoPf) :; ?>
							<a class="tituloSolucao" rel="external" href="<?php echo $linkSolucaoPf['url']; ?>" title="<?php echo $imagemSolucaoPf['title']; ?>" target="<?php echo $linkSolucaoPf['target']; ?>">
								<h2><?php echo $tituloSolucaoPf; ?></h2>
							</a>
							<?php endif; ?>
							<?php if($chamadaSolucaoPf) :; ?>
							<a class="chamadaSolucao" rel="external" href="<?php echo $linkSolucaoPf['url']; ?>" title="<?php echo $imagemSolucaoPf['title']; ?>" target="<?php echo $linkSolucaoPf['target']; ?>">
						    	<p><?php echo $chamadaSolucaoPf; ?> </p>
							</a>
							<?php endif; ?>
							<!-- <div> -->
								<?php if($linkSolucaoPfInfo) :; ?>
								<a class="linkSolucao" rel="next" href="<?php echo $linkSolucaoPfInfo['url']; ?>" title="<?php echo $linkSolucaoPfInfo['title']; ?>" target="<?php echo $linkSolucaoPfInfo['target']; ?>">
									<button>
										<?php echo $linkSolucaoPfInfo['title']; ?>
									</button>
								</a>
								<?php endif; ?>
								<?php if($linkSolucaoPf) :; ?>
								<a class="linkSolucao" rel="external" href="<?php echo $linkSolucaoPf['url']; ?>" title="<?php echo $linkSolucaoPf['title']; ?>" target="<?php echo $linkSolucaoPf['target']; ?>">
									<button>
										<?php echo $linkSolucaoPf['title']; ?>
									</button>
								</a>
								<?php endif; ?>
							<!-- </div> -->
						</div>
					</article>

				<?php endwhile; ?>
			</div>
		</div>

	<?php endif; ?>

	</article>
</section>

<span class="clearfix"></span>