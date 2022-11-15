<?php
	/* Template Name: Contato */

	$template_args = array(
		'body_class' => 'contato',
		'css_files' => array(

		),
		'js_files' => array(

		)
	);

	get_header( null, $template_args );
?>

<!-- banner -->
<section id="banner-top" class="relative overflow-hidden pb-8 sm:pb-10 pt-32 sm:pt-36 lg:pb-16 lg:pt-40 xl:pt-52 xl:pb-20 mb-10 sm:mb-16 md:mb-20 lg:mb-32 xl:mb-40">
	
	<div class="absolute z-0 top-0 left-0 w-full h-full bg-cover bg-center bg-no-repeat bg-blue-dark bg-[url('../img/bg-contato.jpg')]"></div>

	<div class="container-wrapper relative z-2">
		<h1 class="block font-bold uppercase text-white text-bigger wow fadeInUp">
			Contato
		</h1>
	</div>

</section>

<!-- content -->
<section id="content" class="pb-20 xl:pb-52 md:pb-36 sm:pb-28">
	<div class="container-wrapper">
		<div class="flex flex-wrap justify-between -mx-4">

			<div class="relative flex items-center justify-center w-full px-4 pb-8 lg:pb-0 lg:w-1/2">

				<div class="block relative z-2 w-full mb-6 bg-center bg-no-repeat bg-cover h-72 sm:h-96 lg:h-full lg:w-[90%] bg-blue-dark lg:mb-0 bg-[url('../../assets/img/connecting-dots.jpg')] wow fadeInUp"></div>

				<div class="absolute left-0 hidden max-w-full w-52 h-52 -top-10 lg:block bg-blue-dark z-1 wow fadeInUp"></div>
				<div class="absolute z-0 hidden w-52 max-w-full bg-white -left-20 -bottom-10 h-[95%] lg:block wow fadeInUp"></div>
				
			</div>

			<div class="w-full px-4 lg:w-1/2">
				<form action="https://formsubmit.co/conwert@conwert.com.br" method="post" id="contact-form">

					<input type="hidden" name="_next" value="https://www.conwert.com.br/contato/#contato-sucesso">
					<input type="hidden" name="_subject" value="Conwert - Formulário de contato">
					<input type="hidden" name="_captcha" value="false">
					<input type="text" name="_honey" style="display: none">
					<input type="hidden" name="_template" value="box">

					<div class="line wow fadeInUp">
						<label for="empresa" class="text-medium label">Empresa</label>
						<input type="text" name="Empresa" id="empresa" class="text-medium input">
					</div>

					<div class="line wow fadeInUp">
						<label for="nome" class="text-medium label">Nome completo *</label>
						<input type="text" name="Nome" id="nome" class="text-medium input" required>
					</div>

					<div class="line wow fadeInUp">
						<label for="email" class="text-medium label">Email *</label>
						<input type="email" name="Email" id="email" class="text-medium input" required>
					</div>

					<div class="line active wow fadeInUp">
						<label for="solucao" class="text-medium label">Solução *</label>
						<select name="Solução" id="solucao" class="pr-5 appearance-none cursor-pointer text-medium input select" required>
							<option value="" selected disabled>Selecione uma</option>
							<option value="Diagnóstico empresarial">Diagnóstico empresarial</option>
							<option value="Gestão de reestruturação">Gestão de reestruturação</option>
							<option value="Gestão de recuperação extra / judicial">Gestão de recuperação extra / judicial</option>
							<option value="Gestão de controladoria">Gestão de controladoria</option>
							<option value="Captações e intermediações">Captações e intermediações</option>
							<option value="Outras">Outras</option>
						</select>
						<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/angle-down.svg" alt="Mais" class="absolute right-0 block w-5 h-5 text-gray-500 pointer-events-none svg top-2 z-3">
					</div>

					<div class="line wow fadeInUp">
						<label for="mensagem" class="text-medium label">Mensagem *</label>
						<textarea name="Mensagem" id="mensagem" class="text-medium input textarea min-h-[120px] h-[120px] resize-y" required></textarea>
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
</section>

<?php include('wp-content/themes/conwert/includes/popups.php'); ?>

<?php get_footer( null, $template_args ); ?>