<?php

/**
 * Theme setup.
 */
function tailpress_setup()
{
    add_theme_support('title-tag');

    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'tailpress'),
        )
    );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );

    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');

    add_theme_support('editor-styles');
    add_editor_style('css/editor-style.css');
}

add_action('after_setup_theme', 'tailpress_setup');

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts()
{
    $theme = wp_get_theme();

    wp_enqueue_style('tailpress', tailpress_asset('css/app.css'), array(), $theme->get('Version'));
    wp_enqueue_script('tailpress', tailpress_asset('js/app.js'), array(), $theme->get('Version'));
}

add_action('wp_enqueue_scripts', 'tailpress_enqueue_scripts');

/**
 * Get asset path.
 *
 * @param string $path Path to asset.
 *
 * @return string
 */
function tailpress_asset($path)
{
    if (wp_get_environment_type() === 'production') {
        return get_stylesheet_directory_uri() . '/' . $path;
    }

    return add_query_arg('time', time(), get_stylesheet_directory_uri() . '/' . $path);
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string $classes String of classes.
 * @param mixed $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class($classes, $item, $args, $depth)
{
    if (isset($args->li_class)) {
        $classes[] = $args->li_class;
    }

    if (isset($args->{"li_class_$depth"})) {
        $classes[] = $args->{"li_class_$depth"};
    }

    return $classes;
}

add_filter('nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4);

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string $classes String of classes.
 * @param mixed $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class($classes, $args, $depth)
{
    if (isset($args->submenu_class)) {
        $classes[] = $args->submenu_class;
    }

    if (isset($args->{"submenu_class_$depth"})) {
        $classes[] = $args->{"submenu_class_$depth"};
    }

    return $classes;
}

add_filter('nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3);

/**
 * Adds option 'haschildren_class' to 'wp_nav_menu'.
 *
 * @param string $classes String of classes.
 * @param mixed $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_haschildren_class($classes, $args, $depth)
{
    if (isset($args->haschildren_class)) {
        $classes[] = $args->haschildren_class;
    }

    if (isset($args->{"haschildren_class_$depth"})) {
        $classes[] = $args->{"haschildren_class_$depth"};
    }

    return $classes;
}

add_filter('nav_menu_submenu_css_class', 'tailpress_nav_menu_add_haschildren_class', 10, 3);

/* * * RegisterCustom Post Type * * */
add_action('init', 'tailpress_custom_post_type');
function tailpress_custom_post_type()
{
    register_post_type('agenda', [
        'label' => 'Agenda',
        'labels' => [
            'singular_name' => 'agenda',
            'add_new' => 'Ajouter',
            'add_new_item' => 'Nouvelle date',
        ],
        'description' => 'Liste de toutes nos dates',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-calendar-alt',
        'supports' => ['title'],
        'rewrite' => [
            'slug' => 'agenda'
        ]
    ]);
    register_post_type('boutique', [
        'label' => 'Boutique',
        'labels' => [
            'singular_name' => 'boutique',
            'add_new' => 'Ajouter',
            'add_new_item' => 'Nouvel ajout',
        ],
        'description' => 'Liste de tous nos articles en vente',
        'public' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-money-alt',
        'supports' => ['title'],
        'rewrite' => [
            'slug' => 'boutique'
        ]
    ]);
}