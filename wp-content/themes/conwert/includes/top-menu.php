<section class="absolute top-0 left-0 z-50 w-full" id="top-menu">
    <div class="relative py-4 sm:py-5 xl:py-6 container-wrapper">

        <div class="absolute z-0 top-0 right-4 sm:right-10 lg:right-20 bg-white w-[300%] h-full"></div>

        <div class="relative flex items-center justify-between z-2">

            <a href="<?=get_site_url()?>" class="group xl:max-w-max max-w-[200px] sm:max-w-[250px] inline-block -translate-y-1">
                <img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/logo.svg" alt="Conwert" class="max-w-full transition-opacity duration-300 svg group-hover:opacity-70 !h-auto">
            </a>

            <nav class="hidden pr-20 xl:pr-32 lg:block">
                <ul class="flex items-center gap-5 font-semibold uppercase xl:gap-10 text-medium justify-evenly">
                    
                    <li>
                        <a href="<?=get_site_url()?>/sobre-nos" class="hvr-underline-from-left">
                            Sobre nós
                        </a>
                    </li>

                    <li>
                        <a href="<?=get_site_url()?>/solucoes" class="hvr-underline-from-left">
                            Soluções
                        </a>
                    </li>

                    <li>
                        <a href="<?=get_site_url()?>/time" class="hvr-underline-from-left">
                            Time
                        </a>
                    </li>

                    <li>
                        <a href="<?=get_site_url()?>/clientes" class="hvr-underline-from-left">
                            Clientes
                        </a>
                    </li>

                    <li>
                        <a href="<?=get_site_url()?>/blog" class="hvr-underline-from-left">
                            Blog
                        </a>
                    </li>

                    <li>
                        <a href="<?=get_site_url()?>/contato" class="hvr-underline-from-left">
                            Contato
                        </a>
                    </li>

                </ul>
            </nav>

            <button id="open-fs" class="flex items-center justify-center mr-2 sm:mr-10 w-14 h-14 lg:hidden group">
                <img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/menu.svg" alt="Menu" class="svg w-[50%] h-[50%] text-gray-700 transition-colors duration-300 group-hover:text-blue-light">
            </button>

        </div>
    </div>
</section>