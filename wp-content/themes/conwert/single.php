<?php
	/* Template Name: Blog Internal */

	$template_args = array(
		'body_class' => 'blog-internal',
		'css_files' => array(

		),
		'js_files' => array(

		)
	);

	get_header(null, $template_args);
?>

<!-- banner -->
<section id="banner-top" class="relative overflow-hidden pb-8 sm:pb-10 pt-32 sm:pt-36 lg:pb-16 lg:pt-40 xl:pt-52 xl:pb-20 mb-10 sm:mb-16 md:mb-20">
				
	<div class="absolute z-0 top-0 left-0 w-full h-full bg-cover bg-center bg-no-repeat bg-blue-dark bg-[url('../img/bg-blog.jpg')]"></div>

	<div class="container-wrapper relative z-2">
		<h1 class="block font-bold uppercase text-white text-bigger wow fadeInUp">
			Blog
		</h1>
	</div>

</section>

<!-- content -->
<section id="content" class="pb-20 xl:pb-52 md:pb-36 sm:pb-28">
	<div class="container-wrapper">
		<div class="flex flex-wrap justify-between -mx-4">
			<div class="w-full px-4">
				
				<div class="block border-b border-gray-300 mb-8 sm:mb-10 pb-6 sm:pb-10 wow fadeIn">

					<div class="flex flex-wrap justify-between align-center -mx-4">
						
						<div class="w-full px-4 md:w-1/2">
							<p class="date text-medium text-blue-dark uppercase">
								<?php echo get_the_date('j/m/Y') ?>
							</p>
						</div>

						<div class="w-full px-4 md:w-1/2 md:text-right md:mt-0 mt-4">

							<p class="category">
								<?php foreach((get_the_category()) as $category){ ?>
									<span class="inline-block align-middle px-3 sm:px-5 py-1 sm:py-2 border border-blue-light text-blue-light md:mr-0 mr-2 md:ml-2 mb-2 text-sm">
										<?php echo $category->name; ?>
									</span>
								<?php } ?>
							</p>

						</div>

					</div>

					<h1 class="title text-bigger text-blue-light font-bold block mt-3 md:mt-5 md:mb-7 mb-5 leading-tighter">
						<?php echo the_title(); ?>
					</h1>

					<p class="author text-blue-dark">
						Autor: <b><?php global $post; $post_id = $post->ID; $author_id = get_post_field('post_author', $post_id); the_author_meta('display_name', $author_id ); ?></b>
					</p>

				</div>

				<div class="block relative w-full h-0 overflow-hidden pb-[60%] sm:pb-[50%] mb-8 sm:mb-10 wow fadeInUp">
					<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>" alt="<?php echo the_title(); ?>" class="absolute top-0 left-0 w-full h-full object-cover">
				</div>

				<div class="blog-internal-content wow fadeIn">

					<?php the_content() ?>

				</div>

				<div class="block border-t border-gray-300 pt-10 mt-14">

					<a href="<?=get_site_url()?>/blog" class="inline-block px-6 py-3 font-semibold uppercase transition-all duration-300 bg-transparent border border-gray-700 sm:px-8 sm:py-4 text-medium hover:bg-blue-dark hover:text-white hover:border-blue-dark wow fadeInUp">
						Todos os artigos
					</a>

				</div>
				
			</div>
		</div>
	</div>
</section>

<?php get_footer(null, $template_args); ?>