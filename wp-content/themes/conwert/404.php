<?php
	/* Template Name: Erro 404 */

	$template_args = array(
		'body_class' => 'error-404',
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
			Erro 404
		</h1>
	</div>

</section>

<!-- content -->
<section id="content" class="pb-20 xl:pb-52 md:pb-36 sm:pb-28">
	<div class="container-wrapper">
		<div class="flex flex-wrap justify-between -mx-4">
			<div class="w-full px-4">

				<p class="text-big block mb-8 sm:mb-10 md:mb-14 lg:mb-20 text-blue-dark wow fadeIn">
					<b>Ops!</b> A página que você procura está temporariamente indisponível ou foi removida.
				</p>

				<a href="<?=get_site_url()?>" class="inline-block px-6 py-3 font-semibold uppercase transition-all duration-300 bg-transparent border border-gray-700 sm:px-8 sm:py-4 text-medium hover:bg-blue-dark hover:text-white hover:border-blue-dark wow fadeInUp">
					Voltar à página inicial
				</a>
				
			</div>
		</div>
	</div>
</section>

<?php get_footer( null, $template_args ); ?>