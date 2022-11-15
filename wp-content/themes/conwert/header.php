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
		<?php include('wp-content/themes/conwert/includes/top-menu.php'); ?>
		<?php include('wp-content/themes/conwert/includes/fs-menu.php'); ?>
		