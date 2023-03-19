<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="format-detection" content="telephone=no">
	<meta name="author" content="Paanda Design | Senz Design">

	<!-- CSS -->
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/framework.min.css">
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/main.css">

	<?php wp_head(); ?>

</head>

<body class="<?php echo $args['body_class']; ?>">
	<div class="body-overflow">
		
	<?php wp_body_open(); ?>
			
		<a class="skip-link screen-reader-text" href="#main-content">
			<?php esc_html_e( 'Skip to content', 'conwert' ); ?>
		</a>

		<!-- menus -->
		<?php if ( is_page('revisao-tributaria') ) { ?>

			<!-- change websites -->
			<section class="bg-gray-100 border-b border-gray-300">
				<div class="relative container-wrapper">
					<div class="-mx-2 flex items-center justify-between sm:justify-start font-semibold uppercase text-xs md:text-sm leading-normal">
						
						<a href="<?=get_site_url()?>" class="block w-full text-center sm:w-auto px-4 md:px-6 py-2 md:py-3 duration-300 hover:bg-gray-200">
							Gestão Empresarial
						</a>

						<a href="<?=get_site_url()?>/revisao-tributaria" class="block w-full text-center sm:w-auto px-4 md:px-6 py-2 md:py-3 duration-300 hover:bg-gray-200 !bg-blue-light !text-white">
							Revisão Tributária
						</a>

					</div>
				</div>
			</section>

			<div class="relative">

				<?php include('wp-content/themes/conwert/includes/revisao-tributaria/top-menu.php'); ?>
				<?php include('wp-content/themes/conwert/includes/revisao-tributaria/fs-menu.php'); ?>

				<!-- floating whatsapp -->
				<?php $telefone = get_field('telefone', 'option'); if( $telefone ): ?>
					<a href="https://api.whatsapp.com/send?phone=<?php echo preg_replace('/[^a-zA-Z0-9]+/', '', $telefone); ?>" target="_blank" class="fixed z-[10] bottom-3 right-3 w-16 h-16 bg-blue-medium p-2 flex items-center justify-center rounded-[50%] border border-white transition-all duration-300 group hover:border-blue-medium hover:bg-white">
						<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/whatsapp.svg" alt="Whatsapp" class="w-[60%] h-[60%] svg text-white group-hover:text-blue-medium transition-colors duration-300">
					</a>
				<?php endif; ?>

		<?php } else { ?>
			
			<!-- change websites -->
			<!--section class="bg-gray-100 border-b border-gray-300">
				<div class="relative container-wrapper">
					<div class="-mx-2 flex items-center justify-between sm:justify-start font-semibold uppercase text-xs md:text-sm leading-normal">
						
						<a href="<?=get_site_url()?>" class="block w-full text-center sm:w-auto px-4 md:px-6 py-2 md:py-3 duration-300 hover:bg-gray-200 !bg-blue-light !text-white">
							Gestão Empresarial
						</a>

						<a href="<?=get_site_url()?>/revisao-tributaria" class="block w-full text-center sm:w-auto px-4 md:px-6 py-2 md:py-3 duration-300 hover:bg-gray-200">
							Revisão Tributária
						</a>

					</div>
				</div>
			</section-->
			
			<div class="relative">

				<?php include('wp-content/themes/conwert/includes/top-menu.php'); ?>
				<?php include('wp-content/themes/conwert/includes/fs-menu.php'); ?>
				
				<!-- floating whatsapp -->
				<?php $telefone = get_field('telefone', 'option'); if( $telefone ): ?>
					<a href="https://api.whatsapp.com/send?phone=<?php echo preg_replace('/[^a-zA-Z0-9]+/', '', $telefone); ?>" target="_blank" class="fixed z-[10] bottom-3 right-3 w-16 h-16 bg-blue-medium p-2 flex items-center justify-center rounded-[50%] border border-white transition-all duration-300 group hover:border-blue-medium hover:bg-white">
						<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/whatsapp.svg" alt="Whatsapp" class="w-[60%] h-[60%] svg text-white group-hover:text-blue-medium transition-colors duration-300">
					</a>
				<?php endif; ?>

		<?php } ?>