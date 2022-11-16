<?php
	$template_args = array(
		'body_class' => 'blog',
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
            Artigos | <?php single_cat_title(''); ?>
        </h1>
    </div>

</section>

<!-- content -->
<section id="content" class="pb-20 xl:pb-52 md:pb-36 sm:pb-28">
    <div class="container-wrapper">
        <div class="flex flex-wrap justify-between -mx-4">

            <div class="w-full px-4">
                <div class="border-b border-blue-light md:mb-10 md:pb-10 mb-8 pb-8 wow fadeIn">
                    <div class="flex flex-wrap justify-between -mx-4 items-center">

                        <div class="w-full px-4 md:w-1/2">

                            <p class="text-big font-bold text-blue-light uppercase md:mb-0 mb-3">
                                Navegue por temas
                            </p>

                        </div>

                        <div class="w-full px-4 md:w-1/2 relative">

                            <div class="category-select text-medium">
								<form action="<?php bloginfo('url'); ?>/" method="get">
									
									<?php
										$select = wp_dropdown_categories('show_option_all=Todos');
										$select = preg_replace("#<select([^>]*)>#", "<select$1 onchange='return this.form.submit()'>", $select);
										echo $select;
									?>

									<span class="absolute top-1/2 right-10 -translate-y-1/2 z-2 w-3 h-3 text-blue-light flex items-center justify-center text-center pointer-events-none">
                                		<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/angle-down.svg" alt="Mais" class="svg">
                            		</span>

								</form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            
            <div class="w-full px-4">
                <div class="flex flex-wrap -mx-4">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <div class="w-full px-4 md:w-1/2 lg:w-1/3 wow fadeInUp">

                            <?php include('wp-content/themes/conwert/includes/blog-box.php'); ?>
                            
                        </div>

                    <?php endwhile; ?>

                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(null, $template_args); ?>