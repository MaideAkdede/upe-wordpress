<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>
<div class="hidden md:block -z-30 w-screen h-[40vh] xl:h-[50vh] absolute top-0 opacity-10 bg-desktop-bg bg-no-repeat bg-cover bg-bottom object-fill"></div>

<?php do_action('tailpress_site_before'); ?>

<div id="page" class="min-h-screen flex flex-col">

    <?php do_action('tailpress_header'); ?>
    <div class="relative">
        <div class="hidden md:block -z-20">
            <div class="-z-20 h-72 w-72 rounded-full absolute -top-32 -right-24
            bg-primary bg-opacity-10"></div>
            <div class="-z-20 aspect-square h-[750px] rounded-full absolute -top-32 -left-72
            border border-primary border-opacity-10"></div>
            <div class="-z-20 aspect-square h-72 rounded-full absolute top-64 -left-64
            border border-primary border-opacity-10"></div>
        </div>
    </div>

    <header class="max-w-screen">
        <div class="mx-auto py-6 px-8">
            <div class="flex justify-between items-center">
                <div class="w-[60px] h-[60px] md:h-[65px] md:w-[65px] lg:h-[75px] lg:w-[75px] xl:h-[100px] xl:w-[100px]">
                    <?php if (has_custom_logo()) { ?>
                        <a href="">
                            <?php the_custom_logo(); ?>
                        </a>
                    <?php } else { ?>
                        <div>
                            <a href="<?php echo get_bloginfo('url'); ?>"
                               title="Accéder à la page d‘accueil de <?php echo get_bloginfo('name'); ?>">
                                <?php echo get_bloginfo('name'); ?>
                            </a>
                        </div>
                        <p class="text-sm font-light text-gray-600">
                            <?php echo get_bloginfo('description'); ?>
                        </p>

                    <?php } ?>
                </div>
                <div class="z-20 flex items-center mr-2.5">
                    <?php if (is_page_template('boutique.php') || (strpos(get_permalink(), 'boutique') !== false)): ?>
                        <div class="border-r border-primary border-opacity-20 md:border-none px-4 relative">
                            <a href=""
                               class="cart not-active_cart grid place-content-center h-pixel-46 w-pixel-46 md:h-pixel-39 md:w-pixel-39 rounded-full border"><span
                                        class="sr-only">Accéder à mon panier</span>
                                <svg class="w-[25px] h-[23px] md:w-[19px] md:h-[17px]"
                                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="100%" height="100%" viewBox="0 0 25.404 23.098">
                                    <defs>
                                        <clipPath id="clip-path-cart">
                                            <rect id="Rectangle_53" data-name="Rectangle 53" width="25.404"
                                                  height="23.098" fill="#00699d"/>
                                        </clipPath>
                                    </defs>
                                    <g id="Groupe_29" data-name="Groupe 29" clip-path="url(#clip-path-cart)">
                                        <path id="Tracé_25" data-name="Tracé 25"
                                              d="M149.985,293.828a2.218,2.218,0,1,0,2.218,2.219,2.219,2.219,0,0,0-2.218-2.219"
                                              transform="translate(-138.382 -275.167)" fill="#00699d"/>
                                        <path id="Tracé_26" data-name="Tracé 26"
                                              d="M277.1,293.828a2.218,2.218,0,1,0,2.218,2.219,2.219,2.219,0,0,0-2.218-2.219"
                                              transform="translate(-257.428 -275.167)" fill="#00699d"/>
                                        <path id="Tracé_27" data-name="Tracé 27"
                                              d="M137.075,277.334l.041-.01h-.043Z"
                                              transform="translate(-128.368 -259.712)" fill="#00699d"/>
                                        <path id="Tracé_28" data-name="Tracé 28"
                                              d="M22.056,14.052a.539.539,0,0,0,.077-.1h0a.33.33,0,0,0,.018-.033.68.68,0,0,0,.058-.141l3.114-8.007A1.165,1.165,0,0,0,24.911,4.4a1.72,1.72,0,0,0-.992-.315H6.959L6.053.742A1.02,1.02,0,0,0,5.082.02L.951,0C.411,0,0,.3,0,.8a1,1,0,0,0,.957.987l3.64.09,4.161,15.74H22.094c.657,0,1.189-.377,1.189-.84s-.533-.84-1.189-.84H10.136L9.7,14.339H21.388a.9.9,0,0,0,.668-.286"
                                              transform="translate(0)" fill="#00699d"/>
                                    </g>
                                </svg>
                            </a>
                            <div class="rounded-full bg-secondary h-5 w-5 absolute -top-2 right-4 text-white text-xs text-bold font-dm-bold grid place-content-center">
                                12
                            </div>
                        </div>
                    <?php endif; ?>
                    <div id="button-toggle"
                         class="not-active_menu-elements border-opacity-20 px-4 border-r md:border-l md:border-r-0 md:pr-0 ">
                        <a href="" id="button-member"
                           class="not-active_menu-button uppercase text-sm text-bold font-dm-bold tracking-widest rounded-full grid place-content-center h-pixel-46 md:h-pixel-39 w-pixel-46 md:w-max md:px-5">
                            <span class="sr-only md:not-sr-only">Espace membres</span>
                            <svg class="md:hidden" id="Groupe_90" data-name="Groupe 90"
                                 xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="16.822" height="21.671"
                                 viewBox="0 0 16.822 21.671">
                                <defs>
                                    <clipPath id="clip-path-profile">
                                        <rect id="Rectangle_74" data-name="Rectangle 74" width="16.822"
                                              height="21.671" fill="#00699d"/>
                                    </clipPath>
                                </defs>
                                <g id="Groupe_89" data-name="Groupe 89" clip-path="url(#clip-path-profile)">
                                    <path id="Tracé_41" data-name="Tracé 41"
                                          d="M.073,464.675l-.006-.041a5.9,5.9,0,0,1,3.384-6.282A8.566,8.566,0,0,1,4.329,458a8.255,8.255,0,0,0,8.164,0,8.57,8.57,0,0,1,.878.349,5.9,5.9,0,0,1,3.384,6.282l-.006.041-.078.079a11.681,11.681,0,0,1-16.519,0l-.078-.079"
                                          transform="translate(0 -446.504)" fill="#00699d" fill-rule="evenodd"/>
                                    <path id="Tracé_42" data-name="Tracé 42"
                                          d="M122.523,0a5.472,5.472,0,1,1-5.472,5.472A5.472,5.472,0,0,1,122.523,0"
                                          transform="translate(-114.113)" fill="#00699d" fill-rule="evenodd"/>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle"
                       class="md:order-first block pl-4 md:px-4">
                        <div class="toggle-burger h-6 w-12 text-right flex flex-col items-end justify-between">
                            <span class="sr-only">Ouvrir le menu de navigation</span>
                            <span class="block w-10 h-0.5 bg-gray-600"></span>
                            <span class="block w-12 h-0.5 bg-gray-600"></span>
                            <span class="block w-10 h-0.5 bg-gray-600"></span>
                        </div>
                        <div class="toggle-burger hidden h-6 w-12 flex flex-col justify-center">
                            <span class="sr-only">Fermer le menu de navigation</span>
                            <span class="block w-10 h-0.5 bg-white origin-center transform rotate-45 translate-y-px"></span>
                            <span class="block w-10 h-0.5 bg-white origin-center transform -rotate-45 -translate-y-[1px]"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div id="primary-menu"
                 class="hidden bg-primary md:bg-transparent py-10 fixed top-0 right-0 w-screen md:w-2/3 h-screen z-10 text-white text-bold font-dm-bold text-xl sm:text-2xl md:text-3xl text-right list-none overflow-y-auto">
                <ul class="max-w-sm box-border mt-24 mb-10 mr-16 ml-auto">
                    <li class="border-b border-white border-opacity-10 py-8">Accueil</li>
                    <li class="border-b border-white border-opacity-10 py-8 relative">Qui sommes-nous ?<i
                                class="absolute ml-6 -mt-2 top-1/2 text-base text-white text-opacity-60 fa-solid fa-sort-down"></i>
                    </li>
                    <li class="border-b border-white border-opacity-10 py-8 relative">L'ergothérapie<i
                                class="absolute ml-6 -mt-2 top-1/2 text-base text-white text-opacity-60  fa-solid fa-sort-down"></i>
                    </li>
                    <li class="border-b border-white border-opacity-10 py-8"><a href="<?= site_url() . '/boutique' ?>">Boutique</a>
                    </li>
                    <li class="border-b border-white border-opacity-10 py-8">Actualités</li>
                    <li class="py-8">Formation continue</li>
                </ul>
                <div class="flex justify-end items-center ml-auto mr-16 text-right text-base">
                    <a href=""
                       class="text-white text-bold font-dm-bold text-opacity-60 uppercase text-xs tracking-widest mr-12">Contactez-nous</a>
                    <div>
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="" class="pl-2"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="" class="pl-2"><i class="fa-solid fa-envelope"></i></a>
                    </div>
                </div>

            </div>
            <?php
            /*                wp_nav_menu(
                                array(
                                    'container_id' => 'primary-menu',
                                    'container_class' => 'bg-primary absolute top-0 left-0 w-screen h-screen z-10',
                                    'menu_class' => 'text-white text-bold font-dm-bold',
                                    'theme_location' => 'primary',
                                    'li_class' => 'w-[370px] border-b border-white py-4',
                                    'submenu_class' => '',
                                    'menuitemhaschildren_class'=>'hidden',
                                    'fallback_cb' => false,
                                )
                            );
                            */ ?>
        </div>
    </header>

    <div class="hidden menu-bg">
        <div class="z-[5] fixed rounded-full bg-primary h-[300vh] w-[300vh] -top-1/2 left-[15%] xl:left-1/3"></div>
        <div class="z-[4] fixed rounded-full bg-primary bg-opacity-10 h-[300vh] w-[300vh] -top-[55vh] -left-[30vh]"></div>
        <div class="z-[3] fixed rounded-full bg-primary bg-opacity-10 h-[300vh] w-[300vh] -top-[55vh] -left-[15vh]"></div>
        <div class="z-[2] fixed bg-white bg-opacity-90 h-screen w-screen top-0 left-0"></div>
    </div>

    <div id="content" class="site-content flex-grow">

        <!-- Start introduction -->
        <?php if (is_front_page()) : ?>
            <div class="container mx-auto my-12 border-b pb-12">
                <p>Front page</p>
            </div>

        <?php endif; ?>
        <!-- End introduction -->

        <?php do_action('tailpress_content_start'); ?>


        <main class="bg-[#E9F2F7] md:bg-transparent">

