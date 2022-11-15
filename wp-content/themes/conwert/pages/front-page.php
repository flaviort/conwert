<?php
	/* Template Name: Home */

	$template_args = array(
		'body_class' => 'home',
		'css_files' => array(

		),
		'js_files' => array(

		)
	);

	get_header(null, $template_args);
?>

<!-- banner -->
<section id="banner" class="relative overflow-hidden">

	<div class="absolute top-0 left-0 hidden w-3/4 h-full md:block xl:w-2/3 gradient z-4"></div>

	<video autoplay playsinline muted loop class="md:absolute md:top-0 md:left-0 object-cover w-full md:h-full h-[70vh] wow fadeIn bg-blue-dark">
		<source src="<?=get_site_url()?>/wp-content/themes/conwert/assets/videos/top-banner.mp4">
	</video>

	<div class="relative container-wrapper z-9">

		<div class="hidden md:block absolute right-[35%] xl:right-[55%] bottom-0 h-24 w-[300%] bg-gray-100 z-0"></div>
		<div class="hidden md:block absolute right-[35%] xl:right-[55%] bottom-0 h-full w-[300%] bg-gray-100 z-1 opacity-40"></div>

		<div class="relative flex items-center justify-start md:h-screen z-9 md:max-w-[60%] xl:max-w-[40%] flex-wrap -mt-20 bg-gray-100 md:bg-transparent md:mt-0 md:min-h-[700px]">
			<div class="px-10 pt-10 pb-4 md:p-0">

				<h1 class="font-bold uppercase text-biggest text-blue-light wow fadeIn">
					<span class="text-blue-dark">Convertendo</span><br class="hidden md:block" />
					desafios <br class="hidden md:block" />
					em valor!
				</h1>

				<p class="block mt-5 mb-10 md:pr-10 text-medium wow fadeIn" data-wow-delay=".2s">
					Somos uma consultoria de gestão, especializada em <strong>reestruturação empresarial</strong>, focada na melhoria do <strong>desempenho</strong>, <strong>competitividade</strong> e <strong>geração de valor</strong>.
				</p>

				<a href="<?=get_site_url()?>/sobre-nos" class="inline-block px-6 py-3 font-semibold text-white uppercase transition-all duration-300 bg-blue-dark sm:px-8 sm:py-4 text-medium hover:bg-blue-light wow fadeIn" data-wow-delay=".4s">
					Conheça
				</a>

			</div>
		</div>

		<ul class="absolute z-20 items-center justify-start hidden w-full md:flex bottom-5 left-4 gap-x-4">

			<li>
				<p class="inline-block pl-4 font-bold uppercase text-medium text-blue-dark">
					Conecte-se
				</p>
			</li>

			<li>
				<a href="https://api.whatsapp.com/send?phone=5547996561115" target="_blank" class="flex items-center justify-center w-9 h-9 group">
					<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/whatsapp.svg" alt="Whatsapp" class="w-[60%] h-[60%] svg text-blue-dark group-hover:text-blue-light transition-colors duration-300">
				</a>
			</li>
			
			<li>
				<a href="https://www.facebook.com/Conwert-Gest%C3%A3o-Empresarial-100347276020103" target="_blank" class="flex items-center justify-center w-9 h-9 group">
					<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/facebook.svg" alt="Facebook" class="w-[60%] h-[60%] svg text-blue-dark group-hover:text-blue-light transition-colors duration-300">
				</a>
			</li>

			<li>
				<a href="https://www.instagram.com/conwert.gestao/" target="_blank" class="flex items-center justify-center w-9 h-9 group">
					<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/instagram.svg" alt="Instagram" class="w-[60%] h-[60%] svg text-blue-dark group-hover:text-blue-light transition-colors duration-300">
				</a>
			</li>

			<li>
				<a href="https://www.linkedin.com/company/conwert-gest%C3%A3o-empresarial/" target="_blank" class="flex items-center justify-center w-9 h-9 group">
					<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/linkedin.svg" alt="Linkedin" class="w-[60%] h-[60%] svg text-blue-dark group-hover:text-blue-light transition-colors duration-300">
				</a>
			</li>

			<li>
				<a href="https://www.youtube.com/channel/UCln1EJO855OPfw--_EGgamg" target="_blank" class="flex items-center justify-center w-9 h-9 group">
					<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/youtube.svg" alt="Youtube" class="w-[60%] h-[60%] svg text-blue-dark group-hover:text-blue-light transition-colors duration-300">
				</a>
			</li>

		</ul>

	</div>
</section>

<!-- sobre nos -->
<section id="sobre-nos" class="pb-14 lg:py-20">
	<div class="container-wrapper">
		<div class="flex flex-row-reverse flex-wrap justify-between -mx-4">

			<div class="relative flex items-center justify-center w-full px-4 py-8 lg:py-10 lg:w-1/2">

				<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/puzzle.jpg" width="744" height="519" alt="Pessoas montando uma quebra-cabeças" class="relative block w-full lg:w-[90%] h-auto z-3 wow fadeInUp">
				<div class="absolute top-0 right-0 hidden w-32 h-32 max-w-full lg:block bg-blue-dark z-1 wow fadeInUp"></div>
				<div class="absolute bottom-0 left-0 hidden w-32 max-w-full bg-white h-52 lg:block z-2 wow fadeInUp"></div>
				
			</div>

			<div class="flex flex-wrap items-center w-full px-4 lg:w-1/2">
				<div>

					<h2 class="font-bold uppercase text-bigger text-blue-light wow fadeInUp">
						A Conwert
					</h2>

					<p class="block my-6 leading-relaxed md:my-8 lg:pr-24 text-medium wow fadeInUp">
						Somos um time especializado em enfrentar os desafios empresariais brasileiros, com centenas de projetos bem-sucedidos e <b>mais de 15 anos de experiência.</b>
					</p>

					<p class="block mb-6 font-semibold leading-normal xl:leading-snug md:mb-8 lg:pr-32 text-big wow fadeInUp">
						Buscamos incansavelmente medidas de gestão que propiciem a <span class="font-bold text-blue-light">ascensão de empresas</span> nos seus momentos mais adversos.
					</p>

					<a href="<?=get_site_url()?>/sobre-nos" class="inline-block px-6 py-3 font-semibold uppercase transition-all duration-300 bg-transparent border border-gray-700 sm:px-8 sm:py-4 text-medium hover:bg-blue-dark hover:text-white hover:border-blue-dark wow fadeInUp">
						Conheça
					</a>

				</div>
			</div>

		</div>
	</div>
</section>

<!-- solucoes -->
<section id="solucoes" class="relative bg-blue-dark">

	<div class="hidden xl:block absolute z-0 top-0 left-0 w-full h-[10%] bg-gray-100"></div>

	<div class="relative container-wrapper z-2">
		<div class="flex flex-wrap justify-between -mx-4">

			<div class="flex items-center justify-start w-full px-4 xl:w-1/3">
				<p class="font-bold text-white uppercase xl:pt-[20%] text-bigger xl:py-0 block pb-6 sm:pb-10 pt-10 sm:pt-16 wow fadeInUp">
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
			<a href="<?=get_site_url()?>/contato" class="inline-block px-6 py-3 font-semibold text-white uppercase transition-all duration-300 bg-transparent border border-white sm:px-8 sm:py-4 text-medium hover:bg-white hover:text-blue-dark wow fadeInUp">
				Entre em contato
			</a>
		</div>

	</div>
</section>

<!-- clientes -->
<section id="clientes">
	<div class="container-wrapper">

		<p class="block pt-16 pb-6 mx-auto font-bold text-center uppercase sm:pt-20 sm:pb-16 lg:pb-20 lg:pt-28 text-blue-light text-bigger wow fadeInUp">
			Nossos clientes
		</p>

		<div class="flex flex-wrap justify-center gap-4 wow fadeInUp logo-boxes">

			<a href="https://www.blutrafos.com.br/" target="_blank" class="logo">
				<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/clientes/blutrafos.png" alt="Blutrafos">
			</a>

			<div class="logo">
				<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/clientes/eqm.png" alt="Grupo EQM">
			</div>

			<a href="http://www.itagres.com.br/" target="_blank" class="logo">
				<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/clientes/itagres.png" alt="Itagres">
			</a>

			<a href="https://www.vondervolke.com.br/" target="_blank" class="logo">
				<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/clientes/vdv.png" alt="Von der Volke">
			</a>

			<div class="logo">
				<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/clientes/pioneira.png" alt="Pioneira">
			</div>

			<a href="http://mm.ind.br/" target="_blank" class="logo">
				<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/clientes/mem.png" alt="M&M - Indústria Alimentícia LTDA">
			</a>

			<a href="https://fetti.com.br/" target="_blank" class="logo">
				<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/clientes/fetti.png" alt="Fetti">
			</a>

			<a href="https://www.boniella.com.br/" target="_blank" class="logo">
				<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/clientes/boniella.png" alt="Boniella">
			</a>

			<a href="https://ferramentariajn.com/" target="_blank" class="logo">
				<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/clientes/jn.png" alt="JN Ferramentaria - Excellence for quality">
			</a>

			<a href="http://www.dray.ind.br/" target="_blank" class="logo">
				<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/img/clientes/dray.png" alt="Dray - Artigos Esportivos">
			</a>

		</div>
		
	</div>
</section>

<!-- blog -->
<section id="blog" class="pb-20 xl:pb-52 md:pb-36 sm:pb-28">
	<div class="container-wrapper">

		<p class="block pt-16 pb-6 mx-auto font-bold text-center uppercase sm:pt-20 sm:pb-12 lg:pb-20 lg:pt-28 text-blue-light text-bigger wow fadeInUp">
			Blog
		</p>

		<div class="flex flex-wrap justify-between -mx-4 text-medium wow fadeInUp">

			<?php
                $args = array(
                    'posts_per_page' => 3,
                    'post_type' => 'post',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_status' => array('publish','future'),
                );

                $wp_query = new WP_Query( $args );
            ?>

            <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

				<div class="w-full px-4 lg:w-1/3">

                    <?php include('wp-content/themes/conwert/includes/blog-box.php'); ?>
                    
                </div>

            <?php endwhile; ?>

		</div>
		
	</div>
</section>

<?php get_footer(null, $template_args); ?>