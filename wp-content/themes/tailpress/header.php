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

<div class="hidden md:block -z-30 circle absolute w-screen h-[560px] top-0 opacity-10 bg-desktop-bg bg-no-repeat bg-center bg-cover object-fill">
</div>

<?php do_action('tailpress_site_before'); ?>

<div id="page" class="min-h-screen flex flex-col">

    <?php do_action('tailpress_header'); ?>
    <div class="mx-auto container relative">
        <div class="hidden md:block -z-20">
            <div class="-z-20 h-72 w-72 rounded-full absolute -top-32 -right-24
            bg-primary bg-opacity-10"></div>
            <div class="-z-20 aspect-square h-[750px] rounded-full absolute -top-32 -left-72
            border border-primary border-opacity-10"></div>
            <div class="-z-20 aspect-square h-72 rounded-full absolute top-64 -left-64
            border border-primary border-opacity-10"></div>
        </div>
    </div>

    <header>
        <div class="mx-auto container">
            <div class="py-6">
                <div class="flex justify-between items-center">
                    <div>
                        <?php if (has_custom_logo()) { ?>
                            <?php the_custom_logo(); ?>
                        <?php } else { ?>
                            <div class="text-lg uppercase">
                                <a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
                                    <?php echo get_bloginfo('name'); ?>
                                </a>
                            </div>

                            <p class="text-sm font-light text-gray-600">
                                <?php echo get_bloginfo('description'); ?>
                            </p>

                        <?php } ?>
                    </div>
                    <div class="z-20 flex items-center">
                        <div class="border-r border-primary border-opacity-20 px-4 relative md:pl-0">
                            <a href=""
                               class="grid place-content-center h-pixel-46 w-pixel-46 rounded-full border border-primary hover:bg-secondary hover:bg-opacity-20 active:bg-opacity-40"><span
                                        class="sr-only">Accéder à mon panier</span>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="25.404" height="23.098" viewBox="0 0 25.404 23.098">
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
                                        <path id="Tracé_27" data-name="Tracé 27" d="M137.075,277.334l.041-.01h-.043Z"
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
                        <div class="border-r border-primary border-opacity-20 px-4 md:border-none md:pr-0">
                            <a href=""
                               class="grid place-content-center h-pixel-46 w-pixel-46 rounded-full border border-primary md:w-max md:px-5 hover:bg-secondary hover:bg-opacity-20 active:bg-opacity-40"><span
                                        class="sr-only md:not-sr-only uppercase text-sm text-bold text-primary font-dm-bold tracking-widest">Espace membres</span>
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
                           class="md:order-first block px-4 h-6 text-right flex flex-col items-end justify-between">
                            <span class="sr-only">Ouvrir le menu de navigation</span>
                            <span class="menu_line block w-10 h-0.5 bg-gray-600"></span>
                            <span class="menu_line block w-12 h-0.5 bg-gray-600"></span>
                            <span class="menu_line block w-10 h-0.5 bg-gray-600"></span>
                        </a>
                    </div>
                </div>
                <div id="primary-menu"
                     class="hidden bg-primary fixed top-0 left-0 w-screen h-screen z-10 text-white text-bold font-dm-bold text-3xl text-right list-none mx-auto grid place-content-center content-around">
                    <ul class="mx-auto max-w-max">
                        <li class="w-[370px] border-b border-white border-opacity-10 py-8">Accueil</li>
                        <li class="w-[370px] border-b border-white border-opacity-10 py-8 relative">Qui sommes-nous ?<i
                                    class="absolute ml-6 -mt-2 top-1/2 text-base text-white text-opacity-60 fa-solid fa-sort-down"></i>
                        </li>
                        <li class="w-[370px] border-b border-white border-opacity-10 py-8 relative">L'ergothérapie<i
                                    class="absolute ml-6 -mt-2 top-1/2 text-base text-white text-opacity-60  fa-solid fa-sort-down"></i>
                        </li>
                        <li class="w-[370px] border-b border-white border-opacity-10 py-8">Boutique</li>
                        <li class="w-[370px] border-b border-white border-opacity-10 py-8">Actualités</li>
                        <li class="w-[370px] py-8">Formation continue</li>
                    </ul>
                    <div class="flex justify-between items-center w-[280px] ml-auto text-right text-base">
                        <a href=""
                           class="text-white text-bold font-dm-bold text-opacity-60 uppercase text-xs tracking-widest">Contactez-nous</a>
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
        </div>
    </header>


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

