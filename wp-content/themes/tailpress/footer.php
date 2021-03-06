</main>
<?php do_action('tailpress_content_end'); ?>
</div>

<?php do_action('tailpress_content_after'); ?>

<?php get_template_part('template-parts/slider'); ?>

<footer id="colophon"
        class="site-footer relative h-auto w-screen bg-primary lg:bg-footer-bg lg:bg-cover lg:bg-center lg:bg-no-repeat"
        role="contentinfo">
    <h1 class="sr-only">Pied de page</h1>
    <?php do_action('tailpress_footer'); ?>
    <div class="md:container md:mx-auto md:grid md:grid-cols-footer-md lg:grid-cols-footer-lg md:gap-7 justify-between mt-24 p-8 md:p-0">
        <div class="-mt-pixel-25 mx-auto text-white text-left text-opacity-60 not-italic max-w-sm md:border-none border-b-2 p-0 pb-8 border-white border-opacity-10">
            <div class="mb-4 flex items-center justify-center md:justify-start sm:gap-4">
                <img class="" src="<?php echo get_template_directory_uri() . '/resources/images/logo.svg' ?>"
                     alt="<?= get_bloginfo('name'); ?>" width="70" height="70">
                <p class="sr-only uppercase text-white text-opacity-100 font-bold font-dm-bold sm:not-sr-only"><?= get_bloginfo('name'); ?></p>
            </div>
            <address class="not-italic">
                <div class="flex items-start mb-6">
                    <i class="fas fa-directions text-secondary pt-7px inline-block mr-3"></i>
                    <p>Avenue J. Burgers 2 Bte 25,<br>
                        1180 Uccle (Belgique)</p>
                </div>
                <a href="mailto:jim@rock.com" class="block mb-6 hover:text-white"
                   title="Envoyer un mail à l'adresse suivante">
                    <i class="fas fa-envelope text-secondary inline-block mr-3"></i>contact@ergo-upe.be
                </a>
                <a href="tel:0032222222222" class="block mb-6 hover:text-white"
                   title="Téléphoner au numéro de téléphone suivant">
                    <i class="fa-solid fa-phone-flip text-secondary inline-block mr-3"></i>02/222.22.22
                </a>
            </address>
            <div class="flex">
                <i class="fas fa-directions text-secondary inline-block mr-3"></i>
                <p>BE75 2100 2615 1151</p>
            </div>
        </div>
        <div class="hidden lg:block container py-1 md:py-0 mx-auto text-left not-italic max-w-sm">
            <h2 class="text-white text-opacity-100 font-bold font-dm-bold mb-8 uppercase">Menu</h2>
            <div class="flex flex-col gap-2.5">
                <a href="/" title="Accéder à la page XXX"
                   class="text-white text-opacity-60 hover:text-opacity-100 "><span
                            class="mr-2">—</span>Accueil</a>
                <a href="#" title="Accéder à la page XXX"
                   class="text-white text-opacity-60 hover:text-opacity-100 "><span
                            class="mr-2">—</span>Qui
                    sommes-nous ?</a>
                <a href="#" title="Accéder à la page XXX"
                   class="text-white text-opacity-60 hover:text-opacity-100 "><span
                            class="mr-2">—</span>L'ergothérapie</a>
                <a href="./boutique" class="text-white text-opacity-60 hover:text-opacity-100 "><span
                            title="Accéder à la page XXX" class="mr-2">—</span>Boutique</a>
                <a href="./boutique" class="text-white text-opacity-60 hover:text-opacity-100 "><span
                            title="Accéder à la page XXX" class="mr-2">—</span>Actualités</a>
                <a href="./boutique" class="text-white text-opacity-60 hover:text-opacity-100 "><span
                            title="Accéder à la page XXX" class="mr-2">—</span>Formation continue</a>
            </div>
        </div>
        <div class="py-12 md:py-0 mx-auto text-white text-opacity-60 text-left not-italic max-w-sm md:max-w-xs leading-8 border-b-2  border-white border-opacity-10 md:border-none leading-normal">
            <h2 class="text-white text-opacity-100 font-bold font-dm-bold mb-8 uppercase">Newsletter</h2>
            <p>Inscrivez-vous à notre newsletter et restez aux courants de nos dernières
                actualités</p>
            <form action="" method="POST">
                <label for="newsletter-email" class="sr-only">S'inscrire à la newsletter</label>
                <div class="w-full h-12 mt-8 bg-input flex items-center relative">
                    <input class="pl-4 h-full pr-8 text-white bg-transparent
                placeholder-white placeholder-opacity-60 w-full
                focus:outline-none focus:ring-2 focus:ring-white"
                           type="email" id="newsletter-email" placeholder="Votre adresse e-mail">
                    <button type="submit"
                            class="absolute right-0 top-0 bottom-0 bg-input py-2 pr-4 pl-2 text-white"><i
                                class="far fa-envelope"></i><span class="sr-only">m‘inscrire à la newsletter</span>
                    </button>
                </div>
            </form>
        </div>
        <div class="py-12 md:py-0 mx-auto lg:ml-auto text-white text-left not-italic max-w-sm border-b-2 md:border-none border-white border-opacity-10">
            <div>
                <h2 class="text-white text-opacity-100 font-bold font-dm-bold mb-8 uppercase">Devenir membre upe</h2>
                <a href="#" title="M‘inscrire en tant que membre"
                   class="btn-primary"
                >Je m'inscris <span class="sr-only">pour devenir un membre</span></a>
            </div>
            <div class="sr-only md:not-sr-only md:pt-14">
                <h2 class="text-white text-opacity-100 font-bold font-dm-bold uppercase">
                    <a href="/contact" title="Accéder à la page de contact">Contactez-nous</a>
                </h2>
                <div class="text-white text-opacity-60 flex gap-5">
                    <a href="" title="Contactez-nous via Facebook"
                       class="py-6 hover:text-white hover:right-1 hover:scale-150"><span class="sr-only">Contactez-nous via Facebook</span><i
                                class="fa-brands fa-facebook-f"></i></a>
                    <a href="" title="Contactez-nous via Linkdin"
                       class="py-6 hover:text-white hover:right-1 hover:scale-150"><span class="sr-only">Contactez-nous via Linkdin</span><i
                                class="fa-brands fa-linkedin-in"></i></a>
                    <a href="mail:mail@mail.com" title="Contactez-nous par email"
                       class="py-6 hover:text-white hover:right-1 hover:scale-150"><span class="sr-only">Contactez-nous par mail</span><i
                                class="fa-solid fa-envelope"></i></a>
                    <a href="tel:0000" title="Contactez-nous par téléphone"
                       class="py-6 hover:text-white hover:right-1 hover:scale-150"><span class="sr-only">Contactez-nous par téléphone</span><i
                                class="fa-solid fa-phone-flip"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="md:bg-primary-dark md:p-6 md:mt-12">
        <div class="md:mx-auto md:container md:p-0 md:flex md:justify-between md:items-center">
            <div class="text-base md:text-footer pl-8 sm:pl-0 pb-12 md:pb-0 max-w-sm md:max-w-none md:p-0 mx-auto md:mx-0 text-left not-italic md:border-none md:flex md:flex md:flex-wrap">
                <a href="#" title="Voir et lire les mentions légales"
                   class="block py-2 text-white text-opacity-60 hover:text-opacity-100 "><span
                            class="mr-2 md:hidden">—</span>Mentions légales</a>
                <a href="#" title="Lire la politique des cookies"
                   class="block py-2 text-white text-opacity-60 hover:text-opacity-100 "><span
                            class="mr-2 md:mx-2">—</span>Politique de cookies</a>
                <a href="#" title="Lire les conditions générales de vente"
                   class="block py-2 text-white text-opacity-60 hover:text-opacity-100 "><span
                            class="mr-2 md:mx-2">—</span>Conditions générales de vente</a>
            </div>
            <div class="bg-primary-dark text-center text-footer text-white text-opacity-60 py-6 md:py-0">
                <p class="whitespace-nowrap">Site réalisé par
                    <span class="sr-only"> LWS</span>
                    <svg class="inline-block ml-2.5" xmlns="http://www.w3.org/2000/svg" width="51.725" height="16.176"
                         viewBox="0 0 51.725 16.176">
                        <g id="Groupe_99" data-name="Groupe 99" transform="translate(0 -0.182)">
                            <rect id="Rectangle_1" data-name="Rectangle 1" width="16.176" height="16.176"
                                  transform="translate(35.549 0.182)" fill="#777778"/>
                            <rect id="Rectangle_2" data-name="Rectangle 2" width="16.176" height="16.176"
                                  transform="translate(17.775 0.182)" fill="#a8a8a8"/>
                            <rect id="Rectangle_3" data-name="Rectangle 3" width="16.176" height="16.176"
                                  transform="translate(0 0.182)" fill="#1797c2"/>
                            <g id="Groupe_4" data-name="Groupe 4" transform="translate(6.002 4.405)">
                                <g id="Groupe_1" data-name="Groupe 1" transform="translate(0 0.114)">
                                    <path id="Tracé_1" data-name="Tracé 1" d="M65.742,55.187v-7.5h1.132v6.528h3.4v.974Z"
                                          transform="translate(-65.742 -47.685)" fill="#fff"/>
                                </g>
                                <g id="Groupe_2" data-name="Groupe 2" transform="translate(15.029 0.114)">
                                    <path id="Tracé_2" data-name="Tracé 2"
                                          d="M232.45,55.187l-2.081-7.5h1.191l1.462,5.81h.07l1.52-5.81h1.18l1.52,5.814h.07l1.458-5.814h1.194l-2.084,7.5h-1.139l-1.579-5.619h-.059l-1.579,5.619Z"
                                          transform="translate(-230.369 -47.685)" fill="#fff"/>
                                </g>
                                <g id="Groupe_3" data-name="Groupe 3" transform="translate(34.844)">
                                    <path id="Tracé_3" data-name="Tracé 3"
                                          d="M451.814,48.514a1.076,1.076,0,0,0-.484-.808,1.868,1.868,0,0,0-1.07-.287,2.014,2.014,0,0,0-.8.145,1.234,1.234,0,0,0-.522.4.936.936,0,0,0-.185.57.828.828,0,0,0,.126.462,1.07,1.07,0,0,0,.333.324,2.291,2.291,0,0,0,.445.216,4.681,4.681,0,0,0,.458.141l.733.191a5.6,5.6,0,0,1,.736.238,2.954,2.954,0,0,1,.7.4,1.916,1.916,0,0,1,.522.608,1.774,1.774,0,0,1,.2.868,2,2,0,0,1-.328,1.132,2.213,2.213,0,0,1-.949.78,3.569,3.569,0,0,1-1.5.286,3.639,3.639,0,0,1-1.458-.267,2.238,2.238,0,0,1-.964-.76,2.188,2.188,0,0,1-.385-1.17h1.136a1.146,1.146,0,0,0,.266.676,1.388,1.388,0,0,0,.6.4,2.368,2.368,0,0,0,.8.13,2.264,2.264,0,0,0,.855-.152,1.408,1.408,0,0,0,.592-.425,1,1,0,0,0,.216-.639.792.792,0,0,0-.189-.546,1.432,1.432,0,0,0-.509-.352,5.067,5.067,0,0,0-.723-.245l-.887-.242a3.434,3.434,0,0,1-1.427-.722,1.618,1.618,0,0,1-.526-1.26,1.872,1.872,0,0,1,.352-1.132,2.323,2.323,0,0,1,.952-.753,3.281,3.281,0,0,1,1.355-.269,3.2,3.2,0,0,1,1.346.267,2.274,2.274,0,0,1,.921.734,1.866,1.866,0,0,1,.352,1.072Z"
                                          transform="translate(-447.425 -46.441)" fill="#fff"/>
                                </g>
                            </g>
                        </g>
                    </svg>
                </p>
            </div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
