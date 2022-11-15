<!DOCTYPE html>
<html lang="pt-BR">

	<!-- head -->	
	<?php include('includes/head.php'); ?>

	<!-- body -->
	<body class="blog">
		<div class="overflow-hidden">

			<!-- menus -->
			<?php include('includes/top-menu.php'); ?>
			<?php include('includes/fs-menu.php'); ?>

			<!-- banner -->
			<section id="banner-top" class="relative overflow-hidden pb-8 sm:pb-10 pt-32 sm:pt-36 lg:pb-16 lg:pt-40 xl:pt-52 xl:pb-20 mb-10 sm:mb-16 md:mb-20">
				
				<div class="absolute z-0 top-0 left-0 w-full h-full bg-cover bg-center bg-no-repeat bg-blue-dark bg-[url('../img/bg-blog.jpg')]"></div>

				<div class="container-wrapper relative z-2">
					<h1 class="block font-bold uppercase text-white text-bigger wow fadeInUp">
						Artigos
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

										<select class="block w-full bg-transparent border border-gray-300 cursor-pointer p-5 text-medium appearance-none">
											<option value="" selected>Todos</option>
											<option value="">Tema 01</option>
											<option value="">Tema 02</option>
											<option value="">Tema 03</option>
										</select>

										<span class="absolute top-1/2 right-10 -translate-y-1/2 z-2 w-3 h-3 text-blue-light flex items-center justify-center text-center pointer-events-none">
											<img src="assets/svg/angle-down.svg" alt="Mais" class="svg">
										</span>

									</div>

								</div>
							</div>
						</div>
						
						<div class="w-full px-4 md:w-1/2 lg:w-1/3 wow fadeInUp">
							<?php include('includes/blog-box.php'); ?>
						</div>

						<div class="w-full px-4 md:w-1/2 lg:w-1/3 wow fadeInUp">
							<?php include('includes/blog-box.php'); ?>
						</div>

						<div class="w-full px-4 md:w-1/2 lg:w-1/3 wow fadeInUp">
							<?php include('includes/blog-box.php'); ?>
						</div>

						<div class="w-full px-4 md:w-1/2 lg:w-1/3 wow fadeInUp">
							<?php include('includes/blog-box.php'); ?>
						</div>

						<div class="w-full px-4 md:w-1/2 lg:w-1/3 wow fadeInUp">
							<?php include('includes/blog-box.php'); ?>
						</div>

						<div class="w-full px-4 md:w-1/2 lg:w-1/3 wow fadeInUp">
							<?php include('includes/blog-box.php'); ?>
						</div>

						<div class="w-full px-4 md:w-1/2 lg:w-1/3 wow fadeInUp">
							<?php include('includes/blog-box.php'); ?>
						</div>

						<div class="w-full px-4 md:w-1/2 lg:w-1/3 wow fadeInUp">
							<?php include('includes/blog-box.php'); ?>
						</div>

						<div class="w-full px-4 md:w-1/2 lg:w-1/3 wow fadeInUp">
							<?php include('includes/blog-box.php'); ?>
						</div>

						<div class="w-full px-4 wow fadeIn">
							<ul class="blog-pagination">

								<li class="active">
									<a href="#">
										1
									</a>
								</li>

								<li>
									<a href="#">
										2
									</a>
								</li>

								<li>
									<a href="#">
										3
									</a>
								</li>

								<li>
									<a href="#">
										4
									</a>
								</li>

								<li>
									<a href="#">
										5
									</a>
								</li>

							</ul>
						</div>

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