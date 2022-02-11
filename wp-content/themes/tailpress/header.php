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
            <div class="-z-20 h-72 w-72 rounded-full absolute -top-32 -right-44
            bg-primary bg-opacity-10"></div>
            <div class="-z-20 aspect-square h-[750px] rounded-full absolute -top-32 -left-72
            border border-primary border-opacity-10"></div>
            <div class="-z-20 aspect-square h-72 rounded-full absolute top-64 -left-64
            border border-primary border-opacity-10"></div>
        </div>
    </div>

    <header class="">
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
                    <div class="z-20 flex items-center gap-6">
                        <a href="" class="block h-pixel-46 w-pixel-46 rounded-full border border-primary"><span class="sr-only">Accéder à mon panier</span></a>
                        <a href="block"><span class="sr-only">Espace membres</span></a>
                        <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle"
                           class="block h-6 text-right flex flex-col items-end justify-between">
                            <span class="sr-only">Ouvrir le menu de navigation</span>
                            <span class="menu_line block w-10 h-0.5 bg-gray-600"></span>
                            <span class="menu_line block w-12 h-0.5 bg-gray-600"></span>
                            <span class="menu_line block w-10 h-0.5 bg-gray-600"></span>
                        </a>
                    </div>
                </div>
                <div id="primary-menu" class="hidden bg-primary fixed top-0 left-0 w-screen h-screen z-10 text-white text-bold font-dm-bold text-3xl text-right list-none mx-auto grid place-content-center content-around">
                   <ul class="mx-auto max-w-max">
                       <li class="w-[370px] border-b border-white border-opacity-10 py-8">Accueil</li>
                       <li class="w-[370px] border-b border-white border-opacity-10 py-8 relative">Qui sommes-nous ?<i class="absolute ml-6 -mt-2 top-1/2 text-base text-white text-opacity-60 fa-solid fa-sort-down"></i></li>
                       <li class="w-[370px] border-b border-white border-opacity-10 py-8 relative">L'ergothérapie<i class="absolute ml-6 -mt-2 top-1/2 text-base text-white text-opacity-60  fa-solid fa-sort-down"></i></li>
                       <li class="w-[370px] border-b border-white border-opacity-10 py-8">Boutique</li>
                       <li class="w-[370px] border-b border-white border-opacity-10 py-8">Actualités</li>
                       <li class="w-[370px] py-8">Formation continue</li>
                   </ul>
                    <div class="flex justify-between items-center w-[280px] ml-auto text-right text-base">
                        <a href="" class="text-white text-bold font-dm-bold text-opacity-60 uppercase text-xs tracking-widest">Contactez-nous</a>
                       <div>
                           <a href="" ><i class="fa-brands fa-facebook-f"></i></a>
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
                */?>

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

