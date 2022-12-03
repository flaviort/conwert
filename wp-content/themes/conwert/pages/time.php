<?php
	/* Template Name: Time */

	$template_args = array(
		'body_class' => 'time',
		'css_files' => array(

		),
		'js_files' => array(

		)
	);

	get_header( null, $template_args );
?>

<!-- banner -->
<section id="banner-top" class="relative overflow-hidden pb-8 sm:pb-10 pt-32 sm:pt-36 lg:pb-16 lg:pt-40 xl:pt-52 xl:pb-20 mb-10 sm:mb-16 md:mb-20 lg:mb-32">
	
	<div class="absolute z-0 top-0 left-0 w-full h-full bg-cover bg-center bg-no-repeat bg-blue-dark bg-[url('../img/bg-time.jpg')]"></div>

	<div class="container-wrapper relative z-2">
		<h1 class="block font-bold uppercase text-white text-bigger wow fadeInUp">
			Nosso time
		</h1>
	</div>

</section>

<!-- content -->
<section id="content" class="pb-14 xs:pb-20 sm:pb-28">
	<div class="container-wrapper">
		<div class="flex flex-wrap justify-between -mx-4">
			<div class="w-full px-4">

				<p class="block text-bigger font-bold text-blue-light uppercase mb-3 sm:mb-5 lg:mb-8 wow fadeInUp">
                    Conheça nosso time
                </p>

				<p class="text-big font-bold uppercase text-gray-400 wow fadeInUp">
					Sócios
				</p>

				<div class="block w-full h-[1px] bg-gray-200 mt-3 sm:mt-6 lg:mt-10 mb-6 sm:mb-10 lg:mb-14 wow fadeIn"></div>

				<div class="relative w-full h-0 pb-[70%] lg:pb-[50%] overflow-hidden block mb-10 wow fadeInUp">
					<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'big') ?>" class="absolute top-0 left-0 w-full h-full object-cover" />
				</div>

				<div class="flex flex-wrap justify-center gap-10 md:gap-20 wow fadeIn mb-10 sm:mb-12 md:mb-16 lg:mb-20 lg:px-10">

					<?php if( have_rows('socios') ): while( have_rows('socios') ) : the_row(); ?>
						<div class="block w-full md:w-[calc(50%-2.5rem)]">
							<div class="relative block w-full pb-4 mb-4 border-b border-gray-300">

								<p class="text-big font-bold block mb-1 text-blue-dark uppercase pr-12">
									<?php the_sub_field('nome'); ?>
								</p>

								<a href="mailto:<?php the_sub_field('email'); ?>" target="_blank" class="text-medium text-blue-light hover:underline pr-12">
									<?php the_sub_field('email'); ?>
								</a>

								<a href="<?php the_sub_field('linkedin'); ?>" target="_blank" class="flex items-center justify-center w-8 h-8 group absolute bottom-4 right-0">
									<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/linkedin.svg" alt="Linkedin" class="w-[100%] h-[100%] svg text-blue-light group-hover:opacity-70 transition-opacity duration-300">
								</a>

							</div>

							<div class="text-medium">
								<?php the_sub_field('descricao'); ?>
							</div>

						</div>
					<?php endwhile; endif; ?>

				</div>

				<p class="text-big font-bold uppercase text-gray-400 wow fadeInUp">
					Time
				</p>

				<div class="block w-full h-[1px] bg-gray-200 mt-3 sm:mt-6 lg:mt-10 mb-6 sm:mb-10 lg:mb-14 wow fadeIn"></div>

				<div class="flex flex-wrap justify-center gap-10 wow fadeIn mb-4 sm:mb-6 md:mb-10">

					<?php
						$args = array(
							'posts_per_page' => -1,
							'post_type' => 'team',
							'orderby' => 'date',
							'order' => 'DESC',
							'post_status' => array('publish','future'),
						);

						$wp_query = new WP_Query( $args );
					?>

					<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

						<div class="block w-full sm:w-[calc(50%-1.25rem)] lg:w-[calc(100%/3-1.75rem)]">

							<div class="relative w-full h-0 pb-[100%] overflow-hidden block mb-5 wow fadeInUp bg-gray-300">
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'big') ?>" alt="<?php the_title(); ?>" class="absolute top-0 left-0 w-full h-full object-cover">
							</div>

							<div class="relative block w-full pb-4 border-b border-gray-300">

								<p class="text-big font-bold block mb-1 text-blue-dark uppercase pr-12">
									<?php the_title(); ?>
								</p>

								<a href="mailto:<?php the_field('email'); ?>" target="_blank" class="text-medium text-blue-light hover:underline pr-12">
									<?php the_field('email'); ?>
								</a>

								<a href="<?php the_field('linkedin'); ?>" target="_blank" class="flex items-center justify-center w-8 h-8 group absolute bottom-4 right-0">
									<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/linkedin.svg" alt="Linkedin" class="w-[100%] h-[100%] svg text-blue-light group-hover:opacity-70 transition-opacity duration-300">
								</a>

							</div>

						</div>

					<?php endwhile; ?>

				</div>

			</div>
		</div>
	</div>
</section>

<?php get_footer( null, $template_args ); ?>