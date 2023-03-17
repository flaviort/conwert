<div class="menu-overlay fixed z-[90] top-0 left-0 w-full h-full bg-[rgba(0,0,0,.7)] duration-700 transition-opacity opacity-0 pointer-events-none"></div>

<section id="fs-menu" class="fixed z-[99] top-0 -right-[95vw] w-[90vw] h-full bg-white transition-all duration-700 sm:w-[75vw] sm:-right-[80vw] md:w-[60vw] md:-right-[65vw] block lg:hidden">

	<button id="close-fs" class="absolute w-10 h-10 cursor-pointer top-5 right-5 z-2">
		<img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/close.svg" alt="Fechar" class="block w-full h-full text-blue-dark svg hover:text-blue-light">
	</button>

	<div class="relative flex items-center justify-start h-full z-1">
		<nav class="text-2xl sm:text-3xl md:text-4xl font-bold uppercase text-blue-dark pb-[5%] pl-[10vw] menu">
			<ul>

				<li class="delay-[.2s]">
					<a href="<?=get_site_url()?>">
						Início
					</a>
				</li>
				
				<li class="delay-[.3s]">
					<a href="<?=get_site_url()?>/sobre-nos">
						Sobre nós
					</a>
				</li>

				<li class="delay-[.4s]">
					<a href="<?=get_site_url()?>/solucoes">
						Soluções
					</a>
				</li>

				<li class="delay-[.5s]">
					<a href="<?=get_site_url()?>/clientes">
						Clientes
					</a>
				</li>

				<li class="delay-[.6s]">
					<a href="<?=get_site_url()?>/blog">
						Blog
					</a>
				</li>

				<li class="delay-[.7s]">
					<a href="<?=get_site_url()?>/contato">
						Contato
					</a>
				</li>

			</ul>
		</nav>
	</div>

</section>