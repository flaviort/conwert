<div class="menu-overlay fixed z-[90] top-0 left-0 w-full h-full bg-[rgba(0,0,0,.7)] duration-700 transition-opacity opacity-0 pointer-events-none"></div>

<section id="fs-menu" class="fixed z-[99] top-0 -right-[95vw] w-[90vw] h-full bg-white transition-all duration-700 sm:w-[75vw] sm:-right-[80vw] md:w-[60vw] md:-right-[65vw] block xl:hidden">

	<div class="absolute z-2 top-5 left-0 px-5 w-full flex items-center justify-between">

		<ul class="flex items-center justify-end gap-x-2">

			<?php $facebook = get_field('facebook', 'option'); if( $facebook ): ?>
				<li>
					<a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="flex items-center justify-center w-9 2xl:w-8 h-9 2xl:h-8 group">
						<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/facebook.svg" alt="Facebook" class="w-[60%] h-[60%] svg text-blue-dark   group-hover:text-blue-light transition-colors duration-300">
					</a>
				</li>
			<?php endif; ?>

			<?php $instagram = get_field('instagram', 'option'); if( $instagram ): ?>
				<li>
					<a href="<?php the_field('instagram', 'option'); ?>" target="_blank" class="flex items-center justify-center w-9 2xl:w-8 h-9 2xl:h-8 group">
						<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/instagram.svg" alt="Instagram" class="w-[60%] h-[60%] svg text-blue-dark group-hover:text-blue-light transition-colors duration-300">
					</a>
				</li>
			<?php endif; ?>

			<?php $linkedin = get_field('linkedin', 'option'); if( $linkedin ): ?>
				<li>
					<a href="<?php the_field('linkedin', 'option'); ?>" target="_blank" class="flex items-center justify-center w-9 2xl:w-8 h-9 2xl:h-8 group">
						<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/linkedin.svg" alt="Linkedin" class="w-[60%] h-[60%] svg text-blue-dark group-hover:text-blue-light transition-colors duration-300">
					</a>
				</li>
			<?php endif; ?>

			<?php $youtube = get_field('youtube', 'option'); if( $youtube ): ?>
				<li>
					<a href="<?php the_field('youtube', 'option'); ?>" target="_blank" class="flex items-center justify-center w-9 2xl:w-8 h-9 2xl:h-8 group">
						<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/youtube.svg" alt="Youtube" class="w-[60%] h-[60%] svg text-blue-dark group-hover:text-blue-light transition-colors duration-300">
					</a>
				</li>
			<?php endif; ?>

			<?php $spotify = get_field('spotify', 'option'); if( $spotify ): ?>
				<li>
					<a href="<?php the_field('spotify', 'option'); ?>" target="_blank" class="flex items-center justify-center w-9 2xl:w-8 h-9 2xl:h-8 group">
						<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/spotify.svg" alt="Spotify" class="w-[60%] h-[60%] svg text-blue-dark group-hover:text-blue-light transition-colors duration-300">
					</a>
				</li>
			<?php endif; ?>

		</ul>

		<button id="close-fs" class="flex items-center justify-center w-10 h-10 cursor-pointer">
			<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/close.svg" alt="Fechar" class="block w-full h-full text-blue-dark svg hover:text-blue-light">
		</button>

	</div>

	<div class="relative flex items-center justify-start h-full z-1">
		<nav class="text-2xl sm:text-3xl md:text-4xl font-bold uppercase text-blue-dark pb-[5%] pl-[10vw] menu">
			<ul>

				<li class="delay-[.2s]">
					<a href="#sistema-tributario" class="sliding-link">
						Sistema Tributário
					</a>
				</li>

				<li class="delay-[.3s]">
					<a href="#pis-confins" class="sliding-link">
						PIS / CONFINS
					</a>
				</li>

				<li class="delay-[.4s]">
					<a href="#revisao-tributaria" class="sliding-link">
						Revisão Tributária
					</a>
				</li>

				<li class="delay-[.5s]">
					<a href="#clientes" class="sliding-link">
						Clientes
					</a>
				</li>

				<li class="delay-[.6s]">
					<a href="#contato" class="sliding-link">
						Contato
					</a>
				</li>

			</ul>
		</nav>
	</div>

</section>