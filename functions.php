<?php
/**
 * panakeia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package panakeia
 */

if (!function_exists('panakeia_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function panakeia_setup()
    {
        /*
         * Make theme available for translation.
         */
        load_theme_textdomain('panakeia', get_template_directory() . '/languages');


        /*
         * Let WordPress manage the document title.
         */
        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus( array(
            'top_menu' => 'header_menu',
            'footer_menu' => 'footer',
        ));

        add_theme_support('custom-logo', array(
            'height' => 52,
            'width' => 152,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'panakeia_setup');

function panakeia_content_width()
{
    $GLOBALS['content_width'] = apply_filters('panakeia_content_width', 1280);
}

add_action('after_setup_theme', 'panakeia_content_width', 0);

/**
 * Register widget area.
 */
function panakeia_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'panakeia'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'panakeia'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer', 'panakeia'),
        'id' => 'footer-sidebar',
        'description' => __('Add widgets here to appear in your footer.', 'panakeia'),
        'before_widget' => '',
        'after_widget' => '',
        'div' => '',
    ));
}

add_action('widgets_init', 'panakeia_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function panakeia_scripts()
{
    wp_enqueue_style('panakeia-style', get_stylesheet_uri());

//    my fonts
    wp_enqueue_style('RobotoSlab', 'https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700');
    wp_enqueue_style('Roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,400');


//    my styles
    wp_enqueue_style('style', get_template_directory_uri() . '/css/main.css' );
}

add_action('wp_enqueue_scripts', 'panakeia_scripts');


add_action('init', 'our_news');
function our_news() {
    register_post_type ('our_news', array (
       'public' => true,
        'labels' => array (
            'name' => 'news',
            'all_items' => 'all_post',
            'add_new' => 'add_new',
            'add_new_item' => 'add_new_item'
        ),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt' )
    ));
}

add_action('init', 'inform_post');
function inform_post() {
    register_post_type ('inform_post', array (
        'public' => true,
        'labels' => array (
            'name' => 'information post',
            'all_items' => 'all_post',
            'add_new' => 'add_new',
            'add_new_item' => 'add_new_item'
        ),
        'supports' => array('title', 'editor', 'thumbnail')
    ));
}

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
