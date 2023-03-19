<section class="absolute top-0 left-0 z-50 w-full" id="top-menu">
    <div class="relative py-4 sm:py-5 xl:py-6 container-wrapper">

        <div class="absolute z-0 top-0 right-4 bg-white w-[300%] h-full"></div>

        <div class="relative flex items-center justify-between z-2">

            <a href="<?=get_site_url()?>/revisao-tributaria" class="group max-w-[200px] 2xl:max-w-[250px] inline-block -translate-y-1">
                <img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/logo-revisao.svg" alt="Conwert - Revisão Tributária" class="max-w-full transition-opacity duration-300 svg group-hover:opacity-70 !h-auto">
            </a>

            <div class="flex items-center justify-end gap-x-4 2xl:gap-x-8">

                <nav class="hidden xl:flex items-center">
                    <ul class="flex items-center gap-5 font-semibold uppercase 2xl:gap-10 text-base justify-evenly">
                        
                        <li>
                            <a href="#sistema-tributario" class="sliding-link hvr-underline-from-left">
                                Sistema Tributário
                            </a>
                        </li>

                        <li>
                            <a href="#pis-confins" class="sliding-link hvr-underline-from-left">
                                PIS / CONFINS
                            </a>
                        </li>

                        <li>
                            <a href="#revisao-tributaria" class="sliding-link hvr-underline-from-left">
                                Revisão Tributária
                            </a>
                        </li>

                        <li>
                            <a href="#clientes" class="sliding-link hvr-underline-from-left">
                                Clientes
                            </a>
                        </li>

                        <li>
                            <a href="#contato" class="sliding-link hvr-underline-from-left">
                                Contato
                            </a>
                        </li>

                    </ul>
                </nav>

                <ul class="hidden sm:flex items-center justify-end gap-x-2 xl:pr-8">

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

                <button id="open-fs" class="flex items-center justify-center mr-2 sm:mr-10 w-14 h-14 xl:hidden group">
                    <img src="<?=get_site_url()?>/wp-content/themes/conwert/assets/svg/menu.svg" alt="Menu" class="svg w-[50%] h-[50%] text-gray-700 transition-colors duration-300 group-hover:text-blue-light">
                </button>

            </div>

        </div>
    </div>
</section>