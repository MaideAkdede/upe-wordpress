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

<?php do_action('tailpress_site_before'); ?>

<div id="page" class="min-h-screen flex flex-col">

    <?php do_action('tailpress_header'); ?>

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

                    <div class="z-10">
                        <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle"
                           class="h-6 text-right flex flex-col items-end justify-between">
                            <span class="sr-only">Ouvrir le menu de navigation</span>
                            <span class="block w-10 h-0.5 bg-gray-600"></span>
                            <span class="block w-12 h-0.5 bg-gray-600"></span>
                            <span class="block w-10 h-0.5 bg-gray-600"></span>
                        </a>
                    </div>
                </div>

                <?php
                wp_nav_menu(
                    array(
                        'container_id' => 'primary-menu',
                        'container_class' => 'hidden bg-gray-100 mt-4 p-4',
                        'menu_class' => '',
                        'theme_location' => 'primary',
                        'li_class' => '',
                        'fallback_cb' => false,
                    )
                );
                ?>
            </div>
        </div>

        <!--decorative elements-->
        <div class="hidden md:block -z-20">
            <div class="-z-20 h-72 w-72 rounded-full absolute -top-32 -right-12
            bg-primary bg-opacity-10"></div>
            <div class="-z-20 h-[750px] w-[750px] rounded-full absolute -top-7 -left-7
            border border-primary border-opacity-10"></div>
            <div class="-z-20 h-[310px] w-[310px] rounded-full absolute top-[20%] -left-24
            border border-primary border-opacity-10"></div>
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
