<?php

if (! function_exists('wp_test_setup')){
    function wp_test_setup() {

        //---додаємо-логотип-для-сайту

        add_theme_support('custom-logo', [
            'width' => 109,
            'height' => 24,
            'flex-width' => false,
            'flex-height' => false,
            'header-text' => 'Логотип',
            'unlink-homepage-logo' => false,
        ] );

        //---додаємо-тайтл-для-сторінки

        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', 'wp_test_setup');
}

add_action( 'wp_enqueue_scripts', 'wp_test_scripts' );

function wp_test_scripts() {

    wp_enqueue_style( 'main', get_stylesheet_uri() );

    wp_enqueue_style( 'wp_test', get_template_directory_uri() . '/css/style.css', array('main'), null );
    wp_enqueue_style( 'wp_header', get_template_directory_uri() . '/css/header.css', array('wp_test'), null );
    wp_enqueue_style( 'wp_footer', get_template_directory_uri() . '/css/footer.css', array('wp_header'), null );
	
    wp_enqueue_script( 'wp_test-script', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', true );
}

//---Реєструємо-декілька-областей-меню

function wp_test_menus() {
    $locations = array(
        'header' => __('Header menu', 'wp_test'),
        'footer' => __('Footer menu', 'wp_test'),
    );

    register_nav_menus($locations);
};

add_action('init', 'wp_test_menus');

//---Додаємо клас nav-item для всіх пунктів меню

add_filter( 'nav_menu_css_class', 'custom_nav_menu_css_class', 10, 1 );
function custom_nav_menu_css_class($classes) {
    $classes[] = 'menu__item';

    return $classes;
};

//---Додаємо клас nav-link для всіх a в пунктах меню

add_filter( 'nav_menu_link_attributes', 'custom_nav_menu_link_attributes', 10, 1 );
function custom_nav_menu_link_attributes($atts) {
    $atts['class'] = 'menu__link';

    return $atts;
};