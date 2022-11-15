<!DOCTYPE html>
<html lang="pt-BR">

	<!-- head -->	
	<?php include('includes/head.php'); ?>

	<!-- body -->
	<body class="solucoes">
		<div class="overflow-hidden">

			<!-- menus -->
			<?php include('includes/top-menu.php'); ?>
			<?php include('includes/fs-menu.php'); ?>

			<!-- banner -->
			<section id="banner-top" class="relative overflow-hidden pb-8 sm:pb-10 pt-32 sm:pt-36 lg:pb-16 lg:pt-40 xl:pt-52 xl:pb-20 mb-10 sm:mb-16 md:mb-20 lg:mb-32">
				
				<div class="absolute z-0 top-0 left-0 w-full h-full bg-cover bg-center bg-no-repeat bg-blue-dark bg-[url('../img/bg-solucoes.jpg')]"></div>

				<div class="container-wrapper relative z-2">
					<h1 class="block font-bold uppercase text-white text-bigger wow fadeInUp">
						Soluções
					</h1>
				</div>

			</section>

			<!-- solucoes -->
			<section id="solucoes" class="relative">

				<div class="hidden xl:block absolute z-0 top-0 left-0 w-full h-[10%] bg-gray-100"></div>

				<div class="relative container-wrapper z-2">
					<div class="flex flex-wrap justify-between -mx-4">

						<div class="flex items-center justify-start w-full px-4 xl:w-1/3">
							<p class="font-bold text-gray-600 uppercase xl:pt-[20%] text-bigger xl:py-0 block pb-6 sm:pb-10 pt-10 sm:pt-16 wow fadeInUp">
								Nossas <br />
								<span class="text-blue-light">Soluções</span>
							</p>
						</div>

						<div class="w-full px-4 py-2 sm:py-4 md:w-1/2 xl:w-1/3">
							<?php include('includes/block-diagnostico-empresarial.php'); ?>
						</div>

						<div class="w-full px-4 py-2 sm:py-4 md:w-1/2 xl:w-1/3">
							<?php include('includes/block-gestao-de-reestruturacao.php'); ?>
						</div>

						<div class="w-full px-4 py-2 sm:py-4 md:w-1/2 xl:w-1/3">
							<?php include('includes/block-gestao-de-recuperacao-extra-judicial.php'); ?>
						</div>

						<div class="w-full px-4 py-2 sm:py-4 md:w-1/2 xl:w-1/3">
							<?php include('includes/block-gestao-de-controladoria.php'); ?>
						</div>

						<div class="w-full px-4 py-2 sm:py-4 md:w-1/2 xl:w-1/3">
							<?php include('includes/block-captacoes-e-intermediacoes.php'); ?>
						</div>

					</div>

					<div class="block w-full pt-6 pb-16 text-center sm:pt-8 md:pt-12 md:pb-24 xl:pb-28 ">
						<a href="contato.php" class="inline-block px-6 py-3 font-semibold text-blue-dark uppercase transition-all duration-300 bg-transparent border border-blue-dark sm:px-8 sm:py-4 text-medium hover:bg-blue-dark hover:text-white wow fadeInUp">
							Entre em contato
						</a>
					</div>

				</div>
			</section>

			<!-- footer -->
			<?php include('includes/footer.php'); ?>
			<?php include('includes/popups.php'); ?>

			<footer>
				<script src="assets/js/framework.js"></script>
			</footer>

		</div>
	</body>
	
</html>