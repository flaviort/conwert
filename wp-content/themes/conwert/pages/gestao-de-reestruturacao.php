<?php
	/* Template Name: Gestão de Reestruturação */

	$template_args = array(
		'body_class' => 'solucoes-interna',
		'css_files' => array(

		),
		'js_files' => array(

		)
	);

	get_header( null, $template_args );
?>

<!-- banner -->
<section id="banner-top" class="relative overflow-hidden pb-8 sm:pb-10 pt-32 sm:pt-36 lg:pb-16 lg:pt-40 xl:pt-52 xl:pb-20 mb-10 sm:mb-16 md:mb-20 lg:mb-32">
	
	<div class="absolute z-0 top-0 left-0 w-full h-full bg-cover bg-center bg-no-repeat bg-blue-dark bg-[url('../img/bg-solucoes.jpg')]"></div>

	<div class="container-wrapper relative z-2">

		<h3 class="text-medium wow fadeInUp uppercase text-white mb-2 block">
			Soluções
		</h3>

		<h1 class="block font-bold uppercase text-white text-bigger wow fadeInUp">
			Gestão de Reestruturação
		</h1>

	</div>

</section>

<!-- content -->
<section id="content" class="pb-14 sm:pb-20 md:pb-28">
	<div class="container-wrapper">
		<div class="flex flex-wrap justify-between -mx-4">
			
			<div class="relative w-full px-4 pb-8 md:pb-0 md:w-1/2">

				<div class="relative overflow-hidden block w-full h-0 mb:pb-0 pb-[60%] md:h-full z-3 wow fadeInUp">
					<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/solucao-02.jpg" width="744" height="519" alt="Pessoas montando um quebra-cabeças" class="absolute top-0 left-0 w-full h-full object-cover">
				</div>

				<div class="absolute -top-10 -left-6 hidden w-32 h-32 max-w-full md:block bg-blue-dark z-1 wow fadeInUp"></div>
				<div class="absolute -bottom-8 right-10 hidden w-20 max-w-full bg-blue-medium h-20 md:block z-4 wow fadeInUp"></div>

			</div>

			<div class="w-full px-4 md:w-1/2 wow fadeInUp">

				<p class="text-medium">
					Reestruturar o negócio das empresas implica na transformação do momento em que as mesmas se encontram. Significa implementar uma série de medidas contundentes que possam repercutir na melhoria do cenário. É um processo de reformulação para a superação das dificuldades! Recuperar-se e revitalizar-se são as palavras-chave para quem passa por esse momento.<br /><br />

					Neste processo, os objetivos principais da Conwert envolvem a restauração do equilíbrio financeiro, a volta da competitividade e a maior geração de valor. Com uma equipe altamente capacitada, experiente e multicisciplinar, lideramos todos os processos identificados, agindo com transparência e responsabilidade.
				</p>

			</div>

		</div>
	</div>
</section>

<!-- blue block -->
<section id="blue-block" class="relative pb-4 sm:pb-10 xl:pb-20 wow fadeInLeft">

	<div class="container-wrapper">
		<div class="flex flex-wrap justify-between -mx-4">
			<div class="relative w-full px-4">

				<div class="absolute top-0 right-4 w-[200%] h-full z-0 bg-blue-medium"></div>

				<div class="relative z-2 pt-12 sm:pt-14 lg:pt-20 pb-8 sm:pb-12 lg:pb-16 text-white">

					<p class="text-big uppercase block mb-10">
						<b>Serviços</b>
					</p>

					<div class="flex flex-wrap justify-between -mx-4 text-medium">
						
						<div class="relative w-full px-4 md:w-1/2">

							<ul class="number-list">

								<li>
									<span class="number">1</span>
									<span>Mediação, captação de recursos financeiros e monetização de ativos;</span>
								</li>

								<li>
									<span class="number">2</span>
									<span>Gestão de caixa;</span>
								</li>

								<li>
									<span class="number">3</span>
									<span>Acompanhamento do ciclo produtivo com planejamento de produção e melhoria do lead time;</span>
								</li>

								<li>
									<span class="number">4</span>
									<span>Racionalização de estoques;</span>
								</li>

							</ul>

						</div>

						<div class="relative w-full px-4 md:w-1/2">

							<ul class="number-list">

								<li>
									<span class="number">5</span>
									<span>Renegociação de passivos;</span>
								</li>

								<li>
									<span class="number">6</span>
									<span>Reestruturação das áreas administrativa, financeira, comercial e operacional;</span>
								</li>

								<li>
									<span class="number">7</span>
									<span>Planejamento de redução de custos e despesas;</span>
								</li>

								<li>
									<span class="number">8</span>
									<span>Realinhamento das estratégias de médio e longo prazo alinhadas com a nova realidade da empresa;</span>
								</li>

							</ul>

						</div>

					</div>

				</div>

			</div>
		</div>
	</div>

</section>

<!-- solucoes -->
<section id="solucoes" class="relative pb-20 sm:pb-28 md:pb-36">

	<div class="hidden xl:block absolute z-0 top-0 left-0 w-full h-[10%] bg-gray-100"></div>

	<div class="relative container-wrapper z-2">
		<div class="flex flex-wrap justify-between -mx-4">

			<div class="flex items-center justify-start w-full px-4 xl:w-1/3">
				<p class="font-bold text-gray-600 uppercase xl:pt-[20%] text-bigger xl:py-0 block pb-6 sm:pb-10 pt-10 sm:pt-16 wow fadeInUp">
					Explore nossas <br />
					<span class="text-blue-light">Soluções</span>
				</p>
			</div>

			<div class="w-full px-4 py-2 sm:py-4 md:w-1/2 xl:w-1/3">
				<?php include('wp-content/themes/conwert/includes/block-diagnostico-empresarial.php'); ?>
			</div>

			<div class="w-full px-4 py-2 sm:py-4 md:w-1/2 xl:w-1/3">
				<?php include('wp-content/themes/conwert/includes/block-gestao-de-recuperacao-extra-judicial.php'); ?>
			</div>

			<div class="w-full px-4 py-2 sm:py-4 hidden xl:block xl:w-1/3"></div>

			<div class="w-full px-4 py-2 sm:py-4 md:w-1/2 xl:w-1/3">
				<?php include('wp-content/themes/conwert/includes/block-gestao-de-controladoria.php'); ?>
			</div>

			<div class="w-full px-4 py-2 sm:py-4 md:w-1/2 xl:w-1/3">
				<?php include('wp-content/themes/conwert/includes/block-captacoes-e-intermediacoes.php'); ?>
			</div>

		</div>

	</div>
</section>

<?php get_footer( null, $template_args ); ?>