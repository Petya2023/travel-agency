<?php
function tourism_files()
{
    wp_enqueue_script('tourism-main-js', get_theme_file_uri('assets/dist/script.js'), 'jquery', '1.0', true);
    wp_enqueue_script('font-awesome', '//kit.fontawesome.com/7033955637.js');
    wp_enqueue_script('js-jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
    wp_enqueue_script('tourism-jquery', get_theme_file_uri('assets/src/scripts/jquery.waypoints.min.js'), 'jquery', '1.0', true);
    // wp_enqueue_script('splide-js', get_theme_file_uri('splide-4.1.3/dist/js/splide.min.js', null, '1.0', true));

    wp_enqueue_style('tourism_main_styles', get_theme_file_uri('assets/dist/main.css'));
    wp_enqueue_style('lato', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
    // wp_enqueue_style('splide-styles', get_theme_file_uri('splide-4.1.3/dist/css/splide.min.css'));
    // wp_enqueue_style('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
}

add_action('wp_enqueue_scripts', 'tourism_files');

function tourism_features()
{
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocation', 'Footer Menu Location');

    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'tourism_features');