<?php

function portfolio_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    register_nav_menus(
        array(
            'primary' => __('Hoofdnavigatie', 'portofolio'),
        )
    );
}
add_action('after_setup_theme', 'portfolio_setup');

function portfolio_enqueue_assets()
{
    wp_enqueue_style('portfolio-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'portfolio_enqueue_assets');
