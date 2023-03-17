<?php
	/* Template Name: Captações e Intermediações */

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
			Captações e Intermediações
		</h1>

	</div>

</section>

<!-- content -->
<section id="content" class="pb-14 sm:pb-20 md:pb-28">
	<div class="container-wrapper">
		<div class="flex flex-wrap justify-between -mx-4">
			
			<div class="relative w-full px-4 pb-8 md:pb-0 md:w-1/2">

				<div class="relative overflow-hidden block w-full h-0 mb:pb-0 pb-[60%] md:h-full z-3 wow fadeInUp">
					<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/solucao-05.jpg" width="744" height="519" alt="Pessoas subindo escadas" class="absolute top-0 left-0 w-full h-full object-cover">
				</div>

				<div class="absolute -top-10 -left-6 hidden w-32 h-32 max-w-full md:block bg-blue-dark z-1 wow fadeInUp"></div>
				<div class="absolute -bottom-8 right-10 hidden w-20 max-w-full bg-blue-medium h-20 md:block z-4 wow fadeInUp"></div>

			</div>

			<div class="w-full px-4 md:w-1/2 wow fadeInUp">

				<p class="text-medium">
					Uma das etapas mais importante para o crescimento das empresas é a busca de investidores para o seu negócio. Ter o suporte necessário de capital na alocação de sua atividade pode ser o fator preponderante para a melhoria dos resultados, para os investimentos necessários e para a adequação dos desembolsos à geração de caixa da atividade.<br /><br />

					A importância da preparação do processo, com o levantamento de todas as informações e a fundamentação do pleito de crédito é o que dará a celeridade e credibilidade na análise. Após isso é necessário que se faça a aproximação, com a correta apresentação de toda a documentação aos potenciais investidores do mercado financeiro. Por fim, após validação de crédito e aprovação, ter o correto acompanhamento das formalizações e obrigações, garante a efetividade do crédito captado.<br /><br />

					Com a experiência de mais de 20 anos no mercado financeiro e de crédito, a Conwert estrutura o melhor formato da operação para o negócio de seus clientes, aproximando as partes interessadas e colaborando com a segurança da negociação.
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
									<span>Operações de Sales & Leaseback, venda com transferência de propriedade legal, onde em seguida ou simultaneamente o mesmo ativo é alugado/arrendado;</span>
								</li>

								<li>
									<span class="number">2</span>
									<span>Operações estruturadas voltadas para o agronegócio;</span>
								</li>

								<li>
									<span class="number">3</span>
									<span>Operações de capital de giro, com garantias reais;</span>
								</li>

								<li>
									<span class="number">4</span>
									<span>Projetos de financiamento via BNDES;</span>
								</li>

							</ul>

						</div>

						<div class="relative w-full px-4 md:w-1/2">

							<ul class="number-list">

								<li>
									<span class="number">5</span>
									<span>Linha Fornecedor;</span>
								</li>

								<li>
									<span class="number">6</span>
									<span>Operações de home equity (inclusive para PF);</span>
								</li>

								<li>
									<span class="number">7</span>
									<span>Operações de Comex (Importação e Exportação);</span>
								</li>

								<li>
									<span class="number">8</span>
									<span>Antecipação e desconto de recebíveis (duplicatas, cheques, contratos, outros);</span>
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
				<?php include('wp-content/themes/conwert/includes/block-gestao-de-reestruturacao.php'); ?>
			</div>

			<div class="w-full px-4 py-2 sm:py-4 hidden xl:block xl:w-1/3"></div>

			<div class="w-full px-4 py-2 sm:py-4 md:w-1/2 xl:w-1/3">
				<?php include('wp-content/themes/conwert/includes/block-gestao-de-recuperacao-extra-judicial.php'); ?>
			</div>

			<div class="w-full px-4 py-2 sm:py-4 md:w-1/2 xl:w-1/3">
				<?php include('wp-content/themes/conwert/includes/block-gestao-de-controladoria.php'); ?>
			</div>

		</div>

	</div>
</section>

<?php get_footer( null, $template_args ); ?>