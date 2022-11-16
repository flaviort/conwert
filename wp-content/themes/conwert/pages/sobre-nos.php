<?php
	/* Template Name: Sobre Nós */

	$template_args = array(
		'body_class' => 'sobre-nos',
		'css_files' => array(

		),
		'js_files' => array(

		)
	);

	get_header( null, $template_args );
?>

<!-- banner -->
<section id="banner-top" class="relative overflow-hidden pb-8 sm:pb-10 pt-32 sm:pt-36 lg:pb-16 lg:pt-40 xl:pt-52 xl:pb-20 mb-10 sm:mb-16 md:mb-20 lg:mb-32">
	
	<div class="absolute z-0 top-0 left-0 w-full h-full bg-cover bg-center bg-no-repeat bg-blue-dark bg-[url('../img/bg-sobre-nos.jpg')]"></div>

	<div class="container-wrapper relative z-2">
		<h1 class="block font-bold uppercase text-white text-bigger wow fadeInUp">
			Quem Somos
		</h1>
	</div>

</section>

<!-- content -->
<section id="content" class="pb-14 xs:pb-20 sm:pb-28">
	<div class="container-wrapper">
		<div class="flex flex-wrap justify-between -mx-4">
			<div class="w-full px-4">

				<div class="relative w-full h-0 pb-[70%] sm:pb-[50%] overflow-hidden block wow fadeInUp">
					<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'big') ?>" class="absolute top-0 left-0 w-full h-full object-cover" />
				</div>

				<h2 class="font-bold text-blue-dark uppercase text-bigger block pt-6 sm:pt-10 md:pt-16 wow fadeInUp">
					Convertemos <br />
					<span class="text-blue-light">desafios em valor!</span>
				</h2>

				<div class="desc text-medium block mt-4 sm:mt-6 md:mt-10 lg:mt-16 mb-6 sm:mb-8 md:mb-10 text-blue-dark wow fadeIn">
					<?php echo the_content(); ?>
				</div>

				<a href="<?=get_site_url()?>/time" class="inline-block px-6 py-3 font-semibold text-blue-dark uppercase transition-all duration-300 bg-transparent border border-blue-dark sm:px-8 sm:py-4 text-medium hover:bg-blue-dark hover:text-white wow fadeInUp">
					Conheça nosso time
				</a>

			</div>
		</div>
	</div>
</section>

<!-- solucoes -->
<section id="solucoes" class="relative bg-gray-200">

	<div class="hidden xl:block absolute z-0 top-0 left-0 w-full h-[10%] bg-gray-100"></div>

	<div class="relative container-wrapper z-2">
		<div class="flex flex-wrap justify-between -mx-4">

			<div class="flex items-center justify-start w-full px-4 xl:w-1/3">
				<p class="font-bold text-gray-600 uppercase xl:pt-[20%] text-bigger xl:py-0 block pb-6 sm:pb-10 pt-10 sm:pt-16 wow fadeInUp">
					Nossas <br />
					<span class="text-blue-light">Soluções</span>
				</p>
			</div>

			<div class="w-full px-4 py-2 sm:py-4 md:w-1/2 xl:w-1/3">
				<?php include('wp-content/themes/conwert/includes/block-diagnostico-empresarial.php'); ?>
			</div>

			<div class="w-full px-4 py-2 sm:py-4 md:w-1/2 xl:w-1/3">
				<?php include('wp-content/themes/conwert/includes/block-gestao-de-reestruturacao.php'); ?>
			</div>

			<div class="w-full px-4 py-2 sm:py-4 md:w-1/2 xl:w-1/3">
				<?php include('wp-content/themes/conwert/includes/block-gestao-de-recuperacao-extra-judicial.php'); ?>
			</div>

			<div class="w-full px-4 py-2 sm:py-4 md:w-1/2 xl:w-1/3">
				<?php include('wp-content/themes/conwert/includes/block-gestao-de-controladoria.php'); ?>
			</div>

			<div class="w-full px-4 py-2 sm:py-4 md:w-1/2 xl:w-1/3">
				<?php include('wp-content/themes/conwert/includes/block-captacoes-e-intermediacoes.php'); ?>
			</div>

		</div>

		<div class="block w-full pt-6 pb-16 text-center sm:pt-8 md:pt-12 md:pb-24 xl:pb-28 ">
			<a href="<?=get_site_url()?>/contato" class="inline-block px-6 py-3 font-semibold text-blue-dark uppercase transition-all duration-300 bg-transparent border border-blue-dark sm:px-8 sm:py-4 text-medium hover:bg-blue-dark hover:text-white wow fadeInUp">
				Entre em contato
			</a>
		</div>

	</div>
</section>

<?php get_footer( null, $template_args ); ?>