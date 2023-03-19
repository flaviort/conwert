<?php
	/* Template Name: Revisão Tributária */

	$template_args = array(
		'body_class' => 'revisao-tributaria',
		'css_files' => array(

		),
		'js_files' => array(

		)
	);

	get_header( null, $template_args );
?>

			<!-- banner -->
			<section id="banner" class="relative overflow-hidden block bg-[#1a4f9e] pt-28 sm:pt-36 md:pt-44 lg:pt-52">

				<div class="absolute z-0 bg-blue-dark bottom-0 right-0 h-[60%] sm:h-[70%] md:h-[30%] w-[70%] sm:w-[40%] md:w-[20%] wow fadeInUp"></div>

				<div class="container-wrapper relative z-2">
					<div class="flex flex-wrap flex-row-reverse justify-between -mx-4">

						<div class="relative w-full px-4 md:w-1/2 xl:w-[60%]">

							<a href="#" data-fancybox class="flex items-center justify-center relative z-2 overflow-hidden w-full xl:w-[70%] h-96 md:h-full bg-black group wow fadeInUp">

								<span class="relative z-2 block w-32 md:w-44 h-32 md:h-44 rounded-full border md:border-4 border-white text-white p-10 md:p-14 duration-300 group-hover:scale-125 group-hover:border md:group-hover:p-[4.25rem]">
									<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/play.svg" alt="Play" class="svg fill-current w-full h-full translate-x-1">
								</span>

								<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/tributaria-01.jpg" alt="Revisão Tributária Conwert" class="absolute z-0 top-0 left-0 w-full h-full object-cover duration-300 opacity-70 group-hover:opacity-50">
							</a>

							<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/tributaria-00.jpg" alt="" class="hidden sm:block md:hidden xl:block absolute z-0 -right-32 md:right-[10px] 2xl:-right-10 md:-top-10 -bottom-32 md:bottom-auto w-[50%] md:w-[60%] object-cover h-[80%] wow fadeInRight">

						</div>

						<div class="w-full px-4 md:w-1/2 xl:w-[40%] pb-14 sm:pb-16 md:pb-20 lg:pb-32 pt-8 sm:pt-10 md:pt-14 lg:pt-20">

							<h1 class="block font-bold uppercase text-white text-bigger wow fadeInUp mb-5 sm:mb-6 md:mb-8 lg:mb-10">
								<span class="text-[175%] md:text-[150%] leading-none">
									Revisão <br />
									Tributária <br />
									Conwert
								</span>
							</h1>

							<a href="#" data-fancybox class="inline-block px-6 py-3 font-semibold text-white uppercase transition-colors duration-300 bg-[#25aae2] sm:px-8 sm:py-4 text-medium hover:bg-white hover:text-blue-light wow fadeInUp">
								Assista ao vídeo
							</a>

						</div>

					</div>
				</div>
			</section>

			<!-- sistema tributario -->
			<section id="sistema-tributario" class="relative overflow-hidden py-10 sm:py-16 md:py-20 lg:py-32">
				<div class="container-wrapper">

					<div class="flex flex-wrap justify-between -mx-4">
						
						<div class="w-full px-4 md:w-1/2 mb-6 sm:mb-8 md:mb-0">

							<h2 class="block font-bold uppercase text-blue-dark text-big-2 wow fadeInUp mb-5 sm:mb-6 md:mb-8 lg:mb-10">
								O Complexo Sistema Tributário Brasileiro
							</h2>
					
							<p class="text-medium wow fadeInUp">
								O Brasil, é o país que detêm uma das maiores cargas tributárias do mundo, representando atualmente <strong>34% do seu PIB.</strong> E além desta alta carga tributária, a complexidade do sistema tributário brasileiro, ao qual são editadas <strong>37 normas tributárias/dia ou 1,5 norma tributária por hora</strong>, faz com que a correta apuração dos tributos sejam um enorme desafio aos contadores.<br /><br />
						
								Aliado a esse desordenado número de normas, temos legislações dúbias, de difícil interpretação, gerando a necessidade de judicialização de diversos temas, cabendo ao judiciário esclarecer o correto entendimento, e mesmo assim, a mais alta corte, em diversas ocasiões mudou seu entendimento com o tempo. Assim, o que hoje é interpretado de uma forma, daqui a poucos meses pode ter seu entendimento totalmente alterado.
							</p>

						</div>

						<div class="grid w-full px-4 md:w-1/2 text-medium uppercase font-bold gap-2 sm:gap-3 md:gap-2 2xl:gap-4 sm:grid-cols-2 md:grid-cols-1 xl:grid-cols-2">

							<div class="block w-full h-full bg-white border border-gray-300 p-5 sm:p-8 xl:p-10 text-center wow fadeInUp">

								<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/icon-01.png" alt="Maiores cargas tributárias do mundo" class="block mx-auto mb-4">

								<h3>
									Maiores cargas tributárias do mundo
								</h3>

							</div>

							<div class="block w-full h-full bg-white border border-gray-300 p-5 sm:p-8 xl:p-10 text-center wow fadeInUp">

								<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/icon-02.png" alt="Correspondente a 34% do PIB brasileiro" class="block mx-auto mb-4">

								<h3>
									Correspondente a 34% do PIB brasileiro
								</h3>

							</div>

							<div class="block w-full h-full bg-white border border-gray-300 p-5 sm:p-8 xl:p-10 text-center wow fadeInUp">

								<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/icon-03.png" alt="Complexo sistema tributário" class="block mx-auto mb-4">

								<h3>
									Complexo sistema tributário
								</h3>

							</div>

							<div class="block w-full h-full bg-white border border-gray-300 p-5 sm:p-8 xl:p-10 text-center wow fadeInUp">

								<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/icon-04.png" alt="Normas tributárias por dia, ou 1,5 norma tributária por hora" class="block mx-auto mb-4">

								<h3>
									Normas tributárias por dia, ou 1,5 norma tributária por hora
								</h3>

							</div>

						</div>

					</div>

					<div class="flex flex-wrap justify-between -mx-4 relative mt-10 sm:mt-16 md:mt-20 lg:mt-32 md:pt-14 xl:pt-20">

						<div class="hidden md:block absolute bg-white w-[100vw] top-0 left-32 h-[calc(100%-2rem)] wow fadeInRight"></div>
						
						<div class="w-full px-4 md:w-1/2 mb-6 sm:mb-8 md:mb-0 relative z-2">

							<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/tributaria-02.jpg" alt="95% das empresas brasileiras pagam tributos indevidamente" class="block w-full xl:w-[90%] md:h-full md:object-cover wow fadeInUp">

						</div>

						<div class="w-full px-4 md:w-1/2 relative z-2">

							<p class="text-medium wow fadeInUp md:mb-20 xl:mb-32">
								Um estudo do IBGE / Impostômetro aponta que <strong>95% das empresas brasileiras pagam tributos indevidamente</strong>, e este número reflete na dificuldade do empresariado em solucionar as obrigações fiscais que recaem sobre todos os tiposde empresas – independentemente do tamanho ou setor em que elas estejam inseridas.<br /><br />

								Segundo o IBPT as empresas brasileiras <strong>gastam cerca de R$ 181 bilhões por ano para custear equipe, sistemas e equipamentos</strong> no intuito de acompanhar as alterações na legislação tributária.<br /><br />

								Como no Brasil a obrigação de apurar os tributos é de total responsabilidade do contribuinte, comumente são liquidados valores bem maiores do que os realmente são devidos. Entretanto, a legislação garante ao contribuinte a <strong>possibilidade de revisar os tributos declarados</strong> nos últimos 5 anos e recuperar os tributos quitados indevidamente.
							</p>
							
						</div>

					</div>

				</div>
			</section>

			<section id="marquee" class="relative overflow-hidden pb-10 sm:pb-16 md:pb-20 lg:pb-32 wow fadeIn">
				<div class="text-bigger font-bold uppercase">
					<div class="marquee text-[200%] text-gray-300 pt-5 whitespace-nowrap">
						Revisão Tributária Conwert / Revisão Tributária Conwert / Revisão Tributária Conwert /&nbsp;
					</div>
				</div>
			</section>

			<!-- pis-confins -->
			<section id="pis-confins" class="relative overflow-hidden py-10 sm:py-16 md:py-20 lg:py-32 2xl:pb-0 text-white bg-blue-dark 2xl:bg-transparent">

				<div class="absolute z-0 top-0 left-0 bg-blue-dark w-[calc(100%-4rem)] h-[calc(100%-5rem)]"></div>

				<div class="container-wrapper relative z-2">

					<div class="flex flex-wrap justify-between -mx-4">

						<div class="w-full px-4">

							<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/tributaria-03.jpg" alt="Regime de não cumulatividade do PIS / CONFINS" class="block lg:hidden w-full wow fadeInUp">

							<h2 class="block font-bold uppercase text-big-2 wow fadeInUp my-5 sm:my-6 md:my-8 lg:mt-0 lg:mb-10">
								Regime de não cumulatividade do PIS / CONFINS
							</h2>

							<p class="text-medium wow fadeInUp mb-5 sm:mb-6 md:mb-8 lg:mb-10">
								O regime de não cumulatividade do <strong>Programa de Integração Social (PIS)</strong> foi introduzido a partir de dezembro de 2002 com o advento da Lei 10.637/2002 e para a Contribuição para Financiamento da Seguridade Social (COFINS), a partir de fevereiro de 2004 com a publicação da Lei 10.833/2003. A redação de ambas as legislações não foi totalmente clara, deixando um <strong>conceito abstrato com relação aos custos que podem gerar créditos</strong> destes tributos.<br /><br />

								Portanto, a Receita Federal do Brasil editou as Instruções Normativas nº. 247/2002 enº. 404/2004, que restringiram o alcance do conceito de gastos que podem gerar estes créditos. 
							</p>

						</div>
						
						<div class="w-full px-4 lg:w-1/2 xl:w-2/3">

							<p class="text-medium wow fadeInUp 2xl:mb-32">
								Judicialmente, ao longo dos últimos anos, o <strong>STJ vem alterando o entendimento dado pela RFB</strong> e pacificando que os insumos que geram direito ao crédito são aqueles <strong>essenciais às atividades das empresas.</strong> Portanto, tanto na esfera judicial, como na administrativa, o conceito de insumo para cálculo de crédito de PIS e COFINS não está restrito às matérias-primas, produtos intermediários e material de embalagem, como ocorre com o IPI, mas devem ser considerados todos os elementos essenciais à produção ou fabricação de bem destinado à venda ou prestação de serviço.<br /><br />

								Essa mudança no entendimento do aproveitamento destes créditos fizeram com que os <strong>contribuintes pudessem revisar as declarações dos últimos 5 anos, permitindo assim, identificar os créditos que eventualmente não foram aproveitados pelo entendimento antigo,</strong> mas que agora são passíveis de utilização. Inclusive, em 15 de dezembro de 2022, foi publicada a Instrução Normativa RFB 2121 que unificou as normas de apuração de PIS e COFINS, adotando o novo entendimento do STJ sobre o conceito do insumos. Porém, fazer essa revisão é uma tarefa nada fácil, tendo em vista o elevado número de lançamentos que podem ser abrangidos, além do conhecimento técnico /jurídico necessário para poder identificar estas oportunidades.
							</p>

						</div>

						<div class="hidden lg:block w-full px-4 lg:w-1/2 xl:w-1/3 flex justify-end">

							<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/tributaria-03.jpg" alt="Regime de não cumulatividade do PIS / CONFINS" class="block w-full 2xl:w-[calc(100%+10rem)] 2xl:max-w-none md:h-full md:object-cover 2xl:-mr-40 wow fadeInUp">

						</div>

					</div>
				</div>
			</section>

			<!-- revisao tributaria -->
			<section id="revisao-tributaria" class="relative overflow-hidden py-10 sm:py-16 md:py-20 lg:py-32">
				<div class="container-wrapper">

					<div class="flex flex-wrap justify-between -mx-4 pb-6 sm:pb-10 md:pb-14 xl:pb-20">
						<div class="w-full px-4">

							<h2 class="block font-bold uppercase text-big-2 md:text-center md:mx-auto wow text-blue-dark fadeInUp">
								Revisão Tributária Conwert
							</h2>

						</div>
					</div>
					
					<div class="relative z-2 flex flex-wrap justify-between -mx-4 md:pt-14 xl:pt-20">

						<div class="hidden md:block absolute bg-white w-[100vw] top-0 left-32 h-[calc(100%-2rem)] wow fadeInRight"></div>
						
						<div class="w-full px-4 md:w-1/2 mb-6 sm:mb-8 md:mb-0 relative z-2">

							<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/tributaria-04.jpg" alt="Revisão Tributária Conwert" class="block w-full xl:w-[90%] md:h-full md:object-cover wow fadeInUp">

						</div>

						<div class="w-full px-4 md:w-1/2 relative z-2">

							<p class="text-medium wow fadeInUp md:mb-20 xl:mb-32">
								<strong>Através da alta capacidade de sua equipe técnica e seu software</strong> que cruza diversas informações e declarações feitas pela empresa, a <strong>CONWERT</strong> consegue <strong>revisar a integralidade dos lançamentos</strong> de entradas de matérias-primas e insumos, e identificar nota a nota todos os créditos de PIS e COFINS que não foram aproveitados em suas respectivas competências em função das alterações de entendimento aplicadas a estes tributos nos últimos anos.<br /><br />

								Todos os créditos identificados serão devidamente <strong>fundamentados com parecer jurídico</strong> e jurisprudência atualizada que garante a possibilidade de sua utilização. Em caso de questionamento administrativo ou judicial, a <strong>CONWERT</strong> dará toda a assistência jurídica necessária para a manutenção do crédito e <strong>garante a devolução de 50% dos honorários*</strong> pagos sobre os tributos eventualmente glosados.<br /><br />

								Por fim, <strong>agilidade é fundamental nesse processo</strong>, pois cada mês que passa, ocorre o desperdício da possibilidade de revisão de mais uma competência. Deste modo, a <strong>CONWERT garante a entrega do relatório técnico em até 15 dias</strong> após a entrega de todas as informações necessárias para elaboração da revisão.
							</p>
							
						</div>

					</div>

					<div class="relative z-3 flex flex-wrap justify-between -mx-4">
						<div class="block w-full px-4 md:px-10 2xl:px-20 pt-6 md:-mt-10">
							<div class="grid w-full text-medium uppercase font-bold gap-2 sm:gap-3 xl:gap-4 sm:grid-cols-2 lg:grid-cols-4">

								<div class="block w-full h-full bg-white border border-gray-300 p-5 sm:p-8 xl:p-10 text-center wow fadeInUp">
				
									<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/icon-05.png" alt="Alta capacidade técnica" class="block mx-auto mb-4">
				
									<h3>
										Alta capacidade técnica
									</h3>
				
								</div>
				
								<div class="block w-full h-full bg-white border border-gray-300 p-5 sm:p-8 xl:p-10 text-center wow fadeInUp">
				
									<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/icon-06.png" alt="Devolução de 50% dos honorários* pagos sobre os tributos glosados" class="block mx-auto mb-4">
				
									<h3>
										Devolução de 50% dos honorários* pagos sobre os tributos glosados
									</h3>
				
								</div>
				
								<div class="block w-full h-full bg-white border border-gray-300 p-5 sm:p-8 xl:p-10 text-center wow fadeInUp">
				
									<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/icon-07.png" alt="Agilidade" class="block mx-auto mb-4">
				
									<h3>
										Agilidade
									</h3>
				
								</div>
				
								<div class="block w-full h-full bg-white border border-gray-300 p-5 sm:p-8 xl:p-10 text-center wow fadeInUp">
				
									<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/icon-08.png" alt="Relatório técnico em até 15 dias" class="block mx-auto mb-4">
				
									<h3>
										Relatório técnico em até 15 dias
									</h3>
				
								</div>
				
							</div>
						</div>

						<div class="block px-4 md:text-center md:mx-auto w-[1060px] max-w-full pt-6 sm:pt-10 md:pt-14 xl:pt-16 wow fadeInUp">

							<p class="text-medium block mb-4">
								<b>Além dos créditos líquidos de utilização, o relatório técnico também apresentará os créditos passíveis de judicialização e que ainda não possuem jurisprudência pacificada em relação ao seu direito de compensação, podendo assim, se tornarem novos créditos no futuro.</b>
							</p>

							<p class="text-sm md:text-base opacity-50">
								<b>*Desde que sejam cumpridas as condições previstas em contrato.</b>
							</p>

						</div>

					</div>

				</div>
			</section>

			<!-- clientes -->
			<section id="clientes" class="relative bg-white py-10 sm:py-16 md:py-20 lg:py-32">
				<div class="container-wrapper">

					<p class="block sm:mx-auto font-bold sm:text-center uppercase pb-6 sm:pb-10 md:pb-14 lg:pb-16 text-blue-dark text-bigger wow fadeInUp">
						Nossos clientes
					</p>

					<div class="flex flex-wrap justify-start gap-4 wow fadeInUp logo-boxes lg:justify-center">

						<?php
							$args = array(
								'posts_per_page' => -1,
								'post_type' => 'clients-2',
								'orderby' => 'date',
								'order' => 'DESC',
								'post_status' => array('publish','future'),
							);

							$wp_query = new WP_Query( $args );
						?>

						<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

							<?php $link = get_field('link'); if( $link ): ?>
								
								<a href="<?php the_field('link'); ?>" target="_blank" class="logo">
									<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'big') ?>" alt="<?php the_title(); ?>">
								</a>

							<?php else:?>
								
								<div class="logo">
									<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'big') ?>" alt="<?php the_title(); ?>">
								</div>

							<?php endif; ?>

						<?php endwhile; ?>

					</div>
					
				</div>
			</section>

			<!-- contato -->
			<section id="contato" class="relative overflow-hidden py-10 sm:py-16 md:py-20 lg:py-32 bg-[#1a4f9e] lg:bg-transparent">
				<div class="container-wrapper">

					<div class="flex flex-wrap justify-between -mx-4 pb-6 sm:pb-10 lg:pb-20 xl:pb-32">
						<div class="w-full px-4">

							<h2 class="block font-bold uppercase text-bigger md:text-center md:mx-auto text-white lg:text-blue-dark wow fadeInUp">
								Contato
							</h2>

						</div>
					</div>

					<div class="relative">

						<div class="hidden lg:block absolute z-0 -top-10 right-32 bg-[#1a4f9e] w-[100vw] h-[calc(100%+6rem)] wow fadeInLeft"></div>

						<div class="relative z-2 flex flex-wrap md:flex-row-reverse justify-between -mx-4">

							<div class="relative hidden lg:flex items-center justify-center w-full px-4 pb-8 lg:pb-0 lg:w-1/2">

								<div class="block relative z-2 w-full mb-6 bg-center bg-no-repeat bg-cover h-72 sm:h-96 lg:h-full lg:w-[90%] bg-blue-dark lg:mb-0 bg-[url('../../assets/img/tributaria-05.jpg')] wow fadeInUp"></div>

								<div class="absolute left-0 hidden max-w-full w-52 h-52 bottom-0 lg:block bg-blue-dark z-1 wow fadeInUp"></div>
								
							</div>

							<div class="w-full px-4 lg:w-1/2 lg:py-6">
								<form action="https://formsubmit.co/conwert@conwert.com.br" method="post" id="contact-form">

									<input type="hidden" name="_next" value="https://www.conwert.com.br/revisao-tributaria/#contato-sucesso">
									<input type="hidden" name="_subject" value="Conwert - Revisão Tributária - Formulário de contato">
									<input type="hidden" name="_captcha" value="false">
									<input type="text" name="_honey" style="display: none">
									<input type="hidden" name="_template" value="box">

									<div class="line wow fadeInUp">
										<label for="empresa" class="text-medium label !text-white">Empresa</label>
										<input type="text" name="Empresa" id="empresa" class="text-medium input !text-white !border-b-white">
									</div>

									<div class="line wow fadeInUp">
										<label for="nome" class="text-medium label !text-white">Nome completo *</label>
										<input type="text" name="Nome" id="nome" class="text-medium input !text-white !border-b-white" required>
									</div>

									<div class="line wow fadeInUp">
										<label for="email" class="text-medium label !text-white">Email *</label>
										<input type="email" name="Email" id="email" class="text-medium input !text-white !border-b-white" required>
									</div>

									<div class="line wow fadeInUp">
										<label for="mensagem" class="text-medium label !text-white">Mensagem *</label>
										<textarea name="Mensagem" id="mensagem" class="text-medium input !text-white !border-b-white textarea min-h-[120px] h-[120px] resize-y" required></textarea>
									</div>

									<div class="!mb-0 line wow fadeInUp">
										<button type="submit" id="submit-form" form="contact-form" value="Enviar" class="inline-block px-6 py-3 font-semibold text-white uppercase transition-colors duration-300 bg-blue-dark sm:px-8 sm:py-4 text-medium hover:bg-blue-light">
											Enviar
										</button>
									</div>
									
								</form>
							</div>

						</div>

					</div>
				</div>
			</section>

			<section id="newsletter" class="py-10 sm:py-16 md:py-20 lg:py-24 md:text-center">
				<div class="container-wrapper">

					<h2 class="block font-bold uppercase text-bigger md:mx-auto text-blue-dark wow fadeInUp">
						Assine nossa newsletter
					</h2>

					<p class="text-big text-blue-medium font-bold uppercase wow fadeInUp md:mt-2 lg:mt-3">
						E receba nossos artigos em primeira mão!
					</p>

					<form action="https://formsubmit.co/conwert@conwert.com.br" method="post" id="newsletter-form" class="block mx-auto max-w-full w-[720px] pt-6 sm:pt-8 md:pt-10 lg:pt-12">

						<input type="hidden" name="_next" value="https://www.conwert.com.br/revisao-tributaria/#newsletter-sucesso">
						<input type="hidden" name="_subject" value="Conwert - Revisão Tributária - Newsletter">
						<input type="hidden" name="_captcha" value="false">
						<input type="text" name="_honey" style="display: none">
						<input type="hidden" name="_template" value="box">

						<div class="!mb-8 line wow fadeInUp">
							<label for="email" class="text-medium label">Email *</label>
							<input type="email" name="Email" id="email" class="text-medium input" required>
						</div>

						<div class="!mb-0 line wow fadeInUp">
							<button type="submit" id="submit-form" form="contact-form" value="Enviar" class="inline-block px-6 py-3 font-semibold text-blue-dark uppercase transition-colors duration-300 border-blue-dark border sm:px-8 sm:py-4 text-medium hover:bg-blue-dark hover:text-white">
								Enviar
							</button>
						</div>
						
					</form>

				</div>
			</section>

			<?php include('wp-content/themes/conwert/includes/popups.php'); ?>

			<?php include('wp-content/themes/conwert/includes/revisao-tributaria/footer.php'); ?>

			<?php wp_footer(); ?>

        </div>
    </body>
</html>