<?php
	/* Template Name: Clientes */

	$template_args = array(
		'body_class' => 'clientes',
		'css_files' => array(

		),
		'js_files' => array(

		)
	);

	get_header( null, $template_args );
?>

<!-- banner -->
<section id="banner-top" class="relative overflow-hidden pb-8 sm:pb-10 pt-32 sm:pt-36 lg:pb-16 lg:pt-40 xl:pt-52 xl:pb-20 mb-10 sm:mb-16 md:mb-20 lg:mb-32">
	
	<div class="absolute z-0 top-0 left-0 w-full h-full bg-cover bg-center bg-no-repeat bg-blue-dark bg-[url('../img/bg-clientes.jpg')]"></div>

	<div class="container-wrapper relative z-2">
		<h1 class="block font-bold uppercase text-white text-bigger wow fadeInUp">
			Clientes
		</h1>
	</div>

</section>

<!-- content -->
<section id="content" class="pb-20 xl:pb-52 md:pb-36 sm:pb-28">
	<div class="container-wrapper">
		<div class="flex flex-wrap justify-between -mx-4">
			<div class="w-full px-4">

				<p class="text-medium block mb-8 sm:mb-10 md:mb-14 lg:mb-20 text-blue-dark wow fadeIn">
					Atendemos empresas de diversos setores e segmentos, com foco na <b>personalização da solução.</b>
				</p>

				<div class="flex flex-wrap justify-center gap-4 wow fadeInUp logo-boxes">

					<?php
						$args = array(
							'posts_per_page' => -1,
							'post_type' => 'clients',
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

				<div class="block lg:mt-20 lg:pt-20 md:mt-14 md:pt-14 sm:mt-12 sm:pt-10 mt-10 pt-8 border-t border-blue-light wow fadeIn">

					<p class="text-medium block mb-4 sm:mb-6 md:mb-10">
						Esta buscando mais <b>gerar mais valor, desempenho e competitividade</b> para sua empresa? Entre em contato conosco!
					</p>

					<a href="<?=get_site_url()?>/contato" class="inline-block px-6 py-3 font-semibold uppercase transition-all duration-300 bg-transparent border border-gray-700 sm:px-8 sm:py-4 text-medium hover:bg-blue-dark hover:text-white hover:border-blue-dark">
						Entre em contato
					</a>

				</div>

			</div>
		</div>
	</div>
</section>

<?php get_footer( null, $template_args ); ?>