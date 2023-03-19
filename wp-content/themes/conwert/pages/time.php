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

				<div class="flex flex-wrap justify-center gap-10 md:gap-20 wow fadeIn mb-10 sm:mb-12 md:mb-16 lg:mb-20">

					<?php if( have_rows('partners') ): while( have_rows('partners') ) : the_row(); ?>
						<div class="block w-full md:w-[calc(50%-2.5rem)] wow fadeInUp">
							<div class="relative block w-full pb-4 sm:pb-5 mb-4 border-b border-gray-300">

								<div class="relative w-full h-0 pb-[100%] sm:pb-[90%] md:pb-[80%] lg:pb-[70%] xl:pb-[60%] overflow-hidden block mb-5 bg-gray-300">
									<img src="<?php the_sub_field('partner_photo'); ?>" alt="<?php the_sub_field('partner_name'); ?>" class="absolute top-0 left-0 w-full h-full object-cover object-top">
								</div>

								<div class="relative block mb-5 pb-4 sm:pb-5 border-b border-gray-300">

									<p class="text-big font-bold block mb-1 text-blue-dark uppercase pr-12">
										<?php the_sub_field('partner_name'); ?>
									</p>

									<a href="mailto:<?php the_sub_field('partner_email'); ?>" target="_blank" class="text-medium text-blue-light hover:underline pr-12 inline-block w-full break-all">
										<?php the_sub_field('partner_email'); ?>
									</a>

									<a href="<?php the_sub_field('partner_linkedin'); ?>" target="_blank" class="flex items-center justify-center w-6 sm:w-8 h-6 sm:h-8 group absolute bottom-6 right-0">
										<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/linkedin.svg" alt="Linkedin" class="w-[100%] h-[100%] svg text-blue-light group-hover:opacity-70 transition-opacity duration-300">
									</a>

								</div>

								<div class="text-medium text-blue-dark">
									<?php the_sub_field('partner_desc'); ?>
								</div>

							</div>

						</div>
					<?php endwhile; endif; ?>

				</div>

				<p class="text-big font-bold uppercase text-gray-400 wow fadeInUp">
					Coordenadores
				</p>

				<div class="block w-full h-[1px] bg-gray-200 mt-3 sm:mt-6 lg:mt-10 mb-6 sm:mb-10 lg:mb-14 wow fadeIn"></div>

				<div class="flex flex-wrap justify-center gap-10 wow fadeIn mb-10 sm:mb-12 md:mb-16 lg:mb-20">

					<?php if( have_rows('coordinators') ): while( have_rows('coordinators') ) : the_row(); ?>
						<div class="block w-full sm:w-[calc(50%-1.25rem)] lg:w-[calc(100%/3-1.75rem)] wow fadeInUp">
							<div class="relative block w-full pb-4 sm:pb-5 mb-4 border-b border-gray-300">

								<div class="relative w-full h-0 pb-[100%] overflow-hidden block mb-5 bg-gray-300">
									<img src="<?php the_sub_field('coordinator_photo'); ?>" alt="<?php the_sub_field('coordinator_name'); ?>" class="absolute top-0 left-0 w-full h-full object-cover object-top">
								</div>

								<div class="relative block mb-5 pb-4 sm:pb-5 border-b border-gray-300">

									<p class="text-big font-bold block mb-1 text-blue-dark uppercase pr-12">
										<?php the_sub_field('coordinator_name'); ?>
									</p>

									<a href="mailto:<?php the_sub_field('coordinator_email'); ?>" target="_blank" class="text-medium text-blue-light hover:underline pr-12 inline-block w-full break-all">
										<?php the_sub_field('coordinator_email'); ?>
									</a>

									<a href="<?php the_sub_field('coordinator_linkedin'); ?>" target="_blank" class="flex items-center justify-center w-6 sm:w-8 h-6 sm:h-8 group absolute bottom-6 right-0">
										<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/linkedin.svg" alt="Linkedin" class="w-[100%] h-[100%] svg text-blue-light group-hover:opacity-70 transition-opacity duration-300">
									</a>

								</div>

								<div class="text-medium text-blue-dark">
									<?php the_sub_field('coordinator_desc'); ?>
								</div>

							</div>

						</div>
					<?php endwhile; endif; ?>

				</div>

				<p class="text-big font-bold uppercase text-gray-400 wow fadeInUp">
					Gestores
				</p>

				<div class="block w-full h-[1px] bg-gray-200 mt-3 sm:mt-6 lg:mt-10 mb-6 sm:mb-10 lg:mb-14 wow fadeIn"></div>

				<div class="flex flex-wrap justify-center gap-10 wow fadeIn mb-10 sm:mb-12 md:mb-16 lg:mb-20">

					<?php if( have_rows('managers') ): while( have_rows('managers') ) : the_row(); ?>
						<div class="block w-full sm:w-[calc(50%-1.25rem)] lg:w-[calc(100%/3-1.75rem)] wow fadeInUp">
							<div class="relative block w-full pb-4 sm:pb-5 mb-4 border-b border-gray-300">

								<div class="relative w-full h-0 pb-[100%] overflow-hidden block mb-5 bg-gray-300">
									<img src="<?php the_sub_field('manager_photo'); ?>" alt="<?php the_sub_field('manager_name'); ?>" class="absolute top-0 left-0 w-full h-full object-cover object-top">
								</div>

								<p class="text-big font-bold block mb-1 text-blue-dark uppercase pr-12">
									<?php the_sub_field('manager_name'); ?>
								</p>

								<a href="mailto:<?php the_sub_field('manager_email'); ?>" target="_blank" class="text-medium text-blue-light hover:underline pr-12 inline-block w-full break-all">
									<?php the_sub_field('manager_email'); ?>
								</a>

								<a href="<?php the_sub_field('manager_linkedin'); ?>" target="_blank" class="flex items-center justify-center w-6 sm:w-8 h-6 sm:h-8 group absolute bottom-6 right-0">
									<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/linkedin.svg" alt="Linkedin" class="w-[100%] h-[100%] svg text-blue-light group-hover:opacity-70 transition-opacity duration-300">
								</a>

							</div>

						</div>
					<?php endwhile; endif; ?>

				</div>

			</div>
		</div>
	</div>
</section>

<?php get_footer( null, $template_args ); ?>